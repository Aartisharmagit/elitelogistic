<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="city-sidebar position-sticky">

  <!-- 1. City Services Navigation -->
  <div class="sidebar-widget p-4 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
    <p class="widget-title fw-bold text-navy fs-6 mb-3 pb-2 border-bottom border-light-subtle">
      <i class="bi bi-grid-fill text-orange me-2" aria-hidden="true"></i>Services in <?= htmlspecialchars($city) ?>
    </p>
    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
      <li>
        <a href="<?= site_url('home-shifting-in-' . $ctlink) ?>" class="sidebar-service-item d-flex align-items-center justify-content-between p-2 rounded-2 text-decoration-none text-navy">
          <span class="d-flex align-items-center gap-2 small">
            <i class="bi bi-house-door text-orange" aria-hidden="true"></i>
            <span>Home Shifting in <?= htmlspecialchars($city) ?></span>
          </span>
          <i class="bi bi-chevron-right text-muted small" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="<?= site_url('office-shifting-in-' . $ctlink) ?>" class="sidebar-service-item d-flex align-items-center justify-content-between p-2 rounded-2 text-decoration-none text-navy">
          <span class="d-flex align-items-center gap-2 small">
            <i class="bi bi-building text-primary" aria-hidden="true"></i>
            <span>Office Relocation in <?= htmlspecialchars($city) ?></span>
          </span>
          <i class="bi bi-chevron-right text-muted small" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="<?= site_url('car-transport-in-' . $ctlink) ?>" class="sidebar-service-item d-flex align-items-center justify-content-between p-2 rounded-2 text-decoration-none text-navy">
          <span class="d-flex align-items-center gap-2 small">
            <i class="bi bi-car-front text-success" aria-hidden="true"></i>
            <span>Car Transport in <?= htmlspecialchars($city) ?></span>
          </span>
          <i class="bi bi-chevron-right text-muted small" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="<?= site_url('bike-transport-in-' . $ctlink) ?>" class="sidebar-service-item d-flex align-items-center justify-content-between p-2 rounded-2 text-decoration-none text-navy">
          <span class="d-flex align-items-center gap-2 small">
            <i class="bi bi-bicycle text-info" aria-hidden="true"></i>
            <span>Bike Transport in <?= htmlspecialchars($city) ?></span>
          </span>
          <i class="bi bi-chevron-right text-muted small" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- 2. Fast Move Assistance CTA Card -->
  <div class="sidebar-widget sidebar-widget-cta p-4 rounded-4 text-white shadow-sm mb-4 position-relative overflow-hidden">
    <div class="position-relative z-1">
      <div class="d-flex align-items-center gap-2 mb-2">
        <span class="badge bg-orange text-white px-2 py-1 rounded-pill small">24x7 Move Desk</span>
      </div>
      <p class="fw-bold fs-5 mb-2 text-white">Plan Your Shift Today</p>
      <p class="text-white-50 small mb-3">Looking for the best packers and movers in <?= htmlspecialchars($city) ?> for your relocation? Tell us your requirements and ask for a written quotation.</p>

      <div class="d-flex flex-column gap-2">
        <?php if (!empty($phone)): ?>
          <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" class="btn btn-orange text-white fw-semibold d-flex align-items-center justify-content-center gap-2 py-2 rounded-3 text-decoration-none shadow-sm" title="Call Move Desk">
            <i class="bi bi-telephone-fill" aria-hidden="true"></i> Call <?= htmlspecialchars($phone) ?>
          </a>
        <?php else: ?>
          <a href="tel:+91XXXXXXXXXX" class="btn btn-orange text-white fw-semibold d-flex align-items-center justify-content-center gap-2 py-2 rounded-3 text-decoration-none shadow-sm" title="Contact Us">
            <i class="bi bi-telephone-fill" aria-hidden="true"></i> Contact Us: +91 XXXXXXXXX
          </a>
        <?php endif; ?>

        <?php if (!empty($whatsapphtml)): ?>
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light d-flex align-items-center justify-content-center gap-2 py-2 rounded-3 text-decoration-none" title="Chat on WhatsApp">
            <i class="bi bi-whatsapp text-success" aria-hidden="true"></i> WhatsApp Us
          </a>
        <?php endif; ?>

        <button type="button" class="btn btn-light text-navy fw-semibold d-flex align-items-center justify-content-center gap-2 py-2 rounded-3" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Moving Quote">
          <i class="bi bi-calculator" aria-hidden="true"></i> Get Written Quotation
        </button>
      </div>
    </div>
  </div>

  <!-- 3. Verified Assurance Points -->
  <div class="sidebar-widget p-4 rounded-4 bg-white shadow-sm border border-light-subtle">
    <p class="widget-title fw-bold text-navy fs-6 mb-3 pb-2 border-bottom border-light-subtle">
      <i class="bi bi-patch-check-fill text-success me-2" aria-hidden="true"></i>Why Choose Us in <?= htmlspecialchars($city) ?>
    </p>
    <ul class="list-unstyled mb-0 d-flex flex-column gap-3 small text-muted">
      <li class="d-flex align-items-start gap-2">
        <i class="bi bi-lock-fill text-orange fs-5 flex-shrink-0" aria-hidden="true"></i>
        <div>
          <strong class="text-navy d-block">Written Price Lock</strong>
          <span>Written quotations with clear charges and included services before work begins.</span>
        </div>
      </li>
      <li class="d-flex align-items-start gap-2">
        <i class="bi bi-shield-fill-check text-success fs-5 flex-shrink-0" aria-hidden="true"></i>
        <div>
          <strong class="text-navy d-block">IBA Approved Bills</strong>
          <span>Official bills under reference number EL-8709 for all relocation claims.</span>
        </div>
      </li>
      <li class="d-flex align-items-start gap-2">
        <i class="bi bi-geo-alt-fill text-primary fs-5 flex-shrink-0" aria-hidden="true"></i>
        <div>
          <strong class="text-navy d-block">Live GPS Tracking</strong>
          <span>Track your consignment during transit with direct support movement updates.</span>
        </div>
      </li>
      <li class="d-flex align-items-start gap-2">
        <i class="bi bi-box-seam-fill text-warning fs-5 flex-shrink-0" aria-hidden="true"></i>
        <div>
          <strong class="text-navy d-block">5-Layer Bubble Packing</strong>
          <span>Multi-layer bubble protection for glassware, fragile decor, appliances and furniture.</span>
        </div>
      </li>
    </ul>
  </div>

</aside>