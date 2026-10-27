<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 9. FOOTER SECTION -->
<footer class="site-footer position-relative text-light-muted" id="footer">
  
  <!-- Crisp 3px Solid Orange Topline -->
  <div class="footer-orange-topline" aria-hidden="true"></div>

  <!-- Subtle Watermark Decorative Truck Icon in Background Corner -->
  <div class="footer-watermark-icon position-absolute" aria-hidden="true">
    <i class="bi bi-truck"></i>
  </div>

  <!-- MAIN FOOTER CONTENT (4 Columns) -->
  <div class="container py-5 position-relative z-2">
    <div class="row g-4 g-lg-5">

      <!-- Column 1: Brand (Logo + Glow Badge + Tight Paragraph + Social Icons) -->
      <div class="col-12 col-lg-4">
        <div class="footer-brand-wrap mb-3">
          <div class="footer-logo-badge d-inline-block">
            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= $company3 ?> Relocation Logo" width="237" height="40" class="footer-logo img-fluid" loading="lazy">
          </div>
        </div>
        <p class="footer-desc small mb-4 leading-relaxed">
          India's <?= $isoCode ?> certified relocation carrier and IBA-approved logistics partner (<?= $ibaCode ?>). Providing binding price lock quotes, multi-layer packing, and GPS-monitored container transit across 250+ Indian cities.
        </p>
        
        <!-- Social Icons: 36px Circular Outline -->
        <div class="footer-social-links d-flex align-items-center gap-2">
          <?php if (!empty($facebookhtml)): ?>
            <a class="social-icon-btn" href="<?= $facebookhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow <?= $company3 ?> on Facebook" aria-label="Follow <?= $company3 ?> on Facebook">
              <i class="bi bi-facebook"></i>
            </a>
          <?php endif; ?>
          <?php if (!empty($instagramhtml)): ?>
            <a class="social-icon-btn" href="<?= $instagramhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow <?= $company3 ?> on Instagram" aria-label="Follow <?= $company3 ?> on Instagram">
              <i class="bi bi-instagram"></i>
            </a>
          <?php endif; ?>
          <?php if (!empty($youtubehtml)): ?>
            <a class="social-icon-btn" href="<?= $youtubehtml ?>" target="_blank" rel="noopener noreferrer" title="Watch <?= $company3 ?> on YouTube" aria-label="Watch <?= $company3 ?> on YouTube">
              <i class="bi bi-youtube"></i>
            </a>
          <?php endif; ?>
          <?php if (!empty($linkedinhtml)): ?>
            <a class="social-icon-btn" href="<?= $linkedinhtml ?>" target="_blank" rel="noopener noreferrer" title="Connect with <?= $company3 ?> on LinkedIn" aria-label="Connect with <?= $company3 ?> on LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
          <?php endif; ?>
          <?php if (!empty($twitterhtml)): ?>
            <a class="social-icon-btn" href="<?= $twitterhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow <?= $company3 ?> on X" aria-label="Follow <?= $company3 ?> on X">
              <i class="bi bi-twitter-x"></i>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Column 2: Quick Links (Direct HTML) -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="footer-col-header mb-3">
          <strong class="footer-col-title d-block text-white fw-bold">Quick Links</strong>
          <div class="footer-title-line" aria-hidden="true"></div>
        </div>
        <ul class="footer-links-list list-unstyled small mb-0 d-flex flex-column gap-2">
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url() ?>" title="Home" aria-label="Home">Home</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('about-us') ?>" title="About Us" aria-label="About Us">About Us</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('home-relocation') ?>" title="Our Services" aria-label="Our Services">Our Services</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('our-branches') ?>" title="Areas Served" aria-label="Areas Served">Areas Served</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('photo-gallery') ?>" title="Photo Gallery" aria-label="Photo Gallery">Photo Gallery</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('contact-us') ?>" title="Contact Us" aria-label="Contact Us">Contact Us</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('blog') ?>" title="Moving Blog" aria-label="Moving Blog">Moving Blog</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none d-inline-flex align-items-center gap-1" href="<?= site_url('track-shipment') ?>" title="Track Shipment" aria-label="Track Shipment">
              <span>Track Shipment</span>
              <span class="badge bg-danger text-white rounded-pill" style="font-size: 9px; padding: 2px 6px;">LIVE</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 3: Top Services (Direct HTML) -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="footer-col-header mb-3">
          <strong class="footer-col-title d-block text-white fw-bold">Top Services</strong>
          <div class="footer-title-line" aria-hidden="true"></div>
        </div>
        <ul class="footer-links-list list-unstyled small mb-0 d-flex flex-column gap-2">
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('bike-transportation') ?>" title="Bike Transportation" aria-label="Bike Transportation">Bike Transportation</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('car-transportation') ?>" title="Car Transportation" aria-label="Car Transportation">Car Transportation</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('office-relocation') ?>" title="Office Relocation" aria-label="Office Relocation">Office Relocation</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('home-relocation') ?>" title="Household Shifting" aria-label="Household Shifting">Household Shifting</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('packing-and-moving') ?>" title="Packing & Moving" aria-label="Packing & Moving">Packing & Moving</a>
          </li>
          <li>
            <a class="footer-link text-decoration-none" href="<?= site_url('loading-unloading') ?>" title="Loading & Unloading" aria-label="Loading & Unloading">Loading & Unloading</a>
          </li>
        </ul>
      </div>

      <!-- Column 4: Contact Us (Direct HTML with MX variables) -->
      <div class="col-12 col-md-4 col-lg-3">
        <div class="footer-col-header mb-3">
          <strong class="footer-col-title d-block text-white fw-bold">Contact Us</strong>
          <div class="footer-title-line" aria-hidden="true"></div>
        </div>
        
        <div class="footer-contact-block d-flex flex-column gap-3">
          
          <!-- Address Row -->
          <?php if (!empty($address)): ?>
            <div class="footer-contact-item d-flex align-items-start gap-3">
              <div class="footer-contact-icon flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="bi bi-geo-alt-fill text-orange"></i>
              </div>
              <address class="footer-contact-text not-italic text-footer-muted small mb-0 leading-relaxed">
                <?= $address ?>
              </address>
            </div>
          <?php endif; ?>

          <!-- Phone Row -->
          <?php if (!empty($phone)): ?>
            <div class="footer-contact-item d-flex align-items-center gap-3">
              <div class="footer-contact-icon flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="bi bi-telephone-fill text-orange"></i>
              </div>
              <a class="footer-contact-link text-decoration-none small" href="<?= $phonehtml ?>" title="Call Move Desk: <?= $phone ?>" aria-label="Call Move Desk: <?= $phone ?>">
                <span class="d-block fw-semibold text-white"><?= $phone ?></span>
                <span class="d-block text-footer-subtle">24x7 Dedicated Helpline</span>
              </a>
            </div>
          <?php endif; ?>

          <!-- Email Row -->
          <?php if (!empty($mail)): ?>
            <div class="footer-contact-item d-flex align-items-center gap-3">
              <div class="footer-contact-icon flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="bi bi-envelope-fill text-orange"></i>
              </div>
              <a class="footer-contact-link text-decoration-none small" href="<?= $mailhtml ?>" title="Email Support: <?= $mail ?>" aria-label="Email Support: <?= $mail ?>">
                <span class="d-block fw-semibold text-white"><?= $mail ?></span>
                <span class="d-block text-footer-subtle">Instant Response Support</span>
              </a>
            </div>
          <?php endif; ?>

          <!-- WhatsApp Row -->
          <?php if (!empty($whatsapphtml)): ?>
            <div class="footer-contact-item d-flex align-items-center gap-3">
              <div class="footer-contact-icon flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="bi bi-whatsapp text-success"></i>
              </div>
              <a class="footer-contact-link text-decoration-none small" href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" title="Live Move Desk on WhatsApp" aria-label="Live Move Desk on WhatsApp">
                <span class="d-block fw-semibold text-white">WhatsApp Live Chat</span>
                <span class="d-block text-footer-subtle">Immediate Quotation &amp; Tracking</span>
              </a>
            </div>
          <?php endif; ?>

        </div>
      </div>

    </div>

    <!-- BOTTOM STRIP (Copyright & Legal Links) -->
    <div class="footer-bottom-strip mt-5 pt-4 border-top border-footer-subtle d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 text-center text-md-start small">
      <p class="footer-copyright-text mb-0">
        &copy; <?= date('Y') ?> <?= $company3 ?> Pvt. Ltd. All Rights Reserved. IBA Approved (Code: <?= $ibaCode ?>).
      </p>
      <div class="footer-legal-links d-flex align-items-center gap-2 gap-md-3">
        <a class="footer-link text-decoration-none" href="<?= site_url('privacy-policy') ?>" title="Privacy Policy" aria-label="Privacy Policy">Privacy Policy</a>
        <span class="text-footer-subtle" aria-hidden="true">•</span>
        <a class="footer-link text-decoration-none" href="<?= site_url('terms-and-conditions') ?>" title="Terms of Carriage" aria-label="Terms of Carriage">Terms of Carriage</a>
      </div>
    </div>

  </div>
</footer>

<!-- Floating Back to Top Button (CSS-Only) -->
<a href="#" class="back-to-top-btn position-fixed rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none shadow" title="Back to top" aria-label="Back to top">
  <i class="bi bi-chevron-up"></i>
</a>

<!-- Fixed WhatsApp Floating Button on Bottom-Right -->
<?php if (!empty($whatsapphtml)): ?>
  <a href="<?= $whatsapphtml ?>" class="floating-whatsapp-btn position-fixed rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none shadow-lg" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>
<?php endif; ?>

<!-- Fixed Floating Call Button on Bottom-Right (Mobile Only, Positioned Below WhatsApp Button) -->
<?php if (!empty($phone)): ?>
  <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" class="floating-call-btn position-fixed rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none shadow-lg d-md-none" title="Call Us: <?= $phone ?>" aria-label="Call Us: <?= $phone ?>">
    <i class="bi bi-telephone-fill"></i>
  </a>
<?php endif; ?>

<!-- Modals loaded once globally -->
<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('reviews/reviewmodal'); ?>

<!-- Bootstrap 5 Bundle JS (CDN with defer) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

<!-- Custom Form JS (defer) -->
<script src="<?= base_url('assets/js/form.js') ?>" defer></script>

</body>
</html>
