<!-- Breadcrumbs Section (Strict 1x H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches',
    'bc_desc' => 'Discover our branch network of packers and movers across India.',
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => site_url()],
        ['name' => 'Our Branches']
    ]
]);

/**
 * Master List of All State Branches (Preserved for Future Use / Expansion)
 * All state records are completely intact.
 * To show additional states at any time, simply add their slugs to $active_state_slugs below.
 */
$all_states = [
    ['name' => 'Bihar', 'slug' => 'bihar', 'img' => 'bihar.webp', 'alt' => 'Packers and Movers in Bihar'],
    ['name' => 'Maharashtra', 'slug' => 'maharashtra', 'img' => 'maharashtra.webp', 'alt' => 'Packers and Movers in Maharashtra'],
    ['name' => 'Delhi NCR', 'slug' => 'delhi', 'img' => 'delhi.webp', 'alt' => 'Packers and Movers in Delhi NCR'],
    ['name' => 'Karnataka', 'slug' => 'karnataka', 'img' => 'karnataka.webp', 'alt' => 'Packers and Movers in Karnataka'],
    ['name' => 'Tamil Nadu', 'slug' => 'tamil-nadu', 'img' => 'tamil-nadu.webp', 'alt' => 'Packers and Movers in Tamil Nadu'],
    ['name' => 'Telangana', 'slug' => 'telangana', 'img' => 'telangana.webp', 'alt' => 'Packers and Movers in Telangana'],
    ['name' => 'Gujarat', 'slug' => 'gujarat', 'img' => 'gujarat.webp', 'alt' => 'Packers and Movers in Gujarat'],
    ['name' => 'West Bengal', 'slug' => 'west-bengal', 'img' => 'west-bengal.webp', 'alt' => 'Packers and Movers in West Bengal'],
    ['name' => 'Uttar Pradesh', 'slug' => 'uttar-pradesh', 'img' => 'uttar-pradesh.webp', 'alt' => 'Packers and Movers in Uttar Pradesh'],
    ['name' => 'Rajasthan', 'slug' => 'rajasthan', 'img' => 'rajasthan.webp', 'alt' => 'Packers and Movers in Rajasthan'],
    ['name' => 'Punjab', 'slug' => 'punjab', 'img' => 'punjab.webp', 'alt' => 'Packers and Movers in Punjab'],
    ['name' => 'Haryana', 'slug' => 'haryana', 'img' => 'haryana.webp', 'alt' => 'Packers and Movers in Haryana'],
    ['name' => 'Kerala', 'slug' => 'kerala', 'img' => 'kerala.webp', 'alt' => 'Packers and Movers in Kerala'],
    ['name' => 'Madhya Pradesh', 'slug' => 'madhya-pradesh', 'img' => 'madhya-pradesh.webp', 'alt' => 'Packers and Movers in Madhya Pradesh'],
    ['name' => 'Andhra Pradesh', 'slug' => 'andhra-pradesh', 'img' => 'andhra-pradesh.webp', 'alt' => 'Packers and Movers in Andhra Pradesh'],
    ['name' => 'Odisha', 'slug' => 'odisha', 'img' => 'odisha.webp', 'alt' => 'Packers and Movers in Odisha'],
    ['name' => 'Jharkhand', 'slug' => 'jharkhand', 'img' => 'jharkhand.webp', 'alt' => 'Packers and Movers in Jharkhand'],
    ['name' => 'Uttarakhand', 'slug' => 'uttarakhand', 'img' => 'uttarakhand.webp', 'alt' => 'Packers and Movers in Uttarakhand'],
    ['name' => 'Assam', 'slug' => 'assam', 'img' => 'assam.webp', 'alt' => 'Packers and Movers in Assam'],
    ['name' => 'Goa', 'slug' => 'goa', 'img' => 'goa.webp', 'alt' => 'Packers and Movers in Goa'],
    ['name' => 'Chhattisgarh', 'slug' => 'chhattisgarh', 'img' => 'chhattisgarh.webp', 'alt' => 'Packers and Movers in Chhattisgarh'],
    ['name' => 'Himachal Pradesh', 'slug' => 'himachal-pradesh', 'img' => 'himachal-pradesh.webp', 'alt' => 'Packers and Movers in Himachal Pradesh'],
    ['name' => 'Jammu & Kashmir', 'slug' => 'jammu-and-kashmir', 'img' => 'jammu-and-kashmir.webp', 'alt' => 'Packers and Movers in Jammu & Kashmir'],
    ['name' => 'Chandigarh', 'slug' => 'chandigarh', 'img' => 'chandigarh.webp', 'alt' => 'Packers and Movers in Chandigarh']
];

// Client requirement: Show only Bihar on Our Branches page without erasing any state data
$active_state_slugs = ['bihar'];
$display_states = array_filter($all_states, function($st) use ($active_state_slugs) {
    return in_array($st['slug'], $active_state_slugs);
});
?>

<!-- Branch Section (Strict 1x H2, Cards Grid) -->
<section class="branch-grid-section py-5">
  <div class="container">
    
    <!-- Section Heading (Strict 1x H2) -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-navy display-6 mb-2">
        Our Presence Across <span class="text-orange">India</span>
      </h2>
      <p class="text-muted mx-auto mb-0 max-w-680">
        Reliable packing, moving, and vehicle transportation services available across all major cities and branches.
      </p>
    </div>

    <!-- Cards Grid (Centered when showing active branch selection) -->
    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
      <?php foreach ($display_states as $state): ?>
        <div class="col">
          <div class="branch-card">
            <div class="branch-card-img-wrap">
              <img class="branch-card-img" src="<?= base_url('assets/img/state/' . $state['img']) ?>" alt="<?= htmlspecialchars($state['alt']) ?>" width="640" height="360" loading="lazy">
            </div>
            <div class="branch-card-body">
              <p class="branch-card-title fw-bold fs-5 mb-2"><?= htmlspecialchars($state['name']) ?></p>
              <a href="<?= site_url($state['slug']) ?>" class="branch-card-btn" title="Explore <?= htmlspecialchars($state['name']) ?> Branch" aria-label="Explore <?= htmlspecialchars($state['name']) ?> Branch">
                <span>Explore Branch</span>
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Standards & Network Highlight (H2 #2) -->
    <div class="mt-5 p-4 bg-light rounded-4 border text-center">
      <h2 class="fw-bold text-navy fs-3 mb-2">Verified Network Standards Across India</h2>
      <p class="text-muted mx-auto mb-0 max-w-680">
        Every regional branch operates under standardized IBA billing codes and ISO 9001:2015 safety processes.
      </p>
    </div>

  </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>