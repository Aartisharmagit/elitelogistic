<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="card city-content-card mb-4 p-3 p-sm-4 p-lg-5 rounded-4 bg-white shadow-sm border border-light-subtle" itemscope itemtype="https://schema.org/FAQPage">
  <div class="d-inline-flex align-items-center gap-2 bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 mb-2 fw-bold small align-self-start">
    <i class="bi bi-question-circle-fill" aria-hidden="true"></i>
    <span>Got Questions?</span>
  </div>

  <h2 class="fw-bolder text-dark mb-3 fs-4 fs-md-3">
    Frequently Asked Questions in <?= htmlspecialchars($city) ?>
  </h2>
  
  <div class="accordion custom-faq-accordion" id="cityFaqAccordion">
    
    <!-- FAQ 1 -->
    <div class="accordion-item border border-light-subtle rounded-3 mb-2 overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <p class="accordion-header m-0" id="cityFaqHead1">
        <button class="accordion-button fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol1" aria-expanded="true" aria-controls="cityFaqCol1">
          <span itemprop="name">1. Are Elite Logistics and Packers IBA approved?</span>
        </button>
      </p>
      <div id="cityFaqCol1" class="accordion-collapse collapse show" aria-labelledby="cityFaqHead1" data-bs-parent="#cityFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div class="accordion-body text-secondary small pt-0 pb-3" itemprop="text">
          The company lists IBA approval reference EL-8709. Contact its team to confirm the relevant billing documents for your move.
        </div>
      </div>
    </div>

    <!-- FAQ 2 -->
    <div class="accordion-item border border-light-subtle rounded-3 mb-2 overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <p class="accordion-header m-0" id="cityFaqHead2">
        <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol2" aria-expanded="false" aria-controls="cityFaqCol2">
          <span itemprop="name">2. Can I book interstate shifting from <?= htmlspecialchars($city) ?>?</span>
        </button>
      </p>
      <div id="cityFaqCol2" class="accordion-collapse collapse" aria-labelledby="cityFaqHead2" data-bs-parent="#cityFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div class="accordion-body text-secondary small pt-0 pb-3" itemprop="text">
          The company advertises relocation services across India. Share your pickup address, destination and moving date to confirm the available arrangement.
        </div>
      </div>
    </div>

    <!-- FAQ 3 -->
    <div class="accordion-item border border-light-subtle rounded-3 mb-2 overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <p class="accordion-header m-0" id="cityFaqHead3">
        <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol3" aria-expanded="false" aria-controls="cityFaqCol3">
          <span itemprop="name">3. Is GPS tracking available?</span>
        </button>
      </p>
      <div id="cityFaqCol3" class="accordion-collapse collapse" aria-labelledby="cityFaqHead3" data-bs-parent="#cityFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div class="accordion-body text-secondary small pt-0 pb-3" itemprop="text">
          The company offers GPS-monitored transit for applicable shipments. Confirm tracking availability for your specific booking.
        </div>
      </div>
    </div>

    <!-- FAQ 4 -->
    <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <p class="accordion-header m-0" id="cityFaqHead4">
        <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol4" aria-expanded="false" aria-controls="cityFaqCol4">
          <span itemprop="name">4. How do I request a moving quotation?</span>
        </button>
      </p>
      <div id="cityFaqCol4" class="accordion-collapse collapse" aria-labelledby="cityFaqHead4" data-bs-parent="#cityFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div class="accordion-body text-secondary small pt-0 pb-3" itemprop="text">
          Call <?= !empty($phone) ? htmlspecialchars($phone) : '+91 96668 97070' ?> or email <?= !empty($mail) ? htmlspecialchars($mail) : 'info@elitelogistics.in' ?>. Provide your inventory, pickup and delivery locations, and preferred date for an estimate.
        </div>
      </div>
    </div>

  </div>
</div>
