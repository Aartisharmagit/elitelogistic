<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Track your shipment',
    'bc_desc' => "Track your shipment ",
    'breadcrumbs' => [
        ['name' => 'Track your shipment']
    ]
]);
?>