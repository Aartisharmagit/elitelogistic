<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('template/slider', [
    'hero_h1' => 'Top Packers and Movers in ' . $city . ' | <span class="hero-title-accent">Safe and Secure Shifting Services</span>',
    'hero_bg_image' => file_exists(FCPATH . "assets/img/state/{$st}.webp") ? base_url("assets/img/state/{$st}.webp") : base_url("assets/img/state/maharashtra.webp"),
    'hero_breadcrumbs' => [
        ['name' => 'Home', 'url' => site_url()],
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => $state, 'url' => site_url($st)],
        ['name' => $city]
    ],
    'city' => $city
]);