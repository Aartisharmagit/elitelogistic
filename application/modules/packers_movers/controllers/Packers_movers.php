<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "Our Branches Across India | " . $this->comp['company3'];
        $data['description'] = "Explore " . $this->comp['company3'] . " nationwide branch network across all states in India. Top-rated packers and movers for household shifting, vehicle transport, and warehousing.";
        $data['keywords'] = "packers and movers branches, all india moving branches, movers and packers network, interstate relocation branches, " . $this->comp['company3'];
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => "Packers and Movers in " . $state . " | " . $this->comp['company3'],
            "description" => "Looking for reliable packers and movers in " . $state . "? " . $this->comp['company3'] . " provides IBA approved household shifting, vehicle transport, and warehousing across all major cities in " . $state . ".",
            "keywords" => "packers and movers in $state, movers and packers $state, household shifting $state, car transport $state, " . $this->comp['company3'],
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }

        return array(
            'title' => "Top Packers and Movers in $city | Up to ₹500 Off",
            "desc" => "Hire top packers and movers in $city, $state. Safe home shifting & vehicle transport at affordable rates. Get up to ₹500 off today!"
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink = strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            //'img' => base_url('assets') . "/img/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city, Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city, $city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city, Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
