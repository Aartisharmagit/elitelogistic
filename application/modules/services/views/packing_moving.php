<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- SECTION 1: INNER PAGE HERO & DYNAMIC BREADCRUMBS (H1)                   -->
<!-- ======================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Trusted Packing & Unpacking Services' . (!empty($city) ? " in $city" : ''),
    'bc_desc' => 'Packing up your home or office tailored to your items. ' . htmlspecialchars($company3) . ' provides complete domestic, office, fragile, and furniture packing & unpacking assistance.',
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
    ]
]); ?>

<!-- ======================================================================= -->
<!-- SECTION 2: CORPORATE INTRO & FRAMED PHOTO SHOWCASE (H2 #1)              -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-overview" aria-label="Trusted Packing and Unpacking Services">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Featured Photo -->
      <div class="col-12 col-lg-5">
        <div class="about-image-wrapper position-relative">
          <img src="<?= base_url('assets/img/packing_moving.jpg') ?>" alt="Trusted Packing &amp; Unpacking Services - <?= htmlspecialchars($company3) ?>" class="about-main-img" width="1080" height="720" loading="lazy">
        </div>
      </div>

      <!-- Right Column: Narrative Content -->
      <div class="col-12 col-lg-7">
        <div class="inner-section-tag">
          <span class="inner-section-bar"></span>
          <span>Packing &amp; Unpacking Services &bull; Safe &amp; Tailored</span>
        </div>
        
        <h2 class="inner-section-title mb-3">
          Trusted Packing &amp; Unpacking Services
        </h2>

        <p class="service-desc-text text-secondary mb-3">
          Packing up your home or office is not something you think will take that long. You start packing one cupboard and there you have another, with fragile items needing special treatment. Boxes appear everywhere and finally you have to unpack, where all you want is to have your kitchen stuff and workspace sorted out.
        </p>

        <p class="service-desc-text text-secondary mb-4">
          Whether you plan a domestic or office relocation, our packing services can be tailored to your items and required assistance. Our company <strong><?= htmlspecialchars($company3) ?></strong> is ready to assist you with packing &amp; unpacking service.
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
<!-- SECTION 3: PACKING SERVICE FOR FURNITURE, APPLIANCES & MISC (H2 #2)     -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-included" aria-label="Packing Service for Furniture, Appliances and Miscellaneous Items">
  <div class="container">
    
    <div class="text-center inner-section-header mb-4">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Comprehensive Protection</span>
      </div>
      <h2 class="inner-section-title">Packing Service for Furniture, Appliances and Miscellaneous Items</h2>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-820">
        Not everything can be packed in a similar way. For example, some items may require additional cushioning, others could get damaged in case of mishandling, while some would require special protection. Selection of appropriate packing materials is important, especially if the goods are shipped long distance away.
      </p>
      <p class="service-feature-title fw-bold text-dark mt-2 mb-0">
        Our packing services can include:
      </p>
    </div>

    <!-- 5 Inclusions Grid -->
    <div class="row g-4 justify-content-center">
      
      <!-- Inclusion 1: Domestic Packing -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Domestic Packing</h3>
            <p class="inclusion-text mb-0 small">
              Clothing, books, kitchen utensils, toys and other personal items packed into appropriate cartons.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 2: Furniture Packing -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-lamp-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Furniture Packing</h3>
            <p class="inclusion-text mb-0 small">
              Wrapping beds, sofas, dining table, chairs and wardrobes with heavy protective blankets and wrap.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 3: Fragile Items Packing -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-cup-hot-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Fragile Items Packing</h3>
            <p class="inclusion-text mb-0 small">
              Extra cushioning of crockery, mirrors, glassware and other fragile items to absorb transit shocks.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 4: Appliances Packing -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-tv-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Appliances Packing</h3>
            <p class="inclusion-text mb-0 small">
              Preparation of TVs, computers and other electronic items for shipment with antistatic padding and secure boxing.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 5: Office Packing -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-building"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Office Packing</h3>
            <p class="inclusion-text mb-0 small">
              Organisation of files, stationery, computers and other workplace equipment for minimal downtime.
            </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Packing Material Guidance Callout -->
    <div class="row justify-content-center mt-4 pt-2">
      <div class="col-12 col-lg-10">
        <div class="p-3 p-md-4 rounded-4 bg-white border border-danger-subtle shadow-sm d-flex align-items-start gap-3">
          <div class="flex-shrink-0 text-danger fs-3 mt-1">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <div class="service-feature-title fw-bold text-dark mb-1">Appropriate Protective Materials</div>
            <p class="service-feature-desc text-secondary mb-0 small">
              Corrugated cartons, bubble wrap, stretch film and protective sheets could be used depending on the items. The aim is to limit movement inside cartons and prevent scratching or damage during handling.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 4: OUR PACKING & UNPACKING SERVICE PROCESS (H3 #1)              -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-process" aria-label="Our Packing and Unpacking Service Process">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Step-by-Step Procedure</span>
      </div>
      <h3 class="inner-section-title">Our Packing &amp; Unpacking Service Process</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        A methodical, orderly packing and unpacking sequence ensures your possessions stay safe and can be settled without stress.
      </p>
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
              <i class="bi bi-clipboard2-check-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Identification &amp; Particular Attention</h4>
            <p class="process-step-paragraph mb-0">
              First, identification of items to be packed and their particular attention is made. Fragile goods, electronics, and heavy furniture are noted for custom wrapping.
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
            <h4 class="fw-bold fs-6 text-dark mb-2">Organised Packing &amp; Room Labelling</h4>
            <p class="process-step-paragraph mb-0">
              The items are then organised, packed and placed in appropriate cartons. Labelling of cartons by rooms will make things much easier, as no one wants to unpack six cartons in order to look for his kettle.
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
              <i class="bi bi-house-check-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Destination Unpacking &amp; Placement</h4>
            <p class="process-step-paragraph mb-0">
              At destination, unpacking may consist of opening cartons, unpacking and placing of items in particular areas depending on the agreed-upon service.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 5: WHY DO YOU NEED PROFESSIONAL PACKING HELP? (H3 #2)           -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-why-need" aria-label="Why Do You Need Professional Packing Help?">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Expert Assistance</span>
      </div>
      <h3 class="inner-section-title">Why Do You Need Professional Packing Help?</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-760">
        Packing all by yourself is always possible. But you will need time, packing materials and much patience. Professional help could be useful if you have a big household, bulky furniture, fragile items or an office with items requiring organised handling.
      </p>
    </div>

    <!-- 4 Reasons Grid -->
    <div class="row g-4 justify-content-center">
      
      <!-- Reason 1: Big Household -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-houses-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Big Household Moves</h4>
              <p class="advantage-card-text mb-0 small">
                Packing multiple bedrooms, cupboards, and personal items takes significant time and energy without professional hands.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Reason 2: Bulky Furniture -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-box-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Bulky Furniture Wrapping</h4>
              <p class="advantage-card-text mb-0 small">
                Disassembling and safely wrapping beds, wardrobes, and dining tables requires specialized padding and heavy lifting.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Reason 3: Fragile Items -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-shield-shaded"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Fragile Items Protection</h4>
              <p class="advantage-card-text mb-0 small">
                Delicate glassware, mirrors, and crockery require multi-layered cushioning and shock-absorbent packing techniques.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Reason 4: Office Relocation -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-briefcase-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Organised Office Handling</h4>
              <p class="advantage-card-text mb-0 small">
                Files, desktop computers, and office equipment must be packed systematically to resume operations quickly.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 6: FAQS WITH SCHEMA.ORG JSON-LD (H3 #3)                         -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-faqs" aria-label="Frequently Asked Questions about Packing and Unpacking">
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
          <div class="accordion d-flex flex-column gap-3" id="packFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="packFaqHeading0">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#packFaqCollapse0" aria-expanded="true" aria-controls="packFaqCollapse0">
                  <span class="home-faq-num me-3">01</span>
                  <span itemprop="name">Will packing materials be provided in your service?</span>
                </button>
              </h4>
              <div id="packFaqCollapse0" class="accordion-collapse collapse show" aria-labelledby="packFaqHeading0" data-bs-parent="#packFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      It depends on the selected package. Clarify what packing materials will be provided and whether any extra cost applies. When discussing your quotation with <?= htmlspecialchars($company3) ?>, all required corrugated cartons, bubble wraps, and protective sheets can be tailored to your moving needs.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="packFaqHeading1">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packFaqCollapse1" aria-expanded="false" aria-controls="packFaqCollapse1">
                  <span class="home-faq-num me-3">02</span>
                  <span itemprop="name">Is it possible to book only the unpacking service?</span>
                </button>
              </h4>
              <div id="packFaqCollapse1" class="accordion-collapse collapse" aria-labelledby="packFaqHeading1" data-bs-parent="#packFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      It depends on the availability. Just mention your requirements when asking for a quotation, and our team will arrange dedicated unpacking assistance for your destination where feasible.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="packFaqHeading2">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packFaqCollapse2" aria-expanded="false" aria-controls="packFaqCollapse2">
                  <span class="home-faq-num me-3">03</span>
                  <span itemprop="name">What packing materials are commonly used for relocation?</span>
                </button>
              </h4>
              <div id="packFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="packFaqHeading2" data-bs-parent="#packFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Corrugated cartons, bubble wrap, stretch film and protective sheets are used depending on the items. The aim is to limit movement inside cartons and prevent scratching or damage during handling.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="packFaqHeading3">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packFaqCollapse3" aria-expanded="false" aria-controls="packFaqCollapse3">
                  <span class="home-faq-num me-3">04</span>
                  <span itemprop="name">How does room-wise carton labelling help during unpacking?</span>
                </button>
              </h4>
              <div id="packFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="packFaqHeading3" data-bs-parent="#packFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Labelling of cartons by rooms will make things much easier, as no one wants to unpack six cartons in order to look for his kettle. Cartons are placed directly in the right room at destination.
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
