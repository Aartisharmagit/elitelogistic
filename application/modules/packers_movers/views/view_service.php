<?php
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$ctlink = strtolower(str_replace(" ", "-", $city));

$data_file = APPPATH . "modules/packers_movers/views/data/$st.php";
$cities = [];
if (file_exists($data_file)) {
    include $data_file;
}
?>

<!-- 1. Hero Slider Section with Respective State WebP Landmark Background -->
<?php include 'city_page_design/city_slider.php'; ?>

<!-- 2. City Details & Services Layout Section -->
<section class="city-details-section py-5 bg-light-subtle">
  <div class="container">
    <div class="row g-4 g-lg-5">
      
      <!-- Main Content Column -->
      <div class="col-lg-8">
        <?php include 'city_page_design/city_about.php'; ?>
        <?php include 'city_page_design/city_service.php'; ?>
        <?php include 'city_page_design/city_content.php'; ?>
        <?php include 'city_page_design/city_reviews.php'; ?>
        <?php include 'city_page_design/city_faq.php'; ?>
        <?php include 'city_page_design/city_map.php'; ?>
      </div>

      <!-- Sticky Sidebar Column -->
      <div class="col-lg-4">
        <?php include 'city_page_design/city_siderbar.php'; ?>
      </div>

    </div>
  </div>
</section>
