<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="city-content-card mb-4 p-4 p-md-5 rounded-4 bg-white shadow-sm border border-light-subtle">
  <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 720px;">
    <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill fw-bold small mb-2 d-inline-flex align-items-center gap-1">
      <i class="bi bi-shield-check"></i> Dedicated Moving Services
    </span>
    <h3 class="fw-bold text-navy fs-3 mb-2"> Relocation Services Available in <span class="text-danger"><?= $city ?></span></h3>
    <p class="text-muted small mb-0"> Verified, insured, and professional shifting solutions tailored for local residential societies, commercial hubs, and intercity moves.</p>
  </div>
  <div class="row g-3 g-lg-4">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="city-service-card h-100 p-4 rounded-4 border border-light-subtle bg-white shadow-sm d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="service-icon-box rounded-3 bg-danger-subtle text-danger d-flex align-items-center justify-content-center">
              <i class="bi bi-house-door-fill"></i>
            </div>
            <span class="badge bg-light text-secondary border border-light-subtle rounded-pill small px-2 py-1">Top Rated</span>
          </div>
          <h4 class="fw-bold text-navy fs-5 mb-2">Household Shifting in <?= $city ?></h4>
          <p class="text-muted small mb-3">Reliable home relocation with 5-layer bubble packing, professional furniture dismantling, and safe doorstep placement.</p>
        </div>
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
          <a href="<?= site_url('home-relocation') ?>" class="text-danger fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1 service-card-link">
            <span>Explore Service</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get Quote
          </button>
        </div>

      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="city-service-card h-100 p-4 rounded-4 border border-light-subtle bg-white shadow-sm d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="service-icon-box rounded-3 bg-primary-subtle text-primary d-flex align-items-center justify-content-center">
              <i class="bi bi-building"></i>
            </div>
            <span class="badge bg-light text-secondary border border-light-subtle rounded-pill small px-2 py-1">Zero Downtime</span>
          </div>
          <h4 class="fw-bold text-navy fs-5 mb-2">Office Relocation in <?= $city ?></h4>
          <p class="text-muted small mb-3">Planned corporate moving covering IT workstations, conference setups, and confidential files with minimal business downtime.</p>
        </div>
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
          <a href="<?= site_url('office-relocation') ?>" class="text-danger fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1 service-card-link">
            <span>Explore Service</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get Quote
          </button>
        </div>

      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="city-service-card h-100 p-4 rounded-4 border border-light-subtle bg-white shadow-sm d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="service-icon-box rounded-3 bg-success-subtle text-success d-flex align-items-center justify-content-center">
              <i class="bi bi-car-front-fill"></i>
            </div>
            <span class="badge bg-light text-secondary border border-light-subtle rounded-pill small px-2 py-1">GPS Carrier</span>
          </div>
          <h4 class="fw-bold text-navy fs-5 mb-2">Car Transport in <?= $city ?></h4>
          <p class="text-muted small mb-3"> Secure door-to-door car transit using covered hydraulic trailers with wheel chocks, safety locks, and full transit insurance.</p>
        </div>
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
          <a href="<?= site_url('car-transportation') ?>" class="text-danger fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1 service-card-link">
            <span>Explore Service</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get Quote
          </button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="city-service-card h-100 p-4 rounded-4 border border-light-subtle bg-white shadow-sm d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="service-icon-box rounded-3 bg-info-subtle text-info d-flex align-items-center justify-content-center">
              <i class="bi bi-bicycle"></i>
            </div>
            <span class="badge bg-light text-secondary border border-light-subtle rounded-pill small px-2 py-1">Scratch-Free</span>
          </div>
          <h4 class="fw-bold text-navy fs-5 mb-2">Bike Transport in <?= $city ?></h4>
          <p class="text-muted small mb-3"> Multi-layer protective bubble wrapping with mirror and exhaust padding for completely scratch-free bike shipping.
          </p>
        </div>
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
          <a href="<?= site_url('bike-transportation') ?>" class="text-danger fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1 service-card-link">
            <span>Explore Service</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get Quote
          </button>
        </div>
      </div>
    </div>

    <!-- Service 5: Packing & Moving -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="city-service-card h-100 p-4 rounded-4 border border-light-subtle bg-white shadow-sm d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="service-icon-box rounded-3 bg-warning-subtle text-warning d-flex align-items-center justify-content-center">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <span class="badge bg-light text-secondary border border-light-subtle rounded-pill small px-2 py-1">Export Grade</span>
          </div>
          <h4 class="fw-bold text-navy fs-5 mb-2">Packing &amp; Moving in <?= $city ?></h4>
          <p class="text-muted small mb-3">
            High-grade corrugated cartons, shrink wrap, and cushioning foam designed for delicate glassware and heavy items.
          </p>
        </div>
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
          <a href="<?= site_url('packing-and-moving') ?>" class="text-danger fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1 service-card-link">
            <span>Explore Service</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get Quote
          </button>
        </div>
      </div>
    </div>

    <!-- Service 6: Loading & Unloading -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="city-service-card h-100 p-4 rounded-4 border border-light-subtle bg-white shadow-sm d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="service-icon-box rounded-3 bg-danger-subtle text-danger d-flex align-items-center justify-content-center">
              <i class="bi bi-truck"></i>
            </div>
            <span class="badge bg-light text-secondary border border-light-subtle rounded-pill small px-2 py-1">Trained Crew</span>
          </div>
          <h4 class="fw-bold text-navy fs-5 mb-2">Loading &amp; Unloading in <?= $city ?></h4>
          <p class="text-muted small mb-3">
            Trained relocation crews equipped with ramps, belts, and lifting dollies to load and place heavy goods safely.
          </p>
        </div>
        <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
          <a href="<?= site_url('loading-unloading') ?>" class="text-danger fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1 service-card-link">
            <span>Explore Service</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get Quote
          </button>
        </div>
      </div>
    </div>

  </div>
</div>