<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 7. FAQS SECTION -->
<section class="site-section section-bg-light border-bottom" id="faqs">
  <div class="container">
    <div class="row g-4 g-lg-5">
      
      <!-- Left Column: Title Block & Help Card -->
      <div class="col-lg-5">
        <div class="faq-left-sticky">
          <div class="section-title-block text-start mb-4">
            <div class="section-title-line" aria-hidden="true"></div>
            <h3 class="section-title-heading mb-2">Frequently Asked Questions</h3>
          </div>

          <!-- Help Card: Still have questions? -->
          <div class="shared-card faq-help-card p-4">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="shared-icon-tile">
                <i class="bi bi-headset"></i>
              </div>
              <div>
                <p class="fw-bold mb-0 text-dark">Still have questions?</p>
                <span class="text-muted small">Our move experts are available 24x7</span>
              </div>
            </div>
            <p class="small text-muted mb-4 leading-relaxed">
              Need custom relocation schedules, bulk office RFP, or car shipping guidance? Talk directly to our operations team.
            </p>
            <div class="d-flex flex-wrap gap-2">
              <?php if (!empty($phone)): ?>
                <a href="<?= $phonehtml ?>" class="btn btn-hero-primary btn-sm d-inline-flex align-items-center gap-2" title="Call Move Desk: <?= $phone ?>" aria-label="Call Move Desk: <?= $phone ?>">
                  <i class="bi bi-telephone-fill"></i>
                  <span>Call <?= $phone ?></span>
                </a>
              <?php endif; ?>
              <?php if (!empty($whatsapphtml)): ?>
                <a href="<?= $whatsapphtml ?>" class="btn btn-whatsapp-pill btn-sm d-inline-flex align-items-center gap-1" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                  <i class="bi bi-whatsapp"></i>
                  <span>WhatsApp</span>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: 3 Accordion Items using Native <details> with HTML Microdata Schema -->
      <div class="col-lg-7">
        <div class="faq-accordion-list d-flex flex-column gap-3" itemscope itemtype="https://schema.org/FAQPage">
          
          <!-- FAQ 1 -->
          <details class="shared-card faq-details-item overflow-hidden scroll-reveal stagger-1" open itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <summary class="faq-summary d-flex align-items-center justify-content-between p-3 p-md-4 gap-3 fw-bold text-dark">
              <span itemprop="name">Are you an IBA approved company?</span>
              <span class="faq-toggle-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" aria-hidden="true">
                <i class="bi bi-plus-lg"></i>
              </span>
            </summary>
            <div class="faq-answer-content px-3 pb-3 px-md-4 pb-md-4 pt-1 text-muted small leading-relaxed border-top" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div itemprop="text">
                Yes. <?= $company3 ?> is an IBA approved logistics partner under reference number <?= $ibaCode ?>. Feel free to contact our team to know more about the approval and relevant billing documents.
              </div>
            </div>
          </details>

          <!-- FAQ 2 -->
          <details class="shared-card faq-details-item overflow-hidden scroll-reveal stagger-2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <summary class="faq-summary d-flex align-items-center justify-content-between p-3 p-md-4 gap-3 fw-bold text-dark">
              <span itemprop="name">How can I get a fixed price moving quote?</span>
              <span class="faq-toggle-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" aria-hidden="true">
                <i class="bi bi-plus-lg"></i>
              </span>
            </summary>
            <div class="faq-answer-content px-3 pb-3 px-md-4 pb-md-4 pt-1 text-muted small leading-relaxed border-top" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div itemprop="text">
                Share your pickup and delivery locations along with the goods you wish to move and the moving date. We provide you with a written price lock quotation based on your requirements.
              </div>
            </div>
          </details>

          <!-- FAQ 3 -->
          <details class="shared-card faq-details-item overflow-hidden scroll-reveal stagger-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <summary class="faq-summary d-flex align-items-center justify-content-between p-3 p-md-4 gap-3 fw-bold text-dark">
              <span itemprop="name">Do you provide GPS tracking for shipments?</span>
              <span class="faq-toggle-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" aria-hidden="true">
                <i class="bi bi-plus-lg"></i>
              </span>
            </summary>
            <div class="faq-answer-content px-3 pb-3 px-md-4 pb-md-4 pt-1 text-muted small leading-relaxed border-top" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div itemprop="text">
                Yes, we provide GPS monitored container transit. Tracking availability depends on the goods and selected service, so please let us know the same while making your booking.
              </div>
            </div>
          </details>
        </div>
      </div>

    </div>
  </div>
</section>
