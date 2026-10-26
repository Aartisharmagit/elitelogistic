<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- SECTION 1: INNER PAGE HERO & DYNAMIC BREADCRUMBS (H1)                   -->
<!-- ======================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Top Household Shifting Services',
    'bc_desc' => 'A household move is not just about packing items into boxes. Furniture has to be protected, electronic appliances handled carefully, and household items organized efficiently.',
    'breadcrumbs' => [
        ['name' => 'Household Relocation']
    ]
]); ?>

<!-- ======================================================================= -->
<!-- SECTION 2: CORPORATE INTRO & FRAMED PHOTO SHOWCASE (H2 #1)              -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-overview" aria-label="Top Household Shifting Services">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Featured Photo -->
      <div class="col-12 col-lg-5">
        <div class="about-image-wrapper position-relative">
          <img src="<?= base_url('assets/img/household_shifting.jpg') ?>" alt="Top Household Shifting Services - <?= htmlspecialchars($company3) ?>" class="about-main-img" width="1080" height="720" loading="lazy">
        </div>
      </div>

      <!-- Right Column: Narrative Content -->
      <div class="col-12 col-lg-7">
        <div class="inner-section-tag">
          <span class="inner-section-bar"></span>
          <span>Household Relocation &bull; Safe &amp; Organized</span>
        </div>
        
        <h2 class="inner-section-title mb-3">
          Top Household Shifting Services
        </h2>

        <p class="service-desc-text text-secondary mb-3">
          A household move is not just about packing items into boxes. Furniture has to be protected, electronic appliances have to be handled carefully, and household items have to be packed in such a manner that makes them easy to locate upon arrival at the new address. With poor planning, even a short-distance move can take more time than expected.
        </p>

        <p class="service-desc-text text-secondary mb-4">
          <strong><?= htmlspecialchars($company3) ?></strong> provides household shifting services for individuals, families and professional persons. No matter whether you have plans to move to another place in the same city or to another city entirely, the household shifting arrangements can be made as per the household size, distance and specifications.
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
<!-- SECTION 3: HOUSEHOLD PACKING & MOVING SERVICES (H2 #2)                  -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-included" aria-label="Household Packing and Moving Services for Every Household">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Every Household Covered</span>
      </div>
      <h2 class="inner-section-title">Household Packing &amp; Moving Services for Every Household</h2>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        Every household item requires a different method of packaging. It is essential that glass items, kitchen utensils, electronic appliances and furniture be handled carefully during transport. Household shifting services may include the following:
      </p>
    </div>

    <!-- 5 Services Grid -->
    <div class="row g-4 justify-content-center">
      
      <!-- Service 1: Packing Household Goods -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Packing Household Goods</h3>
            <p class="inclusion-text mb-0 small">
              Packing clothes, books, kitchen items, toys, and personal items in suitable cartons.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 2: Furniture Shifting -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-lamp-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Furniture Shifting</h3>
            <p class="inclusion-text mb-0 small">
              Shifting beds, sofa, wardrobe, table and chairs, along with dismantling, if agreed.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 3: Transportation of Appliances -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-tv-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Transportation of Appliances</h3>
            <p class="inclusion-text mb-0 small">
              Packaging of televisions, refrigerator and washing machine as per their handling requirement.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 4: Protection of Fragile Items -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Protection of Fragile Items</h3>
            <p class="inclusion-text mb-0 small">
              Suitable cushioning of crockery, mirror, glass items, and decoration items.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 5: Loading, Transporting and Unloading -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-truck"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Loading, Transporting and Unloading</h3>
            <p class="inclusion-text mb-0 small">
              Loading of packed items in the vehicle, transporting of packed items to the destination and unloading of packed items at the new location.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 4: HOW WE PREPARE YOUR HOUSEHOLD SHIFTING (H3 #1)               -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-process" aria-label="How We Prepare Your Household Shifting">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Step-by-Step Procedure</span>
      </div>
      <h3 class="inner-section-title">How We Prepare Your Household Shifting</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        The first step will be to understand your moving requirements. The number of rooms, volume of the items, distance, floor, availability of lifts, and vehicle accessibility will help determine the packing arrangement and mode of transport.
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
            <h4 class="fw-bold fs-6 text-dark mb-2">Understand Moving Requirements</h4>
            <p class="process-step-paragraph mb-0">
              Evaluating number of rooms, inventory volume, travel distance, origin &amp; destination floors, lift facilities, and truck accessibility.
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
              <i class="bi bi-tags-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Category Packing &amp; Labeling</h4>
            <p class="process-step-paragraph mb-0">
              Each item will be packed in accordance to its category and cartons may be labeled as per the room for effortless identification.
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
              <i class="bi bi-truck-front-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Transport &amp; Unloading</h4>
            <p class="process-step-paragraph mb-0">
              Following the loading process, the items will be transported to the destination and unloaded as per the service arrangements.
            </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Essential Pre-Move Checklist Advisory -->
    <div class="row justify-content-center mt-4 pt-2">
      <div class="col-12 col-lg-10">
        <div class="p-3 p-md-4 rounded-4 bg-light border border-danger-subtle shadow-sm d-flex align-items-start gap-3">
          <div class="flex-shrink-0 text-danger fs-3 mt-1">
            <i class="bi bi-info-circle-fill"></i>
          </div>
          <div>
            <div class="service-feature-title fw-bold text-dark mb-1">Important Checklist Before Your Moving Date</div>
            <p class="service-feature-desc text-secondary mb-0 small">
              Before your moving date, please keep medicines, important documents, jewelry, chargers and other daily necessities separately. Additionally, make sure that there are no permission issues at the societies and parking issues at both locations.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 5: FACTORS THAT DETERMINE CHARGES (H3 #2)                       -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-cost-factors" aria-label="Factors that Determine Household Shifting Charges">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Pricing Transparency</span>
      </div>
      <h3 class="inner-section-title">Factors that Determine Household Shifting Charges</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-760">
        The charges will depend on the number of items being shifted, distance, packing material requirement, labor requirement, floor level accessibility and any furniture dismantling requirement or other specific handling requirement. Providing details regarding your moving plan will help you get a more suitable quotation.
      </p>
    </div>

    <!-- 6 Factors Grid -->
    <div class="row g-4 justify-content-center">
      
      <!-- Factor 1 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-boxes"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Number of items</h4>
              <p class="advantage-card-text mb-0 small">
                Total inventory count and volume of furniture, boxes, and household effects.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 2 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Moving distance</h4>
              <p class="advantage-card-text mb-0 small">
                Total road kilometers between your current home and your new destination address.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 3 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Packing material</h4>
              <p class="advantage-card-text mb-0 small">
                Required volume of specialized cartons, bubble wrap, foam, and protective sheets.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 4 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Labor requirement</h4>
              <p class="advantage-card-text mb-0 small">
                Crew size required for systematic packing, careful lifting, and truck loading.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 5 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-building"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Floor accessibility</h4>
              <p class="advantage-card-text mb-0 small">
                Floor level accessibility, presence of functional service lifts, and carry distance.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 6 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-wrench-adjustable"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Dismantling &amp; handling</h4>
              <p class="advantage-card-text mb-0 small">
                Furniture dismantling (beds, wardrobes) or fragile specialty handling requirements.
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
<section class="inner-section-white py-5" id="service-faqs" aria-label="Frequently Asked Questions about Household Shifting">
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
          <div class="accordion d-flex flex-column gap-3" id="homeFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="homeFaqHeading0">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#homeFaqCollapse0" aria-expanded="true" aria-controls="homeFaqCollapse0">
                  <span class="home-faq-num me-3">01</span>
                  <span itemprop="name">When should I book household shifting services?</span>
                </button>
              </h4>
              <div id="homeFaqCollapse0" class="accordion-collapse collapse show" aria-labelledby="homeFaqHeading0" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      It is suggested that a minimum of one week and preferably two weeks be kept aside for bookings of your moving service.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="homeFaqHeading1">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeFaqCollapse1" aria-expanded="false" aria-controls="homeFaqCollapse1">
                  <span class="home-faq-num me-3">02</span>
                  <span itemprop="name">Does it include packing and transport?</span>
                </button>
              </h4>
              <div id="homeFaqCollapse1" class="accordion-collapse collapse" aria-labelledby="homeFaqHeading1" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Packing and loading, transportation and unloading of household items may be included depending on the household shifting services.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="homeFaqHeading2">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeFaqCollapse2" aria-expanded="false" aria-controls="homeFaqCollapse2">
                  <span class="home-faq-num me-3">03</span>
                  <span itemprop="name">How to pack fragile household items?</span>
                </button>
              </h4>
              <div id="homeFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="homeFaqHeading2" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Individual items need to be wrapped suitably, cushioned and marked as fragile.
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


