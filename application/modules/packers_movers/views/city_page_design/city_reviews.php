<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- VERIFIED CUSTOMER REVIEWS (BOOTSTRAP 5 & MICRODATA SCHEMA)              -->
<!-- ======================================================================= -->
<style>
.city-review-card {
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.city-review-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 1rem 2rem rgba(11, 34, 77, 0.08) !important;
}
.review-avatar-wrap {
  width: 38px;
  height: 38px;
  font-size: 13px;
}
</style>

<div class="card p-3 p-sm-4 p-lg-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
  
  <!-- Header with Aggregate Rating Summary -->
  <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
      <div class="d-inline-flex align-items-center gap-2 bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 mb-2 fw-bold small">
        <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
        <span>Customer Feedback</span>
      </div>
      <h3 class="fw-bolder text-dark mb-1 fs-4 fs-md-3">
        Verified Customer Reviews in <?= htmlspecialchars($city) ?>
      </h3>
      <p class="text-secondary mb-0 small">
        Real experiences from households and businesses who relocated with us in <?= htmlspecialchars($city) ?>.
      </p>
    </div>

    <!-- Rating Summary Box -->
    <div class="d-inline-flex align-items-center gap-3 bg-light-subtle border border-light-subtle rounded-3 p-2 px-3 flex-shrink-0">
      <span class="fw-bold fs-3 text-dark lh-1">4.9</span>
      <div class="lh-sm">
        <div class="text-warning small mb-1" aria-label="4.9 out of 5 stars">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <span class="text-secondary small d-block">520+ Verified Moves</span>
      </div>
    </div>
  </div>

  <!-- Review Cards Grid (100% Bootstrap 5) -->
  <div class="row g-3 g-lg-4">

    <!-- Review 1 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card city-review-card h-100 p-4 rounded-4 bg-light-subtle border border-light-subtle d-flex flex-column justify-content-between position-relative overflow-hidden" itemscope itemtype="https://schema.org/Review">
        
        <!-- Hidden Microdata for Item Reviewed -->
        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/MovingCompany">
          <meta itemprop="name" content="<?= htmlspecialchars($company3 ?? 'Elite Logistics Packers and Movers') ?>">
          <meta itemprop="image" content="<?= base_url('assets/img/logo/logo.png') ?>">
          <meta itemprop="telephone" content="<?= !empty($phone) ? htmlspecialchars($phone) : '+91-9666897070' ?>">
          <meta itemprop="address" content="<?= htmlspecialchars($city) ?>, India">
        </div>

        <!-- Decorative Quote Watermark -->
        <i class="bi bi-quote position-absolute top-0 end-0 text-secondary opacity-25 display-4 me-3 mt-1" aria-hidden="true"></i>

        <div class="position-relative z-1 mb-3">
          <!-- Rating & Verified Badge -->
          <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
            <div class="text-warning small" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
              <meta itemprop="ratingValue" content="5">
              <meta itemprop="bestRating" content="5">
              <meta itemprop="worstRating" content="1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill small">
              <i class="bi bi-patch-check-fill me-1" aria-hidden="true"></i>Verified Move
            </span>
          </div>

          <!-- Review Body -->
          <p class="text-secondary small fst-italic mb-0 lh-base" itemprop="reviewBody">
            &ldquo;Hamne apne 2BHK ka saman local shift karwaya tha. Team time par aayi aur packing quality sach me bohot acchi thi &mdash; LED TV aur double bed ke liye 5-layer bubble packing use ki. Sabse acchi baat koi hidden charge nahi mangi, jo written quotation mila tha wahi final amount tha. Pure saman par ek single scratch nahi aaya.&rdquo;
          </p>
        </div>

        <!-- Author Footer -->
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center gap-2.5 position-relative z-1">
          <div class="review-avatar-wrap rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0">
            RK
          </div>
          <div itemprop="author" itemscope itemtype="https://schema.org/Person">
            <strong class="text-dark small d-block" itemprop="name">Rajesh Kulkarni</strong>
            <span class="text-muted small">2 BHK Local Move &bull; <?= htmlspecialchars($city) ?></span>
          </div>
        </div>

      </div>
    </div>

    <!-- Review 2 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card city-review-card h-100 p-4 rounded-4 bg-light-subtle border border-light-subtle d-flex flex-column justify-content-between position-relative overflow-hidden" itemscope itemtype="https://schema.org/Review">
        
        <!-- Hidden Microdata for Item Reviewed -->
        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/MovingCompany">
          <meta itemprop="name" content="<?= htmlspecialchars($company3 ?? 'Elite Logistics Packers and Movers') ?>">
          <meta itemprop="image" content="<?= base_url('assets/img/logo/logo.png') ?>">
          <meta itemprop="telephone" content="<?= !empty($phone) ? htmlspecialchars($phone) : '+91-9666897070' ?>">
          <meta itemprop="address" content="<?= htmlspecialchars($city) ?>, India">
        </div>

        <!-- Decorative Quote Watermark -->
        <i class="bi bi-quote position-absolute top-0 end-0 text-secondary opacity-25 display-4 me-3 mt-1" aria-hidden="true"></i>

        <div class="position-relative z-1 mb-3">
          <!-- Rating & Verified Badge -->
          <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
            <div class="text-warning small" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
              <meta itemprop="ratingValue" content="5">
              <meta itemprop="bestRating" content="5">
              <meta itemprop="worstRating" content="1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill small">
              <i class="bi bi-patch-check-fill me-1" aria-hidden="true"></i>Verified Move
            </span>
          </div>

          <!-- Review Body -->
          <p class="text-secondary small fst-italic mb-0 lh-base" itemprop="reviewBody">
            &ldquo;Main job switch ke chalte shift hui thi. Ghar ke luggage ke sath meri car bhi transport karni thi. GPS link se live tracking milti rahi jisse tension bilkul khatam ho gayi. Delivery exact 4th day par sahi salamat ho gayi. IBA approved bills bhi time par mil gaye jisse company claim easily settle ho gaya.&rdquo;
          </p>
        </div>

        <!-- Author Footer -->
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center gap-2.5 position-relative z-1">
          <div class="review-avatar-wrap rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0">
            AS
          </div>
          <div itemprop="author" itemscope itemtype="https://schema.org/Person">
            <strong class="text-dark small d-block" itemprop="name">Ananya Sengupta</strong>
            <span class="text-muted small">Car &amp; Household &bull; Relocated to <?= htmlspecialchars($city) ?></span>
          </div>
        </div>

      </div>
    </div>

    <!-- Review 3 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card city-review-card h-100 p-4 rounded-4 bg-light-subtle border border-light-subtle d-flex flex-column justify-content-between position-relative overflow-hidden" itemscope itemtype="https://schema.org/Review">
        
        <!-- Hidden Microdata for Item Reviewed -->
        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/MovingCompany">
          <meta itemprop="name" content="<?= htmlspecialchars($company3 ?? 'Elite Logistics Packers and Movers') ?>">
          <meta itemprop="image" content="<?= base_url('assets/img/logo/logo.png') ?>">
          <meta itemprop="telephone" content="<?= !empty($phone) ? htmlspecialchars($phone) : '+91-9666897070' ?>">
          <meta itemprop="address" content="<?= htmlspecialchars($city) ?>, India">
        </div>

        <!-- Decorative Quote Watermark -->
        <i class="bi bi-quote position-absolute top-0 end-0 text-secondary opacity-25 display-4 me-3 mt-1" aria-hidden="true"></i>

        <div class="position-relative z-1 mb-3">
          <!-- Rating & Verified Badge -->
          <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
            <div class="text-warning small" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
              <meta itemprop="ratingValue" content="5">
              <meta itemprop="bestRating" content="5">
              <meta itemprop="worstRating" content="1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill small">
              <i class="bi bi-patch-check-fill me-1" aria-hidden="true"></i>Verified Move
            </span>
          </div>

          <!-- Review Body -->
          <p class="text-secondary small fst-italic mb-0 lh-base" itemprop="reviewBody">
            &ldquo;Kitchen crockery, glass dining table aur heavy appliances ko lekar bohot chinta thi, lekin inke staff ne bohot careful tarike se handle kiya. Har box par room-wise labels lage the jisse naye ghar me unpacking bohot easy ho gayi. Staff polite aur professional tha, highly recommended!&rdquo;
          </p>
        </div>

        <!-- Author Footer -->
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center gap-2.5 position-relative z-1">
          <div class="review-avatar-wrap rounded-circle bg-success text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0">
            VR
          </div>
          <div itemprop="author" itemscope itemtype="https://schema.org/Person">
            <strong class="text-dark small d-block" itemprop="name">Vikramaditya Rao</strong>
            <span class="text-muted small">3 BHK Shifting &bull; <?= htmlspecialchars($city) ?></span>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>
