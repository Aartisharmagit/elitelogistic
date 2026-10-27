<body>
  <!-- Pure CSS Menu Toggle (Zero JS) -->
  <input type="checkbox" id="navMenuToggle" class="nav-menu-toggle-checkbox visually-hidden" tabindex="-1">

  <!-- 1. TOP BAR (44px, Navy Slim Header) -->
  <header class="top-bar" aria-label="Quick Verification & Support">
    <div class="container d-flex justify-content-between align-items-center h-100">
      <div class="top-bar-left d-flex align-items-center">
        <span class="top-bar-item d-none d-sm-inline-flex">
          <i class="bi bi-shield-check text-orange" aria-hidden="true"></i>
          <span class="top-bar-text">IBA Approved: <?= !empty($ibaCode) ? $ibaCode : 'EL-8709' ?></span>
        </span>
        <span class="top-bar-divider d-none d-md-inline-flex" aria-hidden="true"></span>
        <span class="top-bar-item d-none d-md-inline-flex">
          <i class="bi bi-star-fill text-orange" aria-hidden="true"></i>
          <span class="top-bar-text"><?= $ratingValue ?>/5 (<?= $ratingCount ?> Verified Reviews)</span>
        </span>
      </div>

      <div class="top-bar-right d-flex align-items-center">
        <span class="top-bar-item d-inline-flex">
          <span class="topbar-live-dot" aria-hidden="true"></span>
          <span class="top-bar-text">Open 24x7, all days</span>
        </span>
        <span class="top-bar-divider d-inline-flex" aria-hidden="true"></span>
        <a class="top-bar-item top-bar-link d-inline-flex" href="<?= $mailhtml ?>" title="Email Support: <?= $mail ?>" aria-label="Email Support: <?= $mail ?>">
          <i class="bi bi-envelope text-orange" aria-hidden="true"></i>
          <span class="top-bar-text"><?= $mail ?></span>
        </a>
      </div>
    </div>
  </header>

  <!-- 2. NAVBAR (88px Desktop, 76px Tablet, 68px Mobile) -->
  <nav class="navbar nav-header" aria-label="Main Navigation">
    <div class="container d-flex justify-content-between align-items-center flex-nowrap h-100">
      <!-- Left: Logo -->
      <a class="nav-brand-link d-inline-flex align-items-center" href="<?= site_url() ?>" title="<?= $company3 ?> Home" aria-label="<?= $company3 ?> Home">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= $company3 ?> Logo" width="356" height="60" class="nav-logo-img" loading="eager" fetchpriority="high">
      </a>

      <!-- Right Action Group: Phone Pill -> Get Quote Button -> Hamburger Button -->
      <div class="nav-action-group d-flex align-items-center gap-2 gap-sm-3">
        <?php if (!empty($phone)): ?>
          <a class="nav-phone-pill d-none d-md-inline-flex align-items-center" href="<?= $phonehtml ?>" title="Call us 24x7: <?= $phone ?>" aria-label="Call us 24x7: <?= $phone ?>">
            <div class="nav-phone-circle-wrap position-relative flex-shrink-0" aria-hidden="true">
              <span class="nav-phone-pulse-ring ring-1"></span>
              <span class="nav-phone-pulse-ring ring-2"></span>
              <span class="nav-phone-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-telephone-fill nav-phone-wiggle-icon"></i>
              </span>
              <span class="nav-phone-live-dot"></span>
            </div>
            <div class="nav-phone-meta d-none d-sm-flex flex-column text-start">
              <span class="nav-phone-sub">Call us 24x7</span>
              <span class="nav-phone-num"><?= $phone ?></span>
            </div>
          </a>
        <?php endif; ?>

        <button type="button" class="btn nav-btn-quote d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Moving Quote" aria-label="Get Free Moving Quote">
          <i class="bi bi-calculator nav-quote-icon" aria-hidden="true"></i>
          <span class="nav-quote-label"><span class="d-none d-sm-inline">Get </span>Quote</span>
          <i class="bi bi-arrow-right nav-quote-arrow" aria-hidden="true"></i>
        </button>

        <!-- Pure CSS Hamburger Trigger Label -->
        <label for="navMenuToggle" class="nav-hamburger-btn" title="Toggle Navigation Menu" aria-label="Toggle Navigation Menu">
          <span class="hamburger-line line-1"></span>
          <span class="hamburger-line line-2"></span>
          <span class="hamburger-line line-3"></span>
        </label>
      </div>
    </div>
  </nav>

  <!-- 3. FULL-SCREEN 4-COLUMN MEGA-MENU OVERLAY (CSS-Only, 100svh Fitted) -->
  <aside class="fullscreen-menu-overlay mega-menu-overlay" id="fullscreenMenu" aria-label="Full-Screen Navigation Mega Menu">
    <!-- Top 3px Accent Line -->
    <div class="mega-top-accent-line" aria-hidden="true"></div>

    <div class="mega-menu-shell">
      
      <!-- HEADER ROW (Matching Navbar Dimensions & Actions) -->
      <header class="mega-menu-header">
        <div class="container h-100 d-flex justify-content-between align-items-center flex-nowrap">
          <!-- Left: Logo -->
          <a class="nav-brand-link d-inline-flex align-items-center" href="<?= site_url() ?>" title="<?= $company3 ?> Home" aria-label="<?= $company3 ?> Home">
            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= $company3 ?> Logo" width="356" height="60" class="nav-logo-img" loading="lazy">
          </a>

          <!-- Right Action Group -->
          <div class="mega-header-actions d-flex align-items-center gap-2 gap-sm-3">
            <?php if (!empty($phone)): ?>
              <a class="nav-phone-pill mega-phone-pill d-none d-md-inline-flex align-items-center" href="<?= $phonehtml ?>" title="Call us 24x7: <?= $phone ?>" aria-label="Call us 24x7: <?= $phone ?>">
                <div class="nav-phone-circle-wrap position-relative flex-shrink-0" aria-hidden="true">
                  <span class="nav-phone-pulse-ring ring-1"></span>
                  <span class="nav-phone-pulse-ring ring-2"></span>
                  <span class="nav-phone-icon-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-telephone-fill nav-phone-wiggle-icon"></i>
                  </span>
                  <span class="nav-phone-live-dot"></span>
                </div>
                <div class="nav-phone-meta d-none d-lg-flex flex-column text-start">
                  <span class="nav-phone-sub">Call us 24x7</span>
                  <span class="nav-phone-num"><?= $phone ?></span>
                </div>
              </a>
            <?php endif; ?>

            <button type="button" class="btn nav-btn-quote mega-btn-quote d-none d-sm-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Moving Quote" aria-label="Get Free Moving Quote">
              <i class="bi bi-calculator nav-quote-icon" aria-hidden="true"></i>
              <span class="nav-quote-label"><span class="d-none d-sm-inline">Get </span>Quote</span>
              <i class="bi bi-arrow-right nav-quote-arrow" aria-hidden="true"></i>
            </button>

            <!-- Close X Button -->
            <label for="navMenuToggle" class="fullscreen-close-btn" title="Close Navigation Menu" aria-label="Close Navigation Menu">
              <span class="hamburger-line line-1"></span>
              <span class="hamburger-line line-2"></span>
              <span class="hamburger-line line-3"></span>
            </label>
          </div>
        </div>
      </header>
      <main class="mega-menu-main">
        <div class="container mega-grid-layout">
          <div class="mega-desktop-grid d-none d-lg-grid">
            <div class="mega-col mega-col-about">
              <div class="mega-col-header">
                <p class="mega-col-heading">
                  <i class="bi bi-info-circle-fill" aria-hidden="true"></i>
                  <span>About Us</span>
                </p>
                <span class="mega-heading-underline" aria-hidden="true"></span>
              </div>

              <ul class="mega-col-list">
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'is-active' : '' ?>" href="<?= site_url() ?>" title="Home">
                    <i class="bi bi-house-door mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Home</span>
                    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'about-us') ? 'is-active' : '' ?>" href="<?= site_url('about-us') ?>" title="About Company">
                    <i class="bi bi-info-circle mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">About Company</span>
                    <?php if ($this->uri->segment(1) == 'about-us'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'why-choose-us') ? 'is-active' : '' ?>" href="<?= site_url('why-choose-us') ?>" title="Why Choose Us">
                    <i class="bi bi-patch-check mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Why Choose Us</span>
                    <?php if ($this->uri->segment(1) == 'why-choose-us'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'photo-gallery') ? 'is-active' : '' ?>" href="<?= site_url('photo-gallery') ?>" title="Photo Gallery">
                    <i class="bi bi-images mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Photo Gallery</span>
                    <?php if ($this->uri->segment(1) == 'photo-gallery'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'reviews') ? 'is-active' : '' ?>" href="<?= site_url('reviews') ?>" title="Reviews & Ratings">
                    <i class="bi bi-star mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Reviews & Ratings</span>
                    <?php if ($this->uri->segment(1) == 'reviews'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'faqs') ? 'is-active' : '' ?>" href="<?= site_url('faqs') ?>" title="FAQs & Help">
                    <i class="bi bi-question-circle mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">FAQs & Help</span>
                    <?php if ($this->uri->segment(1) == 'faqs'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'blog') ? 'is-active' : '' ?>" href="<?= site_url('blog') ?>" title="Moving Guides & Blog">
                    <i class="bi bi-journal-text mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Moving Guides & Blog</span>
                    <?php if ($this->uri->segment(1) == 'blog'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'track-shipment' || $this->uri->segment(1) == 'track-shipment') ? 'is-active' : '' ?>" href="<?= site_url('track-shipment') ?>" title="Track Shipment">
                    <i class="bi bi-geo-alt mega-row-icon text-danger" aria-hidden="true"></i>
                    <span class="mega-row-label">Track Shipment</span>
                    <span class="badge bg-danger text-white fw-bold ms-auto small px-2 py-0.5 rounded-pill" style="font-size: 10px; letter-spacing: 0.5px;">LIVE</span>
                    <?php if ($this->uri->segment(1) == 'track-shipment' || $this->uri->segment(1) == 'track-shipment'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
              </ul>

              <!-- Mini Card: Request a free home survey -->
              <div class="mega-mini-card" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#qteModal">
                <div class="mega-mini-icon" aria-hidden="true"><i class="bi bi-house-check-fill"></i></div>
                <div class="mega-mini-body">
                  <span class="mega-mini-title">Request a free home survey</span>
                  <span class="mega-mini-sub">Expert in-home survey & instant estimate</span>
                </div>
                <i class="bi bi-arrow-right mega-mini-arrow" aria-hidden="true"></i>
              </div>
            </div>

            <!-- Column 2: Our Services -->
            <div class="mega-col mega-col-services">
              <div class="mega-col-header">
                <p class="mega-col-heading">
                  <i class="bi bi-truck-flatbed" aria-hidden="true"></i>
                  <span>Our Services</span>
                </p>
                <span class="mega-heading-underline" aria-hidden="true"></span>
              </div>

              <ul class="mega-col-list">
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'bike-transportation') ? 'is-active' : '' ?>" href="<?= site_url('bike-transportation') ?>" title="Bike Transportation">
                    <i class="bi bi-bicycle mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Bike Transportation</span>
                    <?php if ($this->uri->segment(1) == 'bike-transportation'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'car-transportation') ? 'is-active' : '' ?>" href="<?= site_url('car-transportation') ?>" title="Car Transportation">
                    <i class="bi bi-car-front mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Car Transportation</span>
                    <?php if ($this->uri->segment(1) == 'car-transportation'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'office-relocation') ? 'is-active' : '' ?>" href="<?= site_url('office-relocation') ?>" title="Office Relocation">
                    <i class="bi bi-building mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Office Relocation</span>
                    <?php if ($this->uri->segment(1) == 'office-relocation'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'home-relocation') ? 'is-active' : '' ?>" href="<?= site_url('home-relocation') ?>" title="Household Shifting">
                    <i class="bi bi-house-heart mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Household Shifting</span>
                    <?php if ($this->uri->segment(1) == 'home-relocation'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'packing-and-moving') ? 'is-active' : '' ?>" href="<?= site_url('packing-and-moving') ?>" title="Packing & Moving">
                    <i class="bi bi-box-seam mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Packing & Moving</span>
                    <?php if ($this->uri->segment(1) == 'packing-and-moving'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
                <li class="mega-list-item">
                  <a class="mega-row-link <?= ($this->uri->segment(1) == 'loading-unloading') ? 'is-active' : '' ?>" href="<?= site_url('loading-unloading') ?>" title="Loading & Unloading">
                    <i class="bi bi-truck mega-row-icon" aria-hidden="true"></i>
                    <span class="mega-row-label">Loading & Unloading</span>
                    <?php if ($this->uri->segment(1) == 'loading-unloading'): ?><i class="bi bi-chevron-right mega-row-chev" aria-hidden="true"></i><?php endif; ?>
                  </a>
                </li>
              </ul>

              <!-- Mini Card: Get a quote for any service -->
              <div class="mega-mini-card" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#qteModal">
                <div class="mega-mini-icon" aria-hidden="true"><i class="bi bi-calculator-fill"></i></div>
                <div class="mega-mini-body">
                  <span class="mega-mini-title">Get a quote for any service</span>
                  <span class="mega-mini-sub">Customized pricing for all 6 service types</span>
                </div>
                <i class="bi bi-arrow-right mega-mini-arrow" aria-hidden="true"></i>
              </div>
            </div>

            <!-- Column 3: Areas We Serve -->
            <div class="mega-col mega-col-areas">
              <div class="mega-col-header">
                <p class="mega-col-heading">
                  <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                  <span>Areas We Serve</span>
                </p>
                <span class="mega-heading-underline" aria-hidden="true"></span>
              </div>

              <!-- Featured Location Card -->
              <div class="mega-featured-card">
                <div class="mega-featured-bg-pattern" aria-hidden="true"></div>
                <div class="mega-featured-glow" aria-hidden="true"></div>

                <div class="mega-featured-top">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="mega-featured-icon-wrap" aria-hidden="true">
                      <span class="mega-featured-pulse-ring"></span>
                      <div class="mega-featured-icon-circle">
                        <i class="bi bi-geo-alt-fill"></i>
                      </div>
                    </div>
                    <span class="mega-featured-hq-badge"><i class="bi bi-patch-check-fill me-1"></i>Head Office</span>
                  </div>

                  <div class="mega-featured-heading-wrap">
                    <p class="mega-featured-state-name">Hyderabad</p>
                    <p class="mega-featured-state-sub">Our branch network in Hyderabad</p>
                  </div>

                  <div class="mega-featured-facts">
                    <span class="mega-fact-item">
                      <i class="bi bi-buildings-fill" aria-hidden="true"></i>
                      <strong>38+</strong> Cities Served
                    </span>
                  </div>

                  <div class="mega-featured-cities-wrap">
                    <span class="mega-cities-label">Major Hubs:</span>
                    <div class="mega-city-chips">
                      <a href="<?= site_url('gachibowli-packers-movers-hyderabad') ?>" class="mega-city-chip" title="Packers and Movers in Patna">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <span>Gachibowli</span>
                      </a>
                      <a href="<?= site_url('kondapur-packers-movers-hyderabad') ?>" class="mega-city-chip" title="Packers and Movers in Gaya">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <span>Kondapur</span>
                      </a>
                      <a href="<?= site_url('manikonda-packers-movers-hyderabad') ?>" class="mega-city-chip" title="Packers and Movers in Bhagalpur">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <span>Manikonda</span>
                      </a>
                      <a href="<?= site_url('miyapur-packers-movers-hyderabad') ?>" class="mega-city-chip" title="Packers and Movers in Muzaffarpur">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <span>Miyapur</span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="mega-featured-bottom">
                  <a href="<?= site_url('hyderabad') ?>" class="btn-featured-state" title="Explore Bihar Network">
                    <span>Explore Hyderabad</span>
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>

                  <div class="mega-featured-footer-link-wrap">
                    <a href="<?= site_url('our-branches') ?>" class="mega-view-all-link" title="View all branches">
                      <span>View all branches</span>
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Column 4: Contact Sidebar Card -->
            <div class="mega-col mega-col-contact">
              <aside class="mega-contact-card" aria-label="Direct Assistance Sidebar">
                
                <!-- Card Header -->
                <div class="mega-card-header">
                  <span class="mega-card-headset-icon" aria-hidden="true">
                    <i class="bi bi-headset"></i>
                  </span>
                  <div>
                    <p class="mega-card-title">24x7 Assistance</p>
                    <span class="mega-card-subtitle">Fast support & certified billing</span>
                  </div>
                </div>

                <!-- Direct Helpline Block -->
                <?php if (!empty($phone)): ?>
                  <div class="mega-helpline-block">
                    <div class="mega-helpline-icon-wrap" aria-hidden="true">
                      <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="mega-helpline-meta">
                      <span class="mega-helpline-label">Direct helpline</span>
                      <a class="mega-helpline-number" href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" title="Call Direct Helpline: <?= $phone ?>"><?= $phone ?></a>
                    </div>
                  </div>
                <?php endif; ?>

                <!-- WhatsApp Instant Support Button -->
                <?php if (!empty($whatsapphtml)): ?>
                  <a class="btn-mega-whatsapp" href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" title="WhatsApp Instant Support">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                    <span>WhatsApp Instant Support</span>
                  </a>
                <?php endif; ?>

                <div class="mega-card-divider" aria-hidden="true"></div>

                <!-- Contact Address Block in Full -->
                <?php if (!empty($address)): ?>
                  <div class="mega-address-block">
                    <div class="d-flex align-items-start gap-2">
                      <i class="bi bi-geo-alt-fill text-orange flex-shrink-0 mt-1" aria-hidden="true"></i>
                      <address class="mega-full-address mb-0">
                        <?= $address ?>
                      </address>
                    </div>
                  </div>
                  <div class="mega-card-divider" aria-hidden="true"></div>
                <?php endif; ?>

                <!-- Email Block -->
                <?php if (!empty($mail)): ?>
                  <div class="mega-email-block d-flex align-items-center gap-2">
                    <i class="bi bi-envelope-fill text-primary flex-shrink-0" aria-hidden="true"></i>
                    <a class="mega-email-link text-truncate" href="<?= !empty($mailhtml) ? $mailhtml : 'mailto:' . $mail ?>" title="Email: <?= $mail ?>"><?= $mail ?></a>
                  </div>
                <?php endif; ?>

                <!-- Action Buttons: Request Instant Quote & Contact Us -->
                <div class="mega-card-actions">
                  <button type="button" class="btn btn-mega-quote" data-bs-toggle="modal" data-bs-target="#qteModal" title="Request Instant Quote">
                    <span>Request Instant Quote</span>
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </button>

                  <a class="btn btn-mega-contact" href="<?= site_url('contact-us') ?>" title="Contact Us">
                    <span>Contact Us</span>
                  </a>
                </div>

              </aside>
            </div>

          </div>

          <!-- MOBILE VIEW (< 992px): Sleek Redesigned Mobile Drawer Menu -->
          <div class="mega-mobile-accordions d-lg-none">
            
            <!-- Quick Actions Banner at Top of Mobile Drawer -->
            <div class="mega-mobile-quick-card mb-3">
              <div class="d-flex align-items-center justify-content-between gap-2 pb-2 mb-2 border-bottom border-light-subtle">
                <div class="d-flex align-items-center gap-2">
                  <span class="mega-quick-call-icon" aria-hidden="true">
                    <i class="bi bi-telephone-fill"></i>
                  </span>
                  <div>
                    <span class="d-block text-muted fw-bold mega-quick-label">24x7 Direct Helpline</span>
                    <a href="<?= $phonehtml ?>" class="fw-bold text-dark text-decoration-none mega-quick-phone"><?= $phone ?></a>
                  </div>
                </div>
                <a href="<?= $phonehtml ?>" class="btn btn-sm btn-danger rounded-pill px-3 py-1 fw-bold text-white shadow-sm mega-quick-call-btn">
                  <i class="bi bi-telephone me-1"></i>Call
                </a>
              </div>
              <div class="row g-2">
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-sm w-100 rounded-3 py-2 fw-bold text-white d-flex align-items-center justify-content-center gap-1.5 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-calculator"></i><span>Get Quote</span>
                  </button>
                </div>
                <div class="col-6">
                  <?php if (!empty($whatsapphtml)): ?>
                    <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-sm w-100 rounded-3 py-2 fw-bold text-white d-flex align-items-center justify-content-center gap-1.5 shadow-sm">
                      <i class="bi bi-whatsapp"></i><span>WhatsApp</span>
                    </a>
                  <?php else: ?>
                    <a href="<?= site_url('contact-us') ?>" class="btn btn-outline-dark btn-sm w-100 rounded-3 py-2 fw-bold d-flex align-items-center justify-content-center gap-1.5 shadow-sm">
                      <i class="bi bi-envelope"></i><span>Contact</span>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <!-- Mobile Section 1: Our Services -->
            <details name="menu-section" class="mega-mobile-acc" open>
              <summary class="mega-acc-summary">
                <span class="d-inline-flex align-items-center gap-2.5">
                  <span class="mega-acc-icon-badge" aria-hidden="true">
                    <i class="bi bi-truck"></i>
                  </span>
                  <span class="text-start">
                    <strong class="d-block mega-acc-title">Our Services</strong>
                    <small class="text-muted fw-normal mega-acc-subtitle">Household, Office, Vehicle &amp; Storage</small>
                  </span>
                </span>
                <span class="mega-acc-chev-circle" aria-hidden="true">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </summary>
              <div class="mega-acc-body">
                <ul class="mega-col-list mb-0">
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'bike-transportation') ? 'is-active' : '' ?>" href="<?= site_url('bike-transportation') ?>">
                      <i class="bi bi-bicycle mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Bike Transportation</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'car-transportation') ? 'is-active' : '' ?>" href="<?= site_url('car-transportation') ?>">
                      <i class="bi bi-car-front mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Car Transportation</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'office-relocation') ? 'is-active' : '' ?>" href="<?= site_url('office-relocation') ?>">
                      <i class="bi bi-building mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Office Relocation</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'home-relocation') ? 'is-active' : '' ?>" href="<?= site_url('home-relocation') ?>">
                      <i class="bi bi-house-heart mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Household Shifting</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'packing-and-moving') ? 'is-active' : '' ?>" href="<?= site_url('packing-and-moving') ?>">
                      <i class="bi bi-box-seam mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Packing & Moving</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'loading-unloading') ? 'is-active' : '' ?>" href="<?= site_url('loading-unloading') ?>">
                      <i class="bi bi-truck mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Loading & Unloading</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </details>

            <!-- Mobile Section 2: Areas We Serve -->
            <details name="menu-section" class="mega-mobile-acc">
              <summary class="mega-acc-summary">
                <span class="d-inline-flex align-items-center gap-2.5">
                  <span class="mega-acc-icon-badge" aria-hidden="true">
                    <i class="bi bi-geo-alt"></i>
                  </span>
                  <span class="text-start">
                    <strong class="d-block mega-acc-title">Areas We Serve</strong>
                    <small class="text-muted fw-normal mega-acc-subtitle">Branch Directory &amp; Key Hubs</small>
                  </span>
                </span>
                <span class="mega-acc-chev-circle" aria-hidden="true">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </summary>
              <div class="mega-acc-body">
                <div class="mega-featured-card mega-mobile-featured-card mt-2">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-geo-alt-fill text-danger fs-4" aria-hidden="true"></i>
                      <span class="fw-bold fs-5 text-dark">Bihar</span>
                    </div>
                    <span class="mega-featured-hq-badge badge bg-danger text-white rounded-pill px-2 py-1">Head Office</span>
                  </div>
                  <p class="small text-muted mb-2">38+ Cities Served across Bihar</p>
                  <div class="d-flex flex-wrap gap-1 mb-3">
                    <a href="<?= site_url('patna-packers-movers-bihar') ?>" class="mega-city-chip" title="Patna">
                      <span>Patna</span>
                    </a>
                    <a href="<?= site_url('gaya-packers-movers-bihar') ?>" class="mega-city-chip" title="Gaya">
                      <span>Gaya</span>
                    </a>
                    <a href="<?= site_url('bhagalpur-packers-movers-bihar') ?>" class="mega-city-chip" title="Bhagalpur">
                      <span>Bhagalpur</span>
                    </a>
                    <a href="<?= site_url('muzaffarpur-packers-movers-bihar') ?>" class="mega-city-chip" title="Muzaffarpur">
                      <span>Muzaffarpur</span>
                    </a>
                  </div>
                  <a href="<?= site_url('bihar') ?>" class="btn-featured-state mb-2" title="Explore Bihar">
                    <span>Explore Bihar</span>
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>
                  <a class="mega-view-all-link" href="<?= site_url('our-branches') ?>" title="View all branches">
                    <span>View all branches</span>
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </details>

            <!-- Mobile Section 3: About Us -->
            <details name="menu-section" class="mega-mobile-acc">
              <summary class="mega-acc-summary">
                <span class="d-inline-flex align-items-center gap-2.5">
                  <span class="mega-acc-icon-badge" aria-hidden="true">
                    <i class="bi bi-info-circle"></i>
                  </span>
                  <span class="text-start">
                    <strong class="d-block mega-acc-title">About Us</strong>
                    <small class="text-muted fw-normal mega-acc-subtitle">Legacy, Reviews, Gallery &amp; FAQs</small>
                  </span>
                </span>
                <span class="mega-acc-chev-circle" aria-hidden="true">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </summary>
              <div class="mega-acc-body">
                <ul class="mega-col-list mb-0">
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'is-active' : '' ?>" href="<?= site_url() ?>">
                      <i class="bi bi-house-door mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Home</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'about-us') ? 'is-active' : '' ?>" href="<?= site_url('about-us') ?>">
                      <i class="bi bi-info-circle mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">About Company</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'why-choose-us') ? 'is-active' : '' ?>" href="<?= site_url('why-choose-us') ?>">
                      <i class="bi bi-patch-check mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Why Choose Us</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'photo-gallery') ? 'is-active' : '' ?>" href="<?= site_url('photo-gallery') ?>">
                      <i class="bi bi-images mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Photo Gallery</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'reviews') ? 'is-active' : '' ?>" href="<?= site_url('reviews') ?>">
                      <i class="bi bi-star mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Reviews & Ratings</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'faqs') ? 'is-active' : '' ?>" href="<?= site_url('faqs') ?>">
                      <i class="bi bi-question-circle mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">FAQs & Help</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'blog') ? 'is-active' : '' ?>" href="<?= site_url('blog') ?>">
                      <i class="bi bi-journal-text mega-row-icon" aria-hidden="true"></i>
                      <span class="mega-row-label">Moving Guides & Blog</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mega-list-item">
                    <a class="mega-row-link <?= ($this->uri->segment(1) == 'track-shipment' || $this->uri->segment(1) == 'track-shipment') ? 'is-active' : '' ?>" href="<?= site_url('track-shipment') ?>">
                      <i class="bi bi-geo-alt mega-row-icon text-danger" aria-hidden="true"></i>
                      <span class="mega-row-label">Track Shipment</span>
                      <span class="badge bg-danger text-white fw-bold ms-auto small px-2 py-0.5 rounded-pill" style="font-size: 10px; letter-spacing: 0.5px;">LIVE</span>
                      <i class="bi bi-chevron-right mega-row-chev ms-auto text-muted" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </details>

            <!-- Mobile Section 4: Contact & Instant Assistance -->
            <details name="menu-section" class="mega-mobile-acc">
              <summary class="mega-acc-summary">
                <span class="d-inline-flex align-items-center gap-2.5">
                  <span class="mega-acc-icon-badge" aria-hidden="true">
                    <i class="bi bi-headset"></i>
                  </span>
                  <span class="text-start">
                    <strong class="d-block mega-acc-title">24x7 Direct Assistance</strong>
                    <small class="text-muted fw-normal mega-acc-subtitle">Support Desk &amp; Head Office</small>
                  </span>
                </span>
                <span class="mega-acc-chev-circle" aria-hidden="true">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </summary>
              
              <div class="mega-acc-body">
                <div class="mega-contact-card mega-mobile-card">
                  <?php if (!empty($phone)): ?>
                    <div class="mega-helpline-block">
                      <div class="mega-helpline-icon-wrap" aria-hidden="true">
                        <i class="bi bi-telephone-fill"></i>
                      </div>
                      <div class="mega-helpline-meta">
                        <span class="mega-helpline-label">Direct helpline</span>
                        <a class="mega-helpline-number" href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>"><?= $phone ?></a>
                      </div>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($whatsapphtml)): ?>
                    <a class="btn-mega-whatsapp text-white" href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer">
                      <i class="bi bi-whatsapp" aria-hidden="true"></i>
                      <span>WhatsApp Instant Support</span>
                    </a>
                  <?php endif; ?>

                  <div class="mega-card-divider" aria-hidden="true"></div>

                  <!-- Contact Address Block in Full -->
                  <?php if (!empty($address)): ?>
                    <div class="mega-address-block">
                      <div class="d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt-fill text-danger flex-shrink-0 mt-1" aria-hidden="true"></i>
                        <address class="mega-full-address mb-0">
                          <?= $address ?>
                        </address>
                      </div>
                    </div>
                    <div class="mega-card-divider" aria-hidden="true"></div>
                  <?php endif; ?>

                  <?php if (!empty($mail)): ?>
                    <div class="mega-email-block d-flex align-items-center gap-2">
                      <i class="bi bi-envelope-fill text-danger flex-shrink-0" aria-hidden="true"></i>
                      <a class="mega-email-link" href="<?= !empty($mailhtml) ? $mailhtml : 'mailto:' . $mail ?>"><?= $mail ?></a>
                    </div>
                  <?php endif; ?>

                  <div class="mega-card-actions">
                    <button type="button" class="btn btn-mega-quote text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                      <span>Request Instant Quote</span>
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </button>
                    <a class="btn btn-mega-contact" href="<?= site_url('contact-us') ?>">
                      <span>Contact Us</span>
                    </a>
                  </div>
                </div>
              </div>
            </details>

          </div>

        </div>
      </main>

      <!-- 4. BOTTOM ANCHOR BAR -->
      <footer class="mega-menu-bottom-bar" aria-label="Mega Menu Footer Bar">
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">
          
          <!-- Left: Copyright & IBA Note -->
          <div class="mega-bottom-left d-flex align-items-center gap-2 text-muted">
            <span class="mega-bottom-copy">&copy; <?= date('Y') ?> <?= $company3 ?>.</span>
            <span class="mega-bottom-dot d-none d-sm-inline" aria-hidden="true">&bull;</span>
            <span class="mega-bottom-iba text-navy fw-semibold">IBA Approved Relocation Specialist (<?= $ibaCode ?>)</span>
          </div>

          <!-- Middle: 3 Small Trust Items -->
          <div class="mega-bottom-trust d-flex align-items-center gap-4 flex-wrap justify-content-center">
            <div class="mega-trust-item d-inline-flex align-items-center gap-1.5" title="IBA Code: <?= $ibaCode ?>">
              <i class="bi bi-shield-check text-orange" aria-hidden="true"></i>
              <span>IBA Approved (<?= $ibaCode ?>)</span>
            </div>
            <div class="mega-trust-item d-inline-flex align-items-center gap-1.5" title="<?= $isoCode ?> Certified">
              <i class="bi bi-patch-check-fill text-orange" aria-hidden="true"></i>
              <span><?= $isoCode ?> Certified</span>
            </div>
            <div class="mega-trust-item d-inline-flex align-items-center gap-1.5" title="All-India Transit Insurance">
              <i class="bi bi-umbrella-fill text-orange" aria-hidden="true"></i>
              <span>All-India Transit Insurance</span>
            </div>
          </div>

          <!-- Right: Social Media Icons -->
          <div class="mega-bottom-social d-flex align-items-center gap-2">
            <?php if (!empty($facebookhtml)): ?>
              <a class="mega-social-btn" href="<?= $facebookhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow on Facebook" aria-label="Follow on Facebook">
                <i class="bi bi-facebook" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
            <?php if (!empty($twitterhtml)): ?>
              <a class="mega-social-btn" href="<?= $twitterhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow on Twitter" aria-label="Follow on Twitter">
                <i class="bi bi-twitter-x" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
            <?php if (!empty($linkedinhtml)): ?>
              <a class="mega-social-btn" href="<?= $linkedinhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow on LinkedIn" aria-label="Follow on LinkedIn">
                <i class="bi bi-linkedin" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
            <?php if (!empty($instagramhtml)): ?>
              <a class="mega-social-btn" href="<?= $instagramhtml ?>" target="_blank" rel="noopener noreferrer" title="Follow on Instagram" aria-label="Follow on Instagram">
                <i class="bi bi-instagram" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
            <?php if (!empty($youtubehtml)): ?>
              <a class="mega-social-btn" href="<?= $youtubehtml ?>" target="_blank" rel="noopener noreferrer" title="Watch on YouTube" aria-label="Watch on YouTube">
                <i class="bi bi-youtube" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
          </div>

        </div>
      </footer>

    </div>
  </aside>

  <!-- SEO Friendly SiteNavigationElement Schema (Direct HTML without PHP array/json_encode) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      { "@type": "SiteNavigationElement", "name": "Home", "url": "<?= site_url() ?>" },
      { "@type": "SiteNavigationElement", "name": "About Us", "url": "<?= site_url('about-us') ?>" },
      { "@type": "SiteNavigationElement", "name": "Our Services", "url": "<?= site_url('home-relocation') ?>" },
      { "@type": "SiteNavigationElement", "name": "Areas We Serve", "url": "<?= site_url('our-branches') ?>" },
      { "@type": "SiteNavigationElement", "name": "Photo Gallery", "url": "<?= site_url('photo-gallery') ?>" },
      { "@type": "SiteNavigationElement", "name": "Contact Us", "url": "<?= site_url('contact-us') ?>" },
      { "@type": "SiteNavigationElement", "name": "Moving Blog", "url": "<?= site_url('blog') ?>" }
    ]
  }
  </script>