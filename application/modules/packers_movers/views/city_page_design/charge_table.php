<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>
.city-charge-card {
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.city-charge-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 1rem 2rem rgba(11, 34, 77, 0.08) !important;
}
.moving-table {
  min-width: 680px;
}
.moving-table thead th {
  background-color: #0b224d !important;
  color: #ffffff !important;
  letter-spacing: 0.04em;
  white-space: nowrap;
}
.moving-table tbody tr:hover {
  background-color: #fffafa !important;
}
.charge-tabs .nav-link {
  color: #495057;
  font-weight: 600;
  border-radius: 0.5rem;
  padding: 0.5rem 1.15rem;
  transition: all 0.2s ease;
}
.charge-tabs .nav-link.active {
  background-color: #0b224d !important;
  color: #ffffff !important;
}
.charge-tabs .nav-link:hover:not(.active) {
  background-color: #f8f9fa;
  color: #0b224d;
}
.icon-box-36 {
  width: 38px;
  height: 38px;
}
.col-service-type {
  width: 30%;
  min-width: 200px;
}
.col-service-features {
  width: 38%;
  min-width: 230px;
}
.col-service-price {
  width: 20%;
  min-width: 150px;
}
.col-service-action {
  width: 12%;
  min-width: 100px;
}
</style>

<div class="card city-charge-card mb-4 p-3 p-sm-4 p-lg-5 rounded-4 bg-white shadow-sm border border-light-subtle" itemscope itemtype="https://schema.org/Table">
  <meta itemprop="about" content="Packers and Movers Charges and Moving Cost Guide in <?= htmlspecialchars($city) ?>">

  <!-- Section Header -->
  <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3 mb-4">
    <div>
      <div class="d-inline-flex align-items-center gap-2 bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 mb-2 fw-bold small">
        <i class="bi bi-tag-fill" aria-hidden="true"></i>
        <span>Standard Shifting Rates in <?= htmlspecialchars($city) ?></span>
      </div>
      <h3 class="fw-bolder text-dark mb-1 fs-4 fs-md-3">
        Packers and Movers Charges in <?= htmlspecialchars($city) ?> (Estimated Rate Card)
      </h3>
      <p class="text-secondary mb-0 small">
        Transparent shifting prices for household, vehicle &amp; office relocation. No hidden charges with written price lock.
      </p>
    </div>

    <!-- Free Estimate CTA -->
    <div class="d-flex align-items-center flex-shrink-0">
      <button type="button" class="btn btn-danger rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
        <i class="bi bi-calculator" aria-hidden="true"></i>
        <span>Get Exact Quote</span>
      </button>
    </div>
  </div>

  <!-- Navigation Tabs -->
  <ul class="nav nav-pills charge-tabs gap-2 mb-3" id="chargeTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active small d-inline-flex align-items-center gap-1.5" id="local-shift-tab" data-bs-toggle="pill" data-bs-target="#local-shift" type="button" role="tab" aria-controls="local-shift" aria-selected="true">
        <i class="bi bi-house-door" aria-hidden="true"></i>
        <span>Local Household Shifting</span>
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link small d-inline-flex align-items-center gap-1.5" id="vehicle-office-tab" data-bs-toggle="pill" data-bs-target="#vehicle-office" type="button" role="tab" aria-controls="vehicle-office" aria-selected="false">
        <i class="bi bi-truck" aria-hidden="true"></i>
        <span>Vehicle &amp; Commercial Moving</span>
      </button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="chargeTabContent">

    <!-- Tab 1: Local Household Shifting -->
    <div class="tab-pane fade show active" id="local-shift" role="tabpanel" aria-labelledby="local-shift-tab">
      
      <!-- Mobile Scroll Hint -->
      <div class="d-md-none text-secondary small mb-2 d-flex align-items-center gap-1.5">
        <i class="bi bi-arrow-left-right text-danger" aria-hidden="true"></i>
        <span>Scroll / swipe right to view full table &rarr;</span>
      </div>

      <div class="table-responsive rounded-3 border border-light-subtle">
        <table class="table table-hover moving-table align-middle mb-0">
          <thead>
            <tr>
              <th scope="col" class="col-service-type py-3 px-3 small text-uppercase">House Shifting Type</th>
              <th scope="col" class="col-service-features py-3 px-3 small text-uppercase">Packaging &amp; Manpower Included</th>
              <th scope="col" class="col-service-price py-3 px-3 small text-uppercase">Standard Price Range</th>
              <th scope="col" class="col-service-action py-3 px-3 small text-uppercase text-center">Action</th>
            </tr>
          </thead>
          <tbody>

            <!-- Row 1: 1 BHK -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-house-heart-fill"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">1 BHK House Shifting</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Local Move in <?= htmlspecialchars($city) ?></span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Standard 3-layer protective packing, cartons, loading, dedicated small truck, and safe unloading.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">3,500</span> &ndash; <span>₹</span><span itemprop="maxPrice">6,500</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 2: 2 BHK -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-buildings-fill"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">2 BHK House Shifting</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Most Popular</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Multi-layer bubble wrapping, furniture dismantling, medium container truck &amp; 3&ndash;4 trained movers.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">6,000</span> &ndash; <span>₹</span><span itemprop="maxPrice">10,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 3: 3 BHK -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-building-fill-check"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">3 BHK House Shifting</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Full Family Shift</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Premium 5-layer bubble packing for electronics &amp; glassware, large container truck, 4&ndash;6 movers.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">9,000</span> &ndash; <span>₹</span><span itemprop="maxPrice">15,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 4: 4 BHK / Villa -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-houses-fill"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">4 BHK / Villa Relocation</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Complete Home</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Complete customized crating, dedicated supervisor, heavy furniture handling, heavy vehicle transit.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">14,000</span> &ndash; <span>₹</span><span itemprop="maxPrice">24,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 5: Few Items -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-box-seam-fill"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">Few Household Items / Luggage</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Mini Move</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Single appliance/bed/sofa move, basic corrugated packing, mini pickup truck &amp; 2 helpers.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">2,000</span> &ndash; <span>₹</span><span itemprop="maxPrice">4,500</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <!-- Tab 2: Vehicle & Commercial Shifting -->
    <div class="tab-pane fade" id="vehicle-office" role="tabpanel" aria-labelledby="vehicle-office-tab">
      
      <!-- Mobile Scroll Hint -->
      <div class="d-md-none text-secondary small mb-2 d-flex align-items-center gap-1.5">
        <i class="bi bi-arrow-left-right text-danger" aria-hidden="true"></i>
        <span>Scroll / swipe right to view full table &rarr;</span>
      </div>

      <div class="table-responsive rounded-3 border border-light-subtle">
        <table class="table table-hover moving-table align-middle mb-0">
          <thead>
            <tr>
              <th scope="col" class="col-service-type py-3 px-3 small text-uppercase">Service Category</th>
              <th scope="col" class="col-service-features py-3 px-3 small text-uppercase">Safety &amp; Transport Features</th>
              <th scope="col" class="col-service-price py-3 px-3 small text-uppercase">Standard Price Range</th>
              <th scope="col" class="col-service-action py-3 px-3 small text-uppercase text-center">Action</th>
            </tr>
          </thead>
          <tbody>

            <!-- Row 1: Bike -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-bicycle"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">Bike / Scooter Transportation</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Two Wheeler</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Multi-layer foam wrapping, wheel strapping, mirror &amp; indicator cushioning, door pickup.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">2,500</span> &ndash; <span>₹</span><span itemprop="maxPrice">5,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 2: Car -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-car-front-fill"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">Car Transportation</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Sedan / SUV / Hatchback</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  Enclosed car carrier trailer, hydraulic ramp loading, wheel chocks &amp; live GPS vehicle tracking.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">7,000</span> &ndash; <span>₹</span><span itemprop="maxPrice">15,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 3: Office -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-building"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">Corporate &amp; Office Relocation</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Commercial Shifting</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  IT equipment anti-static packing, workstation disassembly, weekend/night move for zero business downtime.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">8,500</span> &ndash; <span>₹</span><span itemprop="maxPrice">22,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

            <!-- Row 4: Warehousing -->
            <tr itemscope itemtype="https://schema.org/Offer">
              <td class="py-3 px-3">
                <div class="d-flex align-items-center gap-2">
                  <div class="icon-box-36 d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-3 fs-6 flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-archive-fill"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark fw-bold" itemprop="name">Household Goods Storage</strong>
                    <span class="badge bg-light text-secondary border border-light-subtle">Monthly Rental</span>
                  </div>
                </div>
              </td>
              <td class="py-3 px-3">
                <p class="text-secondary small mb-0 lh-sm" itemprop="description">
                  24x7 CCTV surveillance, pest-free temperature controlled storage, individual pallet segregation.
                </p>
              </td>
              <td class="py-3 px-3">
                <div class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fs-6 fw-bold text-nowrap" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                  <meta itemprop="priceCurrency" content="INR">
                  <span>₹</span><span itemprop="minPrice">2,000</span> &ndash; <span>₹</span><span itemprop="maxPrice">6,000</span>
                </div>
              </td>
              <td class="py-3 px-3 text-center">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Quote</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Trust Guarantee Banner & Price Note -->
  <div class="bg-light-subtle border border-light-subtle rounded-3 p-3 mt-3 d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 small text-secondary">
    <div class="d-flex align-items-center gap-2">
      <i class="bi bi-info-circle-fill text-danger fs-5 flex-shrink-0" aria-hidden="true"></i>
      <span>
        <strong class="text-dark">Price Note:</strong> Rates mentioned above are approximate estimates for <?= htmlspecialchars($city) ?>. Exact quotation depends on shifting distance, floor access, elevator availability, packaging preference, and volume of goods.
      </span>
    </div>
    <?php if (!empty($phone)): ?>
      <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" class="text-danger fw-bold text-decoration-none d-inline-flex align-items-center gap-1 flex-shrink-0 text-nowrap">
        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
        <span>Call for Quote: <?= htmlspecialchars($phone) ?></span>
      </a>
    <?php endif; ?>
  </div>

</div>
