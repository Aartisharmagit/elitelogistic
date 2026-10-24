<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Interactive Consignment Tracking Section -->
<section class="tracking-section py-5 bg-light-surface border-bottom" id="tracking">
  <div class="container">
    <div class="tracking-card-container bg-white p-4 p-lg-5 rounded-4 border">
      <div class="row align-items-center justify-content-between mb-4 g-4">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 px-2 py-1 rounded bg-success-soft text-success-dark small fw-semibold mb-2">
            <span class="dot-pulse-green"></span>
            <span>SATELLITE TELEMETRY CONNECTED</span>
          </div>
          <p class="section-title mb-1">Track Your Consignment</p>
          <p class="section-lead-text text-muted mb-0">
            Enter your Consignment Note / Bilty / Docket number for real-time truck position.
          </p>
        </div>

        <!-- Docket Search Input Bar -->
        <div class="col-lg-6">
          <form class="d-flex flex-column flex-sm-row gap-2" action="<?= site_url('tracking') ?>" method="GET">
            <div class="position-relative flex-grow-1">
              <i class="bi bi-upc-scan tracking-input-icon"></i>
              <input type="text" name="docket" class="form-control tracking-input" placeholder="e.g. ELP-992384" value="ELP-884920" required>
            </div>
            <button type="submit" class="btn btn-brand d-inline-flex align-items-center justify-content-center gap-2 px-4 py-2" title="Track Live Consignment" aria-label="Track Live Consignment">
              <i class="bi bi-search"></i>
              <span>Track Live</span>
            </button>
          </form>
        </div>
      </div>

      <!-- Telemetry Status Milestone Display (Active Demo for ELP-884920) -->
      <div class="telemetry-box rounded-3 p-4 border bg-brand-soft">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 pb-3 mb-4 border-bottom">
          <div>
            <span class="small text-muted text-uppercase fw-semibold d-block">Active Consignment</span>
            <span class="telemetry-docket-title fw-bold text-brand-dark">DOCKET: ELP-884920 (Bengaluru HQ ➔ Mumbai Hub)</span>
          </div>
          <div class="d-flex align-items-center gap-3">
            <span class="badge-status-transit px-3 py-1 rounded-pill small fw-semibold">
              Status: In Transit (On Schedule)
            </span>
            <span class="small text-muted">Updated: 8 mins ago</span>
          </div>
        </div>

        <!-- Progress Stepper Grid -->
        <div class="row g-4">
          <!-- Step 1 -->
          <div class="col-sm-6 col-md-3">
            <div class="d-flex align-items-start gap-3">
              <div class="stepper-dot dot-completed d-flex align-items-center justify-content-center text-white shrink-0">
                <i class="bi bi-check-lg"></i>
              </div>
              <div>
                <p class="stepper-title fw-bold mb-0 text-dark">Packed &amp; Picked Up</p>
                <p class="stepper-sub mb-0 text-muted small">Bengaluru, Indiranagar</p>
                <span class="stepper-date small text-muted">Apr 12, 11:30 AM</span>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="col-sm-6 col-md-3">
            <div class="d-flex align-items-start gap-3">
              <div class="stepper-dot dot-completed d-flex align-items-center justify-content-center text-white shrink-0">
                <i class="bi bi-check-lg"></i>
              </div>
              <div>
                <p class="stepper-title fw-bold mb-0 text-dark">Dispatched from Hub</p>
                <p class="stepper-sub mb-0 text-muted small">Tumkur Toll Terminal</p>
                <span class="stepper-date small text-muted">Apr 12, 06:15 PM</span>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="col-sm-6 col-md-3">
            <div class="d-flex align-items-start gap-3">
              <div class="stepper-dot dot-active d-flex align-items-center justify-content-center text-white shrink-0">
                <i class="bi bi-truck"></i>
              </div>
              <div>
                <p class="stepper-title fw-bold mb-0 text-brand">In Transit (Highway NH48)</p>
                <p class="stepper-sub mb-0 text-muted small">Near Kolhapur Bypass</p>
                <span class="stepper-date small fw-bold text-brand">Active GPS Location</span>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="col-sm-6 col-md-3 opacity-75">
            <div class="d-flex align-items-start gap-3">
              <div class="stepper-dot dot-pending d-flex align-items-center justify-content-center text-muted shrink-0">
                <span>4</span>
              </div>
              <div>
                <p class="stepper-title fw-bold mb-0 text-dark">Final Delivery &amp; Setup</p>
                <p class="stepper-sub mb-0 text-muted small">Andheri West, Mumbai</p>
                <span class="stepper-date small text-muted">Expected: Apr 14, 02:00 PM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
