<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
  $city_name = !empty($city) ? htmlspecialchars($city) : 'Your City';
  $curr_ctlink = !empty($ctlink) ? $ctlink : strtolower(str_replace(' ', '-', $city_name));
?>

<!-- 1. DYNAMIC BREADCRUMBS (H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Reliable Bike Transport Services in ' . $city_name,
    'bc_desc' => 'Safe, scratch-free two-wheeler and motorcycle shipping in ' . $city_name . '. Multi-layer protective bubble packaging, wooden crating options, transit insurance, and doorstep delivery.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Bike Transport in ' . $city_name]
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
            <div class="city-trust-subtitle">1,650+ Bikes in <?= $city_name ?></div>
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
            <div class="city-trust-subtitle">Zero Scratch Guarantee</div>
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

        <!-- Card 1: Local Bike Transportation Overview -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold">Two-Wheeler Logistics &bull; Multi-Layer Packing</span>
          </div>
          <h2 class="fw-bold text-navy fs-3 mb-3">
            Professional Bike Transportation in <?= $city_name ?>
          </h2>

          <!-- Featured Service Photo with Overlay -->
          <div class="position-relative mb-4 overflow-hidden rounded-3 border border-light-subtle">
            <img src="<?= base_url('assets/img/bike_transportation.jpg') ?>" alt="Bike Transport in <?= $city_name ?> - <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 city-featured-img" loading="lazy">
            <div class="position-absolute bottom-0 start-0 m-3 p-2.5 px-3 bg-white bg-opacity-95 rounded-pill shadow-sm border border-light-subtle d-inline-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-danger small"></i>
              <span class="fw-semibold text-navy small">Doorstep two-wheeler pickup across all areas in <?= $city_name ?></span>
            </div>
          </div>

          <p class="text-secondary mb-3 leading-relaxed">
            Shipping a motorcycle or scooter from <strong><?= $city_name ?></strong> requires dedicated vehicle handling to preserve painted fairings, headlights, exhaust chromes, and sensitive instrument clusters. At <?= htmlspecialchars($company3) ?>, we specialize in end-to-end two-wheeler relocation using heavy-gauge bubble films, corrugated sheet armor, and optional wooden crates for high-end cruisers and sports bikes.
          </p>
          <p class="text-secondary mb-4 leading-relaxed">
            Our moving crew arrives at your address in <?= $city_name ?>, checks the vehicle condition, drains surplus fuel safely, unmounts rear-view mirrors for transit safety, and wraps the bike thoroughly before wheeling it into our covered container truck. Every two-wheeler is strapped firmly upright to prevent tipping or friction throughout the route.
          </p>

          <!-- 4 Core Moving Pillars Grid -->
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-layers-fill"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">3-Layer Protective Armor</h4>
                  <p class="text-muted small mb-0">High-micron bubble wraps, corrugated sheets, and film guarding paint from friction.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-box"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Custom Wooden Crating</h4>
                  <p class="text-muted small mb-0">Engineered timber crates for Royal Enfields, superbikes, and sports motorcycles.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-fuel-pump"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Safe Fuel Drain Protocol</h4>
                  <p class="text-muted small mb-0">Safe draining of combustible fuel down to reserve for strict transport compliance.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Transit Insurance Coverage</h4>
                  <p class="text-muted small mb-0">Comprehensive policy protecting your two-wheeler against all in-transit eventualities.</p>
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
              <h3 class="fw-bold text-navy fs-3 mb-1">Estimated Bike Transport Charges in <?= $city_name ?></h3>
              <p class="text-muted small mb-0">Standard two-wheeler relocation rates based on engine capacity and packaging category.</p>
            </div>
            <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#qteModal">
              Get Instant Bike Quote
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle border border-light-subtle rounded-3 overflow-hidden mb-3">
              <thead class="table-light">
                <tr class="text-navy small">
                  <th scope="col" class="py-3 px-3">Two-Wheeler Class</th>
                  <th scope="col" class="py-3 px-3">Packaging Type</th>
                  <th scope="col" class="py-3 px-3">Carrier Fleet</th>
                  <th scope="col" class="py-3 px-3">Est. Price Range</th>
                  <th scope="col" class="py-3 px-3">Transit Time</th>
                </tr>
              </thead>
              <tbody class="small text-secondary">
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-bicycle text-danger me-1"></i> Scooters (Activa, Jupiter, Access)</td>
                  <td class="px-3">3-Layer Bubble + Corrugated</td>
                  <td class="px-3">Covered Container Truck</td>
                  <td class="px-3 fw-bold text-success">₹2,500 – ₹4,500</td>
                  <td class="px-3">2 – 4 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-lightning-charge text-danger me-1"></i> Commuter (100cc – 150cc: Splendor, Shine)</td>
                  <td class="px-3">3-Layer Protective Wrap</td>
                  <td class="px-3">Dedicated Two-Wheeler Bay</td>
                  <td class="px-3 fw-bold text-success">₹3,000 – ₹5,500</td>
                  <td class="px-3">2 – 4 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-speedometer2 text-danger me-1"></i> Sports (150cc – 250cc: Pulsar, Apache, R15)</td>
                  <td class="px-3">4-Layer Armor + Handle Guards</td>
                  <td class="px-3">Upright Stand Container</td>
                  <td class="px-3 fw-bold text-success">₹3,800 – ₹6,800</td>
                  <td class="px-3">2 – 4 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-trophy text-danger me-1"></i> Cruiser (Royal Enfield, Classic, Jawa)</td>
                  <td class="px-3">4-Layer Heavy Cushion Wrap</td>
                  <td class="px-3">Heavy-Duty Lashing Bay</td>
                  <td class="px-3 fw-bold text-success">₹4,500 – ₹8,500</td>
                  <td class="px-3">3 – 5 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-gem text-danger me-1"></i> Superbike / EV (650cc+, Harley, EV)</td>
                  <td class="px-3">Custom Wooden Crating</td>
                  <td class="px-3">Air-Suspension Special Carrier</td>
                  <td class="px-3 fw-bold text-success">₹7,500 – ₹13,500+</td>
                  <td class="px-3">Priority Express</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="text-muted small fst-italic mb-0">
            * Note: Bike transport charges include doorstep pickup, multi-layer wrapping materials, transit insurance, and doorstep unloading. Written quotation provided before confirmation.
          </p>
        </div>

        <!-- Card 3: 4-Step Moving Workflow in City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="text-center mx-auto mb-4 city-process-header">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold mb-1 d-inline-block">Two-Wheeler Protocol</span>
            <h3 class="fw-bold text-navy fs-3 mb-2">Our Bike Transport Process in <?= $city_name ?></h3>
            <p class="text-muted small mb-0">A tested 4-stage moving system designed for speed, safety, and accountability.</p>
          </div>

          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">01</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Inspection &amp; Fuel Drain</h4>
                </div>
                <p class="text-muted small mb-0">
                  Our team inspects your bike at your address in <?= $city_name ?>, notes cosmetic condition, and safely drains petrol down to reserve level for transit safety.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">02</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Multi-Layer Bubble Packing</h4>
                </div>
                <p class="text-muted small mb-0">
                  We detach mirrors for safety, shield the petrol tank, wrap the silencer, and cocoon the body in corrugated cardboard and bubble wrapping.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">03</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Upright Locked Transit</h4>
                </div>
                <p class="text-muted small mb-0">
                  The bike is loaded onto specialized container trucks, secured with wheel stands and nylon tie-downs, and tracked via live satellite GPS.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">04</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Doorstep Unpacking &amp; Delivery</h4>
                </div>
                <p class="text-muted small mb-0">
                  We deliver your two-wheeler to your new home, remove packaging sheets, reattach rear-view mirrors, and inspect it together with you.
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
          
          <div class="accordion d-flex flex-column gap-2.5" id="cityBikeFaqAccordion">
            
            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead1">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1" aria-expanded="false" aria-controls="faqCol1">
                  How is my bike protected against scratches and mirror breakage in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol1" class="accordion-collapse collapse" aria-labelledby="faqHead1" data-bs-parent="#cityBikeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  We remove the mirrors and pack them separately in bubble wrap. The entire bike (including headlight, fuel tank, engine fins, and silencer) is wrapped with multi-layer bubble wrap, heavy corrugated sheets, and stretch film to shield all finishes.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead2">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2" aria-expanded="false" aria-controls="faqCol2">
                  Why do you require fuel to be drained before shipping?
                </button>
              </h4>
              <div id="faqCol2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#cityBikeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Under Indian Transport and Hazardous Goods regulations, carrying excess flammable fuel inside closed cargo containers is prohibited. We keep approximately 0.5 liters (just enough to reach the nearest fuel pump at your destination).
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead3">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3" aria-expanded="false" aria-controls="faqCol3">
                  What documents are needed for two-wheeler transport in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#cityBikeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  You only need to submit a copy of your bike Registration Certificate (RC), valid two-wheeler insurance policy, and a government photo ID (Aadhaar or Driving License).
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead4">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol4" aria-expanded="false" aria-controls="faqCol4">
                  Do you provide wooden crates for Royal Enfields and superbikes?
                </button>
              </h4>
              <div id="faqCol4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#cityBikeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, for heavier cruisers like Royal Enfield Classic, Himalayan, and performance superbikes, we offer heavy-duty customized wooden crating that creates an impenetrable perimeter around the bike during long-distance transit.
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