<div class="modal fade quote-modal" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel">
  <div class="modal-dialog modal-dialog-centered quote-modal-dialog">
    <div class="modal-content quote-modal-content border-0">
      
      <!-- HEADER: Navy-to-blue gradient with subtle dot pattern, orange corner glow, truck badge, 40px rotating close btn -->
      <div class="quote-modal-header position-relative d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3 pe-2">
          <!-- 44px Round Gradient Truck Icon -->
          <div class="quote-modal-header-icon flex-shrink-0 d-flex align-items-center justify-content-center" aria-hidden="true">
            <i class="bi bi-truck"></i>
          </div>
          <div class="quote-modal-header-text">
            <div class="quote-modal-title fs-5 fw-bold text-white mb-0" id="qteModalLabel">Get Instant Shifting Estimate</div>
            <p class="quote-modal-subtitle mb-0">IBA approved relocation. Guaranteed zero hidden fees.</p>
          </div>
        </div>

        <!-- 40px Rounded Square Close Button (Hover turns orange & rotates 90deg) -->
        <button type="button" class="quote-modal-close-btn flex-shrink-0" data-bs-dismiss="modal" aria-label="Close quote dialog" title="Close">
          <i class="bi bi-x-lg" aria-hidden="true"></i>
        </button>

        <!-- 3px Orange-to-Blue Gradient Stripe along bottom edge -->
        <div class="quote-modal-header-stripe" aria-hidden="true"></div>
      </div>

      <!-- BODY: Internal scrolling on screens under ~720px height -->
      <div class="modal-body quote-modal-body">
        <form id="quotemodal" class="ajax-form quote-modal-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" autocomplete="on">
          
          <!-- 1. Mobile Number (Full Width, +91 Prefix, Helper Line) -->
          <div class="quote-modal-field quote-field-group field-wrap mb-3">
            <label for="modalPhone" class="quote-modal-label">
              Mobile Number <span class="quote-required-star" aria-hidden="true">*</span>
              <span class="visually-hidden">(required)</span>
            </label>
            <div class="quote-input-wrapper quote-input-phone-wrap position-relative">
              <i class="bi bi-telephone-fill quote-field-icon quote-icon-muted" aria-hidden="true"></i>
              <span class="quote-phone-prefix" aria-hidden="true">+91</span>
              <span class="quote-phone-divider" aria-hidden="true"></span>
              <input type="tel" 
                     class="quote-modal-input quote-phone-input" 
                     id="modalPhone" 
                     name="phone" 
                     placeholder="10-digit mobile number" 
                     maxlength="10" 
                     pattern="[0-9]{10}"
                     inputmode="numeric"
                     autocomplete="tel" 
                     required>
              <span class="quote-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
            </div>
            <div class="quote-helper-text">
              <i class="bi bi-info-circle me-1" aria-hidden="true"></i>We'll call you back on this number.
            </div>
          </div>

          <!-- 2 & 3. Full Name and Email Address (Side by Side) -->
          <div class="row g-3 mb-3">
            <div class="col-12 col-sm-6">
              <div class="quote-modal-field quote-field-group field-wrap">
                <label for="modalName" class="quote-modal-label">
                  Full Name <span class="quote-required-star" aria-hidden="true">*</span>
                  <span class="visually-hidden">(required)</span>
                </label>
                <div class="quote-input-wrapper position-relative">
                  <i class="bi bi-person-fill quote-field-icon quote-icon-muted" aria-hidden="true"></i>
                  <input type="text" 
                         class="quote-modal-input" 
                         id="modalName" 
                         name="name" 
                         placeholder="Your full name" 
                         autocomplete="name" 
                         required>
                  <span class="quote-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="quote-modal-field quote-field-group field-wrap">
                <label for="modalEmail" class="quote-modal-label">
                  Email Address
                </label>
                <div class="quote-input-wrapper position-relative">
                  <i class="bi bi-envelope-fill quote-field-icon quote-icon-muted" aria-hidden="true"></i>
                  <input type="email" 
                         class="quote-modal-input" 
                         id="modalEmail" 
                         name="email" 
                         placeholder="name@example.com" 
                         autocomplete="email">
                  <span class="quote-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- 4 & 5. Moving From & Moving To (Side by Side with Circular Arrow Badge) -->
          <div class="quote-modal-field quote-field-group field-wrap mb-3">
            <div class="quote-route-row position-relative d-flex align-items-center">
              <div class="quote-route-col flex-grow-1">
                <label for="modalMfrom" class="quote-modal-label">
                  Moving from <span class="quote-required-star" aria-hidden="true">*</span>
                </label>
                <div class="quote-input-wrapper position-relative">
                  <span class="quote-route-dot-blue" aria-hidden="true"></span>
                  <input type="text" 
                         class="quote-modal-input quote-input-with-dot" 
                         id="modalMfrom" 
                         name="mfrom" 
                         value="<?= @$city ?>" 
                         placeholder="Origin city / area" 
                         required>
                  <span class="quote-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                </div>
              </div>

              <!-- Small Circular Arrow Badge between From and To -->
              <div class="quote-route-arrow-badge flex-shrink-0 d-flex align-items-center justify-content-center" aria-hidden="true" title="Relocation Direction">
                <i class="bi bi-arrow-right"></i>
              </div>

              <div class="quote-route-col flex-grow-1">
                <label for="modalMto" class="quote-modal-label">
                  Moving to <span class="quote-required-star" aria-hidden="true">*</span>
                </label>
                <div class="quote-input-wrapper position-relative">
                  <i class="bi bi-geo-alt-fill quote-field-icon quote-icon-orange" aria-hidden="true"></i>
                  <input type="text" 
                         class="quote-modal-input" 
                         id="modalMto" 
                         name="mto" 
                         placeholder="Destination city / area" 
                         required>
                  <span class="quote-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- 6. Requirements Box (Full Width, ~96px High, Character Counter) -->
          <div class="quote-modal-field quote-field-group field-wrap mb-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <label for="modalMessage" class="quote-modal-label mb-0">
                Shifting Requirements
              </label>
              <span id="modalMsgCharCount" class="quote-char-counter" aria-live="polite">0 / 250</span>
            </div>
            <div class="quote-input-wrapper position-relative">
              <textarea class="quote-modal-input quote-modal-textarea" 
                        id="modalMessage" 
                        name="message" 
                        rows="3" 
                        maxlength="250"
                        placeholder="Items to move, preferred date and any special needs"></textarea>
            </div>
          </div>

          <!-- 7. Primary Action Button (52px Blue Gradient) & Clear Form Link -->
          <div class="quote-modal-actions mt-3">
            <button id="submitbquotemodal" type="submit" class="quote-modal-submit-btn w-100">
              <span class="btn-text-content d-inline-flex align-items-center justify-content-center">
                <span class="quote-btn-label">Get Free Binding Quote</span>
                <i class="bi bi-send-fill ms-2 quote-plane-icon" aria-hidden="true"></i>
              </span>
              <span class="btn-loading-content d-none align-items-center justify-content-center">
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                <span>Calculating Free Quote...</span>
              </span>
            </button>

            <!-- Reset text link below button -->
            <div class="text-center mt-2 pt-1">
              <button type="button" class="quote-modal-reset-link" id="resetQuotemodalBtn">
                <i class="bi bi-arrow-counterclockwise me-1" aria-hidden="true"></i>Clear form
              </button>
            </div>
          </div>

          <!-- Dynamic Result / Success Container -->
          <div id="resultquotemodal" class="quote-modal-result-box mt-2" aria-live="polite"></div>
        </form>
      </div>

      <!-- TRUST FOOTER: Slim light-blue strip with three items -->
      <div class="quote-modal-footer">
        <div class="quote-trust-strip d-flex align-items-center justify-content-center flex-wrap gap-2 gap-sm-4">
          <div class="quote-trust-item d-flex align-items-center gap-1 gap-sm-2">
            <i class="bi bi-shield-check text-primary flex-shrink-0" aria-hidden="true"></i>
            <span class="quote-trust-text">100% privacy</span>
          </div>
          <span class="quote-trust-bullet d-none d-sm-inline" aria-hidden="true">•</span>
          <div class="quote-trust-item d-flex align-items-center gap-1 gap-sm-2">
            <i class="bi bi-telephone-x text-orange flex-shrink-0" aria-hidden="true"></i>
            <span class="quote-trust-text">No spam calls</span>
          </div>
          <span class="quote-trust-bullet d-none d-sm-inline" aria-hidden="true">•</span>
          <div class="quote-trust-item d-flex align-items-center gap-1 gap-sm-2">
            <i class="bi bi-check-circle-fill text-success flex-shrink-0" aria-hidden="true"></i>
            <span class="quote-trust-text">Free cancellation</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>