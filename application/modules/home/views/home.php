<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. About
$this->load->view('about_widget');

// 2. Services
$this->load->view('service_widget');

// 3. Why choose us
$this->load->view('why_choose_widget');

// 4. How it works (process)
$this->load->view('process_widget');

// 5. Customer reviews
$this->load->view('review_widget');

// 6. FAQs
$this->load->view('faqs_widget');

// 7. Final call-to-action band
$this->load->view('cta_widget');
?>
