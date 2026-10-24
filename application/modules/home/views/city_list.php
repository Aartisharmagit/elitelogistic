<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$bihar_cities = [
    ['name' => 'Patna', 'slug' => 'patna-packers-movers-bihar'],
    ['name' => 'Gaya', 'slug' => 'gaya-packers-movers-bihar'],
    ['name' => 'Bhagalpur', 'slug' => 'bhagalpur-packers-movers-bihar'],
    ['name' => 'Muzaffarpur', 'slug' => 'muzaffarpur-packers-movers-bihar'],
    ['name' => 'Darbhanga', 'slug' => 'darbhanga-packers-movers-bihar'],
    ['name' => 'Purnia', 'slug' => 'purnia-packers-movers-bihar'],
    ['name' => 'Begusarai', 'slug' => 'begusarai-packers-movers-bihar'],
    ['name' => 'Bihar Sharif', 'slug' => 'bihar-sharif-packers-movers-bihar'],
    ['name' => 'Arrah', 'slug' => 'arrah-packers-movers-bihar'],
    ['name' => 'Chapra', 'slug' => 'chapra-packers-movers-bihar'],
    ['name' => 'Motihari', 'slug' => 'motihari-packers-movers-bihar'],
    ['name' => 'Hajipur', 'slug' => 'hajipur-packers-movers-bihar'],
    ['name' => 'Munger', 'slug' => 'munger-packers-movers-bihar'],
    ['name' => 'Saharsa', 'slug' => 'saharsa-packers-movers-bihar'],
    ['name' => 'Samastipur', 'slug' => 'samastipur-packers-movers-bihar'],
    ['name' => 'Buxar', 'slug' => 'buxar-packers-movers-bihar'],
    ['name' => 'Siwan', 'slug' => 'siwan-packers-movers-bihar'],
    ['name' => 'Bettiah', 'slug' => 'bettiah-packers-movers-bihar'],
];
?>

<!-- 5. AREAS SERVED SECTION (Bihar Focus) -->
<section class="site-section section-bg-light border-bottom" id="areas-served">
  <div class="container">
    
    <!-- Shared Section Title Block (Centered) -->
    <div class="section-title-block text-center mx-auto mb-5">
      <div class="section-title-line mx-auto" aria-hidden="true"></div>
      <h3 class="section-title-heading mb-2">Areas We Serve</h3>
      <p class="section-subtitle-text mx-auto">
        Dedicated operational hubs and scheduled container fleets serving all districts and key cities across Bihar.
      </p>
    </div>

    <!-- Grid of Key Cities in Bihar: "Packers and Movers in $city" -->
    <div class="row g-2 g-sm-3 g-md-4 mb-4">
      <?php foreach ($bihar_cities as $i => $c): ?>
        <div class="col-6 col-sm-6 col-lg-4">
          <a class="shared-card city-route-card p-3 d-flex align-items-center justify-content-between text-decoration-none scroll-reveal stagger-<?= ($i % 3) + 1 ?>" href="<?= site_url($c['slug']) ?>" title="Packers and Movers in <?= htmlspecialchars($c['name']) ?>" aria-label="Packers and Movers in <?= htmlspecialchars($c['name']) ?>">
            <div class="d-flex align-items-center gap-3">
              <div class="city-route-icon flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="bi bi-geo-alt-fill text-orange"></i>
              </div>
              <span class="city-route-name fw-semibold text-dark small">Packers and Movers in <?= htmlspecialchars($c['name']) ?></span>
            </div>
            <i class="bi bi-chevron-right city-route-arrow text-muted flex-shrink-0"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Action Buttons -->
    <div class="text-center pt-3 d-flex flex-wrap align-items-center justify-content-center gap-3">
      <a href="<?= site_url('bihar') ?>" class="btn btn-hero-primary d-inline-flex align-items-center gap-2" title="Explore All Cities in Bihar" aria-label="Explore All Cities in Bihar">
        <span>Explore All Cities in Bihar</span>
        <i class="bi bi-arrow-right"></i>
      </a>
      <a href="<?= site_url('our-branches') ?>" class="btn btn-outline-brand d-inline-flex align-items-center gap-2" title="View All Branches Across India" aria-label="View All Branches Across India">
        <span>All India Branches</span>
        <i class="bi bi-building"></i>
      </a>
    </div>

  </div>
</section>