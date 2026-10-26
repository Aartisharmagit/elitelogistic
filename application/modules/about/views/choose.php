<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]); ?>

<!-- 1. Intro & Overview Section (White Background) -->
<section class="inner-section-white" id="why-overview" aria-label="Reasons to choose Elite Logistics Packers and Movers">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            
            <!-- Left Column: Featured Image with Trust Experience Badge -->
            <div class="col-12 col-lg-5">
                <div class="about-image-wrapper position-relative">
                    <img src="<?= base_url('assets/img/service/truck-loaded.webp') ?>" alt="Reasons to choose <?= htmlspecialchars($company3) ?>" class="about-main-img" loading="lazy">
                    
                    <!-- Floating Orange Experience Badge -->
                    <div class="about-exp-badge d-flex align-items-center gap-3">
                        <div class="about-exp-num"><?= $experience ?></div>
                        <div>
                            <div class="about-exp-label">Years of Trust</div>
                            <div class="d-flex align-items-center gap-1 text-white small">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span>250+ Cities Covered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Exact Copy & Services Breakdown -->
            <div class="col-12 col-lg-7">
                <div class="inner-section-tag">
                    <span class="inner-section-bar"></span>
                    <span>The Elite Advantage</span>
                </div>
                <h2 class="inner-section-title mb-3">
                    Reasons to choose Elite Logistics Packers and Movers
                </h2>
                
                <p class="inner-lead-desc text-secondary mb-3">
                    Moving companies provide trucks to transport customers' belongings from one place to another. However, customers also want to know how their items will be packed, at what cost and who will be responsible for the whole process of moving. Elite Logistics Packers and Movers pays attention to these issues to make the relocation easier to manage.
                </p>

                <p class="inner-lead-desc text-secondary mb-4">
                    We provide the following services: household shifting, office relocation, bike transportation, car transportation, packing and moving, and loading and unloading in 250+ cities in India.
                </p>

                <!-- Service Badges Grid -->
                <div class="row g-2 mb-4">
                    <div class="col-6 col-sm-4">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-house-heart"></i></span>
                            <span>Household Shifting</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-building"></i></span>
                            <span>Office Relocation</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-bicycle"></i></span>
                            <span>Bike Transportation</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-car-front"></i></span>
                            <span>Car Transportation</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-box-seam"></i></span>
                            <span>Packing &amp; Moving</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-truck"></i></span>
                            <span>Loading &amp; Unloading</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <button type="button" class="btn-inner-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>Get Free Quote</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                    <?php if (!empty($phone)): ?>
                        <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" class="btn-inner-secondary">
                            <i class="bi bi-telephone-fill"></i>
                            <span><?= $phone ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. The 6 Key Reasons Grid (Light Blue Background) -->
<section class="inner-section-soft" id="why-features" aria-label="Reasons to Choose Our Services">
    <div class="container">
        <div class="text-center inner-section-header mb-5">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Why We Stand Out</span>
            </div>
            <h2 class="inner-section-title">Core Benefits of Moving With Elite Logistics</h2>
        </div>
        <div class="row g-4">
            
            <!-- 1. Reliable Price Lock Quote Before Relocation -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="inner-card h-100 p-4">
                    <div class="inner-card-top d-flex align-items-center gap-3 mb-3 flex-md-column align-items-md-start">
                        <div class="inner-icon-tile mb-0 mb-md-3 flex-shrink-0">
                            <i class="bi bi-tag-fill"></i>
                        </div>
                        <h3 class="inner-card-title fs-5 fw-bold text-dark mb-0 mb-md-2">Reliable Price Lock Quote Before Relocation</h3>
                    </div>
                    <p class="inner-card-text text-secondary mb-2">
                        Unexpected charges can ruin the relocation day. Written price lock quote allows you to know the agreed cost before the relocation. We talk to you about the requirements, and the quotation is prepared by our specialists according to the information provided.
                    </p>
                    <p class="inner-card-text text-secondary mb-0">
                        In case your requirements for the relocation change, please talk to our specialists before starting the work.
                    </p>
                </div>
            </div>

            <!-- 2. Certified Company Profile and Industry Approvals -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="inner-card h-100 p-4">
                    <div class="inner-card-top d-flex align-items-center gap-3 mb-3 flex-md-column align-items-md-start">
                        <div class="inner-icon-tile mb-0 mb-md-3 flex-shrink-0">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <h3 class="inner-card-title fs-5 fw-bold text-dark mb-0 mb-md-2">Certified Company Profile and Industry Approvals</h3>
                    </div>
                    <p class="inner-card-text text-secondary mb-2">
                        Trust begins with knowing whom you are going to cooperate with. <?= $company3 ?> introduces itself as an <?= $isoCode ?> certified relocation carrier and IBA approved logistics partner according to <?= $ibaCode ?>. The company profile and professional service practices are represented by the above-mentioned credentials.
                    </p>
                    <p class="inner-card-text text-secondary mb-0">
                        Customers may ask the company's specialists to clarify the certification and approval details for their booking.
                    </p>
                </div>
            </div>

            <!-- 3. Proper Packing of Goods -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="inner-card h-100 p-4">
                    <div class="inner-card-top d-flex align-items-center gap-3 mb-3 flex-md-column align-items-md-start">
                        <div class="inner-icon-tile mb-0 mb-md-3 flex-shrink-0">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="inner-card-title fs-5 fw-bold text-dark mb-0 mb-md-2">Proper Packing of Goods</h3>
                    </div>
                    <p class="inner-card-text text-secondary mb-2">
                        Dining table, television, glass, washing machine – all the things require proper protection during the relocation. Our packing and moving services include appropriate protective materials, 5-layer bubble packing is used for applicable items. We take into account the requirements of packing and loading of goods to be transported in order to avoid scratches and damage during transportation.
                    </p>
                    <p class="inner-card-text text-secondary mb-0">
                        Good packing plays an important role especially when goods need to travel a long distance.
                    </p>
                </div>
            </div>

            <!-- 4. GPS Monitored Container Transit -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="inner-card h-100 p-4">
                    <div class="inner-card-top d-flex align-items-center gap-3 mb-3 flex-md-column align-items-md-start">
                        <div class="inner-icon-tile mb-0 mb-md-3 flex-shrink-0">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3 class="inner-card-title fs-5 fw-bold text-dark mb-0 mb-md-2">GPS Monitored Container Transit</h3>
                    </div>
                    <p class="inner-card-text text-secondary mb-0">
                        Knowing the location of the shipment during the transit may give customers extra comfort. GPS monitored container transit for applicable shipments is available. Our services operate in more than 250 Indian cities and support customers planning relocations from one city to another.
                    </p>
                </div>
            </div>

            <!-- 5. Experience in Different Types of Re-location -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="inner-card h-100 p-4">
                    <div class="inner-card-top d-flex align-items-center gap-3 mb-3 flex-md-column align-items-md-start">
                        <div class="inner-icon-tile mb-0 mb-md-3 flex-shrink-0">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h3 class="inner-card-title fs-5 fw-bold text-dark mb-0 mb-md-2">Experience in Different Types of Re-location</h3>
                    </div>
                    <p class="inner-card-text text-secondary mb-2">
                        Every relocation has its own requirements. In case of household re-location it is necessary to consider the customers' personal belongings, whereas office re-location requires special consideration of furniture and equipment. The vehicle re-location requires special arrangements according to the type of the car or bike to be transported.
                    </p>
                    <p class="inner-card-text text-secondary mb-0">
                        This experience allows us to take into account practical details prior to the day of relocation.
                    </p>
                </div>
            </div>

            <!-- 6. Zero Transit-Damage Assurance -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="inner-card h-100 p-4">
                    <div class="inner-card-top d-flex align-items-center gap-3 mb-3 flex-md-column align-items-md-start">
                        <div class="inner-icon-tile mb-0 mb-md-3 flex-shrink-0">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <h3 class="inner-card-title fs-5 fw-bold text-dark mb-0 mb-md-2">Zero Transit-Damage Assurance</h3>
                    </div>
                    <p class="inner-card-text text-secondary mb-0">
                        Elite Logistics Packers and Movers provides a zero transit-damage assurance. Customers need to review the terms of written assurance together with our specialists prior to the booking.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. Closing Call-To-Action Band (Exact Copy) -->
<section class="site-section section-bg-white cta-band-section" id="why-cta" aria-label="Are you planning relocations? Choose Elite Logistics Packers and Movers">
  <div class="container">
    <div class="cta-band-box position-relative overflow-hidden">
      
      <!-- Ambient Background Soft Corner Circles -->
      <div class="cta-deco-circle cta-deco-circle-1 position-absolute" aria-hidden="true"></div>
      <div class="cta-deco-circle cta-deco-circle-2 position-absolute" aria-hidden="true"></div>

      <!-- Faint Dotted Route Line & Travelling Truck Icon -->
      <div class="cta-route-layer position-absolute d-none d-sm-block" aria-hidden="true">
        <svg class="cta-route-svg" viewBox="0 0 1000 36" preserveAspectRatio="none" fill="none">
          <path class="cta-route-path" d="M -20,24 Q 250,6 500,24 T 1020,20" stroke="rgba(255, 255, 255, 0.16)" stroke-width="2" stroke-dasharray="6 6" />
        </svg>
        <div class="cta-truck-badge">
          <i class="bi bi-truck" aria-hidden="true"></i>
        </div>
      </div>

      <!-- 2-Column Content Grid -->
      <div class="row align-items-center g-3 g-lg-4 position-relative z-2">
        
        <!-- Left Column: Exact Word-to-Word Copy -->
        <div class="col-12 col-lg-7 text-center text-lg-start">
          <h3 class="cta-band-title text-white fw-bold mb-2">
            Are you planning relocations? Choose Elite Logistics Packers and Movers for written pricing, good packing and planned transportation.
          </h3>
          <p class="cta-band-subtitle mb-0">
            Contact us now at <a href="<?= $phonehtml ?>" class="text-white text-decoration"><?= $phone ?> </a> for the quotation according to your requirements.
          </p>
        </div>

        <!-- Right Column: Quick Contact Card -->
        <div class="col-12 col-lg-5">
          <div class="cta-contact-card bg-white">
            
            <div class="cta-card-header d-flex align-items-center gap-2 mb-2 pb-1">
              <div class="cta-card-phone-wrap position-relative flex-shrink-0" aria-hidden="true">
                <span class="cta-card-pulse-ring"></span>
                <span class="cta-card-phone-icon d-flex align-items-center justify-content-center">
                  <i class="bi bi-telephone-fill"></i>
                </span>
              </div>
              <div class="cta-card-header-meta d-flex align-items-baseline gap-2 flex-wrap">
                <span class="cta-card-label">Call us directly:</span>
                <?php if (!empty($phone)): ?>
                  <a href="<?= $phonehtml ?>" class="cta-card-phone-num" title="Call us directly: <?= $phone ?>" aria-label="Call us directly: <?= $phone ?>">
                    <?= $phone ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="cta-card-btn-row d-grid gap-2">
              <button type="button" class="btn btn-cta-card-quote d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Quotation" aria-label="Get Quotation">
                <span>Get Free Quotation</span>
                <i class="bi bi-arrow-right cta-btn-arrow" aria-hidden="true"></i>
              </button>
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