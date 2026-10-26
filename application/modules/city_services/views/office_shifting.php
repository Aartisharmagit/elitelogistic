<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
  $city_name = !empty($city) ? htmlspecialchars($city) : 'Your City';
  $curr_ctlink = !empty($ctlink) ? $ctlink : strtolower(str_replace(' ', '-', $city_name));
?>

<!-- 1. DYNAMIC BREADCRUMBS (H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Professional Office Relocation Services in ' . $city_name,
    'bc_desc' => 'Smooth, secure corporate and commercial office shifting in ' . $city_name . '. Zero business downtime, specialized IT asset handling, and complete transit insurance.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Office Relocation in ' . $city_name]
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
            <div class="city-trust-subtitle">850+ Moves in <?= $city_name ?></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="city-trust-card">
          <div class="city-trust-icon is-success">
            <i class="bi bi-shield-check"></i>
          </div>
          <div class="city-trust-content">
            <div class="city-trust-title">Zero Downtime</div>
            <div class="city-trust-subtitle">Weekend &amp; Night Shifts</div>
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

        <!-- Card 1: Local Office Relocation Overview -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold">Commercial Relocation &bull; Business Continuity</span>
          </div>
          <h2 class="fw-bold text-navy fs-3 mb-3">
            Corporate &amp; Commercial Office Shifting in <?= $city_name ?>
          </h2>

          <!-- Featured Service Photo with Overlay -->
          <div class="position-relative mb-4 overflow-hidden rounded-3 border border-light-subtle">
            <img src="<?= base_url('assets/img/office_shifting.jpg') ?>" alt="Office Relocation in <?= $city_name ?> - <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 city-featured-img" loading="lazy">
            <div class="position-absolute bottom-0 start-0 m-3 p-2.5 px-3 bg-white bg-opacity-95 rounded-pill shadow-sm border border-light-subtle d-inline-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-danger small"></i>
              <span class="fw-semibold text-navy small">Serving commercial hubs &amp; tech parks across <?= $city_name ?></span>
            </div>
          </div>

          <p class="text-secondary mb-3 leading-relaxed">
            Relocating a workplace or branch in <strong><?= $city_name ?></strong> requires precision planning, rapid turnaround, and strict asset protection. At <?= htmlspecialchars($company3) ?>, we understand that business continuity is paramount. Our commercial relocation team coordinates every phase of your move—from tagging desktop peripherals and anti-static wrapping of servers to systematically cataloging confidential records.
          </p>
          <p class="text-secondary mb-4 leading-relaxed">
            Whether shifting a compact co-working branch or an entire multi-floor headquarters in <?= $city_name ?>, our trained carpenters and logistics crew dismantle modular workstations, pack conference audio-visual systems, and execute night or weekend transitions so your staff can resume business on Monday morning without interruption.
          </p>

          <!-- 4 Core Moving Pillars Grid -->
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-clock-history"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Zero Downtime Schedules</h4>
                  <p class="text-muted small mb-0">Night and weekend shifts planned around your business hours to maintain full productivity.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-laptop"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">IT &amp; Server Protection</h4>
                  <p class="text-muted small mb-0">Anti-static bubble wraps, labeled wiring harnesses, and cushioned server containers.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-wrench-adjustable"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Modular Cubicle Assembly</h4>
                  <p class="text-muted small mb-0">Trained carpenters for fast disassembly and reassembly of partitions, desks, and cabins.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 rounded-3 border border-light-subtle bg-light-subtle d-flex align-items-start gap-3 h-100">
                <div class="text-danger fs-4 flex-shrink-0"><i class="bi bi-shield-lock-fill"></i></div>
                <div>
                  <h4 class="fw-bold text-navy fs-6 mb-1">Confidential File Security</h4>
                  <p class="text-muted small mb-0">Tamper-evident numbered seal crates for financial documents, legal records, and contracts.</p>
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
              <h3 class="fw-bold text-navy fs-3 mb-1">Estimated Office Relocation Charges in <?= $city_name ?></h3>
              <p class="text-muted small mb-0">Indicative commercial rates based on employee workstation volume and IT infrastructure.</p>
            </div>
            <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#qteModal">
              Request Corporate Quote
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle border border-light-subtle rounded-3 overflow-hidden mb-3">
              <thead class="table-light">
                <tr class="text-navy small">
                  <th scope="col" class="py-3 px-3">Office Scale</th>
                  <th scope="col" class="py-3 px-3">Packaging &amp; Handling</th>
                  <th scope="col" class="py-3 px-3">Transport Logistics</th>
                  <th scope="col" class="py-3 px-3">Est. Local Price</th>
                  <th scope="col" class="py-3 px-3">Execution Time</th>
                </tr>
              </thead>
              <tbody class="small text-secondary">
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-briefcase text-danger me-1"></i> Small Office (1 – 10 Desks)</td>
                  <td class="px-3">Standard Commercial Bubble</td>
                  <td class="px-3">14ft Closed Container</td>
                  <td class="px-3 fw-bold text-success">₹8,000 – ₹14,000</td>
                  <td class="px-3">4 – 6 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-building text-danger me-1"></i> Mid-Sized Office (10 – 25 Desks)</td>
                  <td class="px-3">Anti-Static + Foam Padding</td>
                  <td class="px-3">17ft Dedicated Fleet</td>
                  <td class="px-3 fw-bold text-success">₹14,000 – ₹24,000</td>
                  <td class="px-3">6 – 9 Hours</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-buildings text-danger me-1"></i> Corporate Floor (25 – 50 Desks)</td>
                  <td class="px-3">5-Layer Protective + IT Crating</td>
                  <td class="px-3">Dual 19ft Closed Trucks</td>
                  <td class="px-3 fw-bold text-success">₹24,000 – ₹42,000</td>
                  <td class="px-3">1 Weekend Shift</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-award text-danger me-1"></i> Large HQ (50 – 100+ Desks)</td>
                  <td class="px-3">Comprehensive Turnkey Packing</td>
                  <td class="px-3">Multi-Truck Fleet Logistics</td>
                  <td class="px-3 fw-bold text-success">₹42,000 – ₹75,000+</td>
                  <td class="px-3">1 – 2 Days</td>
                </tr>
                <tr>
                  <td class="px-3 fw-bold text-navy"><i class="bi bi-cpu text-danger me-1"></i> Server Room / Data Center</td>
                  <td class="px-3">Anti-Shock Air Cushioned Bins</td>
                  <td class="px-3">Padded Shock-Absorber Fleet</td>
                  <td class="px-3 fw-bold text-success">Custom Quote</td>
                  <td class="px-3">Dedicated Slot</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="text-muted small fst-italic mb-0">
            * Note: Exact office relocation costs depend on floor elevations, lift access, server rack configurations, and specialized assembly needs. Written GST invoice and formal agreement provided beforehand.
          </p>
        </div>

        <!-- Card 3: 4-Step Moving Workflow in City -->
        <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle mb-4">
          <div class="text-center mx-auto mb-4 city-process-header">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold mb-1 d-inline-block">Commercial Methodology</span>
            <h3 class="fw-bold text-navy fs-3 mb-2">Our Office Moving Process in <?= $city_name ?></h3>
            <p class="text-muted small mb-0">A military-grade transition workflow designed to protect corporate assets and eliminate operational downtime.</p>
          </div>

          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">01</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">On-Site Audit &amp; Blueprint</h4>
                </div>
                <p class="text-muted small mb-0">
                  Our project coordinator inspects your premises, catalogs IT systems and furniture, and creates a floor-by-floor relocation plan with a locked quote.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">02</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">IT Tagging &amp; Safe Packing</h4>
                </div>
                <p class="text-muted small mb-0">
                  Desktops, cables, and servers are packed in anti-static materials and color-tagged by department so each workstation is easily matched at the new venue.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">03</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">GPS-Tracked Safe Transit</h4>
                </div>
                <p class="text-muted small mb-0">
                  All commercial equipment travels inside closed container vehicles equipped with hydraulic tailgates and real-time live GPS monitoring.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3.5 rounded-4 border border-light-subtle bg-light-subtle h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center flex-shrink-0 city-step-number">04</div>
                  <h4 class="fw-bold text-navy fs-6 mb-0">Fast Layout Setup &amp; Assembly</h4>
                </div>
                <p class="text-muted small mb-0">
                  We place desks, modular cabins, and IT equipment according to your new office floor diagram, assisting your staff for immediate resumption.
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
          
          <div class="accordion d-flex flex-column gap-2.5" id="cityOfficeFaqAccordion">
            
            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead1">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1" aria-expanded="false" aria-controls="faqCol1">
                  Can you execute our office shift over the weekend or at night in <?= $city_name ?>?
                </button>
              </h4>
              <div id="faqCol1" class="accordion-collapse collapse" aria-labelledby="faqHead1" data-bs-parent="#cityOfficeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, absolutely. We regularly schedule corporate relocations across <?= $city_name ?> during Friday night, Saturday, and Sunday. This guarantees zero downtime so your employees can step into an operational office on Monday morning.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead2">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2" aria-expanded="false" aria-controls="faqCol2">
                  How do you safeguard sensitive computers, monitors, and servers?
                </button>
              </h4>
              <div id="faqCol2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#cityOfficeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  All IT equipment is wrapped in electrostatic-discharge (ESD) safe bubble films, packed into reinforced corrugated cartons with custom foam inserts, and color-coded with departmental tags to match cables with individual systems.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead3">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3" aria-expanded="false" aria-controls="faqCol3">
                  Do you provide GST invoicing and IBA-approved documentation for corporate claims?
                </button>
              </h4>
              <div id="faqCol3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#cityOfficeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, <?= htmlspecialchars($company3) ?> is fully IBA-approved (Code: EL-8709) and issues official GST-compliant tax invoices, itemized inventory packing lists, and consignment notes required for corporate accounting audits.
                </div>
              </div>
            </div>

            <div class="accordion-item border border-light-subtle rounded-3 overflow-hidden">
              <h4 class="accordion-header" id="faqHead4">
                <button class="accordion-button fw-bold text-navy collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol4" aria-expanded="false" aria-controls="faqCol4">
                  Will your team dismantle and reassemble modular workstations and cubicles?
                </button>
              </h4>
              <div id="faqCol4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#cityOfficeFaqAccordion">
                <div class="accordion-body text-secondary small pt-0 pb-3">
                  Yes, our moving crew includes seasoned modular furniture technicians who expertly disassemble, pack, transport, and re-erect workstation clusters, partitions, conference tables, and manager credenzas.
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
                  <strong class="text-navy d-block">Punctual Safe Delivery</strong>
                  <span>Timely pickup and prompt placement across all business complexes in <?= $city_name ?>.</span>
                </div>
              </li>
            </ul>
          </div>

        </aside>
      </div>

    </div>
  </div>
</section>