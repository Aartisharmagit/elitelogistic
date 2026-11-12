<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('text');
    }

    private function slugify($text) {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);
        return trim($text, '-');
    }

    public function index() {
        $this->view();
    }

    public function view() {
        $this->load->library('pagination');

        // Check total blogs in database
        $total_rows = $this->db->count_all_results('blog');

        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        if ($total_rows > 0) {
            $this->db->order_by('b_id', 'DESC');
            $data['blogs'] = $this->db->get('blog', $per_page, $offset)->result();

            $this->db->order_by('b_id', 'DESC');
            $data['recent_posts'] = $this->db->get('blog', 5, 0)->result();
        } else {
            $data['blogs'] = [];
            $data['recent_posts'] = [];
        }

        $data['total'] = $config['total_rows'];
        $companyName = !empty($this->comp['company3']) ? $this->comp['company3'] : 'Elite Logistics and Packers';
        $data['title'] = "Moving Guides & Official Blog | " . $companyName;
        $data['description'] = "Explore expert moving advice, packing checklists, IBA claim formats, and relocation cost insights from " . $companyName . ".";
        $data['module'] = "blog";
        $data['view_file'] = "blog";

        echo Modules::run('template/layout2', $data);
    }

    public function read($slug = '') {
        $search_slug = trim(str_replace('_', '-', $slug));

        $selected_blog = null;

        // 1. Direct database lookup by slug
        if (!empty($search_slug)) {
            $this->db->where('slug', $search_slug);
            $query = $this->db->get('blog');
            $selected_blog = $query->row();

            // 2. Lookup by numeric ID
            if (!$selected_blog && is_numeric($search_slug)) {
                $this->db->where('b_id', (int)$search_slug);
                $selected_blog = $this->db->get('blog')->row();
            }

            // 3. Lookup by slugified title across DB blogs
            if (!$selected_blog) {
                $all_db = $this->db->get('blog')->result();
                if (!empty($all_db)) {
                    foreach ($all_db as $b) {
                        if ($this->slugify($b->title) === strtolower($search_slug)) {
                            $selected_blog = $b;
                            break;
                        }
                    }
                }
            }
        }

        // If found in database
        if ($selected_blog) {
            // Increment view count directly in DB
            $this->db->where('b_id', $selected_blog->b_id);
            $this->db->set('views', 'views + 1', FALSE);
            $this->db->update('blog');

            $data['query'] = [$selected_blog];

            $this->db->order_by('b_id', 'DESC');
            $this->db->where('b_id !=', $selected_blog->b_id);
            $recent = $this->db->get('blog', 5, 0)->result();
            $data['recent_posts'] = !empty($recent) ? $recent : [];

            $companyName = !empty($this->comp['company3']) ? $this->comp['company3'] : 'Elite Logistics and Packers';
            $data['title'] = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : ($selected_blog->title . " | " . $companyName);
            $data['description'] = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : word_limiter(strip_tags($selected_blog->description), 40);

            $data['module'] = "blog";
            $data['view_file'] = "view";

            echo Modules::run('template/layout2', $data);
            return;
        }

        // No hardcoded default articles fallback
        show_404();
    }
}
