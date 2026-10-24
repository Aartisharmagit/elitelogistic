<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Our Company',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]); ?>

<!-- 1. Intro & Story Section (White Background) -->
<section class="inner-section-white" id="about-story" aria-label="About Us: Relocating India, Safely and Efficiently">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            
            <div class="col-12 col-lg-5">
                <div class="about-image-wrapper position-relative">
                    <img src="<?= base_url('assets/img/packers-movers-hero.webp') ?>" alt="<?= htmlspecialchars($company3) ?> Relocation Operations" class="about-main-img" loading="lazy">
                    
                    <!-- Orange Experience Badge Tucked in Corner -->
                    <div class="about-exp-badge d-flex align-items-center gap-3">
                        <div class="about-exp-num"><?= $experience ?></div>
                        <div>
                            <div class="about-exp-label">Years of Trust</div>
                            <div class="d-flex align-items-center gap-1 text-white small">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span><?= $happyClients ?> Moves</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Story & Exact Copy -->
            <div class="col-12 col-lg-7">
                <div class="inner-section-tag">
                    <span class="inner-section-bar"></span>
                    <span>About Us</span>
                </div>
                <h2 class="inner-section-title mb-3">
                    About Us: Relocating India, Safely and Efficiently
                </h2>
                
                <p class="inner-lead-desc text-secondary mb-4">
                    Each relocation opens up a new chapter in life. For Elite Logistics Packers and Movers, the responsibility to relocate safely and efficiently belongs in the hands of professionals. We take special care of every shipment, provide transparent prices and simplify relocating for our clients.
                </p>

                <!-- 2x2 Highlights Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-6">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Professional Relocation Care</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Transparent Price Assurance</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Special Shipment Handling</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="about-check-item">
                            <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Simplified Relocation Process</span>
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

<!-- 2. History and Development Timeline (Light Blue Background) -->
<section class="inner-section-soft" id="about-journey" aria-label="History and Development">
    <div class="container">
        <div class="text-center inner-section-header">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Our Milestones</span>
            </div>
            <h2 class="inner-section-title">History and Development</h2>
            <p class="inner-section-subtitle mb-4">
                Our growth was influenced by customers' trust, accumulated experience and desire to enhance moving service industry.
            </p>
        </div>

        <div class="timeline-track">
            <!-- 2008 -->
            <div class="timeline-node">
                <div class="timeline-dot">2008</div>
                <p class="timeline-desc mb-0"><strong>2008: Foundation in Mumbai.</strong> The initial fleet of our company consisted of two container trucks.</p>
            </div>

            <!-- 2013 -->
            <div class="timeline-node">
                <div class="timeline-dot">2013</div>
                <p class="timeline-desc mb-0"><strong>2013: Pan-India Development.</strong> Establishment of branch hubs in Delhi, Bengaluru, Pune, Hyderabad and Kolkata allowed us to expand our activity.</p>
            </div>

            <!-- 2018 -->
            <div class="timeline-node">
                <div class="timeline-dot">2018</div>
                <p class="timeline-desc mb-0"><strong>2018: IBA and ISO Certification.</strong> Received IBA Recommendation (<?= $ibaCode ?>) and <?= $isoCode ?> Quality Certification.</p>
            </div>

            <!-- 2022 -->
            <div class="timeline-node">
                <div class="timeline-dot">2022</div>
                <p class="timeline-desc mb-0"><strong>2022: GPS fleet and technology adoption.</strong> Introduction of real-time GPS fleet monitoring and digital survey-based quotations.</p>
            </div>

            <!-- Present -->
            <div class="timeline-node">
                <div class="timeline-dot">Now</div>
                <p class="timeline-desc mb-0"><strong>Present: Growing nationwide.</strong> Our network covers 250+ Indian cities and we have already made more than 65,000 moves.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Mission & Our Vision (White Background) -->
<section class="inner-section-white" id="mission-vision" aria-label="Our Mission and Our Vision">
    <div class="container">
        <div class="row g-4">
            <!-- Mission Card -->
            <div class="col-12 col-md-6">
                <div class="inner-card h-100 p-4 p-lg-5">
                    <div class="inner-icon-tile">
                        <i class="bi bi-compass"></i>
                    </div>
                    <h3 class="inner-card-title fs-4 fw-bold text-dark mb-3">Our Mission</h3>
                    <p class="inner-card-text text-secondary mb-3">
                        Our mission is providing safe and high-quality packing, moving and transportation services with the focus on honesty, reliable pricing and transparency. We try to inform our customers about every aspect of the relocation process, about the charges we agreed upon in advance.
                    </p>
                    <p class="inner-card-text text-secondary mb-0">
                        From household shifting to office relocation, bike transportation or car transport - we do our best to make planning of each move easy for our customers.
                    </p>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-12 col-md-6">
                <div class="inner-card h-100 p-4 p-lg-5">
                    <div class="inner-icon-tile">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3 class="inner-card-title fs-4 fw-bold text-dark mb-3">Our Vision</h3>
                    <p class="inner-card-text text-secondary mb-0">
                        Our vision is to become a reliable brand in the Indian relocation industry, offering professional moving services thanks to our experienced team, better technologies and high service standards. We want to build long-lasting relationships with our customers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. The Pillars of Our Company (Light Blue Background) -->
<section class="inner-section-soft" id="about-values" aria-label="The Pillars of Our Company">
    <div class="container">
        <div class="text-center inner-section-header">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Our Principles</span>
            </div>
            <h3 class="inner-section-title">The Pillars of Our Company</h3>
            <p class="inner-section-subtitle mx-auto mb-4 max-w-860">
                Our activities rest on four pillars which are honesty, care, accountability and improvement. Honest quotations will allow customers to estimate their expenses. Careful packing and transportation will ensure safety of the belongings of our customers. Accountability will be guaranteed by constant informing about the services agreed upon, while improvement will allow us to optimize our processes and technologies.
            </p>
        </div>

        <div class="row g-4">
            <!-- Honesty -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inner-card h-100 text-center">
                    <div class="inner-icon-tile mx-auto">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="inner-card-title fw-bold text-dark mb-2">Honesty</h4>
                    <p class="inner-card-text">
                        Honest quotations will allow customers to estimate their expenses.
                    </p>
                </div>
            </div>

            <!-- Care -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inner-card h-100 text-center">
                    <div class="inner-icon-tile mx-auto">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h4 class="inner-card-title fw-bold text-dark mb-2">Care</h4>
                    <p class="inner-card-text">
                        Careful packing and transportation will ensure safety of the belongings of our customers.
                    </p>
                </div>
            </div>

            <!-- Accountability -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inner-card h-100 text-center">
                    <div class="inner-icon-tile mx-auto">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                    <h4 class="inner-card-title fw-bold text-dark mb-2">Accountability</h4>
                    <p class="inner-card-text">
                        Accountability will be guaranteed by constant informing about the services agreed upon.
                    </p>
                </div>
            </div>

            <!-- Improvement -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="inner-card h-100 text-center">
                    <div class="inner-icon-tile mx-auto">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>
                    <h4 class="inner-card-title fw-bold text-dark mb-2">Improvement</h4>
                    <p class="inner-card-text">
                        Improvement will allow us to optimize our processes and technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Certifications and Achievements (White Background) -->
<section class="inner-section-white" id="about-certifications" aria-label="Certifications and Achievements">
    <div class="container">
        <div class="text-center inner-section-header">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Trust & Milestones</span>
            </div>
            <h3 class="inner-section-title">Certifications and Achievements</h3>
        </div>

        <!-- Exact Content Paragraphs in a Lead Content Card -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-10">
                <div class="lead-content-card p-4 p-md-5 rounded-4 bg-light border border-danger-subtle shadow-sm">
                    <p class="text-secondary mb-3">
                        <?= $company3 ?> identifies itself as an <?= $isoCode ?> certified relocation carrier and IBA approved logistics partner under reference <?= $ibaCode ?>. Such certifications are an integral part of our company which strives for documented processes and professional services.
                    </p>
                    <p class="text-secondary mb-3">
                        Achievements of our company include over <?= $happyClients ?> moves registered, relocation services provided in 250+ Indian cities and GPS monitoring of our transportation. The company has a <?= $ratingValue ?> star rating and a zero damage rate.
                    </p>
                    <p class="text-dark fw-bold mb-0">
                        For us, growing means gaining the trust of customers with each move.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4 Stat Counters Mentioned in the Text -->
        <div class="stats-strip-box mb-5">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-strip-num">65,000+</div>
                    <div class="stat-strip-label">Moves Registered</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-strip-num">250+</div>
                    <div class="stat-strip-label">Indian Cities Covered</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-strip-num">4.9 ★</div>
                    <div class="stat-strip-label">Star Customer Rating</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-strip-num">0%</div>
                    <div class="stat-strip-label">Zero Damage Rate</div>
                </div>
            </div>
        </div>

        <!-- 3 Accreditation Cards -->
        <div class="row g-4 justify-content-center">
            <!-- IBA Approval -->
            <div class="col-12 col-md-4">
                <div class="cert-card h-100">
                    <div class="cert-icon-tile">
                        <i class="bi bi-bank"></i>
                    </div>
                    <div>
                        <p class="fw-bold fs-6 mb-1 text-dark">IBA Approved Partner</p>
                        <p class="text-muted small mb-0">Official Reference: <?= $ibaCode ?>. Recommended relocation carrier across India.</p>
                    </div>
                </div>
            </div>

            <!-- ISO 9001:2015 -->
            <div class="col-12 col-md-4">
                <div class="cert-card h-100">
                    <div class="cert-icon-tile">
                        <i class="bi bi-patch-check"></i>
                    </div>
                    <div>
                        <p class="fw-bold fs-6 mb-1 text-dark"><?= $isoCode ?> Certified</p>
                        <p class="text-muted small mb-0">Documented processes, quality assurance, and standardized packing protocols.</p>
                    </div>
                </div>
            </div>

            <!-- GPS Monitoring -->
            <div class="col-12 col-md-4">
                <div class="cert-card h-100">
                    <div class="cert-icon-tile">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <p class="fw-bold fs-6 mb-1 text-dark">GPS Fleet Monitoring</p>
                        <p class="text-muted small mb-0">Real-time transportation tracking ensuring safety and timely delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Closing Call-To-Action Band (Exact Copy) -->
<section class="site-section section-bg-white cta-band-section" id="about-cta" aria-label="Plan your next relocation with Elite Logistics Packers and Movers">
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
            Plan your next relocation with Elite Logistics Packers and Movers.
          </h3>
          <p class="cta-band-subtitle mb-0">
            Receive a written quotation. Contact us at +91 XXXXXXXXX.
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
              <button type="button" class="btn btn-cta-card-quote d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal" title="Receive a written quotation" aria-label="Receive a written quotation">
                <span>Receive a Written Quotation</span>
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