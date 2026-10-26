<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
  $city_name = !empty($city) ? htmlspecialchars($city) : 'Your City';
  $curr_ctlink = !empty($ctlink) ? $ctlink : strtolower(str_replace(' ', '-', $city_name));
?>

<!-- 1. DYNAMIC BREADCRUMBS (H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Safe Loading and Unloading Services in ' . $city_name,
    'bc_desc' => 'Professional, heavy-lifting loading and unloading services in ' . $city_name . '. Trained labor crew, hydraulic ramps, furniture sliders, and zero-drop safety guarantees.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Loading & Unloading in ' . $city_name]
    ]
]); ?>

<!-- 2. TWO-COLUMN MAIN CONTENT & SIDEBAR SECTION -->
<section class="city-main-section py-4 py-lg-5 bg-light-subtle">
  <div class="container">

    <!-- Quick Trust Badges Strip -->
    <div class="row g-3 mb-4">
      <div class="col-6 col-lg-3">
        <div class="city-trust-card">
          <div class="city-trust-icon is-warning">
            <i class="bi bi-star-fill"></i>
          </div>
          <div class="city-trust-content">
            <div class="city-trust-title">4.9 / 5 Rating</div>
            <div class="city-trust-subtitle">1,950+ Moves in <?= $city_name ?></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="city-trust-card">
          <div class="city-trust-icon is-success">
            <i class="bi bi-shield-check"></i>
          </div>
          <div class="city-trust-content">
            <div class="city-trust-title">Zero-Drop Safety</div>
            <div class="city-trust-subtitle">Skilled Lifting Crew</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="city-trust-card">
          <div class="city-trust-icon is-primary">
            <i class="bi bi-patch-check-fill"></i>
          </div>
          <div class="city-trust-content">
            <div class="city-trust-title">IBA Approved</div>
            <div class="city-trust-subtitle">Code: EL-8709</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="city-trust-card">
          <div class="city-trust-icon is-danger">
            <i class="bi bi-lock-fill"></i>
          </div>
          <div class="city-trust-content">
            <div class="city-trust-title">Written Price Lock</div>
            <div class="city-trust-subtitle">Zero Hidden Fees</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 g-lg-5">
      
      <!-- ======================================================== -->
      <!-- LEFT / MAIN CONTENT COLUMN (col-12 col-lg-8)             -->
      <!-- ======================================================== -->
      <div class="col-12 col-lg-8">

        <!-- Card 1: Local Loading & Unloading Overview -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold">Heavy Lifting Logistics &bull; Certified Handlers</span>
          </div>
          <h2 class="fw-bold text-navy fs-3 mb-3">
            Professional Loading &amp; Unloading in <?= $city_name ?>
          </h2>

          <!-- Featured Service Photo with Overlay -->
          <div class="position-relative mb-4 overflow-hidden rounded-3 border border-light-subtle">
            <img src="<?= base_url('assets/img/loading_unloading.jpg') ?>" alt="Loading & Unloading in <?= $city_name ?> - <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 city-featured-img" loading="lazy">
            <div class="position-absolute bottom-0 start-0 m-3 p-2.5 px-3 bg-white bg-opacity-95 rounded-pill shadow-sm border border-light-subtle d-inline-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-danger small"></i>
              <span class="fw-semibold text-navy small">Trained labor crew available on-demand across <?= $city_name ?></span>
            </div>
          </div>

          <p class="text-secondary mb-3 leading-relaxed">
            The most critical phase of any move in <strong><?= $city_name ?></strong> is the physical handling of heavy furniture, appliances, and packed cartons during loading and unloading. Mishandling on narrow stairwells or unpadded container beds is the leading cause of furniture dents and structural damage. At <?= htmlspecialchars($company3) ?>, we deploy trained, physically fit loading crews equipped with heavy-duty dollies, nylon lifting straps, and rubberized furniture sliders.
          </p>
          <p class="text-secondary mb-4 leading-relaxed">
            Whether maneuvering bulky double-door refrigerators, heavy steel almirahs, modular beds, or commercial machinery across high-rise apartments with or without elevator access in <?= $city_name ?>, our team applies systematic container stacking protocols: placing heavy bases securely on the floor and anchoring goods with cargo safety belts to eliminate in-transit shifting.
          </p>

          <!-- 4 Core Moving Pillars Grid -->
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-gear-wide-connected"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Hydraulic Tail Lifts &amp; Ramps</h4>
                  <p class="text-muted small mb-0">Mechanical ramps and 4-wheel dollies preventing drops, impacts, and floor scratches.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-people-fill"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Verified Strong Crew</h4>
                  <p class="text-muted small mb-0">Background-checked, experienced labor trained in ergonomic heavy weight shifting.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-shield-lock-fill"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Forearm Safety Straps</h4>
                  <p class="text-muted small mb-0">Industrial nylon harness straps to navigate tight staircases without wall contact.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-truck"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Cargo Belt Stacking</h4>
                  <p class="text-muted small mb-0">Systematic truck stacking with tension tie-downs to eliminate highway vibration shock.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Estimated Shifting Charges / Pricing Guide in City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
            <div>
              <span class="badge bg-success-subtle text-success px-2.5 py-1 rounded-pill small fw-bold mb-1 d-inline-block">Transparent Pricing</span>
              <h3 class="fw-bold text-navy fs-3 mb-1">Estimated Loading &amp; Unloading Rates in <?= $city_name ?></h3>
              <p class="text-muted small mb-0">Affordable labor and equipment charges based on home scale and floor elevation.</p>
            </div>
            <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#qteModal">
              Book Loading Crew
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle border border-light-subtle rounded-3 overflow-hidden mb-3">
              <thead class="table-light">
                <tr class="text-navy small">
                  <th scope="col" class="py-3 px-3">Scope / House Size</th>
                  <th scope="col" class="py-3 px-3">Equipment Deployed</th>
                  <th scope="col" class="py-3 px-3">Labor Team</th>
                  <th scope="col" class="py-3 px-3">Est. Price Range</th>
                  <th scope="col" class="py-3 px-3">Average Duration</th>
                </tr>
              </thead>
              <tbody class="small text-secondary">
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-box text-danger me-1"></i> Mini Load (1 RK / Tata Ace)</td>
                  <td class="px-3">Rubberized Sliders &amp; Hand Trolley</td>
                  <td class="px-3">2 Strong Handlers</td>
                  <td class="px-3 fw-bold text-success">₹1,500 – ₹2,500</td>
                  <td class="px-3">1 – 2 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-house text-danger me-1"></i> 1 BHK Apartment Load/Unload</td>
                  <td class="px-3">Appliance Dollies + Cargo Belts</td>
                  <td class="px-3">3 Certified Handlers</td>
                  <td class="px-3 fw-bold text-success">₹2,500 – ₹4,000</td>
                  <td class="px-3">2 – 3 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-building text-danger me-1"></i> 2 BHK Home Load/Unload</td>
                  <td class="px-3">Forearm Straps + Hydraulic Ramp</td>
                  <td class="px-3">4 Pro Laborers</td>
                  <td class="px-3 fw-bold text-success">₹4,000 – ₹6,500</td>
                  <td class="px-3">3 – 4 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-buildings text-danger me-1"></i> 3/4 BHK Villa Load/Unload</td>
                  <td class="px-3">Heavy-Duty Ramps + Cargo Harness</td>
                  <td class="px-3">6 Heavy Riggers</td>
                  <td class="px-3 fw-bold text-success">₹6,500 – ₹10,500</td>
                  <td class="px-3">4 – 6 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-gear-fill text-danger me-1"></i> Industrial Machinery / Heavy Safe</td>
                  <td class="px-3">Hydraulic Tail-Gate Rigging</td>
                  <td class="px-3">Specialized Rigging Team</td>
                  <td class="px-3 fw-bold text-success">Custom Quote</td>
                  <td class="px-3">Scheduled Slot</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="text-muted small fst-italic mb-0">
            * Note: Rates include all required dollies, harness belts, and physical labor. Lift or stair elevation details are confirmed in advance with a locked written quote.
          </p>
        </div>

        <!-- Card 3: 4-Step Moving Workflow in City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="text-center mx-auto mb-4 city-process-header">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold mb-1 d-inline-block">Loading Protocol</span>
            <h3 class="fw-bold text-navy fs-3 mb-2">Our Loading &amp; Unloading Process in <?= $city_name ?></h3>
            <p class="text-muted small mb-0">A 4-step heavy lifting system engineered for rapid handling and zero drop damage.</p>
          </div>

          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">01</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Pathway &amp; Access Check</h4>
                </div>
                <p class="text-muted small mb-0">
                  Our supervisor inspects stairways, lifts, and corridors in <?= $city_name ?>, clearing obstacles to ensure hazard-free maneuvering.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">02</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Mechanical Rigging &amp; Lifting</h4>
                </div>
                <p class="text-muted small mb-0">
                  Heavy electronics, refrigerators, and sofas are mounted on dollies or secured with forearm straps for strain-free transport.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">03</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Balanced Container Stacking</h4>
                </div>
                <p class="text-muted small mb-0">
                  Weight is evenly distributed across the container bed. Furniture is lashed with safety cargo belts to eliminate in-transit shifts.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">04</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Safe Unloading &amp; Positioning</h4>
                </div>
                <p class="text-muted small mb-0">
                  At the destination, goods are unloaded systematically and placed in designated rooms without leaving unsightly floor scuffs.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4: Localized FAQs for City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold">FAQ Guide</span>
          </div>
          <h3 class="fw-bold text-navy fs-3 mb-3">Frequently Asked Questions in <?= $city_name ?></h3>
          
          <div class="accordion d-flex flex-column gap-2.5" id="cityLoadingFaqAccordion">
            
            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead1">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1" aria-expanded="false" aria-controls="faqCol1">
                  Can I hire only loading and unloading labor without booking a truck in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol1" class="accordion-collapse collapse" aria-labelledby="faqHead1" data-bs-parent="#cityLoadingFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, definitely. If you have already arranged your own vehicle or have goods arriving at a local railway freight station or warehouse in <?= $city_name ?>, you can hire our dedicated loading and unloading labor crew on an hourly or per-job basis.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead2">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2" aria-expanded="false" aria-controls="faqCol2">
                  What if my apartment building in <?= $city_name ?> does not have an elevator?
                </button>
              </h4>
              <div id="faqCol2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#cityLoadingFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Our loading teams are specifically equipped for stairwell navigation. We use ergonomic forearm lifting straps and shoulder harnesses that distribute heavy weight evenly, ensuring bulky wardrobes and appliances are carried safely up or down without scuffing walls.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead3">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3" aria-expanded="false" aria-controls="faqCol3">
                  How do you safely move heavy double-door refrigerators and steel almirahs?
                </button>
              </h4>
              <div id="faqCol3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#cityLoadingFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Heavy appliances are first wrapped in thick moving blankets and stretch film. We then roll them using 4-wheel padded dollies across flat surfaces and use mechanical ramps to load them smoothly onto the vehicle tail-gate.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead4">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol4" aria-expanded="false" aria-controls="faqCol4">
                  Are your loading crew members verified and insured?
                </button>
              </h4>
              <div id="faqCol4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#cityLoadingFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, every member of our loading crew undergoes strict background checks and extensive material-handling training. We maintain zero-tolerance safety policies and carry comprehensive transit damage coverage.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- ======================================================== -->
      <!-- RIGHT / STICKY SIDEBAR COLUMN (col-12 col-lg-4)          -->
      <!-- ======================================================== -->
      <div class="col-12 col-lg-4">
        <aside class="position-sticky city-sidebar-sticky">

          <!-- Widget 1: Other Services in City (Refined Proportions Matching Screenshot) -->
          <div class="city-sidebar-card mb-4">
            <div class="city-sidebar-title">
              <i class="bi bi-grid-fill text-danger"></i>
              <span>Other Services in <?= $city_name ?></span>
            </div>
            <div class="city-sidebar-list">
              <a href="<?= site_url('home-shifting-in-' . $curr_ctlink) ?>" class="city-service-pill">
                <span class="d-flex align-items-center gap-2">
                  <i class="bi bi-house-door-fill text-danger pill-icon"></i>
                  <span class="pill-text">Home Shifting in <?= $city_name ?></span>
                </span>
                <i class="bi bi-chevron-right pill-arrow"></i>
              </a>
              <a href="<?= site_url('office-shifting-in-' . $curr_ctlink) ?>" class="city-service-pill">
                <span class="d-flex align-items-center gap-2">
                  <i class="bi bi-building text-primary pill-icon"></i>
                  <span class="pill-text">Office Relocation in <?= $city_name ?></span>
                </span>
                <i class="bi bi-chevron-right pill-arrow"></i>
              </a>
              <a href="<?= site_url('car-transport-in-' . $curr_ctlink) ?>" class="city-service-pill">
                <span class="d-flex align-items-center gap-2">
                  <i class="bi bi-car-front-fill text-success pill-icon"></i>
                  <span class="pill-text">Car Transport in <?= $city_name ?></span>
                </span>
                <i class="bi bi-chevron-right pill-arrow"></i>
              </a>
              <a href="<?= site_url('bike-transport-in-' . $curr_ctlink) ?>" class="city-service-pill">
                <span class="d-flex align-items-center gap-2">
                  <i class="bi bi-bicycle text-info pill-icon"></i>
                  <span class="pill-text">Bike Transport in <?= $city_name ?></span>
                </span>
                <i class="bi bi-chevron-right pill-arrow"></i>
              </a>
              <a href="<?= site_url('packing-moving-in-' . $curr_ctlink) ?>" class="city-service-pill">
                <span class="d-flex align-items-center gap-2">
                  <i class="bi bi-box-seam-fill text-warning pill-icon"></i>
                  <span class="pill-text">Packing &amp; Moving in <?= $city_name ?></span>
                </span>
                <i class="bi bi-chevron-right pill-arrow"></i>
              </a>
            </div>
          </div>

          <!-- Widget 2: 24x7 Fast Assistance Call Card (Snug Height & Proportions) -->
          <div class="p-3.5 p-md-4 rounded-4 bg-danger text-white shadow-sm mb-4 position-relative overflow-hidden">
            <div class="position-relative z-1">
              <span class="badge bg-white text-danger px-2.5 py-1 rounded-pill small fw-bold mb-2 d-inline-block">24x7 Move Desk</span>
              <h4 class="fw-bold fs-5 mb-1.5 text-white">Need Quick Advice in <?= $city_name ?>?</h4>
              <p class="text-white-50 small mb-3">Speak directly with our local coordinator for accurate move schedules and free written estimates.</p>
              
              <div class="d-flex flex-column gap-2">
                <?php if (!empty($phone)): ?>
                  <a href="<?= $phonehtml ?>" class="btn btn-white text-danger fw-bold rounded-pill py-2 shadow-sm d-flex align-items-center justify-content-center gap-2 text-decoration-none">
                    <i class="bi bi-telephone-fill"></i>
                    <span>Call Move Desk: <?= $phone ?></span>
                  </a>
                <?php endif; ?>

                <?php if (!empty($whatsapphtml)): ?>
                  <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none">
                    <i class="bi bi-whatsapp"></i>
                    <span>WhatsApp Consultation</span>
                  </a>
                <?php endif; ?>

                <button type="button" class="btn btn-dark text-white rounded-pill py-2 fw-semibold d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                  <i class="bi bi-calculator"></i>
                  <span>Get Written Quotation</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Widget 3: Trust & Assurance Guarantees -->
          <div class="p-3.5 p-md-4 rounded-4 bg-white shadow-sm border border-light-subtle">
            <p class="fw-bold text-navy fs-6 mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
              <i class="bi bi-shield-fill-check text-success"></i>
              <span>Why Choose Us in <?= $city_name ?></span>
            </p>
            <ul class="list-unstyled mb-0 d-flex flex-column gap-2.5 small text-secondary">
              <li class="d-flex align-items-start gap-2.5">
                <i class="bi bi-patch-check-fill text-danger fs-5 flex-shrink-0"></i>
                <div>
                  <strong class="text-navy d-block">Written Price Guarantee</strong>
                  <span>Transparent itemized quotation before the move. No hidden fees or last-minute surcharges.</span>
                </div>
              </li>
              <li class="d-flex align-items-start gap-2.5">
                <i class="bi bi-file-earmark-check-fill text-success fs-5 flex-shrink-0"></i>
                <div>
                  <strong class="text-navy d-block">IBA Approved Invoicing</strong>
                  <span>Official bills compliant with government, public sector, and corporate claim standards (EL-8709).</span>
                </div>
              </li>
              <li class="d-flex align-items-start gap-2.5">
                <i class="bi bi-clock-history text-primary fs-5 flex-shrink-0"></i>
                <div>
                  <strong class="text-navy d-block">Punctual Safe Delivery</strong>
                  <span>Timely pickup and prompt placement across all residential societies in <?= $city_name ?>.</span>
                </div>
              </li>
            </ul>
          </div>

        </aside>
      </div>

    </div>
  </div>
</section>