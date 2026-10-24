<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$lat = '';
$lon = '';
if (!empty($cities) && is_array($cities)) {
    foreach ($cities as $ct) {
        if (@$ct['nm'] == $city) {
            $lat = $ct['lat'];
            $lon = $ct['lon'];
            break;
        }
    }
}

if (!empty($lat) && !empty($lon)): ?>
<div class="city-content-card mb-4 p-4 rounded-4 bg-white shadow-sm border border-light-subtle">
  <h3 class="fw-bold text-navy fs-5 mb-3">
    <i class="bi bi-geo-alt-fill text-orange me-2" aria-hidden="true"></i>Operational Service Area in <?= htmlspecialchars($city) ?>
  </h3>
  <div class="ratio ratio-21x9 rounded-3 overflow-hidden border border-light-subtle">
    <iframe
      src="https://www.google.com/maps?q=<?= urlencode($lat . ',' . $lon) ?>&hl=en&z=12&output=embed"
      title="Google Map Service Area in <?= htmlspecialchars($city) ?>"
      loading="lazy"
      allowfullscreen
      class="border-0 w-100 h-100"
    ></iframe>
  </div>
</div>
<?php endif; ?>