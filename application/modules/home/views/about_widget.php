<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<!-- 1. ABOUT SECTION (Redesigned with Elevated Visual Hierarchy) -->
<section class="site-section section-bg-white border-bottom position-relative overflow-hidden" id="about">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Column: Image with Experience Badge & Floating Trust Pill -->
      <div class="col-12 col-lg-5 mb-4 mb-lg-0">
        <div class="about-frame-wrapper position-relative mx-auto">
          
          <div class="about-img-box position-relative overflow-hidden">
           <img src="<?= base_url('assets/img/about-packers-movers.jpeg') ?>" alt="Elite Logistics Packers and Movers operations team" width="800" height="600" loading="lazy" class="img-fluid about-single-img w-100 object-fit-cover">
           <div class="about-exp-label position-absolute">
             <span class="exp-num fw-bold d-block text-white"><?= $experience ?></span>
             <span class="exp-text d-block text-white">Years of experience</span>
           </div>
         </div>

          <!-- Floating Trust Card -->
          <div class="about-floating-trust-card position-absolute d-flex align-items-center gap-2">
            <div class="about-trust-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <div>
              <span class="d-block fw-bold text-dark small about-trust-title">IBA Approved</span>
              <span class="d-block text-muted about-trust-ref">Ref No. <?= $ibaCode ?></span>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: Pill Eyebrow, Heading, Lead Card, 3 Pillar Micro-Cards & CTA -->
      <div class="col-12 col-lg-7">
        <div class="about-content-wrap ps-lg-2">
          
          <!-- Small Brand Accent Line & Eyebrow -->
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="about-pill-eyebrow d-inline-flex align-items-center gap-1.5 px-3 py-1 rounded-pill bg-danger-subtle text-danger fw-bold small">
              <i class="bi bi-patch-check-fill"></i>
              <span>Reliable Moving Network</span>
            </span>
          </div>

          <!-- Single H2 on Home Page -->
          <h2 class="section-title-heading about-main-title mb-3">
            About Us: <span class="text-brand"><?= $company3 ?></span>
          </h2>

          <!-- Lead Overview Highlight Card (Exact Lead Paragraph) -->
          <div class="about-lead-card p-3 p-md-4 rounded-4 mb-3 position-relative">
            <div class="about-lead-quote-mark position-absolute" aria-hidden="true">
              <i class="bi bi-quote"></i>
            </div>
            <p class="about-lead-text mb-0 leading-relaxed position-relative z-2">
              Looking for reliable logistics packers and movers for moving whether it's household, office shift or even moving your car to another city, relocating takes planning. The right packers and movers make all the difference. Our company <?= $company3 ?> helps you move your items with proper care, affordable prices and reliable transportation.
            </p>
          </div>

          <!-- 3 Operational Pillar Cards (Exact 3 Paragraphs) -->
          <div class="d-flex flex-column gap-2 mb-4">
            <!-- Pillar 1 -->
            <div class="about-pillar-card d-flex align-items-center gap-3">
              <div class="about-pillar-icon rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                <i class="bi bi-box2-heart-fill"></i>
              </div>
              <p class="about-pillar-text text-muted mb-0">
                At <?= $company3 ?>, we realize that your possessions are not only commodities but require careful handling when moving.
              </p>
            </div>

            <!-- Pillar 2 -->
            <div class="about-pillar-card d-flex align-items-center gap-3">
              <div class="about-pillar-icon rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                <i class="bi bi-truck-front-fill"></i>
              </div>
              <p class="about-pillar-text text-muted mb-0">
                We ensure easy relocations through our processes involving packing, proper loading, and reliable transportation.
              </p>
            </div>

            <!-- Pillar 3 -->
            <div class="about-pillar-card d-flex align-items-center gap-3">
              <div class="about-pillar-icon rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                <i class="bi bi-bullseye"></i>
              </div>
              <p class="about-pillar-text text-muted mb-0">
                Our goal is simple: careful handling, effective communication and moving services that you can rely on.
              </p>
            </div>
          </div>

          <!-- Action Row -->
          <div class="about-action-bar d-flex flex-wrap align-items-center gap-3">
            <a href="<?= site_url('about-us') ?>" class="btn btn-hero-primary d-inline-flex align-items-center gap-2" title="Know More About <?= $company3 ?>" aria-label="Know More About <?= $company3 ?>">
              <span>Know More About Us</span>
              <i class="bi bi-arrow-right"></i>
            </a>

            <?php if (!empty($phone)): ?>
              <a href="<?= $phonehtml ?>" class="btn btn-outline-brand d-inline-flex align-items-center gap-2" title="Call Our Move Coordinator: <?= $phone ?>" aria-label="Call Our Move Coordinator: <?= $phone ?>">
                <i class="bi bi-telephone-fill"></i>
                <span><?= $phone ?></span>
              </a>
            <?php endif; ?>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
