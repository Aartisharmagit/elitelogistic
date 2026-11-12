<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('mdl_blog');
    }
   
    function index()
    {
        $this->load->view('form');
    }
    
    function save_data()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title","Title","required|trim");
        $this->form_validation->set_rules("description","Description","required|trim");
        $this->form_validation->set_rules("date","Date","trim");
        $this->form_validation->set_rules("time","Time","trim");
        $this->form_validation->set_rules("author","Author","trim"); 
        $this->form_validation->set_rules("tags","Tags","trim"); 
        $this->form_validation->set_rules("meta_title","Meta Title","trim|max_length[255]");
        $this->form_validation->set_rules("meta_desc","Meta Description","trim|max_length[300]");
        $this->form_validation->set_rules("slug","Slug","trim|max_length[255]");
        
        if ($this->form_validation->run()==TRUE)
        {
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['author'] = !empty($_POST['author']) ? trim($_POST['author']) : ($this->session->userdata('username') ? $this->session->userdata('username') : 'Admin');
            
            // Normalize and ensure date defaults to today
            if (!empty($_POST['date'])) {
                $parsed_date = strtotime(str_replace('/', '-', $_POST['date']));
                $data['date'] = ($parsed_date !== false && $parsed_date > 0) ? date('Y-m-d', $parsed_date) : trim($_POST['date']);
            } else {
                $data['date'] = date('Y-m-d');
            }

            // Normalize and ensure time defaults to calculated reading time
            if (!empty($_POST['time'])) {
                $data['time'] = trim($_POST['time']);
            } else {
                $word_count = str_word_count(strip_tags($data['description']));
                $minutes = ceil($word_count / 200);
                $data['time'] = ($minutes < 1 ? 1 : $minutes) . ' min read';
            }

            $data['tags'] = isset($_POST['tags']) ? $_POST['tags'] : ''; 
            $data['meta_title'] = isset($_POST['meta_title']) ? $_POST['meta_title'] : '';
            $data['meta_desc'] = isset($_POST['meta_desc']) ? $_POST['meta_desc'] : '';
            $data['slug'] = isset($_POST['slug']) ? trim($_POST['slug']) : '';
            if (empty($data['slug'])) {
                $data['slug'] = $this->slugify($data['title']);
            }
            if (!isset($_POST['b_id']) || !$_POST['b_id']) {
                $data['views'] = 0;
                $data['main_title'] = $data['title'];
            }

            // Always store current local timestamp
            $data['timestamp'] = date('Y-m-d H:i:s');
          
            if (!empty($_FILES['image']['name'])) 
            {
                $uploaded = $this->image_upload($data['title']);
                if ($uploaded) {
                    $data['image'] = $uploaded;
                    if (!empty($_POST['old_image'])) {
                        $this->remove_image($_POST['old_image']);
                    }
                }
            } else if ($this->input->post('image_url')) {
                $data['image'] = $this->input->post('image_url');
                if (!empty($_POST['old_image'])) {
                    $this->remove_image($_POST['old_image']);
                }
            } else {
                if (!isset($_POST['b_id']) || !$_POST['b_id']) {
                    $data['image'] = '';
                } else {
                    // Update mode: check if old_image was explicitly cleared
                    if (isset($_POST['old_image']) && $_POST['old_image'] === '') {
                        $data['image'] = '';
                    }
                }
            }
            
            if (isset($_POST['b_id']) && $_POST['b_id'])//update
            {
                $where['b_id'] = $_POST['b_id'];
                $this->mdl_blog->update_data($where, $data);
                echo "1";
            }
            else //add
            {
                $inserted = $this->mdl_blog->add_data($data);
                echo $inserted ? "1" : "0";
            }
        }
        else
        {
            echo strip_tags(validation_errors());
        }
    }
    
    function view_data()
    {
        $where = null;
        if (isset($_GET['b_id']))
            $where['b_id'] = $_GET['b_id'];
        
        if (isset($_GET['data']))
            $select = $_GET['data'];
        else 
            $select = "*";
        
        $return = $this->mdl_blog->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
    
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $this->db->where('b_id', $_GET['id']);
            $row = $this->db->get("blog")->row();
            if ($row && !empty($row->image)) {
                $this->remove_image($row->image);
            }
           
            $where['b_id'] = $_GET['id'];
            echo $this->mdl_blog->delete_data($where) ? "1" : "0";
        } else {
            echo "0";
        }
    }

    function image_upload($title)
    {
        $folder = "blog";
        $upload_dir = FCPATH . 'assets/uploads/' . $folder . '/';
        $thumb_dir = FCPATH . 'assets/uploads/' . $folder . '/thumb/';
        $temp_dir = FCPATH . 'assets/temp/';

        if (!is_dir($temp_dir)) {
            @mkdir($temp_dir, 0777, true);
        }
        if (!is_dir($upload_dir)) {
            @mkdir($upload_dir, 0777, true);
        }
        if (!is_dir($thumb_dir)) {
            @mkdir($thumb_dir, 0777, true);
        }

        $rand_number = mt_rand(10, 99);
        $timestamp = time();

        $config['upload_path'] = $temp_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif|WEBP|PNG|JPG|JPEG|JFIF';
        $config['file_name'] = $rand_number . $timestamp;
        $config['overwrite'] = false;
        $config['remove_spaces'] = true;

        $this->load->library('upload');
        $this->upload->initialize($config, true);

        if (!$this->upload->do_upload('image')) {
            echo strip_tags($this->upload->display_errors());
            die();
        }

        $image = $this->upload->data();
        $source_file = $temp_dir . $image['file_name'];
        $dest_file = $upload_dir . $image['file_name'];
        $thumb_file = $thumb_dir . $image['file_name'];

        // Resize or copy main image
        $this->load->library('image_lib');

        // Main image resize
        $resize_cfg = array();
        $resize_cfg['image_library'] = 'gd2';
        $resize_cfg['source_image'] = $source_file;
        $resize_cfg['new_image'] = $dest_file;
        $resize_cfg['maintain_ratio'] = TRUE;
        if (!empty($image['image_width']) && $image['image_width'] > 1200) {
            $resize_cfg['width'] = 1200;
        } else {
            $resize_cfg['width'] = !empty($image['image_width']) ? $image['image_width'] : 800;
        }

        $this->image_lib->initialize($resize_cfg);
        if (!$this->image_lib->resize()) {
            @copy($source_file, $dest_file);
        }

        $this->image_lib->clear();

        // Thumbnail resize
        $thumb_cfg = array();
        $thumb_cfg['image_library'] = 'gd2';
        $thumb_cfg['source_image'] = $source_file;
        $thumb_cfg['new_image'] = $thumb_file;
        $thumb_cfg['maintain_ratio'] = TRUE;
        $thumb_cfg['width'] = 300;

        $this->image_lib->initialize($thumb_cfg);
        if (!$this->image_lib->resize()) {
            @copy($source_file, $thumb_file);
        }

        // Remove temp file
        if (file_exists($source_file)) {
            @unlink($source_file);
        }

        return $image['file_name'];
    }
        
    function remove_image($title)
    {
        if (!empty($title) && substr($title, 0, 4) != "http") {
            $path1 = FCPATH . "assets/uploads/blog/" . $title;
            if (file_exists($path1) && is_file($path1)) {
                @unlink($path1);
            }
            $path2 = FCPATH . "assets/uploads/blog/thumb/" . $title;
            if (file_exists($path2) && is_file($path2)) {
                @unlink($path2);
            }
        }
    }
    
    private function slugify($text)
    {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);
        return trim($text, '-');
    }
}
