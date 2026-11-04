<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The requested page was not found at " . $this->comp['company3'] . ".";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {

        $data['title'] = "Best Packers and Movers in Hyderabad | Elite Logistics";
        $data['description'] = "Reliable IBA-approved packers and movers in India. Elite Logistics offers safe home shifting, office relocation, & vehicle transport.";

        $data['hero_h1'] = 'Best Logistics Packers and Movers: <span class="hero-title-accent">Secure and Reliable Moving Services</span> <span class="hero-title-underline">across India</span>';
        $data['hero_subtitle'] = "";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()
    {
        $url = $this->uri->segment(1);

        if ($url === "packers-and-movers-in-hafeezpet") {
            redirect("hafeezpet-packers-movers-hyderabad", 'location', 301);
        } else if ($url === "complete-home-shifting-checklist-before-moving") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-kerala") {
            redirect("kerala", 'location', 301);
        } else if($url === "packers-and-movers-in-bihar") {
            redirect("bihar", 'location', 301);
        }
    }
}
