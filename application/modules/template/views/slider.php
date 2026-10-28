<?php
$default_h1 = 'Best Logistics Packers and Movers: <span class="hero-title-accent">Secure and Reliable Moving Services</span> <span class="hero-title-underline">across India</span>';
$default_subtitle = '';

$display_h1 = !empty($hero_h1) ? $hero_h1 : $default_h1;
$display_subtitle = !empty($hero_subtitle) ? $hero_subtitle : $default_subtitle;
?>

<!-- 3. HERO SECTION -->
<section class="hero-section position-relative overflow-hidden">
  <?php
  $hero_bg_style = '';
  if (!empty($hero_bg_image)) {
      $hero_bg_style = 'style="--hero-bg-img: url(\'' . htmlspecialchars($hero_bg_image) . '\');"';
  }
  ?>
  <div class="hero-bg-layer" <?= $hero_bg_style ?> aria-hidden="true"></div>

  <div class="container position-relative z-2">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Column: Content + CTAs + Anchored Frosted Stats Bar -->
      <div class="col-lg-7">
        <div class="hero-content pe-lg-2">

          <?php if (!empty($hero_breadcrumbs) && is_array($hero_breadcrumbs)): ?>
            <!-- Dynamic Breadcrumb Pill with HTML Microdata Schema -->
            <nav class="inner-bc-pill-wrap justify-content-start mb-3" aria-label="breadcrumb">
              <ol class="inner-bc-pill list-unstyled m-0" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="inner-bc-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                  <a href="<?= site_url() ?>" class="inner-bc-link" itemprop="item" title="Return to Home">
                    <i class="bi bi-house-door-fill inner-bc-home-icon" aria-hidden="true"></i>
                    <span class="inner-bc-link-text" itemprop="name">Home</span>
                  </a>
                  <meta itemprop="position" content="1">
                </li>
                <?php 
                $bc_pos = 1;
                foreach ($hero_breadcrumbs as $index => $crumb): 
                  if ($index === 0 && strtolower($crumb['name']) === 'home') continue; 
                  $bc_pos++;
                ?>
                  <li class="inner-bc-sep" aria-hidden="true">
                    <i class="bi bi-chevron-right"></i>
                  </li>
                  <?php if (!empty($crumb['url'])): ?>
                    <li class="inner-bc-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                      <a href="<?= $crumb['url'] ?>" class="inner-bc-link" itemprop="item">
                        <span class="inner-bc-link-text" itemprop="name"><?= htmlspecialchars($crumb['name']) ?></span>
                      </a>
                      <meta itemprop="position" content="<?= $bc_pos ?>">
                    </li>
                  <?php else: ?>
                    <li class="inner-bc-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                      <span class="inner-bc-current" itemprop="name"><?= htmlspecialchars($crumb['name']) ?></span>
                      <meta itemprop="position" content="<?= $bc_pos ?>">
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ol>
            </nav>
          <?php endif; ?>

          <!-- 1. Single H1 -->
          <h1 class="hero-title hero-stagger-1 mb-0">
            <?= $display_h1 ?>
          </h1>

          <?php if (!empty($display_subtitle)): ?>
            <!-- 2. Subtext -->
            <p class="hero-subtitle hero-stagger-2 mb-0">
              <?= $display_subtitle ?>
            </p>
          <?php endif; ?>

          <!-- 3. Checkmark Pills (Direct HTML) -->
          <div class="hero-pills-row hero-stagger-3 d-flex flex-wrap align-items-center">
            <div class="hero-check-pill d-inline-flex align-items-center">
              <i class="bi bi-check-circle-fill hero-pill-icon"></i>
              <span class="hero-pill-text">Written Price Lock</span>
            </div>
            <div class="hero-check-pill d-inline-flex align-items-center">
              <i class="bi bi-check-circle-fill hero-pill-icon"></i>
              <span class="hero-pill-text">IBA Approved Bills</span>
            </div>
            <div class="hero-check-pill d-inline-flex align-items-center">
              <i class="bi bi-check-circle-fill hero-pill-icon"></i>
              <span class="hero-pill-text"><a href='<?= site_url('track-shipment') ?>' class="text-decoration-none text-white">Live GPS Tracking</a></span>
            </div>
            <div class="hero-check-pill d-inline-flex align-items-center">
              <i class="bi bi-check-circle-fill hero-pill-icon"></i>
              <span class="hero-pill-text">5-Layer Bubble Packing</span>
            </div>
          </div>

          <!-- 4. CTA Row -->
          <div class="hero-cta-row hero-stagger-4 d-flex flex-nowrap align-items-center gap-2 gap-sm-3">
            <button type="button" class="btn btn-hero-primary d-inline-flex align-items-center gap-2 text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Moving Quote" aria-label="Get Free Moving Quote">
              <span>Get Free Quote</span>
              <i class="bi bi-arrow-right hero-cta-arrow"></i>
            </button>

            <?php if (!empty($phone)): ?>
              <a class="btn btn-hero-secondary d-inline-flex align-items-center gap-2 text-nowrap" href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" title="Call Move Specialist: <?= $phone ?>" aria-label="Call Move Specialist: <?= $phone ?>">
                <i class="bi bi-telephone-fill"></i>
                <span>Call <?= $phone ?></span>
              </a>
            <?php endif; ?>
          </div>

          <!-- 5. Anchored Frosted-Glass Stats Bar (Direct HTML) -->
          <div class="hero-stats-bar hero-stagger-5 d-flex align-items-center justify-content-between">
            <div class="hero-stat-col text-center flex-fill">
              <div class="hero-stat-num d-inline-flex align-items-baseline justify-content-center">
                <span class="stat-counter count-families"><span class="stat-fallback">65,000</span></span>
                <span class="stat-unit text-orange">+</span>
              </div>
              <span class="hero-stat-label d-block">Families moved</span>
            </div>

            <div class="hero-stat-divider" aria-hidden="true"></div>

            <div class="hero-stat-col text-center flex-fill">
              <div class="hero-stat-num d-inline-flex align-items-baseline justify-content-center">
                <span class="stat-counter count-cities"><span class="stat-fallback">250</span></span>
                <span class="stat-unit text-orange">+</span>
              </div>
              <span class="hero-stat-label d-block">Cities covered</span>
            </div>

            <div class="hero-stat-divider" aria-hidden="true"></div>

            <div class="hero-stat-col text-center flex-fill">
              <div class="hero-stat-num d-inline-flex align-items-baseline justify-content-center">
                <span><?= !empty($ratingValue) ? $ratingValue : '4.9' ?></span>
                <span class="stat-unit text-orange">/5</span>
              </div>
              <div class="hero-stat-stars text-orange d-flex justify-content-center gap-1 my-0.5" aria-hidden="true">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="hero-stat-label d-block">Customer rating</span>
            </div>

            <div class="hero-stat-divider" aria-hidden="true"></div>

            <div class="hero-stat-col text-center flex-fill">
              <div class="hero-stat-num d-inline-flex align-items-baseline justify-content-center">
                <span>Zero</span>
              </div>
              <span class="hero-stat-label d-block">Damage claims</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: Interactive Route-Planning Quote Form Card -->
      <div class="col-lg-5 position-relative hero-stagger-form">
        <?php $this->load->view('contacts/quoteform'); ?>
      </div>

    </div>
  </div>
</section>
