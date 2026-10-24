<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- SECTION 1: INNER PAGE HERO & DYNAMIC BREADCRUMBS (H1)                   -->
<!-- ======================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Reliable Office Shifting Solutions',
    'bc_desc' => 'When shifting an office, it is essential that furniture, computers, important documents, and office equipment are shifted efficiently without causing business delay.',
    'breadcrumbs' => [
        ['name' => 'Office Relocation']
    ]
]); ?>

<!-- ======================================================================= -->
<!-- SECTION 2: CORPORATE INTRO & FRAMED PHOTO SHOWCASE (H2 #1)              -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-overview" aria-label="Reliable Office Shifting Solutions">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Featured Photo -->
      <div class="col-12 col-lg-5">
        <div class="about-image-wrapper position-relative">
          <img src="<?= base_url('assets/img/office_shifting.jpg') ?>" alt="Reliable Office Shifting Solutions - <?= htmlspecialchars($company3) ?>" class="about-main-img" width="1080" height="720" loading="lazy">
        </div>
      </div>

      <!-- Right Column: Narrative Content -->
      <div class="col-12 col-lg-7">
        <div class="inner-section-tag">
          <span class="inner-section-bar"></span>
          <span>Commercial Relocation &bull; Business Continuity</span>
        </div>
        
        <h2 class="inner-section-title mb-3">
          Reliable Office Shifting Solutions
        </h2>

        <p class="service-desc-text text-secondary mb-3">
          When shifting an office, it is essential that furniture, computers, important documents, and other office equipment are shifted efficiently without causing any delay to the business. It requires proper planning, especially in case of employees resuming work immediately after office shifting.
        </p>

        <p class="service-desc-text text-secondary mb-4">
          <strong><?= htmlspecialchars($company3) ?></strong> provides quality office shifting services for businesses that are thinking of shifting their office place.
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
<!-- SECTION 3: SERVICES IN RELATION TO YOUR OFFICE RELOCATION REQUIREMENTS (H2 #2) -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-included" aria-label="Services in Relation to Your Office Relocation Requirements">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Comprehensive Scope</span>
      </div>
      <h2 class="inner-section-title">Services in Relation to Your Office Relocation Requirements</h2>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        Office shifting services provided by us include complete end-to-end commercial moving support:
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Service 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-lamp-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Packing of office furniture</h3>
            <p class="inclusion-text mb-0 small">
              Workstations, executive desks, conference tables, and ergonomic chairs with protective wrapping.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-laptop-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Packing of electronic devices</h3>
            <p class="inclusion-text mb-0 small">
              Antistatic bubble wraps and cushioned casing for computers, monitors, printers, and servers.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-folder-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Packing &amp; organizing documents</h3>
            <p class="inclusion-text mb-0 small">
              Systematic indexing of company files, contracts, and archives to prevent loss or misplacement.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-box-arrow-in-up"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Loading of goods</h3>
            <p class="inclusion-text mb-0 small">
              Careful handling and strategic staging using commercial dollies and hydraulic tail-lifts.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-truck"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Transportation</h3>
            <p class="inclusion-text mb-0 small">
              Dedicated covered container trucks with GPS tracking for local and interstate business moves.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 6 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-box-arrow-down"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Unloading at destination</h3>
            <p class="inclusion-text mb-0 small">
              Smooth placement into designated office bays, server rooms, and meeting zones.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 7 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Fragile packing materials</h3>
            <p class="inclusion-text mb-0 small">
              Multi-layer corrugated sheets, foam rolls, and edge guards appropriate for fragile items.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 8 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-tag-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Department &amp; employee labeling</h3>
            <p class="inclusion-text mb-0 small">
              Clear labeling on cartons with names of departments or employees for immediate setup.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 4: OUR OFFICE RELOCATION PROCESS (H2 #3)                        -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-process" aria-label="Our Office Relocation Process">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Step-by-Step Procedure</span>
      </div>
      <h3 class="inner-section-title">Our Office Relocation Process</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        The office relocation process begins with understanding of your requirements. These requirements include the quantity of goods that will be shifted, distance, floor access, lift facility available and date of shifting office.
      </p>
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
              <i class="bi bi-clipboard2-check-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Requirements Assessment</h4>
            <p class="process-step-paragraph mb-0">
              Assessing quantity of goods, moving distance, origin &amp; destination floor access, lift facilities, and preferred dates for relocation.
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
              <i class="bi bi-people-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Resource Planning</h4>
            <p class="process-step-paragraph mb-0">
              Based on this information, the manpower, packing material and transportation requirement is determined and confirmed with you.
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
              <i class="bi bi-box-seam-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Specialized Packing</h4>
            <p class="process-step-paragraph mb-0">
              Once everything is finalized, furniture and equipment are packed in accordance with their specific packing requirements.
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
              <i class="bi bi-building-check"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Loading, Transit &amp; Unloading</h4>
            <p class="process-step-paragraph mb-0">
              Goods are loaded securely, transported, and unloaded at the new office place ready for prompt team setup.
            </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Data Backup & Document Tip -->
    <div class="text-center mt-4 pt-2">
      <span class="badge bg-white text-secondary border px-3 py-2 fw-semibold rounded-pill">
        <i class="bi bi-shield-check text-success me-1"></i> <strong>Pro Tip:</strong> It is advisable to back up the data from your computer and separate out important documents before office shifting.
      </span>
    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 5: WHY DO YOU NEED PROFESSIONAL OFFICE RELOCATION? (H2 #4)      -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-why-choose" aria-label="Why Do You Need Professional Office Relocation Services">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Key Advantages</span>
      </div>
      <h3 class="inner-section-title">Why Do You Need Professional Office Relocation Services?</h3>
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
              <h4 class="fw-bold fs-5 text-dark mb-2">Well-Planned Moving Without Loss of Man-Hours</h4>
              <p class="advantage-card-text mb-0">
                Office shifting is not just a transportation process but a complete process of packaging, loading, transporting and unloading of goods in a well-planned manner. In case of poor coordination, there may be issues such as misplaced files, damaged furniture and loss of man-hours due to the inefficiency of the process.
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
              <i class="bi bi-calendar-week-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-5 text-dark mb-2">Weekend &amp; After-Hours Execution for Employees</h4>
              <p class="advantage-card-text mb-0">
                For office shifting, it is better to make the process less troublesome for the employees. To achieve this, it would be better to consider moving of the office after office hours or at weekends, where available, ensuring business continuity with zero disruption.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 6: FACTORS THAT IMPACT OFFICE RELOCATION CHARGES (H2 #5)        -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-cost-factors" aria-label="Factors that Impact Office Relocation Charges">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Pricing Transparency</span>
      </div>
      <h3 class="inner-section-title">Factors that Impact Office Relocation Charges</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-760">
        Costs involved in office relocation depend upon the following factors:
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
              <i class="bi bi-building"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Size of the office</h4>
              <p class="advantage-card-text mb-0 small">
                Overall carpet area and layout determining the scale of planning.
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
              <i class="bi bi-boxes"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Quantity of goods</h4>
              <p class="advantage-card-text mb-0 small">
                Total count of workstations, electronics, chairs, and filing units.
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
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Distance involved</h4>
              <p class="advantage-card-text mb-0 small">
                Total road kilometers between old office and new commercial premises.
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
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Packaging materials</h4>
              <p class="advantage-card-text mb-0 small">
                Grade of antistatic wrapping, crates, and specialized protective layers.
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
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Manpower</h4>
              <p class="advantage-card-text mb-0 small">
                Number of certified packers, handlers, and supervisors allocated.
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
              <h4 class="fw-bold fs-6 text-dark mb-1">Dismantling requirement</h4>
              <p class="advantage-card-text mb-0 small">
                Modular workstation breakdown, server unmounting, and reassembly.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 7: FAQS WITH SCHEMA.ORG JSON-LD (H2 #6)                         -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-faqs" aria-label="FAQs about Office Relocation Services">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Clear Answers &bull; Transparent Guidance</span>
      </div>
      <h3 class="inner-section-title">FAQs about Office Relocation Services</h3>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-9">
        <div class="faq-accordion-wrapper" itemscope itemtype="https://schema.org/FAQPage">
          <div class="accordion d-flex flex-column gap-3" id="officeFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="officeFaqHeading0">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapse0" aria-expanded="true" aria-controls="officeFaqCollapse0">
                  <span class="home-faq-num me-3">01</span>
                  <span itemprop="name">What is the cost of office relocation services?</span>
                </button>
              </h4>
              <div id="officeFaqCollapse0" class="accordion-collapse collapse show" aria-labelledby="officeFaqHeading0" data-bs-parent="#officeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Cost will depend upon the number of goods, distance, packaging material and labor requirement. Get your quotation based on your requirements.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="officeFaqHeading1">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapse1" aria-expanded="false" aria-controls="officeFaqCollapse1">
                  <span class="home-faq-num me-3">02</span>
                  <span itemprop="name">How do we minimize the downtime in office shifting?</span>
                </button>
              </h4>
              <div id="officeFaqCollapse1" class="accordion-collapse collapse" aria-labelledby="officeFaqHeading1" data-bs-parent="#officeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Proper planning, labeling of cartons, backing up important data and scheduling outside the working hours can reduce the downtime in office relocation.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="officeFaqHeading2">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapse2" aria-expanded="false" aria-controls="officeFaqCollapse2">
                  <span class="home-faq-num me-3">03</span>
                  <span itemprop="name">Are packing and transportation included in the office relocation services?</span>
                </button>
              </h4>
              <div id="officeFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="officeFaqHeading2" data-bs-parent="#officeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Packing and transportation could be included in office relocation services. Clarify your requirements before booking the services.
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
<!-- SECTION 8: READY TO PLAN YOUR OFFICE RELOCATION? (HOMEPAGE RED CTA)     -->
<!-- ======================================================================= -->
<section class="site-section section-bg-white cta-band-section" id="book-now" aria-label="Ready to Plan Your Office Relocation">
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
        
        <!-- Left Column: Headline & Subtext with Office Content -->
        <div class="col-12 col-lg-7 text-center text-lg-start">
          <h3 class="cta-band-title text-white fw-bold mb-2">
            Ready to Plan Your Office Relocation?
          </h3>
          <p class="cta-band-subtitle mb-0">
            Get your office relocation quotation from <?= htmlspecialchars($company3) ?>. Call Now: <a href="<?= $phonehtml ?>" class="text-white text-decoration-underline fw-bold"><?= $phone ?></a>.
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