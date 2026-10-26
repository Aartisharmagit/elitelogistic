<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- SECTION 1: INNER PAGE HERO & DYNAMIC BREADCRUMBS (H1)                   -->
<!-- ======================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Reliable Bike Transportation Services',
    'bc_desc' => 'If you are planning to move your bike to another city, you need to make sure that it will reach there safely.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]); ?>


<!-- ======================================================================= -->
<!-- SECTION 2: RELIABLE BIKE TRANSPORTATION SERVICES (H2 #1)                -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-overview" aria-label="Reliable Bike Transportation Services">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Featured Photo -->
      <div class="col-12 col-lg-5">
        <div class="about-image-wrapper position-relative">
          <img src="<?= base_url('assets/img/service/bike-transportation.webp') ?>" alt="Reliable Bike Transportation Services - <?= htmlspecialchars($company3) ?>" class="about-main-img" width="1080" height="720" loading="lazy">
        </div>
      </div>

      <!-- Right Column: Narrative Content -->
      <div class="col-12 col-lg-7">
        <div class="inner-section-tag">
          <span class="inner-section-bar"></span>
          <span>Two-Wheeler Relocation</span>
        </div>
        
        <h2 class="inner-section-title mb-3">
          Reliable Bike Transportation Services
        </h2>

        <p class="service-desc-text text-secondary mb-3">
          If you are planning to move your bike to another city, you need to make sure that it will reach there safely. <?= htmlspecialchars($company3) ?> provide bike transportation services to ease this process for you.
        </p>

        <p class="service-desc-text text-secondary mb-3">
          Since your bike is your constant companion, there is nothing surprising about the worries related to potential scratches, dents or rough treatment during transportation. You can reduce the risk of those through professional transportation and appropriate packaging.
        </p>

        <p class="service-desc-text text-secondary mb-4">
          We assist our clients to arrange transportation for their motorcycles and scooters both locally and in other cities. We can help you arrange the process, tell you about the packing, estimated expenses, etc.
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
<!-- SECTION 3: WHAT IS INCLUDED INTO BIKE TRANSPORTATION SERVICES (H2 #2)   -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-included" aria-label="What Is Included into the Bike Transportation Services">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Service Inclusions</span>
      </div>
      <h2 class="inner-section-title">What Is Included into the Bike Transportation Services</h2>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Inclusion Box 1 -->
      <div class="col-12 col-lg-6">
        <div class="service-inclusion-box h-100">
          <div class="inclusion-icon-wrap">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <p class="inclusion-text mb-0">
              Bike transportation involves the basic steps necessary for moving your two-wheeled vehicle. It includes inspection, packaging, loading, transporting and delivery depending on your requirements.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion Box 2 -->
      <div class="col-12 col-lg-6">
        <div class="service-inclusion-box h-100">
          <div class="inclusion-icon-wrap">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <div class="inclusion-text-wrap">
            <p class="inclusion-text mb-0">
              Such elements as mirrors, indicators, headlamps, and painted panels require special attention because they can be easily damaged during transportation. Proper packing will prevent scratches on the bike and other surface damage. Transportation arrangements depend on your route, bike model and other requirements.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 4: WHAT IS INVOLVED INTO THE PROCESS (H2 #3)                   -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-process" aria-label="What Is Involved into the Process of Bike Transportation">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Step-by-Step Procedure</span>
      </div>
      <h3 class="inner-section-title">What Is Involved into the Process of Bike Transportation?</h3>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Step 01 Card -->
      <div class="col-12 col-md-4">
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
            <p class="process-step-paragraph mb-0">
              To begin with, we will need to ask you some questions regarding the pickup and delivery locations, bike model and preferred delivery date. We will use this data to compose a quotation for you.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 02 Card -->
      <div class="col-12 col-md-4">
        <div class="process-timeline-card h-100">
          <div class="process-timeline-head">
            <div class="process-step-pill">
              <span class="process-step-circle">2</span>
              <span class="process-step-label">Step 2</span>
            </div>
            <div class="process-step-icon">
              <i class="bi bi-box-seam-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <p class="process-step-paragraph mb-0">
              After your confirmation of the booking, the bike will be prepared for transportation: it will be inspected, packed and loaded properly. Our team will arrange the transportation process and inform you about all updates along the way.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 03 Card -->
      <div class="col-12 col-md-4">
        <div class="process-timeline-card h-100">
          <div class="process-timeline-head">
            <div class="process-step-pill">
              <span class="process-step-circle">3</span>
              <span class="process-step-label">Step 3</span>
            </div>
            <div class="process-step-icon">
              <i class="bi bi-patch-check-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <p class="process-step-paragraph mb-0">
              After delivery, check the condition of the bike. Compare it with the data from the initial inspection and report about any possible damages or defects as soon as possible.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 5: WHY CHOOSE PROFESSIONAL BIKE SHIFTING (H2 #4)                -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-why-choose" aria-label="Why Should You Choose Professional Bike Shifting">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Key Advantages</span>
      </div>
      <h3 class="inner-section-title">Why Should You Choose Professional Bike Shifting?</h3>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Advantage Card 1 (Red Accent) -->
      <div class="col-12 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <div class="advantage-card-content">
              <p class="advantage-card-text mb-0">
                Transportation of your bike over a long distance without professional assistance increases the risk of damage during transportation. Instead of riding your motorcycle hundreds of kilometers, you should use professional bike transportation service.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Advantage Card 2 (Navy Accent) -->
      <div class="col-12 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-journal-check"></i>
            </div>
            <div class="advantage-card-content">
              <p class="advantage-card-text mb-0">
                Our company can give you all the details concerning available routes, packing, delivery and insurance, if necessary. The overall price of transportation will depend on the distance, bike model, packing required, availability of access to your bike at pickup and delivery points. It is recommended to clarify these details before booking.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ======================================================================= -->
<!-- SECTION 6: FAQS WITH SCHEMA.ORG JSON-LD (H2 #5)                         -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-faqs" aria-label="Frequently Asked Questions About Bike Transportation">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Clear Answers &bull; Transparent Guidance</span>
      </div>
      <h3 class="inner-section-title">Frequently Asked Questions</h3>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-9">
        <div class="faq-accordion-wrapper" itemscope itemtype="https://schema.org/FAQPage">
          <div class="accordion d-flex flex-column gap-3" id="bikeFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="bikeFaqHeading0">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapse0" aria-expanded="true" aria-controls="bikeFaqCollapse0">
                  <span class="home-faq-num me-3">01</span>
                  <span itemprop="name">How much does bike transportation cost?</span>
                </button>
              </h4>
              <div id="bikeFaqCollapse0" class="accordion-collapse collapse show" aria-labelledby="bikeFaqHeading0" data-bs-parent="#bikeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Price will depend on the distance, locations of pickup and delivery, bike model and type of packing required. Consult our team to get your quotation.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="bikeFaqHeading1">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapse1" aria-expanded="false" aria-controls="bikeFaqCollapse1">
                  <span class="home-faq-num me-3">02</span>
                  <span itemprop="name">How long does bike transportation take?</span>
                </button>
              </h4>
              <div id="bikeFaqCollapse1" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeading1" data-bs-parent="#bikeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Time required for delivery will depend on the route, distance, transport arrangement and accessibility of the delivery point. You can consult our team regarding the delivery period while booking.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="bikeFaqHeading2">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapse2" aria-expanded="false" aria-controls="bikeFaqCollapse2">
                  <span class="home-faq-num me-3">03</span>
                  <span itemprop="name">Is packing necessary for bike transportation?</span>
                </button>
              </h4>
              <div id="bikeFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeading2" data-bs-parent="#bikeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      It is highly recommended because it decreases the possibility of scratches and other surface damage during the process of transportation.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="bikeFaqHeading3">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapse3" aria-expanded="false" aria-controls="bikeFaqCollapse3">
                  <span class="home-faq-num me-3">04</span>
                  <span itemprop="name">Can I move my scooter together with my household goods?</span>
                </button>
              </h4>
              <div id="bikeFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeading3" data-bs-parent="#bikeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Depending on the route and arrangements available, you may discuss this option with our team.
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