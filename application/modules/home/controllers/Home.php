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
        $url = trim($this->uri->uri_string(), '/');

        if ($url === "packers-and-movers-in-hafeezpet") {
            redirect("hafeezpet-packers-movers-hyderabad", 'location', 301);
        } else if ($url === "complete-home-shifting-checklist-before-moving") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-kerala") {
            redirect("kerala", 'location', 301);
        } else if($url === "packers-and-movers-in-bihar") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-delhi") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-ramanthapur") {
            redirect("ramanthapur-packers-movers-hyderabad", 'location', 301);
        } else if($url === "packers-and-movers-in-kukatpally") {
            redirect("kukatpally-packers-movers-hyderabad", 'location', 301);
        } else if($url === "packers-and-movers-in-manipur") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-uttarakhand") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-nagaland") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-madhapur") {
            redirect("madhapur-packers-movers-hyderabad", 'location', 301);
        } else if($url === "packers-and-movers-in-chandanagar") {
            redirect("chandanagar-packers-movers-hyderabad", 'location', 301);
        } else if($url === "packers-and-movers-in-bowenpally") {
            redirect("bowenpally-packers-movers-hyderabad", 'location', 301);
        } else if($url === "packers-and-movers-in-manikonda") {
            redirect("manikonda-packers-movers-hyderabad", 'location', 301);
        } else if($url === "packers-and-movers-in-rajasthan") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-chhattisgarh") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-haryana") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-himachal-pradesh") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-in-madhya-pradesh") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-hyderabad-to-bangalore") {
            redirect("bangalore-packers-movers-karnataka", 'location', 301);
        } else if($url === "complete-home-shifting-checklist-before-moving") {
            redirect(site_url(), 'location', 301);
        } else if($url === "packers-and-movers-hyderabad-to-chennai") {
            redirect("chennai-packers-movers-tamil-nadu", 'location', 301);
        } else if($url === "packers-and-movers-in-tamil-nadu") {
            redirect(site_url(), 'location', 301);
        } else if($url === "local-and-long-distance-moving-in-hyderabad") {
            redirect(site_url(), 'location', 301);
        }
    }
}
