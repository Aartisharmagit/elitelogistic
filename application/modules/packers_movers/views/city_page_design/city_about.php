<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!isset($htmlcontent)) {
    include 'city_content.php';
}
?>
<div class="city-about-card bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light-subtle mb-4">
  <div class="city-intro-layout row g-4 g-lg-5 align-items-center">
    <div class="col-12 col-lg-7">
      <div>
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

  <!-- Relocation Process Section (Direct Component, Not in Content String) -->
  <div class="city-process-section mt-5 pt-2">
    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-2 mb-4">
      <div>
        <div class="d-inline-flex align-items-center gap-2 bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 mb-2 fw-bold small">
          <i class="bi bi-arrow-repeat text-danger" aria-hidden="true"></i>
          <span>Seamless 4-Step Relocation</span>
        </div>
        <h3 class="fw-bolder text-dark mb-1 fs-4 fs-md-3">Our Relocation Process</h3>
        <p class="text-secondary mb-0 small">Step-by-step moving workflow designed for safe, timely, and organized relocation in <?= htmlspecialchars($city) ?>.</p>
      </div>
    </div>

    <div class="row g-3 g-md-4">
      <!-- Step 1 -->
      <div class="col-12 col-md-6">
        <div class="process-step-card h-100 p-4 rounded-4 shadow-sm">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 fw-bold small">Step 01</span>
            <div class="process-step-icon bg-danger-subtle text-danger" aria-hidden="true">
              <i class="bi bi-clipboard2-check-fill fs-5"></i>
            </div>
          </div>
          <span class="process-step-title d-block fw-bold text-dark fs-5 mb-2">Pre-Move Survey &amp; Written Quote</span>
          <p class="process-step-desc text-secondary small mb-0 lh-base">
            We start the process by gathering information like date of moving, pickup and delivery location, inventory, floor access and special handling requirements. Based on this information, we prepare a written quotation.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-12 col-md-6">
        <div class="process-step-card h-100 p-4 rounded-4 shadow-sm">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 fw-bold small">Step 02</span>
            <div class="process-step-icon bg-danger-subtle text-danger" aria-hidden="true">
              <i class="bi bi-box-seam-fill fs-5"></i>
            </div>
          </div>
          <span class="process-step-title d-block fw-bold text-dark fs-5 mb-2">Safe Multi-Layer Packing &amp; Cushioning</span>
          <p class="process-step-desc text-secondary small mb-0 lh-base">
            Our team visits on the scheduled date along with the required packing material. The furniture is protected, extra cushioning is provided to the fragile items and packing boxes are arranged in an orderly manner to ease the process of unloading.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-12 col-md-6">
        <div class="process-step-card h-100 p-4 rounded-4 shadow-sm">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 fw-bold small">Step 03</span>
            <div class="process-step-icon bg-danger-subtle text-danger" aria-hidden="true">
              <i class="bi bi-truck-front-fill fs-5"></i>
            </div>
          </div>
          <span class="process-step-title d-block fw-bold text-dark fs-5 mb-2">Careful Vehicle Loading &amp; Route Transit</span>
          <p class="process-step-desc text-secondary small mb-0 lh-base">
            Loading of the items is done carefully into the right vehicle. The transport team travels via the planned route.
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-12 col-md-6">
        <div class="process-step-card h-100 p-4 rounded-4 shadow-sm">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 fw-bold small">Step 04</span>
            <div class="process-step-icon bg-danger-subtle text-danger" aria-hidden="true">
              <i class="bi bi-house-check-fill fs-5"></i>
            </div>
          </div>
          <span class="process-step-title d-block fw-bold text-dark fs-5 mb-2">On-Time Delivery &amp; Safe Unloading</span>
          <p class="process-step-desc text-secondary small mb-0 lh-base">
            Our staff delivers the consignment at the designated place, where the items are unloaded by our staff.
          </p>
        </div>
      </div>
    </div>
  </div>

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
