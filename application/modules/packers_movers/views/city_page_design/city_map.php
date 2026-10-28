<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$real_google_map_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.6250375404!2d78.3922292!3d17.477651899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91db3c2f9717%3A0x974c3dab1a09c914!2sELITE%20LOGISTIC%20PACKERS%20AND%20MOVERS%20IN%20HYDERABAD!5e0!3m2!1sen!2sin!4v1793168191631!5m2!1sen!2sin";
$map_lat = '17.4776519';
$map_lon = '78.3922292';
?>
<style>
.city-map-wrapper {
  border-radius: 16px;
  overflow: hidden;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 16px rgba(11, 34, 77, 0.05);
  background: #f8fafc;
}

.city-map-iframe {
  width: 100%;
  height: 450px;
  border: 0;
  display: block;
}

@media (max-width: 575.98px) {
  .city-map-iframe {
    height: 340px;
  }
}
</style>

<div class="card city-content-card mb-4 p-3 p-sm-4 p-lg-5 rounded-4 bg-white shadow-sm border border-light-subtle" itemscope itemtype="https://schema.org/LocalBusiness">
  <meta itemprop="name" content="ELITE LOGISTIC PACKERS AND MOVERS IN HYDERABAD">
  <meta itemprop="image" content="<?= base_url('assets/img/logo/logo.png') ?>">
  <?php if (!empty($phone)): ?>
    <meta itemprop="telephone" content="<?= htmlspecialchars($phone) ?>">
  <?php endif; ?>
  <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
    <meta itemprop="latitude" content="<?= htmlspecialchars($map_lat) ?>">
    <meta itemprop="longitude" content="<?= htmlspecialchars($map_lon) ?>">
  </div>
  <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
      <div class="d-inline-flex align-items-center gap-2 bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 mb-2 fw-bold small">
        <i class="bi bi-geo-alt-fill text-danger" aria-hidden="true"></i>
        <span>Verified Google Business Listing</span>
      </div>
      <h3 class="fw-bolder text-dark mb-2 fs-4 fs-md-3" itemprop="legalName">
        ELITE LOGISTIC PACKERS AND MOVERS IN HYDERABAD
      </h3>
      <div class="text-secondary small d-flex align-items-start gap-2 bg-light p-2.5 rounded-3 border border-light-subtle" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
        <i class="bi bi-pin-map-fill text-danger fs-6 mt-1 flex-shrink-0" aria-hidden="true"></i>
        <div>
          <span itemprop="streetAddress" class="fw-medium text-dark">3-4-16, opp. The Man Tea, near MALAYSIAN TOWNSHIP, Kukatpally Housing Board Colony, Malaysian Twp, KPHB 5th Phase, Kukatpally</span>, 
          <span itemprop="addressLocality">Hyderabad</span>, 
          <span itemprop="addressRegion">Telangana</span> 
          <span itemprop="postalCode" class="fw-semibold text-dark">500085</span>
          <meta itemprop="addressCountry" content="IN">
        </div>
      </div>
    </div>
    <div class="d-flex align-items-center gap-2 flex-shrink-0">
      <a href="https://maps.google.com/?cid=10894080133441603860" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-1.5 small shadow-sm">
        <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
        <span>Get Directions</span>
      </a>
      <?php if (!empty($phone)): ?>
        <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:' . $phone ?>" class="btn btn-danger rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-1.5 small shadow-sm">
          <i class="bi bi-telephone-fill" aria-hidden="true"></i>
          <span>Call Office</span>
        </a>
      <?php endif; ?>
    </div>
  </div>
  <div class="city-map-wrapper">
    <iframe
      itemprop="hasMap"
      src="<?= htmlspecialchars($real_google_map_url) ?>"
      title="ELITE LOGISTIC PACKERS AND MOVERS IN HYDERABAD"
      class="city-map-iframe"
      loading="lazy"
      allowfullscreen=""
      referrerpolicy="strict-origin-when-cross-origin"
    ></iframe>
  </div>
</div>
