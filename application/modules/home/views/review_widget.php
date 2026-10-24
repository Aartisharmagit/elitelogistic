<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 6. CUSTOMER REVIEWS SECTION -->
<section class="site-section section-bg-white border-bottom" id="testimonials">
  <div class="container">
    
    <!-- Shared Section Title Block (Centered) -->
    <div class="section-title-block text-center mx-auto mb-5">
      <div class="section-title-line mx-auto" aria-hidden="true"></div>
      <h3 class="section-title-heading mb-2">What our customers say</h3>
      <p class="section-subtitle-text mx-auto">
        Real relocation experiences from homeowners, officers, and commercial enterprises across India.
      </p>
    </div>

    <!-- 3-Card Grid with Mobile Scroll-Snap -->
    <div class="reviews-scroll-wrap row g-4 flex-nowrap flex-lg-wrap overflow-x-auto pb-3 mb-4">
      <!-- Review 1 -->
      <div class="col-10 col-sm-8 col-md-6 col-lg-4 flex-shrink-0 flex-lg-shrink-1">
        <div class="shared-card review-card-item p-4 h-100 d-flex flex-column justify-content-between position-relative scroll-reveal stagger-1">
          <i class="bi bi-quote review-watermark-quote" aria-hidden="true"></i>

          <div>
            <div class="review-stars-row text-orange d-flex gap-1 mb-3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-comment-text text-muted small leading-relaxed mb-4 position-relative z-2">
              &ldquo;Shifted my complete 3-BHK along with my Honda City from Koramangala to Powai. <?= $company3 ?> handled all delicate glass crockery with triple wrap boxes. The hydraulic car carrier had zero scratches on arrival.&rdquo;
            </p>
          </div>

          <div class="review-author-wrap pt-3 border-top d-flex align-items-center gap-3 position-relative z-2">
            <div class="review-avatar-circle rounded-circle d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0">
              RN
            </div>
            <div class="overflow-hidden">
              <p class="review-author-name fw-bold mb-0 text-dark small text-truncate">Rajesh Narang</p>
              <span class="review-author-route small text-orange fw-medium d-inline-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill geo-icon-xs"></i>
                <span>Bengaluru to Mumbai</span>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col-10 col-sm-8 col-md-6 col-lg-4 flex-shrink-0 flex-lg-shrink-1">
        <div class="shared-card review-card-item p-4 h-100 d-flex flex-column justify-content-between position-relative scroll-reveal stagger-2">
          <i class="bi bi-quote review-watermark-quote" aria-hidden="true"></i>

          <div>
            <div class="review-stars-row text-orange d-flex gap-1 mb-3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-comment-text text-muted small leading-relaxed mb-4 position-relative z-2">
              &ldquo;Being a PSU officer with strict reimbursement audits, their IBA documentation was 100% compliant and instantly cleared by my office. Punctual crew with no extortionist demands at unloading.&rdquo;
            </p>
          </div>

          <div class="review-author-wrap pt-3 border-top d-flex align-items-center gap-3 position-relative z-2">
            <div class="review-avatar-circle rounded-circle d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0">
              AS
            </div>
            <div class="overflow-hidden">
              <p class="review-author-name fw-bold mb-0 text-dark small text-truncate">Ananya Sengupta</p>
              <span class="review-author-route small text-orange fw-medium d-inline-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill geo-icon-xs"></i>
                <span>Delhi to Pune</span>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col-10 col-sm-8 col-md-6 col-lg-4 flex-shrink-0 flex-lg-shrink-1">
        <div class="shared-card review-card-item p-4 h-100 d-flex flex-column justify-content-between position-relative scroll-reveal stagger-3">
          <i class="bi bi-quote review-watermark-quote" aria-hidden="true"></i>

          <div>
            <div class="review-stars-row text-orange d-flex gap-1 mb-3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-comment-text text-muted small leading-relaxed mb-4 position-relative z-2">
              &ldquo;Relocated our 45-person design studio over a single weekend. Server racks and high-resolution monitors were packed in custom anti-static wooden crates. Monday morning we were operational without delay.&rdquo;
            </p>
          </div>

          <div class="review-author-wrap pt-3 border-top d-flex align-items-center gap-3 position-relative z-2">
            <div class="review-avatar-circle rounded-circle d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0">
              VR
            </div>
            <div class="overflow-hidden">
              <p class="review-author-name fw-bold mb-0 text-dark small text-truncate">Vikramaditya Rao</p>
              <span class="review-author-route small text-orange fw-medium d-inline-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill geo-icon-xs"></i>
                <span>Hyderabad to Chennai</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rated 4.9/5 line & Write a Review Button -->
    <div class="review-actions-bar text-center d-flex flex-wrap align-items-center justify-content-center gap-3 pt-2">
      <div class="d-inline-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
        <div class="text-orange d-flex gap-1">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <span class="small fw-bold text-dark">Rated <?= $ratingValue ?>/5 on <?= $happyClients ?> moves</span>
      </div>

      <button type="button" class="btn btn-outline-brand btn-sm rounded-pill px-3 py-2 d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#rvwmdl" title="Write a Verified Customer Review" aria-label="Write a Verified Customer Review">
        <i class="bi bi-pencil-square text-orange"></i>
        <span>Write a Review</span>
      </button>
    </div>

  </div>
</section>