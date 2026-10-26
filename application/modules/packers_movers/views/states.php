<!-- Breadcrumbs Section (Strict 1x H1) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches',
    'bc_desc' => 'Discover our branch network of packers and movers across India.',
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => site_url()],
        ['name' => 'Our Branches']
    ]
]);

// Sirf wahi states rakhein jo dikhane hain
$display_states = [
    ['name' => 'Hyderabad', 'slug' => 'hyderabad', 'img' => 'hyderabad.webp', 'alt' => 'Packers and Movers in Hyderabad'],
];
?>

<section class="branch-grid-section py-5">
  <div class="container">
        <div class="text-center mb-5">
      <h2 class="fw-bold text-navy display-6 mb-2">
        Our Presence Across <span class="text-orange">India</span>
      </h2>
      <p class="text-muted mx-auto mb-0 max-w-680">
        Reliable packing, moving, and vehicle transportation services available across all major cities and branches.
      </p>
    </div>
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