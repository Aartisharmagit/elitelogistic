<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
  $city_name = !empty($city) ? htmlspecialchars($city) : 'Your City';
  $curr_ctlink = !empty($ctlink) ? $ctlink : strtolower(str_replace(' ', '-', $city_name));
?>

<!-- 1. DYNAMIC BREADCRUMBS (H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Safe Car Transportation Services in ' . $city_name,
    'bc_desc' => 'Reliable, IBA-approved car transport and carrier solutions in ' . $city_name . '. Enclosed covered containers, 4-point wheel locking, GPS tracking, and doorstep pickup & delivery.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Car Transport in ' . $city_name]
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
            <div class="city-trust-subtitle">1,200+ Cars Moved in <?= $city_name ?></div>
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
            <div class="city-trust-subtitle">Zero Accidental Risk</div>
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
            <div class="city-trust-subtitle">Zero Hidden Surcharges</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 g-lg-5">
      
      <!-- ======================================================== -->
      <!-- LEFT / MAIN CONTENT COLUMN (col-12 col-lg-8)             -->
      <!-- ======================================================== -->
      <div class="col-12 col-lg-8">

        <!-- Card 1: Local Car Transportation Overview -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold">Vehicle Logistics &bull; Enclosed Carriers</span>
          </div>
          <h2 class="fw-bold text-navy fs-3 mb-3">
            Secure Car Carrier &amp; Transportation in <?= $city_name ?>
          </h2>

          <!-- Featured Service Photo with Overlay -->
          <div class="position-relative mb-4 overflow-hidden rounded-3 border border-light-subtle">
            <img src="<?= base_url('assets/img/car_transportation.jpg') ?>" alt="Car Transport in <?= $city_name ?> - <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 city-featured-img" loading="lazy">
            <div class="position-absolute bottom-0 start-0 m-3 p-2.5 px-3 bg-white bg-opacity-95 rounded-pill shadow-sm border border-light-subtle d-inline-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-danger small"></i>
              <span class="fw-semibold text-navy small">Doorstep car pickup &amp; delivery across <?= $city_name ?></span>
            </div>
          </div>

          <p class="text-secondary mb-3 leading-relaxed">
            Relocating your vehicle in <strong><?= $city_name ?></strong> requires dedicated carrier logistics that guarantee zero wear and tear, zero road driving mileage, and complete environmental protection. At <?= htmlspecialchars($company3) ?>, we operate custom-built enclosed car trailers and specialized open carriers equipped with hydraulic lift ramps to handle everything from compact hatchbacks to premium luxury SUVs.
          </p>
          <p class="text-secondary mb-4 leading-relaxed">
            Prior to loading in <?= $city_name ?>, our certified vehicle inspector conducts a meticulous 18-point condition audit including photographic odometer recording. Your car is securely fastened inside our container using heavy-duty wheel chocks and nylon safety tie-downs, ensuring complete suspension stability and zero movement throughout the journey.
          </p>

          <!-- 4 Core Moving Pillars Grid -->
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Enclosed Covered Trailers</h4>
                  <p class="text-muted small mb-0">Full protection against highway debris, dust, inclement weather, and scratches.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-link-45deg"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">4-Wheel Safety Lashings</h4>
                  <p class="text-muted small mb-0">High-tension tire chocks and nylon safety straps to keep suspension fully strain-free.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-clipboard2-check"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Written Condition Report</h4>
                  <p class="text-muted small mb-0">Transparent pre-pickup vehicle audit with photographically documented odometer reading.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-geo-alt-fill"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Live Satellite GPS Tracking</h4>
                  <p class="text-muted small mb-0">Real-time status updates on carrier location with direct coordinator assistance.</p>
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
              <h3 class="fw-bold text-navy fs-3 mb-1">Estimated Car Transport Rates in <?= $city_name ?></h3>
              <p class="text-muted small mb-0">Standard car shifting rates according to vehicle dimensions and carrier category.</p>
            </div>
            <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#qteModal">
              Get Instant Car Quote
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle border border-light-subtle rounded-3 overflow-hidden mb-3">
              <thead class="table-light">
                <tr class="text-navy small">
                  <th scope="col" class="py-3 px-3">Vehicle Type</th>
                  <th scope="col" class="py-3 px-3">Securing Method</th>
                  <th scope="col" class="py-3 px-3">Carrier Logistics</th>
                  <th scope="col" class="py-3 px-3">Est. Price Range</th>
                  <th scope="col" class="py-3 px-3">Delivery Window</th>
                </tr>
              </thead>
              <tbody class="small text-secondary">
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-car-front text-danger me-1"></i> Hatchback (Swift, i10, Tiago)</td>
                  <td class="px-3">4-Wheel Chock Lashing</td>
                  <td class="px-3">Enclosed Multi-Car Container</td>
                  <td class="px-3 fw-bold text-success">₹6,500 – ₹11,000</td>
                  <td class="px-3">2 – 4 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-car-front-fill text-danger me-1"></i> Sedan (City, Verna, Dzire, Ciaz)</td>
                  <td class="px-3">Safety Straps &amp; Bumper Guard</td>
                  <td class="px-3">Covered Carrier Fleet</td>
                  <td class="px-3 fw-bold text-success">₹8,500 – ₹14,500</td>
                  <td class="px-3">2 – 4 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-truck-front text-danger me-1"></i> Compact SUV (Creta, Nexon, Brezza)</td>
                  <td class="px-3">Heavy Tension Chocks</td>
                  <td class="px-3">Hydraulic Ramp Container</td>
                  <td class="px-3 fw-bold text-success">₹9,500 – ₹16,500</td>
                  <td class="px-3">3 – 5 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-truck-front-fill text-danger me-1"></i> Full SUV (Innova, XUV700, Fortuner)</td>
                  <td class="px-3">Heavy-Duty 4-Point Lashing</td>
                  <td class="px-3">Dedicated Carrier Bay</td>
                  <td class="px-3 fw-bold text-success">₹12,000 – ₹21,000</td>
                  <td class="px-3">3 – 5 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-gem text-danger me-1"></i> Luxury / Electric (BMW, Audi, EV)</td>
                  <td class="px-3">Air-Suspension Zero-Touch Bay</td>
                  <td class="px-3">Single-Car Enclosed Special</td>
                  <td class="px-3 fw-bold text-success">₹18,000 – ₹32,000+</td>
                  <td class="px-3">Priority Express</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="text-muted small fst-italic mb-0">
            * Note: Vehicle relocation tariffs include doorstep inspection, loading, transit insurance, and doorstep delivery. Toll taxes, GST, and transit documentation are transparently covered in our written quote.
          </p>
        </div>

        <!-- Card 3: 4-Step Moving Workflow in City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="text-center mx-auto mb-4 city-process-header">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold mb-1 d-inline-block">Carrier Protocol</span>
            <h3 class="fw-bold text-navy fs-3 mb-2">Our Car Transport Workflow in <?= $city_name ?></h3>
            <p class="text-muted small mb-0">A certified 4-stage vehicle transit framework designed for total security and punctual doorstep delivery.</p>
          </div>

          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">01</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Doorstep Car Audit</h4>
                </div>
                <p class="text-muted small mb-0">
                  Our inspector audits your vehicle at your doorstep in <?= $city_name ?>, notes existing scratches, records odometer numbers, and issues a signed report.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">02</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Hydraulic Loading &amp; Lashing</h4>
                </div>
                <p class="text-muted small mb-0">
                  Your car is driven up a smooth hydraulic incline into the enclosed container and locked on all 4 tires with heavy-duty safety chocks.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">03</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">GPS Monitored Highway Transit</h4>
                </div>
                <p class="text-muted small mb-0">
                  The container travels with real-time GPS tracking. Our customer care desk provides live progress milestones until arrival.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">04</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Doorstep Handover &amp; Verification</h4>
                </div>
                <p class="text-muted small mb-0">
                  We unload your car safely at the destination address, conduct a joint inspection against the original report, and hand over the keys.
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
          
          <div class="accordion d-flex flex-column gap-2.5" id="cityCarFaqAccordion">
            
            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead1">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1" aria-expanded="false" aria-controls="faqCol1">
                  How is my car protected from stone chips and rain during transit from <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol1" class="accordion-collapse collapse" aria-labelledby="faqHead1" data-bs-parent="#cityCarFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  We use fully enclosed, covered car carrier containers. Unlike open-car trailers, our sealed fleets shield your vehicle completely from gravel chips, dirt, rainwater, and road debris throughout the highway journey.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead2">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2" aria-expanded="false" aria-controls="faqCol2">
                  What documents are needed to book car transportation in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#cityCarFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  You only need to provide copies of the vehicle Registration Certificate (RC), valid motor insurance policy, Pollution Under Control (PUC) certificate, and government photo ID of the owner. We handle the carrier consignment note and transit permits.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead3">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3" aria-expanded="false" aria-controls="faqCol3">
                  Can I leave luggage or personal items in the car trunk?
                </button>
              </h4>
              <div id="faqCol3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#cityCarFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  You may place personal luggage (up to 40-50 kg) inside the car trunk, provided it is packed in standard suitcases. Highly valuable items like jewelry, cash, laptops, or flammable materials must not be left inside the vehicle.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead4">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol4" aria-expanded="false" aria-controls="faqCol4">
                  How can I track my vehicle while it is on the highway?
                </button>
              </h4>
              <div id="faqCol4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#cityCarFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Our carrier trucks are equipped with live GPS tracking hardware. You receive regular SMS/WhatsApp location updates, and our 24x7 move desk coordinator is always available to give you exact transit checkpoints.
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
              <p class="text-white-50 small mb-3">Speak directly with our vehicle move coordinator for transparent slot bookings and carrier rates.</p>
              
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
                  <span>Timely vehicle pickup and scratch-free delivery across all locations in <?= $city_name ?>.</span>
                </div>
              </li>
            </ul>
          </div>

        </aside>
      </div>

    </div>
  </div>
</section>
