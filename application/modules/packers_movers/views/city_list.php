<?php
$st = strtolower(str_replace(" ", "-", $state));
$data_file = APPPATH . "modules/packers_movers/views/data/$st.php";
$cities = [];
if (file_exists($data_file)) {
    include $data_file;
}

$state_title = ucwords($state);
$st_param = str_replace(" ", "-", $state);
?>

<!-- Dynamic Breadcrumbs (Strict 1x H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . $state_title,
    'bc_desc' => 'Certified packing, moving, and vehicle transport across ' . $state_title . ' with verified branch networks.',
    'banner_icon' => 'bi-geo-alt',
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => site_url()],
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => $state_title]
    ]
]);
?>

<!-- Cities Grid Section (Strict 1x H2, 0x H3) -->
<section class="state-cities-section py-4 py-md-5 overflow-hidden">
  <div class="container">

    <!-- Section Heading (H2 #1) -->
    <div class="text-center mb-4">
      <h2 class="fw-bold text-navy fs-3 mb-2">Packers and Movers in <?= $state_title ?> - City Network Directory</h2>
      <p class="text-muted mx-auto mb-0 max-w-680">
        Select your city below for verified local and domestic relocation quotes with door-to-door insurance.
      </p>
    </div>

    <!-- 4-Column Responsive Grid with 12px Gaps -->
    <div class="row city-cards-row" id="citiesGrid">
      <?php
      foreach ($cities as $ct):
          $city_nm = $ct['nm'];
          $link = urlencode(strtolower(str_replace(" ", "-", $city_nm)));
          $statename = urlencode(strtolower(str_replace(" ", "-", $st_param)));
      ?>
        <div class="city-col-item">
          <a 
            href="<?= site_url("$link-packers-movers-$statename") ?>" 
            class="city-compact-card" 
            title="Packers and Movers in <?= htmlspecialchars($city_nm) ?>" 
            aria-label="Packers and Movers in <?= htmlspecialchars($city_nm) ?>"
          >
            <i class="bi bi-geo-alt-fill city-pin-icon" aria-hidden="true"></i>
            <p class="city-compact-title m-0">
              <span class="city-prefix">Packers and Movers in</span>
              <span class="city-name-bold"><?= htmlspecialchars($city_nm) ?></span>
            </p>
            <i class="bi bi-arrow-right city-hover-arrow" aria-hidden="true"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Standards & Network Highlight (H2 #2) -->
    <div class="mt-4 p-4 bg-light rounded-4 border text-center">
      <h2 class="fw-bold text-navy fs-4 mb-2">IBA Approved &amp; ISO Certified Relocation Network in <?= $state_title ?></h2>
      <p class="text-muted mx-auto mb-0 max-w-680">
        Direct container routes, verified packing crew, and dedicated transit managers across all districts.
      </p>
    </div>

  </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>