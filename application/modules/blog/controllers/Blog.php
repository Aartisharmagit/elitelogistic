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

    private function getDefaultArticles() {
        return [
            [
                'b_id' => 1,
                'title' => 'The Ultimate 30-Day Moving Checklist for Home Relocation in India',
                'slug' => 'ultimate-30-day-moving-checklist-india',
                'tags' => 'Checklists,Household,Moving Tips',
                'description' => 'A comprehensive step-by-step master countdown covering address updates, utility transfers, room-by-room packing schedules, and essential moving day kits. Planning a home relocation requires early organization to ensure fragile items, electronics, and wardrobe essentials are properly protected.',
                'date' => '2026-10-02',
                'time' => '6 min read',
                'author' => 'Elite Relocation Specialist',
                'image' => 'assets/img/packers-movers-hero.webp',
                'views' => 1420
            ],
            [
                'b_id' => 2,
                'title' => 'How to Protect Fragile Glassware and LED TVs During Long-Distance Transit',
                'slug' => 'how-to-pack-fragile-glassware-and-led-tvs',
                'tags' => 'Packing Tips,Fragile Items',
                'description' => 'Discover the 5-layer wrapping technique using virgin bubble film, foam corner protectors, corrugated sheets, and customized wooden crates for sensitive electronics and luxury decor. Avoid transit vibration damages with professional packing standards.',
                'date' => '2026-09-28',
                'time' => '4 min read',
                'author' => 'Packing Operations Team',
                'image' => '',
                'views' => 980
            ],
            [
                'b_id' => 3,
                'title' => 'Packers and Movers Charges Breakdown: Estimating Interstate Shifting Costs',
                'slug' => 'packers-and-movers-charges-breakdown-costs',
                'tags' => 'Costs,Estimates,Pricing',
                'description' => 'Understand how BHK apartment size, transit distance, toll taxes, packing materials, and transit insurance calculate into relocation costs. Learn how our Written Price Lock guarantee prevents sudden moving day surcharges.',
                'date' => '2026-09-20',
                'time' => '5 min read',
                'author' => 'Billing & Estimation Desk',
                'image' => '',
                'views' => 2150
            ],
            [
                'b_id' => 4,
                'title' => 'IBA Approved Relocation Bills: Guide for PSU Bank & Govt Employee Claims',
                'slug' => 'iba-approved-relocation-bills-bank-employee-guide',
                'tags' => 'Guides,IBA Approved,Claims',
                'description' => 'Everything you need to know about official IBA Code EL-8709 consignment notes, valid GST billing formats, vehicle transit receipts, and 100% reimbursement claim procedures for PSU banks, defence personnel, and government staff.',
                'date' => '2026-09-15',
                'time' => '4 min read',
                'author' => 'Corporate Accounts Team',
                'image' => '',
                'views' => 1740
            ],
            [
                'b_id' => 5,
                'title' => 'Safe Vehicle Transportation: Tips for Enclosed Car and Motorcycle Transit',
                'slug' => 'safe-car-and-bike-transportation-tips-india',
                'tags' => 'Vehicle Transport,Car Shifting',
                'description' => 'Key guidelines for hydraulic carrier transport, pre-dispatch condition inspection photography, fluid drainage, wheel lock strapping, and zero-scratch delivery protocols across national highway corridors.',
                'date' => '2026-09-10',
                'time' => '5 min read',
                'author' => 'Fleet & Logistics Division',
                'image' => '',
                'views' => 1320
            ],
            [
                'b_id' => 6,
                'title' => 'Top 7 Things to Do on Moving Day: A Stress-Free Execution Guide',
                'slug' => 'top-7-things-to-do-on-moving-day',
                'tags' => 'Checklists,Moving Day',
                'description' => 'From verifying inventory sheets and container seals to guiding crew room placement at your destination apartment, master your moving day execution with zero stress and complete peace of mind.',
                'date' => '2026-09-04',
                'time' => '3 min read',
                'author' => 'Customer Success Team',
                'image' => '',
                'views' => 890
            ]
        ];
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
        $config['total_rows'] = $total_rows > 0 ? $total_rows : count($this->getDefaultArticles());
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
            $allDefaults = $this->getDefaultArticles();
            $data['blogs'] = array_map(function($item) { return (object)$item; }, array_slice($allDefaults, $offset, $per_page));
            $data['recent_posts'] = array_map(function($item) { return (object)$item; }, array_slice($allDefaults, 0, 5));
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
                foreach ($all_db as $b) {
                    if ($this->slugify($b->title) === strtolower($search_slug)) {
                        $selected_blog = $b;
                        break;
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
            if (empty($recent)) {
                $allDefaults = $this->getDefaultArticles();
                $recent = array_map(function($item) { return (object)$item; }, array_slice($allDefaults, 0, 5));
            }
            $data['recent_posts'] = $recent;

            $companyName = !empty($this->comp['company3']) ? $this->comp['company3'] : 'Elite Logistics and Packers';
            $data['title'] = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : ($selected_blog->title . " | " . $companyName);
            $data['description'] = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : word_limiter(strip_tags($selected_blog->description), 40);

            $data['module'] = "blog";
            $data['view_file'] = "view";

            echo Modules::run('template/layout2', $data);
            return;
        }

        // Fallback for default curated articles (when DB has no matching blog)
        $defaultArticles = $this->getDefaultArticles();
        foreach ($defaultArticles as $d) {
            if ($d['slug'] === $search_slug || $this->slugify($d['title']) === strtolower($search_slug) || (string)$d['b_id'] === $search_slug) {
                $selected_blog = (object)$d;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $otherDefaults = array_filter($defaultArticles, function($item) use ($selected_blog) {
                return $item['b_id'] != $selected_blog->b_id;
            });
            $data['recent_posts'] = array_map(function($item) { return (object)$item; }, array_slice($otherDefaults, 0, 5));

            $companyName = !empty($this->comp['company3']) ? $this->comp['company3'] : 'Elite Logistics and Packers';
            $data['title'] = $selected_blog->title . " | " . $companyName;
            $data['description'] = word_limiter(strip_tags($selected_blog->description), 40);

            $data['module'] = "blog";
            $data['view_file'] = "view";

            echo Modules::run('template/layout2', $data);
            return;
        }

        show_404();
    }
}
