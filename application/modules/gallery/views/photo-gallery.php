<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Curated items with categories
$defaultGallery = [
    [
        'id' => '1',
        'title' => 'Household Packing & Moving',
        'cat' => 'house',
        'cat_label' => 'Household',
        'desc' => 'Multi-layer bubble and foam wrapped household furniture prepared for interstate relocation.',
        'img' => 'assets/img/household_shifting.jpg',
        'icon' => 'bi-house-heart-fill'
    ],
    [
        'id' => '2',
        'title' => 'Specialized Multi-Layer Bubble Wrap',
        'cat' => 'packing',
        'cat_label' => 'Packing',
        'desc' => '5-layer protective wrapping on fragile glass and electronic appliances.',
        'img' => 'assets/img/packing_moving.jpg',
        'icon' => 'bi-box-seam-fill'
    ],
    [
        'id' => '3',
        'title' => 'Corporate IT & Office Relocation',
        'cat' => 'office',
        'cat_label' => 'Office',
        'desc' => 'Systematic workstation labeling and server rack packing for seamless business moves.',
        'img' => 'assets/img/office_shifting.jpg',
        'icon' => 'bi-building-fill'
    ],
    [
        'id' => '4',
        'title' => 'Enclosed Car Carrier Fleet',
        'cat' => 'vehicles',
        'cat_label' => 'Vehicles',
        'desc' => 'Hydraulic car carrier trailers ensuring zero-scratch vehicle transit across India.',
        'img' => 'assets/img/car_transportation.jpg',
        'icon' => 'bi-car-front-fill'
    ],
    [
        'id' => '5',
        'title' => 'Climate-Controlled Warehouse Storage',
        'cat' => 'warehouse',
        'cat_label' => 'Warehouse',
        'desc' => '24x7 CCTV monitored, moisture-free storage facility for long and short term retention.',
        'img' => 'assets/img/packers-movers-hero.webp',
        'icon' => 'bi-archive-fill'
    ],
    [
        'id' => '6',
        'title' => 'Two-Wheeler Custom Wooden Crating',
        'cat' => 'vehicles',
        'cat_label' => 'Vehicles',
        'desc' => 'Solid wooden frame crating for premium motorcycles and scooters.',
        'img' => 'assets/img/bike_transportation.jpg',
        'icon' => 'bi-bicycle'
    ],
    [
        'id' => '7',
        'title' => 'Precision Heavy Furniture Handling',
        'cat' => 'house',
        'cat_label' => 'Household',
        'desc' => 'Dismantling and reassembly by trained in-house carpenter specialists.',
        'img' => 'assets/img/loading_unloading.jpg',
        'icon' => 'bi-tools'
    ],
    [
        'id' => '8',
        'title' => 'Heavy Duty Industrial Machinery Shifting',
        'cat' => 'office',
        'cat_label' => 'Office',
        'desc' => 'Hydraulic crane loading and secure strapping for industrial machinery.',
        'img' => 'assets/img/about-packers-movers.webp',
        'icon' => 'bi-gear-wide-connected'
    ]
];

// Merge DB photos if available
$items = [];
if (!empty($photos)) {
    $idx = 1;
    foreach ($photos as $p) {
        $imgPath = '';
        $thumbPath = '';
        if (!empty($p->image)) {
            if (file_exists(FCPATH . 'assets/uploads/gallery/' . $p->image)) {
                $imgPath = 'assets/uploads/gallery/' . $p->image;
            } elseif (file_exists(FCPATH . 'uploads/gallery/' . $p->image)) {
                $imgPath = 'uploads/gallery/' . $p->image;
            } elseif (file_exists(FCPATH . $p->image)) {
                $imgPath = $p->image;
            } elseif (substr($p->image, 0, 4) === 'http') {
                $imgPath = $p->image;
            }

            if (file_exists(FCPATH . 'assets/uploads/gallery/thumb/' . $p->image)) {
                $thumbPath = 'assets/uploads/gallery/thumb/' . $p->image;
            } else {
                $thumbPath = $imgPath;
            }
        }

        $album = !empty($p->album_name) ? strtolower($p->album_name) : '';
        $titleLower = !empty($p->title) ? strtolower($p->title) : '';
        $combined = $album . ' ' . $titleLower;

        $cat = 'house';
        $icon = 'bi-house-heart-fill';
        $cat_label = !empty($p->album_name) && $p->album_name !== 'General' ? $p->album_name : 'Household';

        if (strpos($combined, 'office') !== false || strpos($combined, 'corporate') !== false || strpos($combined, 'commercial') !== false) {
            $cat = 'office';
            $icon = 'bi-building-fill';
            if (empty($p->album_name) || $p->album_name === 'General') $cat_label = 'Office';
        } elseif (strpos($combined, 'car') !== false || strpos($combined, 'bike') !== false || strpos($combined, 'vehicle') !== false || strpos($combined, 'carrier') !== false || strpos($combined, 'transport') !== false || strpos($combined, 'scooter') !== false) {
            $cat = 'vehicles';
            $icon = 'bi-truck';
            if (empty($p->album_name) || $p->album_name === 'General') $cat_label = 'Vehicles';
        } elseif (strpos($combined, 'pack') !== false || strpos($combined, 'wrap') !== false || strpos($combined, 'box') !== false || strpos($combined, 'material') !== false || strpos($combined, 'glass') !== false) {
            $cat = 'packing';
            $icon = 'bi-box-seam-fill';
            if (empty($p->album_name) || $p->album_name === 'General') $cat_label = 'Packing';
        } elseif (strpos($combined, 'ware') !== false || strpos($combined, 'stor') !== false) {
            $cat = 'warehouse';
            $icon = 'bi-archive-fill';
            if (empty($p->album_name) || $p->album_name === 'General') $cat_label = 'Warehouse';
        }

        $items[] = [
            'id' => (string)($p->auto_id ?? $idx),
            'title' => !empty($p->title) ? $p->title : 'Relocation Operation #' . $idx,
            'cat' => $cat,
            'cat_label' => $cat_label,
            'desc' => 'Certified packing and logistics execution by Elite Logistics team.',
            'img' => $imgPath ?: $thumbPath,
            'thumb' => $thumbPath ?: $imgPath,
            'icon' => $icon
        ];
        $idx++;
    }
} else {
    $items = $defaultGallery;
}
?>

<!-- Breadcrumbs Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Photo Gallery',
    'bc_desc' => 'A visual tour of our professional packing methods, container fleet, and nationwide logistics operations.',
    'breadcrumbs' => [
        ['name' => 'Photo Gallery']
    ]
]); ?>

<!-- Main Gallery Section (White Background) -->
<section class="inner-section-white" id="photo-gallery-section" aria-label="Photo Gallery">
    <div class="container">
        
        <div class="text-center inner-section-header mb-4">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Visual Portfolio</span>
            </div>
            <h2 class="inner-section-title">Our Moving Operations in Action</h2>
            <p class="inner-section-subtitle">
                Explore real photographs of our high-grade materials, trained crews, hydraulic vehicle carriers, and warehouse facilities.
            </p>
        </div>

        <!-- Pure CSS Category Filter Pills -->
        <input type="radio" name="gal-filter" id="gal-all" class="gal-filter-input" checked>
        <input type="radio" name="gal-filter" id="gal-house" class="gal-filter-input">
        <input type="radio" name="gal-filter" id="gal-office" class="gal-filter-input">
        <input type="radio" name="gal-filter" id="gal-vehicles" class="gal-filter-input">
        <input type="radio" name="gal-filter" id="gal-packing" class="gal-filter-input">
        <input type="radio" name="gal-filter" id="gal-warehouse" class="gal-filter-input">

        <div class="gal-filter-bar">
            <label for="gal-all" class="gal-filter-label"><i class="bi bi-grid-fill"></i> All Photos</label>
            <label for="gal-house" class="gal-filter-label"><i class="bi bi-house-fill"></i> Household</label>
            <label for="gal-office" class="gal-filter-label"><i class="bi bi-building"></i> Office</label>
            <label for="gal-vehicles" class="gal-filter-label"><i class="bi bi-truck"></i> Vehicles</label>
            <label for="gal-packing" class="gal-filter-label"><i class="bi bi-box-seam"></i> Packing</label>
            <label for="gal-warehouse" class="gal-filter-label"><i class="bi bi-archive"></i> Warehouse</label>
        </div>

        <!-- 4-Column Responsive Grid -->
        <div class="row g-2 g-sm-4 gal-grid">
            <?php foreach ($items as $item): ?>
                <div class="col-6 col-sm-6 col-lg-3 gal-item cat-<?= $item['cat'] ?>">
                    <a href="#lightbox-<?= $item['id'] ?>" class="gal-card text-decoration-none" title="View <?= htmlspecialchars($item['title']) ?>">
                        <?php 
                        $cardSrc = !empty($item['thumb']) && file_exists(FCPATH . $item['thumb']) ? $item['thumb'] : $item['img'];
                        if (!empty($cardSrc) && file_exists(FCPATH . $cardSrc)): 
                        ?>
                            <img src="<?= base_url($cardSrc) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="gal-card-img" loading="lazy">
                        <?php else: ?>
                            <div class="gal-placeholder">
                                <i class="bi <?= $item['icon'] ?> gal-placeholder-icon"></i>
                                <span class="badge bg-white text-dark small px-3 py-1 rounded-pill fw-bold gal-badge-small"><?= $item['cat_label'] ?></span>
                            </div>
                        <?php endif; ?>

                        <!-- Gradient Overlay & Caption -->
                        <div class="gal-card-overlay">
                            <div class="gal-card-caption">
                                <span class="badge bg-warning text-dark fw-bold mb-1 gal-badge-small"><?= $item['cat_label'] ?></span>
                                <p class="fs-6 fw-bold mb-1 text-white"><?= htmlspecialchars($item['title']) ?></p>
                                <div class="d-flex align-items-center gap-1 text-white-50 small">
                                    <i class="bi bi-arrows-fullscreen"></i>
                                    <span>Click to enlarge</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Pure CSS Lightbox Modal via :target -->
                <div id="lightbox-<?= $item['id'] ?>" class="lightbox-modal">
                    <div class="lightbox-box">
                        <a href="#_" class="lightbox-close" title="Close Lightbox" aria-label="Close Lightbox">
                            <i class="bi bi-x-lg"></i>
                        </a>
                        
                        <?php if (!empty($item['img']) && file_exists(FCPATH . $item['img'])): ?>
                            <img src="<?= base_url($item['img']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="lightbox-img">
                        <?php else: ?>
                            <div class="gal-placeholder lightbox-placeholder">
                                <i class="bi <?= $item['icon'] ?> lightbox-placeholder-icon"></i>
                                <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold"><?= $item['cat_label'] ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="lightbox-details d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                            <div>
                                <span class="badge bg-primary px-2 py-1 mb-1 rounded-pill gal-badge-small"><?= $item['cat_label'] ?></span>
                                <p class="fw-bold fs-5 text-dark m-0"><?= htmlspecialchars($item['title']) ?></p>
                                <p class="text-muted small m-0 mt-1"><?= htmlspecialchars($item['desc']) ?></p>
                            </div>
                            <button type="button" class="btn-inner-primary btn-sm flex-shrink-0" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <span>Get Quote</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Standards & Operational Integrity Strip (H2 #2) -->
        <div class="mt-5 p-4 bg-light rounded-4 border text-center">
            <div class="inner-section-tag justify-content-center">
                <span class="inner-section-bar"></span>
                <span>Fleet &amp; Equipment Standards</span>
            </div>
            <h2 class="inner-section-title fs-3 mb-2">Verified Equipment &amp; Packaging Standards</h2>
            <p class="text-secondary mx-auto mb-0 max-w-680">
                Every relocation shown in our gallery is carried out with sanitized container vehicles, ISO-certified bubble sheets, and hydraulic loading ramps.
            </p>
        </div>

    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>
