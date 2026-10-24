<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Curated default moving guides & blogs
$defaultArticles = [
    [
        'id' => 1,
        'title' => 'The Ultimate 30-Day Moving Checklist for Home Relocation in India',
        'slug' => 'ultimate-30-day-moving-checklist-india',
        'cat' => 'Checklists',
        'desc' => 'A step-by-step master countdown covering address updates, utility transfers, room-by-room packing schedules, and essential moving day kits.',
        'date' => '2026-10-02',
        'read_time' => '6 min read',
        'img' => 'assets/img/packers-movers-hero.webp'
    ],
    [
        'id' => 2,
        'title' => 'How to Protect Fragile Glassware and LED TVs During Long-Distance Transit',
        'slug' => 'how-to-pack-fragile-glassware-and-led-tvs',
        'cat' => 'Packing Tips',
        'desc' => 'Discover the 5-layer wrapping technique using virgin bubble film, foam corner protectors, and customized wooden crates for sensitive items.',
        'date' => '2026-09-28',
        'read_time' => '4 min read',
        'img' => ''
    ],
    [
        'id' => 3,
        'title' => 'Packers and Movers Charges Breakdown: Estimating Interstate Shifting Costs',
        'slug' => 'packers-and-movers-charges-breakdown-costs',
        'cat' => 'Costs',
        'desc' => 'Understand how BHK size, distance, toll taxes, and insurance impact moving costs, and how our Written Price Lock prevents hidden fees.',
        'date' => '2026-09-20',
        'read_time' => '5 min read',
        'img' => ''
    ],
    [
        'id' => 4,
        'title' => 'IBA Approved Relocation Bills: Guide for PSU Bank & Govt Employee Claims',
        'slug' => 'iba-approved-relocation-bills-bank-employee-guide',
        'cat' => 'Guides',
        'desc' => 'Everything you need to know about official IBA Code EL-8709 consignment notes, GST billing formats, and 100% reimbursement claim procedures.',
        'date' => '2026-09-15',
        'read_time' => '4 min read',
        'img' => ''
    ],
    [
        'id' => 5,
        'title' => 'Safe Vehicle Transportation: Tips for Enclosed Car and Motorcycle Transit',
        'slug' => 'safe-car-and-bike-transportation-tips-india',
        'cat' => 'Guides',
        'desc' => 'Key guidelines for hydraulic carrier transport, pre-dispatch condition photography, fluid drainage, and zero-scratch delivery protocols.',
        'date' => '2026-09-10',
        'read_time' => '5 min read',
        'img' => ''
    ],
    [
        'id' => 6,
        'title' => 'Top 7 Things to Do on Moving Day: A Stress-Free Execution Guide',
        'slug' => 'top-7-things-to-do-on-moving-day',
        'cat' => 'Checklists',
        'desc' => 'From verifying inventory sheets and container seals to guiding crew placement at your new apartment, master your final moving day.',
        'date' => '2026-09-04',
        'read_time' => '3 min read',
        'img' => ''
    ]
];

// Combine dynamic blogs from database
$postList = [];
if (!empty($blogs)) {
    foreach ($blogs as $b_arr) {
        $b = (object) $b_arr;
        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
        
        $imgPath = '';
        if (!empty($b->image)) {
            if (file_exists(FCPATH . 'assets/uploads/blog/' . $b->image)) {
                $imgPath = 'assets/uploads/blog/' . $b->image;
            } elseif (file_exists(FCPATH . 'assets/uploads/blog/thumb/' . $b->image)) {
                $imgPath = 'assets/uploads/blog/thumb/' . $b->image;
            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $b->image)) {
                $imgPath = 'uploads/blogs/' . $b->image;
            } elseif (file_exists(FCPATH . $b->image)) {
                $imgPath = $b->image;
            } elseif (substr($b->image, 0, 4) === 'http') {
                $imgPath = $b->image;
            }
        }
        
        $postDate = !empty($b->date) ? $b->date : (!empty($b->timestamp) ? date('Y-m-d', strtotime($b->timestamp)) : (!empty($b->created_at) ? $b->created_at : date('Y-m-d')));
        $readTime = !empty($b->time) ? $b->time : '4 min read';
        $cat = !empty($b->tags) ? trim(explode(',', $b->tags)[0]) : 'Guides';

        $postList[] = [
            'id' => $b->b_id ?? ($b->id ?? 1),
            'title' => $b->title,
            'slug' => $custom_slug,
            'cat' => !empty($cat) ? $cat : 'Guides',
            'desc' => substr(strip_tags($b->description), 0, 140) . '...',
            'date' => $postDate,
            'read_time' => $readTime,
            'img' => $imgPath
        ];
    }
} else {
    $postList = $defaultArticles;
}

$featured = $postList[0];
$gridPosts = array_slice($postList, 1);
?>

<!-- Breadcrumbs Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Moving Guides & Blog',
    'bc_desc' => 'Expert advice, packing checklists, cost breakdowns, and relocation insights from professional movers.',
    'breadcrumbs' => [
        ['name' => 'Moving Guides & Blog']
    ]
]); ?>

<!-- Main Blog Section (White Background) -->
<section class="inner-section-white" id="blog-content-section" aria-label="Moving Guides and Blog Articles">
    <div class="container">
        
        <!-- Featured Guide Section Header (H2 #1) -->
        <div class="inner-section-header mb-4">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Featured Guide</span>
            </div>
            <h2 class="inner-section-title fs-2 m-0">Featured Relocation Advice &amp; Moving Insights</h2>
        </div>

        <!-- 1. Featured Top Article Card -->
        <div class="blog-featured-card position-relative overflow-hidden mb-5">
            <div class="row g-0 align-items-center">
                <div class="col-12 col-lg-6 position-relative">
                    <span class="blog-cat-badge"><?= $featured['cat'] ?></span>
                    <?php if (!empty($featured['img']) && file_exists(FCPATH . $featured['img'])): ?>
                        <img src="<?= base_url($featured['img']) ?>" alt="<?= htmlspecialchars($featured['title']) ?>" class="blog-featured-img" loading="lazy">
                    <?php else: ?>
                        <div class="gal-placeholder blog-featured-placeholder">
                            <i class="bi bi-journal-text blog-placeholder-icon"></i>
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold">Featured Guide</span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 p-4 p-lg-5">
                    <div class="d-flex align-items-center gap-3 text-muted small mb-2">
                        <span><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($featured['date'])) ?></span>
                        <span>&bull;</span>
                        <span><i class="bi bi-clock me-1"></i><?= $featured['read_time'] ?></span>
                        <span>&bull;</span>
                        <span class="text-success fw-bold"><i class="bi bi-patch-check-fill me-1"></i>Verified Guide</span>
                    </div>
                    <p class="fw-bold fs-3 text-dark mb-3">
                        <a href="<?= site_url('blog/' . $featured['slug']) ?>" class="text-dark text-decoration-none hover-primary">
                            <?= htmlspecialchars($featured['title']) ?>
                        </a>
                    </p>
                    <p class="blog-featured-desc text-secondary mb-4">
                        <?= htmlspecialchars($featured['desc']) ?>
                    </p>
                    <a href="<?= site_url('blog/' . $featured['slug']) ?>" class="btn-inner-primary">
                        <span>Read Full Guide</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Section Header for Recent Guides (H2 #2) -->
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
            <div>
                <div class="inner-section-tag">
                    <span class="inner-section-bar"></span>
                    <span>Knowledge Hub</span>
                </div>
                <h2 class="inner-section-title fs-2 m-0">Latest Moving Guides &amp; Checklists</h2>
            </div>
            
            <!-- Category Filter Pills -->
            <div class="d-flex flex-wrap gap-2">
                <span class="gal-filter-label active">All</span>
                <span class="gal-filter-label">Packing Tips</span>
                <span class="gal-filter-label">Checklists</span>
                <span class="gal-filter-label">Costs</span>
                <span class="gal-filter-label">Guides</span>
            </div>
        </div>

        <!-- 3-Column Posts Grid -->
        <div class="row g-4 mb-5">
            <?php foreach ($gridPosts as $post): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog-post-card">
                        <div class="blog-post-thumb">
                            <span class="blog-cat-badge"><?= $post['cat'] ?></span>
                            <?php if (!empty($post['img']) && file_exists(FCPATH . $post['img'])): ?>
                                <img src="<?= base_url($post['img']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy">
                            <?php else: ?>
                                <div class="gal-placeholder">
                                    <i class="bi bi-box-seam blog-grid-placeholder-icon"></i>
                                    <span class="badge bg-white text-dark small px-3 py-1 rounded-pill fw-bold blog-grid-cat-pill"><?= $post['cat'] ?></span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                <span><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($post['date'])) ?></span>
                                <span>&bull;</span>
                                <span><i class="bi bi-clock me-1"></i><?= $post['read_time'] ?></span>
                            </div>

                            <p class="blog-post-title fw-bold fs-5 mb-2">
                                <a href="<?= site_url('blog/' . $post['slug']) ?>" class="text-decoration-none text-dark">
                                    <?= htmlspecialchars($post['title']) ?>
                                </a>
                            </p>

                            <p class="blog-post-desc text-secondary small mb-4 flex-grow-1">
                                <?= htmlspecialchars($post['desc']) ?>
                            </p>

                            <div class="pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                <a href="<?= site_url('blog/' . $post['slug']) ?>" class="blog-post-link">
                                    <span>Read Article</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <span class="badge bg-light text-secondary border small px-2 py-1 rounded-pill">
                                    <i class="bi bi-eye me-1"></i>Moving Expert
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Popular Guides & Quick Moving Quote Widget -->
        <div class="row g-4 mt-2">
            <!-- Popular Guides List -->
            <div class="col-12 col-lg-7">
                <div class="inner-card p-4 h-100">
                    <p class="fw-bold fs-5 text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-fire text-warning"></i>
                        <span>Most Read Relocation Articles</span>
                    </p>
                    <ul class="list-unstyled m-0 d-flex flex-column gap-3">
                        <li class="d-flex align-items-center justify-content-between gap-3 pb-2 border-bottom">
                            <div>
                                <a href="<?= site_url('blog/ultimate-30-day-moving-checklist-india') ?>" class="text-dark fw-bold text-decoration-none hover-primary">
                                    10 Things to Check Before Hiring Intercity Packers & Movers
                                </a>
                                <div class="text-muted small">Updated for 2026 Relocations</div>
                            </div>
                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1">Checklist</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between gap-3 pb-2 border-bottom">
                            <div>
                                <a href="<?= site_url('blog/packers-and-movers-charges-breakdown-costs') ?>" class="text-dark fw-bold text-decoration-none hover-primary">
                                    GST Rates & Transit Insurance Claims Explained for Shifting
                                </a>
                                <div class="text-muted small">Official IBA EL-8709 Guidelines</div>
                            </div>
                            <span class="badge bg-success-subtle text-success rounded-pill px-3 py-1">Pricing</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between gap-3">
                            <div>
                                <a href="<?= site_url('blog/how-to-pack-fragile-glassware-and-led-tvs') ?>" class="text-dark fw-bold text-decoration-none hover-primary">
                                    Room-by-Room Packing Guide for Fragile Household Items
                                </a>
                                <div class="text-muted small">5-Layer Protective Standard</div>
                            </div>
                            <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill px-3 py-1">Packing</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Compact Quote Card -->
            <div class="col-12 col-lg-5">
                <div class="inner-card blog-cta-card p-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="blog-cta-icon-box">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div>
                            <p class="fw-bold fs-5 text-white m-0">Planning a Move?</p>
                            <p class="text-white-50 small m-0">Get a free written survey quote today</p>
                        </div>
                    </div>
                    <p class="blog-cta-text text-white-50 small mb-4">
                        Lock your moving date in 60 seconds. Our experts will calculate accurate cubic volume and provide transparent pricing with zero surprise charges.
                    </p>
                    <button type="button" class="btn-inner-primary w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>Get Free Moving Quote</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <?php if (!empty($this->pagination->create_links())): ?>
            <div class="d-flex justify-content-center mt-5 inner-pagination">
                <?= $this->pagination->create_links(); ?>
            </div>
        <?php else: ?>
            <div class="d-flex justify-content-center mt-5 inner-pagination">
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>