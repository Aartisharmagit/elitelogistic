<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class City_services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    private function format_city($city_slug) {
        if (empty($city_slug)) {
            return '';
        }
        $city = str_replace("_", " ", $city_slug);
        return urldecode(ucwords(str_replace("-", " ", $city)));
    }

    function index()
    {
        redirect('home-relocation', 'location', 301);
    }

    function home_shifting($city_slug = NULL)
    {
        $city = !empty($city_slug) ? $this->format_city($city_slug) : '';
        $data['city'] = $city;
        $data['ctlink'] = !empty($city_slug) ? $city_slug : '';
        if (!empty($city)) {
            $data['title'] = "Best Home Shifting Services in $city | " . $this->comp['company3'];
            $data['description'] = "Get reliable, safe, and professional home shifting services in $city from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates.";
        } else {
            $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
            $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates across India.";
        }
        $data['module'] = "city_services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting($city_slug = NULL)
    {
        $city = !empty($city_slug) ? $this->format_city($city_slug) : '';
        $data['city'] = $city;
        $data['ctlink'] = !empty($city_slug) ? $city_slug : '';
        if (!empty($city)) {
            $data['title'] = "Professional Office Relocation Services in $city | " . $this->comp['company3'];
            $data['description'] = "Smooth and secure office shifting services in $city by " . $this->comp['company3'] . ". Minimize downtime with our experienced office relocation experts.";
        } else {
            $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
            $data['description'] = "Smooth and secure corporate and office shifting services by " . $this->comp['company3'] . ". Minimize business downtime with experienced relocation experts.";
        }
        $data['module'] = "city_services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport($city_slug = NULL)
    {
        $city = !empty($city_slug) ? $this->format_city($city_slug) : '';
        $data['city'] = $city;
        $data['ctlink'] = !empty($city_slug) ? $city_slug : '';
        if (!empty($city)) {
            $data['title'] = "Safe Car Transportation Services in $city | " . $this->comp['company3'];
            $data['description'] = "Secure car carrier and transportation services in $city by " . $this->comp['company3'] . ". On-time and damage-free vehicle delivery across India.";
        } else {
            $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
            $data['description'] = "Secure car carrier and vehicle transportation services by " . $this->comp['company3'] . ". On-time and damage-free enclosed car delivery across India.";
        }
        $data['module'] = "city_services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport($city_slug = NULL)
    {
        $city = !empty($city_slug) ? $this->format_city($city_slug) : '';
        $data['city'] = $city;
        $data['ctlink'] = !empty($city_slug) ? $city_slug : '';
        if (!empty($city)) {
            $data['title'] = "Reliable Bike Transportation Services in $city | " . $this->comp['company3'];
            $data['description'] = "Hire trusted two-wheeler and bike shifting services in $city from " . $this->comp['company3'] . ". We ensure scratch-free and timely delivery.";
        } else {
            $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
            $data['description'] = "Hire trusted two-wheeler and bike shifting services across India from " . $this->comp['company3'] . ". We ensure scratch-free and timely door-to-door delivery.";
        }
        $data['module'] = "city_services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }

    function packing_moving($city_slug = NULL)
    {
        $city = !empty($city_slug) ? $this->format_city($city_slug) : '';
        $data['city'] = $city;
        $data['ctlink'] = !empty($city_slug) ? $city_slug : '';
        if (!empty($city)) {
            $data['title'] = "Packing and Moving Services in $city | " . $this->comp['company3'];
            $data['description'] = "Secure packing and moving services in $city by " . $this->comp['company3'] . ". High quality multi-layer packaging and safe handling.";
        } else {
            $data['title'] = "Packing and Moving Services | " . $this->comp['company3'];
            $data['description'] = "Secure packing and moving services by " . $this->comp['company3'] . ". High quality multi-layer packaging, expert moving crew, and safe transit.";
        }
        $data['module'] = "city_services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loading_unloading($city_slug = NULL)
    {
        $city = !empty($city_slug) ? $this->format_city($city_slug) : '';
        $data['city'] = $city;
        $data['ctlink'] = !empty($city_slug) ? $city_slug : '';
        if (!empty($city)) {
            $data['title'] = "Loading & Unloading Services in $city | " . $this->comp['company3'];
            $data['description'] = "Safe and professional loading and unloading services in $city by " . $this->comp['company3'] . ". Skilled workforce with heavy lifting equipment.";
        } else {
            $data['title'] = "Loading and Unloading Services | " . $this->comp['company3'];
            $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ". Skilled labor force, hydraulic ramps, and damage-free handling.";
        }
        $data['module'] = "city_services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function storage_services($city_slug = NULL)
    {
        redirect('home-relocation', 'location', 301);
    }

    // Aliases for seamless backward compatibility
    function homeShifting($city_slug = NULL) { return $this->home_shifting($city_slug); }
    function office($city_slug = NULL) { return $this->office_shifting($city_slug); }
    function bike($city_slug = NULL) { return $this->bike_transport($city_slug); }
    function car($city_slug = NULL) { return $this->car_transport($city_slug); }
    function packingMoving($city_slug = NULL) { return $this->packing_moving($city_slug); }
    function loadingUnloading($city_slug = NULL) { return $this->loading_unloading($city_slug); }
    function storage($city_slug = NULL) { return $this->storage_services($city_slug); }
}
