<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
  $city_name = !empty($city) ? htmlspecialchars($city) : 'Your City';
  $curr_ctlink = !empty($ctlink) ? $ctlink : strtolower(str_replace(' ', '-', $city_name));
?>

<!-- 1. DYNAMIC BREADCRUMBS (H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Best Home Shifting Services in ' . $city_name,
    'bc_desc' => 'Trusted, verified, and IBA-approved household relocation in ' . $city_name . '. Multi-layer protective packing, punctual door-to-door delivery, and zero hidden charges.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Home Shifting in ' . $city_name]
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
            <div class="city-trust-subtitle">1,400+ Moves in <?= $city_name ?></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="city-trust-card">
          <div class="city-trust-icon is-success">
            <i class="bi bi-shield-check"></i>
          </div>
          <div class="city-trust-content">
            <div class="city-trust-title">100% Transit Safe</div>
            <div class="city-trust-subtitle">All Goods Insured</div>
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

        <!-- Card 1: Local Household Relocation Overview -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold">Local Household Relocation</span>
          </div>
          <h2 class="fw-bold text-navy fs-3 mb-3">
            Professional House Shifting Services in <?= $city_name ?>
          </h2>

          <!-- Featured Service Photo with Overlay -->
          <div class="position-relative mb-4 overflow-hidden rounded-3 border border-light-subtle">
            <img src="<?= base_url('assets/img/household_shifting.jpg') ?>" alt="Home Shifting in <?= $city_name ?> - <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 city-featured-img" loading="lazy">
            <div class="position-absolute bottom-0 start-0 m-3 p-2.5 px-3 bg-white bg-opacity-95 rounded-pill shadow-sm border border-light-subtle d-inline-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-danger small"></i>
              <span class="fw-semibold text-navy small">Door-to-door shifting across <?= $city_name ?></span>
            </div>
          </div>

          <p class="text-secondary mb-3 leading-relaxed">
            Relocating your home in <strong><?= $city_name ?></strong> requires meticulous planning, trained packing hands, and dependable logistics. Whether shifting within the same neighborhood or moving to a different sector, our dedicated crew manages everything from dismantling bulky wardrobes and electronic appliances to multi-layer bubble wrapping and reassembly at your new address.
          </p>
          <p class="text-secondary mb-4 leading-relaxed">
            Our local <strong><?= $city_name ?></strong> relocation fleet is fully equipped with clean closed containers, hydraulic tail lifts, and padded interiors to ensure your glassware, furniture, kitchenware, and sensitive gadgets remain scratch-free throughout transit.
          </p>


          <!-- 4 Core Moving Pillars Grid -->
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-box-seam-fill"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">5-Layer Bubble Packing</h4>
                  <p class="text-muted small mb-0">High-gauge bubble wraps, corrugated sheets &amp; stretch film for maximum protection.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-tools"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Furniture Dismantling</h4>
                  <p class="text-muted small mb-0">Expert disassembly and doorstep re-assembly of beds, sofas, and dining sets.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-truck"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Dedicated Closed Fleet</h4>
                  <p class="text-muted small mb-0">Weather-proof GPS container trucks to shield household goods from dust and rain.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Transit Risk Cover</h4>
                  <p class="text-muted small mb-0">Comprehensive moving insurance to guarantee complete peace of mind.</p>
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
              <h3 class="fw-bold text-navy fs-3 mb-1">Estimated Home Shifting Charges in <?= $city_name ?></h3>
              <p class="text-muted small mb-0">Standard local relocation rates based on house size and packaging layers.</p>
            </div>
            <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#qteModal">
              Request Custom Quote
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle border border-light-subtle rounded-3 overflow-hidden mb-3">
              <thead class="table-light">
                <tr class="text-navy small">
                  <th scope="col" class="py-3 px-3">House Type</th>
                  <th scope="col" class="py-3 px-3">Packaging Type</th>
                  <th scope="col" class="py-3 px-3">Vehicle</th>
                  <th scope="col" class="py-3 px-3">Est. Local Price</th>
                  <th scope="col" class="py-3 px-3">Duration</th>
                </tr>
              </thead>
              <tbody class="small text-secondary">
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-house-door text-danger me-1"></i> 1 RK Move</td>
                  <td class="px-3">Standard 3-Layer</td>
                  <td class="px-3">Tata Ace / Mini Truck</td>
                  <td class="px-3 fw-bold text-success">₹3,500 – ₹5,500</td>
                  <td class="px-3">3 – 4 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-house text-danger me-1"></i> 1 BHK Apartment</td>
                  <td class="px-3">4-Layer Protective</td>
                  <td class="px-3">14ft Covered Container</td>
                  <td class="px-3 fw-bold text-success">₹5,000 – ₹8,500</td>
                  <td class="px-3">4 – 5 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-building text-danger me-1"></i> 2 BHK Home</td>
                  <td class="px-3">5-Layer Premium Bubble</td>
                  <td class="px-3">17ft Container Fleet</td>
                  <td class="px-3 fw-bold text-success">₹8,500 – ₹13,500</td>
                  <td class="px-3">5 – 7 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-buildings text-danger me-1"></i> 3 BHK Home</td>
                  <td class="px-3">5-Layer Bubble + Wooden Crating</td>
                  <td class="px-3">19ft Heavy Container</td>
                  <td class="px-3 fw-bold text-success">₹13,500 – ₹19,500</td>
                  <td class="px-3">6 – 8 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-gem text-danger me-1"></i> 4+ BHK / Villa</td>
                  <td class="px-3">Custom Export Grade Crating</td>
                  <td class="px-3">Dual Dedicated Fleet</td>
                  <td class="px-3 fw-bold text-success">₹19,500 – ₹28,000+</td>
                  <td class="px-3">Full Day Move</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="text-muted small fst-italic mb-0">
            * Note: Actual prices may vary depending on shifting distance, floor accessibility, elevator availability, and optional fragile item crating. Written quotation locked before shifting starts.
          </p>
        </div>

        <!-- Card 3: 4-Step Moving Workflow in City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="text-center mx-auto mb-4 city-process-header">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold mb-1 d-inline-block">Step-by-Step</span>
            <h3 class="fw-bold text-navy fs-3 mb-2">Our House Shifting Process in <?= $city_name ?></h3>
            <p class="text-muted small mb-0">We follow a proven 4-stage moving system designed for speed, safety, and accountability.</p>
          </div>

          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">01</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Pre-Move Survey &amp; Price Lock</h4>
                </div>
                <p class="text-muted small mb-0">
                  We review your item list via phone or doorstep visit, verify elevator access, and issue a clear, written quotation with guaranteed price lock.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">02</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Export-Grade Multi-Layer Packing</h4>
                </div>
                <p class="text-muted small mb-0">
                  Our trained crew arrives on time with corrugated cartons, bubble wraps, foam pads, and color-coded labels for each room.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">03</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Safe Loading &amp; Punctual Transit</h4>
                </div>
                <p class="text-muted small mb-0">
                  Goods are loaded systematically using hydraulic ramps, secured with heavy-duty safety belts, and tracked continuously via GPS.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">04</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Doorstep Unloading &amp; Placement</h4>
                </div>
                <p class="text-muted small mb-0">
                  We place boxes in their respective rooms, reassemble beds and dining furniture, and inspect every item together with you.
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
          
          <div class="accordion d-flex flex-column gap-2.5" id="cityHomeFaqAccordion">
            
            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead1">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1" aria-expanded="false" aria-controls="faqCol1">
                  How much does local household shifting cost in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol1" class="accordion-collapse collapse" aria-labelledby="faqHead1" data-bs-parent="#cityHomeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Local house shifting in <?= $city_name ?> typically starts from ₹3,500 for a 1 RK, ₹5,000 – ₹8,500 for a 1 BHK, and ₹8,500 – ₹13,500 for a 2 BHK. The exact estimate depends on the total volume of goods, packaging layers, and floor access. We provide free written quotations beforehand.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead2">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2" aria-expanded="false" aria-controls="faqCol2">
                  How early should I book household movers in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#cityHomeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  It is recommended to book 2 to 4 days in advance, especially for weekend and month-end dates when moving demand across <?= $city_name ?> is high. For emergency or same-day local shifting, contact our 24x7 move desk directly.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead3">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3" aria-expanded="false" aria-controls="faqCol3">
                  Do you dismantle and re-assemble ACs, beds, and modular wardrobes?
                </button>
              </h4>
              <div id="faqCol3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#cityHomeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, standard furniture dismantling and reassembly (such as beds, dining tables, and modular storage) is handled by our skilled moving team. For specialized electrical uninstallations like split AC unmounting, our technicians assist with nominal charges.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead4">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol4" aria-expanded="false" aria-controls="faqCol4">
                  Are my household items insured during transit in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#cityHomeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, <?= htmlspecialchars($company3) ?> provides comprehensive transit insurance coverage for household shifting. In addition, our 5-layer export grade packaging significantly minimizes any risk of transit damage.
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
              <a href="<?= site_url('loading-unloading-in-' . $curr_ctlink) ?>" class="city-service-pill">
                <span class="d-flex align-items-center gap-2">
                  <i class="bi bi-truck text-danger pill-icon"></i>
                  <span class="pill-text">Loading &amp; Unloading in <?= $city_name ?></span>
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
                  <strong class="text-navy d-block">Punctual Same-Day Delivery</strong>
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
