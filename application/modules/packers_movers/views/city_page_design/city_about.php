<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!isset($htmlcontent)) {
    include 'city_content.php';
}
?>
<div class="city-about-card bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light-subtle mb-4">
  <div class="city-intro-layout row g-4 g-lg-5 align-items-center">
    <div class="col-12 col-lg-7">
      <div class="city-intro-box">
        <?= $htmlcontent ?>
      </div>
    </div>
    <div class="col-12 col-lg-5">
      <div class="city-intro-image">
        <img src="<?= base_url('assets/img/service/packing-hero-bike.webp') ?>" alt="Professional packing and moving service" title="Professional packing and moving service" class="img-fluid" loading="lazy">
        <div class="city-intro-image-badge">
          <strong>Safe &amp; Reliable</strong>
          <span>Professional moving support</span>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($htmlcontent1)): ?>
    <div class="city-why-box">
      <?= $htmlcontent1 ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($htmlcontent3)): ?>
    <div class="city-moving-needs container mt-4">
      <div class="row g-4 g-lg-5 align-items-stretch">
        <div class="col-12 col-lg-5 d-flex">
          <div class="w-100 h-100 overflow-hidden rounded-4 shadow-sm">
            <img src="<?= base_url('assets/img/service/truck-loaded.webp') ?>" alt="Loaded moving truck for relocation services" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
          </div>
        </div>
        <div class="col-12 col-lg-7">
          <?= $htmlcontent3 ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!empty($htmlcontent2)): ?>
    <div class="city-process-box">
      <?= $htmlcontent2 ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($htmlcontent4)): ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <?= $htmlcontent4 ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php include 'city_gallery.php'; ?>
</div>
