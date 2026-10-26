<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================================= -->
<!-- SECTION 1: INNER PAGE HERO & DYNAMIC BREADCRUMBS (H1)                   -->
<!-- ======================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Reliable Loading and Unloading Services' . (!empty($city) ? " in $city" : ''),
    'bc_desc' => 'Physical moving labor handled with care. ' . htmlspecialchars($company3) . ' provides professional loading and unloading for household furniture, heavy appliances, office desks, and packed cartons.',
    'breadcrumbs' => [
        ['name' => 'Loading & Unloading']
    ]
]); ?>

<!-- ======================================================================= -->
<!-- SECTION 2: CORPORATE INTRO & FRAMED PHOTO SHOWCASE (H2 #1)              -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-overview" aria-label="Reliable Loading and Unloading Services">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Featured Photo -->
      <div class="col-12 col-lg-5">
        <div class="about-image-wrapper position-relative">
          <img src="<?= base_url('assets/img/loading_unloading.jpg') ?>" alt="Reliable Loading and Unloading Services - <?= htmlspecialchars($company3) ?>" class="about-main-img" width="1080" height="720" loading="lazy">
        </div>
      </div>

      <!-- Right Column: Narrative Content -->
      <div class="col-12 col-lg-7">
        <div class="inner-section-tag">
          <span class="inner-section-bar"></span>
          <span>Loading &amp; Unloading Services &bull; Heavy Handling &bull; Safe Labor</span>
        </div>
        
        <h2 class="inner-section-title mb-3">
          Reliable Loading and Unloading Services
        </h2>

        <p class="service-desc-text text-secondary mb-3">
          Moving your house is tough but becoming tougher due to all the physical labor associated with it such as carrying heavy furniture pieces, packing of cartons, making sure that everything fits inside the truck. Same is the case of office moving where all desks and chairs have to be shifted.
        </p>

        <p class="service-desc-text text-secondary mb-4">
          <strong><?= htmlspecialchars($company3) ?></strong> can help in doing the physical part of this process which includes the loading and unloading of your possessions in and out of the truck.
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
<!-- SECTION 3: CAREFUL LOADING OF YOUR ITEMS (H2 #2)                        -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-loading" aria-label="Careful Loading of Your Items">
  <div class="container">
    
    <div class="text-center inner-section-header mb-4">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Safe Stacking &amp; Arrangement</span>
      </div>
      <h2 class="inner-section-title">Careful Loading of Your Items</h2>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-820">
        Different things require different handling; a sofa can't be loaded the way the carton of kitchen utensils should be loaded while the refrigerator needs special care due to its heaviness. The arrangement of the goods inside the truck also becomes important especially if the journey involves fast speed breakers and uneven roads.
      </p>
      <p class="service-feature-title fw-bold text-dark mt-2 mb-0">
        We can assist in loading the items like:
      </p>
    </div>

    <!-- 4 Inclusions Grid -->
    <div class="row g-4 justify-content-center">
      
      <!-- Inclusion 1: Furniture of House -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-lamp-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Furniture of House</h3>
            <p class="inclusion-text mb-0 small">
              Beds, sofas, table, cupboards and chairs handled carefully to prevent scuffs, structural stress, and damage.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 2: Packed Cartons -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Packed Cartons</h3>
            <p class="inclusion-text mb-0 small">
              Clothes, books, kitchen items and other personal items stacked securely to prevent shifting during transit.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 3: Goods of the Office -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-briefcase-fill"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Goods of the Office</h3>
            <p class="inclusion-text mb-0 small">
              Desks, chairs, storage items and packed equipment arranged systematically for fast workspace setup.
            </p>
          </div>
        </div>
      </div>

      <!-- Inclusion 4: Big Household Items -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="service-inclusion-box h-100 flex-column align-items-start">
          <div class="inclusion-icon-wrap mb-3">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <div class="inclusion-text-wrap">
            <h3 class="fw-bold fs-6 text-dark mb-1">Big Household Items</h3>
            <p class="inclusion-text mb-0 small">
              Washing machines, refrigerators and similar big things requiring upright handling and heavy weight support.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 4: MOVING YOUR POSSESSIONS TO YOUR DESTINATION (H3 #1)           -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-unloading" aria-label="Moving Your Possessions to Your Destination">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Destination Unloading &bull; Doorway &amp; Wall Care</span>
      </div>
      <h3 class="inner-section-title">Moving Your Possessions to Your Destination</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-820">
        After reaching the destination there is a lot more left to do including careful handling of the things being unloaded and taking them inside the building without blocking the entry points or damaging the walls and doors. It is really hard if your building does not have easy stairs or if the vehicle cannot come near to the entry point of the building. Unloading service will help in transferring your belongings from the vehicle to the places discussed with you before.
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
              <i class="bi bi-truck-front-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Careful Vehicle Unloading</h4>
            <p class="process-step-paragraph mb-0">
              Careful handling of goods as they are taken out of the transport vehicle, ensuring items are never dropped, dragged, or jarred.
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
              <i class="bi bi-shield-check"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Entry &amp; Doorway Protection</h4>
            <p class="process-step-paragraph mb-0">
              Taking items inside the building without blocking entry points or causing chips and scratches on walls, stairs, and doors.
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
              <i class="bi bi-house-door-fill"></i>
            </div>
          </div>
          
          <div class="process-step-line"></div>

          <div class="process-timeline-body">
            <h4 class="fw-bold fs-6 text-dark mb-2">Placement in Discussed Places</h4>
            <p class="process-step-paragraph mb-0">
              Transferring your belongings from the vehicle directly to the specific rooms and places discussed with you before.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 5: WHAT CAN INFLUENCE THE COST OF THE SERVICE? (H3 #2)           -->
<!-- ======================================================================= -->
<section class="inner-section-soft py-5" id="service-cost-factors" aria-label="What Can Influence the Cost of the Service?">
  <div class="container">
    
    <div class="text-center inner-section-header">
      <div class="inner-section-tag">
        <span class="inner-section-bar"></span>
        <span>Transparent Pricing Factors</span>
      </div>
      <h3 class="inner-section-title">What Can Influence the Cost of the Service?</h3>
      <p class="inner-section-subtitle text-secondary mx-auto mt-2" class="inner-section-subtitle text-secondary mx-auto mt-2 max-w-780">
        Price depends on the number of items, number of people required to do the job, access to the floor and the distance between the vehicle and the entry point of the building. Moving on the ground floor with proper access will take less time and effort compared to moving heavy furniture from the upper floors without a lift.
      </p>
    </div>

    <!-- 4 Cost Advantage Cards -->
    <div class="row g-4 justify-content-center">
      
      <!-- Factor 1: Number of Items -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-boxes"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Number of items</h4>
              <p class="advantage-card-text mb-0 small">
                The total volume of furniture pieces, packed cartons, and large appliances to be loaded and unloaded.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 2: Number of People Required -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Number of people required</h4>
              <p class="advantage-card-text mb-0 small">
                The crew size needed to safely lift, carry, and manage the physical workload efficiently.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 3: Floor Access & Lifts -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-red"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-red flex-shrink-0">
              <i class="bi bi-building-up"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Access to the floor</h4>
              <p class="advantage-card-text mb-0 small">
                Moving on the ground floor with proper access takes less effort compared to moving heavy furniture from upper floors without a lift.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Factor 4: Distance to Entry Point -->
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="service-advantage-card h-100">
          <div class="advantage-card-accent advantage-accent-navy"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="advantage-card-icon advantage-icon-navy flex-shrink-0">
              <i class="bi bi-signpost-split-fill"></i>
            </div>
            <div class="advantage-card-content">
              <h4 class="fw-bold fs-6 text-dark mb-1">Distance to entry point</h4>
              <p class="advantage-card-text mb-0 small">
                The walking carry distance between where the vehicle can park and the building entrance.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Accurate Estimation Advisory Banner -->
    <div class="row justify-content-center mt-4 pt-2">
      <div class="col-12 col-lg-10">
        <div class="p-3 p-md-4 rounded-4 bg-white border border-danger-subtle shadow-sm d-flex align-items-start gap-3">
          <div class="flex-shrink-0 text-danger fs-3 mt-1">
            <i class="bi bi-info-circle-fill"></i>
          </div>
          <div>
            <div class="service-feature-title fw-bold text-dark mb-1">Accurate Cost Estimation</div>
            <p class="service-feature-desc text-secondary mb-0 small">
              For a proper estimation of the cost we will require an approximate list of your items and problems of access if any.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ======================================================================= -->
<!-- SECTION 6: FAQS WITH SCHEMA.ORG JSON-LD (H3 #3)                         -->
<!-- ======================================================================= -->
<section class="inner-section-white py-5" id="service-faqs" aria-label="Frequently Asked Questions about Loading and Unloading">
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
          <div class="accordion d-flex flex-column gap-3" id="loadFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="loadFaqHeading0">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#loadFaqCollapse0" aria-expanded="true" aria-controls="loadFaqCollapse0">
                  <span class="home-faq-num me-3">01</span>
                  <span itemprop="name">Is it possible to book only loading or unloading?</span>
                </button>
              </h4>
              <div id="loadFaqCollapse0" class="accordion-collapse collapse show" aria-labelledby="loadFaqHeading0" data-bs-parent="#loadFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Please contact us to inquire about the availability considering your location and requirements.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="loadFaqHeading1">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadFaqCollapse1" aria-expanded="false" aria-controls="loadFaqCollapse1">
                  <span class="home-faq-num me-3">02</span>
                  <span itemprop="name">Can you shift bulky furniture?</span>
                </button>
              </h4>
              <div id="loadFaqCollapse1" class="accordion-collapse collapse" aria-labelledby="loadFaqHeading1" data-bs-parent="#loadFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      We shift the bulky items according to the size and type of handling of the furniture.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="loadFaqHeading2">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadFaqCollapse2" aria-expanded="false" aria-controls="loadFaqCollapse2">
                  <span class="home-faq-num me-3">03</span>
                  <span itemprop="name">How to receive an estimate of the price?</span>
                </button>
              </h4>
              <div id="loadFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="loadFaqHeading2" data-bs-parent="#loadFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Please contact us with your pickup address, destination and approximate list of your items.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item home-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h4 class="accordion-header" id="loadFaqHeading3">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadFaqCollapse3" aria-expanded="false" aria-controls="loadFaqCollapse3">
                  <span class="home-faq-num me-3">04</span>
                  <span itemprop="name">How do you prevent damage to walls and doors during unloading?</span>
                </button>
              </h4>
              <div id="loadFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="loadFaqHeading3" data-bs-parent="#loadFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="accordion-body">
                  <div class="home-faq-answer-inner" itemprop="text">
                    <p class="home-faq-answer-text mb-0">
                      Our crew ensures careful handling when maneuvering through doorways and staircases, preventing entry blockages and eliminating scuffs on walls, doors, and building passageways.
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
