<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$bihar_cities = [
    ['name' => 'Mumbai', 'slug' => 'mumbai-packers-movers-maharashtra'],
    ['name' => 'Hyderabad', 'slug' => 'hyderabad-packers-movers-telangana'],
    ['name' => 'Bangalore', 'slug' => 'bangalore-packers-movers-karnataka'],
    ['name' => 'Chennai', 'slug' => 'chennai-packers-movers-tamil-nadu'],
    ['name' => 'Pune', 'slug' => 'pune-packers-movers-maharashtra'],
    ['name' => 'Gachibowli', 'slug' => 'gachibowli-packers-movers-hyderabad'],
    ['name' => 'Whitefield', 'slug' => 'whitefield-packers-movers-bangalore'],
    ['name' => 'Manikonda', 'slug' => 'manikonda-packers-movers-chennai'],
    ['name' => 'Nagpur', 'slug' => 'nagpur-packers-movers-maharashtra'],
    ['name' => 'Hitec City', 'slug' => 'hitec-city-packers-movers-hyderabad'],
    ['name' => 'Koramangala', 'slug' => 'koramangala-packers-movers-bangalore'],
    ['name' => 'Anna Nagar', 'slug' => 'anna-nagar-packers-movers-chennai'],
    ['name' => 'Thane', 'slug' => 'thane-packers-movers-maharashtra'],
    ['name' => 'Madhapur', 'slug' => 'madhapur-packers-movers-hyderabad'],
    ['name' => 'Indiranagar', 'slug' => 'indiranagar-packers-movers-bangalore'],
    ['name' => 'Velachery', 'slug' => 'velachery-packers-movers-chennai'],
    ['name' => 'Nashik', 'slug' => 'nashik-packers-movers-maharashtra'],
    ['name' => 'Secunderabad', 'slug' => 'secunderabad-packers-movers-telangana'],
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
      <a href="<?= site_url('hyderabad') ?>" class="btn btn-hero-primary d-inline-flex align-items-center gap-2" title="Explore All Cities in Bihar" aria-label="Explore All Cities in Bihar">
        <span>Explore All Cities in Hyderabad</span>
        <i class="bi bi-arrow-right"></i>
      </a>
      <a href="<?= site_url('our-branches') ?>" class="btn btn-outline-brand d-inline-flex align-items-center gap-2" title="View All Branches Across India" aria-label="View All Branches Across India">
        <span>All India Branches</span>
        <i class="bi bi-building"></i>
      </a>
    </div>

  </div>
</section>