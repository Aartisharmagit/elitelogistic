<div class="quote-card" id="calculator" itemscope itemtype="https://schema.org/QuoteAction">
  <!-- Card Header with Round Gradient Truck Icon -->
  <div class="quote-header d-flex align-items-center gap-3">
    <div class="quote-header-badge d-flex align-items-center justify-content-center flex-shrink-0" aria-hidden="true">
      <i class="bi bi-truck"></i>
    </div>
    <div class="quote-header-text">
      <p class="quote-title mb-0" itemprop="name">Get Instant Moving Estimate</p>
      <p class="quote-subtitle mb-0" itemprop="description">Free quote in 60 seconds. 100% price lock.</p>
    </div>
  </div>

  <!-- Form Body -->
  <div class="quote-body">
    <form id="quoteform" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="quoteformresults">

      <!-- 1. Priority Field: Mobile Number (Full Width) with +91 Prefix & Helper Line -->
      <div class="quote-field-group">
        <label for="quotePhone" class="visually-hidden">Mobile Number</label>
        <div class="quote-input-wrapper quote-input-wrapper-phone">
          <i class="bi bi-telephone-fill quote-field-icon quote-icon-phone" aria-hidden="true"></i>
          <span class="quote-prefix-91" aria-hidden="true">+91</span>
          <span class="quote-prefix-divider" aria-hidden="true"></span>
          <input type="tel" class="quote-input quote-input-phone" id="quotePhone" name="phone" placeholder="10-digit mobile number" maxlength="10" autocomplete="tel" required>
        </div>
        <div class="quote-helper-text">We'll call you back on this number</div>
      </div>

      <!-- 2. Your Name & Email Address (Side-by-Side, Equal Width) -->
      <div class="quote-row-dual">
        <div class="quote-field-col">
          <label for="quoteName" class="visually-hidden">Your Name</label>
          <div class="quote-input-wrapper">
            <i class="bi bi-person quote-field-icon" aria-hidden="true"></i>
            <input type="text" class="quote-input" id="quoteName" name="name" placeholder="Your Name" autocomplete="name" required>
          </div>
        </div>
        <div class="quote-field-col">
          <label for="quoteEmail" class="visually-hidden">Email Address</label>
          <div class="quote-input-wrapper">
            <i class="bi bi-envelope quote-field-icon" aria-hidden="true"></i>
            <input type="email" class="quote-input" id="quoteEmail" name="email" placeholder="Email Address" autocomplete="email">
          </div>
        </div>
      </div>

      <!-- 3. Shifting Category (Full Width) -->
      <div class="quote-field-group">
        <label for="quoteMtype" class="visually-hidden">Shifting Category</label>
        <div class="quote-input-wrapper">
          <i class="bi bi-box-seam quote-field-icon" aria-hidden="true"></i>
          <select class="quote-input quote-select" id="quoteMtype" name="mtype" aria-label="Shifting Category">
            <option value="Household Relocation" selected>Household Relocation (1, 2, 3+ BHK)</option>
            <option value="Office Relocation">Office &amp; Corporate Relocation</option>
            <option value="Car / Bike Shifting">Car &amp; Bike Transportation</option>
            <option value="Packing & Moving">Packing &amp; Moving Services</option>
            <option value="Loading & Unloading">Loading &amp; Unloading Services</option>
          </select>
        </div>
      </div>

      <!-- 4. Moving From and Moving To (Side-by-Side with Route Arrow) -->
      <div class="quote-route-row d-flex align-items-center position-relative">
        <div class="quote-field-col flex-fill">
          <label for="quoteMfrom" class="visually-hidden">Moving From</label>
          <div class="quote-input-wrapper">
            <span class="quote-dot-blue quote-field-icon-dot" aria-hidden="true"></span>
            <input type="text" class="quote-input" id="quoteMfrom" name="mfrom" placeholder="Moving From" value="<?= @$city ?>">
          </div>
        </div>

        <div class="quote-route-arrow-circle d-none d-sm-flex align-items-center justify-content-center flex-shrink-0" aria-hidden="true">
          <i class="bi bi-arrow-right"></i>
        </div>

        <div class="quote-field-col flex-fill">
          <label for="quoteMto" class="visually-hidden">Moving To</label>
          <div class="quote-input-wrapper">
            <i class="bi bi-geo-alt-fill quote-field-icon-orange" aria-hidden="true"></i>
            <input type="text" class="quote-input" id="quoteMto" name="mto" placeholder="Moving To">
          </div>
        </div>
      </div>
      <!-- Submit Button (52px High, Blue Gradient, Sentence Case, Arrow Slide, Press Scale 0.98) -->
      <button type="submit" class="btn quote-btn-submit w-100">
        <span>Check Rates &amp; Availability</span>
        <i class="bi bi-arrow-right quote-btn-arrow ms-2" aria-hidden="true"></i>
      </button>

      <!-- Privacy Note Under Button -->
      <div class="quote-privacy-note text-center mt-2 pt-1">
        100% privacy. Your number is never shared.
      </div>

      <div id="quoteformresults" class="mt-2"></div>
    </form>
  </div>
</div>