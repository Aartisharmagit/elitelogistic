<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 8. FINAL CALL-TO-ACTION BAND (Compact 2-Column with Quick-Contact Card) -->
<section class="site-section section-bg-white cta-band-section" id="cta-band" aria-label="Get Free Moving Quote">
  <div class="container">
    <div class="cta-band-box position-relative overflow-hidden">
      
      <!-- Ambient Background Soft Corner Circles (Non-crowding) -->
      <div class="cta-deco-circle cta-deco-circle-1 position-absolute" aria-hidden="true"></div>
      <div class="cta-deco-circle cta-deco-circle-2 position-absolute" aria-hidden="true"></div>

      <!-- Faint Dotted Route Line & Travelling Truck Icon (Running along very bottom edge only) -->
      <div class="cta-route-layer position-absolute d-none d-sm-block" aria-hidden="true">
        <svg class="cta-route-svg" viewBox="0 0 1000 36" preserveAspectRatio="none" fill="none">
          <path id="ctaRoutePath" class="cta-route-path" d="M -20,24 Q 250,6 500,24 T 1020,20" stroke="rgba(255, 255, 255, 0.16)" stroke-width="2" stroke-dasharray="6 6" />
        </svg>
        <div class="cta-truck-badge">
          <i class="bi bi-truck" aria-hidden="true"></i>
        </div>
      </div>

      <!-- 2-Column Content Grid (60/40) -->
      <div class="row align-items-center g-3 g-lg-4 position-relative z-2">
        
        <!-- Left Column: Headline & Subtext -->
        <div class="col-12 col-lg-7 text-center text-lg-start">
          <h3 class="cta-band-title text-white fw-bold mb-2">
            Book Your Move with Confidence
          </h3>
          <p class="cta-band-subtitle mb-0">
            Contact us at <?= $phone ?> for your moving quote.
          </p>
        </div>

        <!-- Right Column: Compact White Contact Card (~130-150px height) -->
        <div class="col-12 col-lg-5">
          <div class="cta-contact-card bg-white">
            
            <!-- Card Header: Phone icon, 24x7 Label & Navy Number in One Compact Row -->
            <div class="cta-card-header d-flex align-items-center gap-2 mb-2 pb-1">
              <div class="cta-card-phone-wrap position-relative flex-shrink-0" aria-hidden="true">
                <span class="cta-card-pulse-ring"></span>
                <span class="cta-card-phone-icon d-flex align-items-center justify-content-center">
                  <i class="bi bi-telephone-fill"></i>
                </span>
              </div>
              <div class="cta-card-header-meta d-flex align-items-baseline gap-2 flex-wrap">
                <span class="cta-card-label">Call us, 24x7:</span>
                <?php if (!empty($phone)): ?>
                  <a href="<?= $phonehtml ?>" class="cta-card-phone-num" title="Call us directly: <?= $phone ?>" aria-label="Call us directly: <?= $phone ?>">
                    <?= $phone ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>

            <!-- Action Buttons: Side-by-Side Row -->
            <div class="cta-card-btn-row d-grid gap-2">
              
              <!-- Quote Button -->
              <button type="button" class="btn btn-cta-card-quote d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Moving Quote" aria-label="Get Free Moving Quote">
                <span>Get Free Quote</span>
                <i class="bi bi-arrow-right cta-btn-arrow" aria-hidden="true"></i>
              </button>

              <!-- WhatsApp Button -->
              <?php if (!empty($whatsapphtml)): ?>
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-cta-card-whatsapp d-flex align-items-center justify-content-center gap-2" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                  <i class="bi bi-whatsapp" aria-hidden="true"></i>
                  <span>WhatsApp</span>
                </a>
              <?php endif; ?>

            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
</section>
