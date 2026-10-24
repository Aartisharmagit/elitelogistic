<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- SECTION 1: INNER PAGE HERO & DYNAMIC BREADCRUMBS (H1)                   -->
<!-- ======================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Professional Car Transportation Services',
    'bc_desc' => 'Planning your relocation and need your car moved safely? We help customers transport their vehicles from city to city or state with complete care.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]); ?>

<!-- ======================================================================= -->
<!-- SECTION 2: PROFESSIONAL CAR TRANSPORTATION SERVICES (H2 #1)             -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-overview" aria-label="Professional Car Transportation Services">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Featured Photo -->
      <div class="col-12 col-lg-5">
        <div class="about-image-wrapper position-relative">
          <img src="<?= base_url('assets/img/car_transportation.jpg') ?>" alt="Professional Car Transportation Services - <?= htmlspecialchars($company3) ?>" class="about-main-img" width="1080" height="720" loading="lazy">
        </div>
      </div>

      <!-- Right Column: Narrative Content -->
      <div class="col-12 col-lg-7">
        <div class="inner-section-tag">
          <span class="inner-section-bar"></span>
          <span>Car Relocation &bull; Door-to-Door</span>
        </div>
        
        <h2 class="inner-section-title mb-3">
          Professional Car Transportation Services
        </h2>

        <p class="service-desc-text text-secondary mb-3">
          Let’s say you got a job offer in another city. You are planning your relocation, bought tickets to a new location and need to do one more thing, move your car there. This could be done either by driving yourself or booking a separate car transporting service.
        </p>

        <p class="service-desc-text text-secondary mb-3">
          Self-driving is not the only option. This process consumes time, adds mileage to your car and leaves you tired after all the relocation stuff.
        </p>

        <p class="service-desc-text text-secondary mb-4">
          <strong><?= htmlspecialchars($company3) ?></strong> can help with this problem. Our company helps those customers who want to transport their cars from city to city or even state, providing all the information about available methods of doing it, picking up and cost estimation.
        </p>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" class="btn-inner-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
            <span>Get Free Quote</span>
            <i class="bi bi-arrow-right"></i>
          </button>
          <?php if (!empty($phone)): ?>
            <a href="<?= $phonehtml ?>" class="btn-inner-secondary">
              <i class="bi bi-telephone-fill"></i>
              <span>Call <?= $phone ?></span>
            </a>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 3: WHAT HAPPENS WHEN YOU ARRANGE CAR TRANSPORTATION? (H2 #2)    -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-included" aria-label="What Happens When You Arrange Car Transportation">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Vehicle Protocol</span>
      </div>
      <h2 class="inner-section-title">What Happens When You Arrange Car Transportation?</h2>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        Transportation of a car is not limited with just loading and delivering a vehicle. Its condition should be noted prior to pickup, it should be prepared for transport, appropriate pickup and delivery arrangements should be made.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Inclusion Box 1 -->
      <div class="col-12 col-md-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-clipboard-check-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-5 text-dark mb-2">Inspecting the car before pickup</h3>
            <p class="inclusion-text mb-0">
              Noting condition prior to handover, documenting existing odometer reading, scratches, and fuel level with joint inspection sign-off.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion Box 2 -->
      <div class="col-12 col-md-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-truck-flatbed"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-5 text-dark mb-2">Choosing a suitable car transport service</h3>
            <p class="inclusion-text mb-0">
              Selecting appropriate carrier arrangements tailored to vehicle size, clearance, and distance for safe highway transit.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion Box 3 -->
      <div class="col-12 col-md-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-5 text-dark mb-2">Organizing the pickup and delivery of your car</h3>
            <p class="inclusion-text mb-0">
              Scheduling doorstep collection and destination delivery with verified documentation and clear handover protocols.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 4: HOW THE CAR TRANSPORTING PROCESS WORKS? (H2 #3)              -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-process" aria-label="How the Car Transporting Process Works">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Step-by-Step Procedure</span>
      </div>
      <h3 class="inner-section-title">How the Car Transporting Process Works?</h3>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Step 01 Card -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="process-timeline-card h-100">
          <div class="process-timeline-head">
            <div class="process-step-pill">
              <span class="process-step-circle">1</span>
              <span class="process-step-label">Step 1</span>
            </div>
            <div class="process-step-icon">
              <i class="bi bi-chat-left-text-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Tell Us About Your Route</h4>
            <p class="process-step-paragraph mb-0">
              Tell us your pickup and delivery points, provide information about the make and model of the car. Mention your planned moving date if you have it.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 02 Card -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="process-timeline-card h-100">
          <div class="process-timeline-head">
            <div class="process-step-pill">
              <span class="process-step-circle">2</span>
              <span class="process-step-label">Step 2</span>
            </div>
            <div class="process-step-icon">
              <i class="bi bi-file-earmark-text-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Review the Quotation</h4>
            <p class="process-step-paragraph mb-0">
              Quotation is based on many factors such as the distance, the size of the vehicle, carrier availability and accessibility of the pickup and delivery points. Check the information provided in quotation and additional charges before agreeing to the transport booking.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 03 Card -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="process-timeline-card h-100">
          <div class="process-timeline-head">
            <div class="process-step-pill">
              <span class="process-step-circle">3</span>
              <span class="process-step-label">Step 3</span>
            </div>
            <div class="process-step-icon">
              <i class="bi bi-tools"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Preparing the Vehicle</h4>
            <p class="process-step-paragraph mb-0">
              Clean your vehicle of all the items. Leave the registration certificate and other required documents in the car and prepare it according to the instructions of the transport team.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 04 Card -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="process-timeline-card h-100">
          <div class="process-timeline-head">
            <div class="process-step-pill">
              <span class="process-step-circle">4</span>
              <span class="process-step-label">Step 4</span>
            </div>
            <div class="process-step-icon">
              <i class="bi bi-patch-check-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Transport and Handover</h4>
            <p class="process-step-paragraph mb-0">
              After all the arrangements are made, the vehicle is prepared for transportation. Upon arrival at the destination, you can compare the car condition with the initial photo report and notify about any issues.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 5: WHAT CHECKS YOU SHOULD MAKE BEFORE BOOKING? (H2 #4)           -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-checks" aria-label="What Checks You Should Make Before Booking">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Pre-Booking Checklist</span>
      </div>
      <h3 class="inner-section-title">What Checks You Should Make Before Booking?</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-760">
        Several checks prior to the booking can help you in avoiding the problems with handover of the car:
      </p>
    </div>

    <!-- 5 Checks Grid: 3 on top row, 2 on bottom row -->
    <div class="row g-4 justify-content-center">
      
      <!-- Check 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-camera-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Vehicle's condition</h4>
              <p class="advantage-card-text mb-0">
                Take photos and note all the existing scratches and damages.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Check 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Personal belongings</h4>
              <p class="advantage-card-text mb-0">
                Clean the vehicle of any valuable items.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Check 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-file-earmark-check-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Documents</h4>
              <p class="advantage-card-text mb-0">
                Have the registration certificate and other required documents ready.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Check 4 -->
      <div class="col-12 col-md-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Insurance</h4>
              <p class="advantage-card-text mb-0">
                Check the available transit insurance coverage, its exclusions and claims process.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Check 5 -->
      <div class="col-12 col-md-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-clock-history"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Delivery schedule</h4>
              <p class="advantage-card-text mb-0">
                Know the estimated timeframe and how the information will be provided.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Summary Footnote -->
    <div class="text-center mt-4 pt-2">
      <span class="badge bg-white text-secondary border px-3 py-2 fw-semibold rounded-pill">
        <i class="bi bi-check-circle-fill text-success me-1"></i> Making all of this before booking makes the process of vehicle handover easier.
      </span>
    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 6: FAQS WITH SCHEMA.ORG JSON-LD (H2 #5)                         -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-faqs" aria-label="Frequently Asked Questions about Car Transportation">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Clear Answers &bull; Transparent Guidance</span>
      </div>
      <h3 class="inner-section-title">Frequently Asked Questions about Car Transportation</h3>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-9">
        <div class="faq-accordion-wrapper" itemscope itemtype="https://schema.org/FAQPage">
          <div class="accordion d-flex flex-column gap-3" id="carFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="carFaqHeading0">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapse0" aria-expanded="true" aria-controls="carFaqCollapse0">
                  <span class="home-faq-num me-3">01</span>
                  <span itemprop="name">How much does car transportation cost?</span>
                </button>
              </h4>
              <div id="carFaqCollapse0" class="accordion-collapse collapse show" aria-labelledby="carFaqHeading0" data-bs-parent="#carFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      The price of car transportation depends on the distance, vehicle's model, route, availability of carriers and other requirements of the service. Ask for quotation based on your pickup and delivery points.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="carFaqHeading1">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapse1" aria-expanded="false" aria-controls="carFaqCollapse1">
                  <span class="home-faq-num me-3">02</span>
                  <span itemprop="name">How long will my car be transported?</span>
                </button>
              </h4>
              <div id="carFaqCollapse1" class="accordion-collapse collapse" aria-labelledby="carFaqHeading1" data-bs-parent="#carFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      It depends on the route and the schedule of the transport. Ask for the estimated delivery timeframe before booking, especially when you need the car by a certain date.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="carFaqHeading2">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapse2" aria-expanded="false" aria-controls="carFaqCollapse2">
                  <span class="home-faq-num me-3">03</span>
                  <span itemprop="name">Can I transport an SUV or premium car?</span>
                </button>
              </h4>
              <div id="carFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="carFaqHeading2" data-bs-parent="#carFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Ask about the availability of the transport arrangements for your SUV or premium vehicle. The options for transportation depend on the vehicle's size and the available carriers.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 7: LET'S PLAN YOUR CAR'S MOVING (HOMEPAGE RED CTA DESIGN)       -->
<!-- ======================================================================= -->
<section class="site-section section-bg-white cta-band-section" id="book-now" aria-label="Let's Plan Your Car's Moving">
  <div class="container">
    <div class="cta-band-box position-relative overflow-hidden">
      
      <!-- Ambient Background Soft Corner Circles -->
      <div class="cta-deco-circle cta-deco-circle-1 position-absolute" aria-hidden="true"></div>
      <div class="cta-deco-circle cta-deco-circle-2 position-absolute" aria-hidden="true"></div>

      <!-- Faint Dotted Route Line & Travelling Truck Icon -->
      <div class="cta-route-layer position-absolute d-none d-sm-block" aria-hidden="true">
        <svg class="cta-route-svg" viewBox="0 0 1000 36" preserveAspectRatio="none" fill="none">
          <path id="ctaRoutePath" class="cta-route-path" d="M -20,24 Q 250,6 500,24 T 1020,20" stroke="rgba(255, 255, 255, 0.16)" stroke-width="2" stroke-dasharray="6 6" />
        </svg>
        <div class="cta-truck-badge">
          <i class="bi bi-truck" aria-hidden="true"></i>
        </div>
      </div>

      <!-- 2-Column Content Grid (60/40) -->
      <div class="row align-items-center g-3 g-lg-4 position-relative z-2">
        
        <!-- Left Column: Headline & Subtext with Car Content -->
        <div class="col-12 col-lg-7 text-center text-lg-start">
          <h3 class="cta-band-title text-white fw-bold mb-2">
            Let's Plan Your Car's Moving
          </h3>
          <p class="cta-band-subtitle mb-0">
            Call us at <a href="<?= $phonehtml ?>" class="text-white text-decoration-underline fw-bold"><?= $phone ?></a> to get information about the car transport services and to receive quotations.
          </p>
        </div>

        <!-- Right Column: Compact White Contact Card -->
        <div class="col-12 col-lg-5">
          <div class="cta-contact-card bg-white">
            
            <!-- Card Header: Phone icon, 24x7 Label & Navy Number in One Compact Row -->
            <div class="cta-card-header d-flex align-items-center gap-2 mb-2 pb-1">
              <div class="cta-card-phone-wrap position-relative flex-shrink-0" aria-hidden="true">
                <span class="cta-card-pulse-ring"></span>
                <span class="cta-card-phone-icon d-flex align-items-center justify-content-center">
                  <i class="bi bi-telephone-fill"></i>
                </span>
              </div>
              <div class="cta-card-header-meta d-flex align-items-baseline gap-2 flex-wrap">
                <span class="cta-card-label">Call us, 24x7:</span>
                <?php if (!empty($phone)): ?>
                  <a href="<?= $phonehtml ?>" class="cta-card-phone-num" title="Call us directly: <?= $phone ?>" aria-label="Call us directly: <?= $phone ?>">
                    <?= $phone ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>

            <!-- Action Buttons: Side-by-Side Row -->
            <div class="cta-card-btn-row d-grid gap-2">
              
              <!-- Quote Button -->
              <button type="button" class="btn btn-cta-card-quote d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Moving Quote" aria-label="Get Free Moving Quote">
                <span>Get Free Quote</span>
                <i class="bi bi-arrow-right cta-btn-arrow" aria-hidden="true"></i>
              </button>

              <!-- WhatsApp Button -->
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
