<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us: Relocating India, Safely and Efficiently | " . $this->comp['company3'];
        $data['description'] = "Each relocation opens up a new chapter in life. For Elite Logistics Packers and Movers, the responsibility to relocate safely and efficiently belongs in the hands of professionals. We take special care of every shipment, provide transparent prices and simplify relocating for our clients.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Reasons to choose Elite Logistics Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Moving companies provide trucks to transport customers' belongings from one place to another. However, customers also want to know how their items will be packed, at what cost and who will be responsible for the whole process of moving. Elite Logistics Packers and Movers pays attention to these issues to make the relocation easier to manage.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions | " . $this->comp['company3'];
        $data['description'] = "Find clear answers to frequently asked questions about " . $this->comp['company3'] . ", pricing, packing materials, IBA approval, tracking, and relocation services across India.";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        redirect('reviews', 'location', 301);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "How " . $this->comp['company3'] . " handles and protects your personal data during your relocation.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "The terms and conditions governing our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

