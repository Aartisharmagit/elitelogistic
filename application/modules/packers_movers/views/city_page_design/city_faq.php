<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="city-content-card mb-4 p-4 rounded-4 bg-white shadow-sm border border-light-subtle">
  <!-- Section Subheading -->
  <h3 class="city-section-title fw-bold text-navy mb-3">
    <i class="bi bi-question-circle text-orange me-2" aria-hidden="true"></i>FAQs
  </h3>

  <div class="accordion custom-faq-accordion" id="cityFaqAccordion">
    <!-- FAQ 1 -->
    <div class="accordion-item border border-light-subtle rounded-3 mb-2 overflow-hidden">
      <p class="accordion-header m-0" id="cityFaqHead1">
        <button class="accordion-button fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol1" aria-expanded="true" aria-controls="cityFaqCol1">
          1. How much do packers and movers in <?= htmlspecialchars($city) ?> charge?
        </button>
      </p>
      <div id="cityFaqCol1" class="accordion-collapse collapse show" aria-labelledby="cityFaqHead1" data-bs-parent="#cityFaqAccordion">
        <div class="accordion-body text-muted small pt-0 pb-3">
          The charges will depend on household size, distance of travel, packing requirement, floor access, manpower and vehicle. Ask for a written quotation for an exact quote.
        </div>
      </div>
    </div>

    <!-- FAQ 2 -->
    <div class="accordion-item border border-light-subtle rounded-3 mb-2 overflow-hidden">
      <p class="accordion-header m-0" id="cityFaqHead2">
        <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol2" aria-expanded="false" aria-controls="cityFaqCol2">
          2. Can I track my household goods during transit?
        </button>
      </p>
      <div id="cityFaqCol2" class="accordion-collapse collapse" aria-labelledby="cityFaqHead2" data-bs-parent="#cityFaqAccordion">
        <div class="accordion-body text-muted small pt-0 pb-3">
          GPS tracking is available for eligible consignments. Please confirm the tracking facility while booking.
        </div>
      </div>
    </div>

    <!-- FAQ 3 -->
    <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
      <p class="accordion-header m-0" id="cityFaqHead3">
        <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol3" aria-expanded="false" aria-controls="cityFaqCol3">
          3. How much time in advance should I book my move?
        </button>
      </p>
      <div id="cityFaqCol3" class="accordion-collapse collapse" aria-labelledby="cityFaqHead3" data-bs-parent="#cityFaqAccordion">
        <div class="accordion-body text-muted small pt-0 pb-3">
          It is advisable to book 7 to 14 days in advance, especially on weekends and month end.
        </div>
      </div>
    </div>
  </div>
</div>
