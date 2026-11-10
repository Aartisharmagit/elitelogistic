<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$normalize_city = static function ($value) {
  return strtolower(preg_replace('/[^a-z0-9]/', '', (string) $value));
};
$is_kukatpally_listing = $normalize_city($city) === 'kukatpally';
$map_lat = '';
$map_lon = '';
$map_address = $city;
$map_locality = $city;
$map_region = $state;
$directions_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($city . ', ' . $state);

if ($is_kukatpally_listing) {
  $map_title = 'ELITE LOGISTIC PACKERS AND MOVERS IN HYDERABAD';
  $real_google_map_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.6250375404!2d78.3922292!3d17.477651899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91db3c2f9717%3A0x974c3dab1a09c914!2sELITE%20LOGISTIC%20PACKERS%20AND%20MOVERS%20IN%20HYDERABAD!5e0!3m2!1sen!2sin!4v1793168191631!5m2!1sen!2sin";
  $map_lat = '17.4776519';
  $map_lon = '78.3922292';
  $map_address = '3-4-16, opp. The Man Tea, near MALAYSIAN TOWNSHIP, Kukatpally Housing Board Colony, Malaysian Twp, KPHB 5th Phase, Kukatpally';
  $map_locality = 'Hyderabad';
  $map_region = 'Telangana';
  $directions_url = 'https://maps.google.com/?cid=10894080133441603860';
} else {
  $map_title = 'Map of ' . $city . ', ' . $state;
  foreach ($cities as $city_data) {
    if (
      isset($city_data['nm'], $city_data['lat'], $city_data['lon']) &&
      $normalize_city($city_data['nm']) === $normalize_city($city)
    ) {
      $map_lat = (string) $city_data['lat'];
      $map_lon = (string) $city_data['lon'];
      break;
    }
  }
  if ($map_lat !== '' && $map_lon !== '') {
    $map_query = $map_lat . ',' . $map_lon;
    $real_google_map_url = 'https://www.google.com/maps?q=' . rawurlencode($map_query) . '&z=13&output=embed';
    $directions_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($map_query);
  } else {
    $map_query = $city . ', ' . $state;
    $real_google_map_url = 'https://www.google.com/maps?q=' . rawurlencode($map_query) . '&z=12&output=embed';
  }
}
?>
<style>.city-map-wrapper{border-radius:16px;overflow:hidden;border:1px solid #e2e8f0;box-shadow:0 4px 16px rgb(11 34 77 / .05);background:#f8fafc}.city-map-iframe{width:100%;height:450px;border:0;display:block}@media (max-width:575.98px){.city-map-iframe{height:340px}}</style>
<div class="card city-content-card mb-4 p-3 p-sm-4 p-lg-5 rounded-4 bg-white shadow-sm border border-light-subtle"<?php if ($is_kukatpally_listing): ?> itemscope itemtype="https://schema.org/LocalBusiness"<?php endif; ?>>
  <?php if ($is_kukatpally_listing): ?>
    <meta itemprop="name" content="<?= htmlspecialchars($map_title, ENT_QUOTES, 'UTF-8') ?>">
  <?php endif; ?>
  <?php if ($is_kukatpally_listing): ?>
    <meta itemprop="image" content="<?= base_url('assets/img/logo/logo.png') ?>">
  <?php endif; ?>
  <?php if ($is_kukatpally_listing && !empty($phone)): ?>
    <meta itemprop="telephone" content="<?= htmlspecialchars($phone) ?>">
  <?php endif; ?>
  <?php if ($is_kukatpally_listing && $map_lat !== '' && $map_lon !== ''): ?>
    <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
      <meta itemprop="latitude" content="<?= htmlspecialchars($map_lat) ?>">
      <meta itemprop="longitude" content="<?= htmlspecialchars($map_lon) ?>">
    </div>
  <?php endif; ?>
  <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
      <div class="d-inline-flex align-items-center gap-2 bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 mb-2 fw-bold small">
        <i class="bi bi-geo-alt-fill text-danger" aria-hidden="true"></i>
        <span><?= $is_kukatpally_listing ? 'Verified Google Business Listing' : 'City Location Map' ?></span>
      </div>
      <h3 class="fw-bolder text-dark mb-2 fs-4 fs-md-3">
        <?php if ($is_kukatpally_listing): ?>
          <span itemprop="legalName"><?= htmlspecialchars($map_title, ENT_QUOTES, 'UTF-8') ?></span>
        <?php else: ?>
          Location map for Packers and Movers in <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8') ?>
        <?php endif; ?>
      </h3>
      <div class="text-secondary small d-flex align-items-start gap-2 bg-light p-2.5 rounded-3 border border-light-subtle"<?php if ($is_kukatpally_listing): ?> itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"<?php endif; ?>>
        <i class="bi bi-pin-map-fill text-danger fs-6 mt-1 flex-shrink-0" aria-hidden="true"></i>
        <div>
          <?php if ($is_kukatpally_listing): ?>
            <span itemprop="streetAddress" class="fw-medium text-dark"><?= htmlspecialchars($map_address, ENT_QUOTES, 'UTF-8') ?></span>,
            <span itemprop="addressLocality"><?= htmlspecialchars($map_locality, ENT_QUOTES, 'UTF-8') ?></span>,
            <span itemprop="addressRegion"><?= htmlspecialchars($map_region, ENT_QUOTES, 'UTF-8') ?></span>
            <span itemprop="postalCode" class="fw-semibold text-dark">500085</span>
          <?php else: ?>
            <span class="fw-medium text-dark"><?= htmlspecialchars($city . ', ' . $state, ENT_QUOTES, 'UTF-8') ?></span>
          <?php endif; ?>
          <?php if ($is_kukatpally_listing): ?>
            <meta itemprop="addressCountry" content="IN">
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="d-flex align-items-center gap-2 flex-shrink-0">
      <a href="<?= htmlspecialchars($directions_url, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-1.5 small shadow-sm">
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
      <?php if ($is_kukatpally_listing): ?>itemprop="hasMap"<?php endif; ?>
      src="<?= htmlspecialchars($real_google_map_url) ?>"
      title="<?= htmlspecialchars($map_title, ENT_QUOTES, 'UTF-8') ?>"
      class="city-map-iframe"
      loading="lazy"
      allowfullscreen=""
      referrerpolicy="strict-origin-when-cross-origin"
    ></iframe>
  </div>
</div>
