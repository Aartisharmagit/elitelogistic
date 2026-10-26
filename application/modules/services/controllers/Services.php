<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    function index()
    {
        $data['title'] = "Professional Relocation & Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Explore comprehensive relocation and shifting services by " . $this->comp['company3'] . ". From household shifting to vehicle transport, office relocation, and warehousing across India.";
        $data['module'] = "services";
        $data['view_file'] = "index";
        echo Modules::run('template/layout2', $data);
    }

    function home_shifting()
    {
        $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates across India.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure corporate and office shifting services by " . $this->comp['company3'] . ". Minimize business downtime with experienced relocation experts.";
        $data['module'] = "services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and vehicle transportation services by " . $this->comp['company3'] . ". On-time and damage-free enclosed car delivery across India.";
        $data['module'] = "services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services across India from " . $this->comp['company3'] . ". We ensure scratch-free and timely door-to-door delivery.";
        $data['module'] = "services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }

    function packing_moving()
    {
        $data['title'] = "Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Secure packing and moving services by " . $this->comp['company3'] . ". High quality multi-layer packaging, expert moving crew, and safe transit.";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loading_unloading()
    {
        $data['title'] = "Loading and Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ". Skilled labor force, hydraulic ramps, and damage-free handling.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function storage_services()
    {
        redirect('home-relocation', 'location', 301);
    }

    // Aliases for seamless backward compatibility
    function homeShifting() { return $this->home_shifting(); }
    function office() { return $this->office_shifting(); }
    function bike() { return $this->bike_transport(); }
    function car() { return $this->car_transport(); }
    function packingMoving() { return $this->packing_moving(); }
    function loadingUnloading() { return $this->loading_unloading(); }
    function storage() { return $this->storage_services(); }
}
