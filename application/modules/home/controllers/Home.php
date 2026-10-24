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
        $data['title'] = "Best Logistics Packers and Movers: Secure and Reliable Moving Services across India | " . $this->comp['company3'];
        $data['description'] = "Looking for reliable logistics packers and movers for moving whether it's household, office shift or even moving your car to another city, relocating takes planning. The right packers and movers make all the difference. Our company Elite Logistics Packers and Movers help you move your items with proper care, affordable prices and reliable transportation.";

        $data['hero_h1'] = 'Best Logistics Packers and Movers: <span class="hero-title-accent">Secure and Reliable Moving Services</span> <span class="hero-title-underline">across India</span>';
        $data['hero_subtitle'] = "";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
