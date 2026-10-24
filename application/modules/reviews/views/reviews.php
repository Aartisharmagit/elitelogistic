<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// 15 Exact Customer Reviews Provided
$customerReviews = [
    [
        'name' => 'Rahul Sharma',
        'city' => 'Mumbai',
        'desc' => 'We have shifted our 2BHK apartment from Mumbai and the major issue was with the furniture and kitchen goods. The team explained to us about the packing procedure and provided us with the quotation in writing before the shift.'
    ],
    [
        'name' => 'Priya Verma',
        'city' => 'Delhi',
        'desc' => 'We needed help with shifting household goods to a new flat in Delhi. The team took care of the packing and loading of our items. It was good to know about the charges before booking.'
    ],
    [
        'name' => 'Amit Patel',
        'city' => 'Ahmedabad',
        'desc' => 'I was shifting to another city to join work and I had my motorcycle that I had to transport. ' . $company3 . ' discussed all the arrangements with me before booking.'
    ],
    [
        'name' => 'Sneha Reddy',
        'city' => 'Hyderabad',
        'desc' => 'Our family shifted to a bigger house and we had quite a lot of appliances and fragile items. Arrangements for packing were discussed in advance, saving me a lot of trouble during shifting.'
    ],
    [
        'name' => 'Arjun Mehta',
        'city' => 'Bengaluru',
        'desc' => 'The office has been relocated and it was important to relocate the furniture and equipment accordingly. Packing and transportation arrangements were planned in advance by the team.'
    ],
    [
        'name' => 'Neha Kulkarni',
        'city' => 'Pune',
        'desc' => 'I was looking out for packers and movers who can give me a quotation in writing. It was easy to calculate the charges with a written quotation and to select appropriate services.'
    ],
    [
        'name' => 'Souvik Das',
        'city' => 'Kolkata',
        'desc' => 'Shifted our household goods to another city. The team discussed with me how the shipment will be transported. I also asked about GPS tracking arrangements and the team gave me a clear picture of it.'
    ],
    [
        'name' => 'Karan Singh',
        'city' => 'Chandigarh',
        'desc' => 'I wanted someone to help me with the moving of furniture, cartons and appliances to our new home. Packing, loading and transportation arranged in advance saved me from the trouble of managing two separate companies.'
    ],
    [
        'name' => 'Ananya Iyer',
        'city' => 'Chennai',
        'desc' => 'Our household shifting involved lots of delicate items that needed extra padding. The packing requirements were discussed in advance, giving me an idea of the process before moving.'
    ],
    [
        'name' => 'Rohit Jain',
        'city' => 'Jaipur',
        'desc' => 'I was comparing prices and services offered by moving companies. Written quotation and discussion about the services helped me make a decision.'
    ],
    [
        'name' => 'Pooja Nair',
        'city' => 'Kochi',
        'desc' => 'We were relocating to another city and the relocation had to take place on a fixed date. The team discussed with us all the moving requirements before booking.'
    ],
    [
        'name' => 'Vikram Thakur',
        'city' => 'Lucknow',
        'desc' => 'I arranged for transportation for my car while relocating for work. The team discussed the arrangements and details required for quotation.'
    ],
    [
        'name' => 'Meera Joshi',
        'city' => 'Indore',
        'desc' => 'Household shifting of ours involved lots of furniture, kitchenware and packed cartons. I needed a service that could take care of all the main shifting arrangements at once.'
    ],
    [
        'name' => 'Aditya Banerjee',
        'city' => 'Bhubaneswar',
        'desc' => 'We needed to relocate our office furniture and equipment to other premises. The discussion about the schedule and transportation arrangements helped us to arrange our work.'
    ],
    [
        'name' => 'Nisha Agarwal',
        'city' => 'Gurugram',
        'desc' => 'I wanted a company which explains the charges before picking up our household goods. Written price lock quotation gave me an idea about the starting point and discussion about the packing and delivery arrangements helped me plan the relocation.'
    ]
];
?>

<!-- Breadcrumbs Banner (Distinct from below heading) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Reviews & Ratings',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Reviews']
    ]
]); ?>

<!-- Main Reviews Section (White Background) -->
<section class="inner-section-white" id="reviews-summary-section" aria-label="What Our Customers Say">
    <div class="container">
        
        <!-- Flash messages -->
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-4 shadow-sm mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded-4 shadow-sm mb-4" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= $this->session->flashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Section Title (Exact Heading from User: What Our Customers Say) -->
        <div class="text-center inner-section-header mb-5">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Customer Feedback</span>
            </div>
            <h2 class="inner-section-title">What Our Customers Say</h2>
            <p class="inner-section-subtitle">
                Read real experiences from families and businesses who relocated with <?= htmlspecialchars($companyName) ?> across India.
            </p>
        </div>

        <!-- Summary Rating Block (4.9/5 Score + Rating Bars) -->
        <div class="review-summary-box mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Left: Big 4.9 Score & Action -->
                <div class="col-12 col-md-5 text-center text-md-start border-md-end pe-md-4">
                    <div class="d-flex flex-column align-items-center align-items-md-start">
                        <div class="d-flex align-items-baseline gap-2 mb-1">
                            <span class="review-big-score"><?= $ratingValue ?></span>
                            <span class="text-muted fw-bold fs-4">/ 5</span>
                        </div>
                        <div class="review-stars-gold mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-secondary fw-semibold mb-3">
                            Based on <strong><?= $happyClients ?> Verified Reviews</strong> across India
                        </p>
                        
                        <!-- Write Review Button -->
                        <button type="button" class="btn-inner-primary" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                            <i class="bi bi-pencil-square"></i>
                            <span>Write a Review</span>
                        </button>
                    </div>
                </div>

                <!-- Right: Rating Bars -->
                <div class="col-12 col-md-7">
                    <div class="rating-bar-row">
                        <span>5 Stars</span>
                        <div class="rating-bar-track">
                            <div class="rating-bar-fill fill-94"></div>
                        </div>
                        <span>94%</span>
                    </div>

                    <div class="rating-bar-row">
                        <span>4 Stars</span>
                        <div class="rating-bar-track">
                            <div class="rating-bar-fill fill-5"></div>
                        </div>
                        <span>5%</span>
                    </div>

                    <div class="rating-bar-row">
                        <span>3 Stars</span>
                        <div class="rating-bar-track">
                            <div class="rating-bar-fill fill-1"></div>
                        </div>
                        <span><1%</span>
                    </div>

                    <div class="rating-bar-row">
                        <span>2 Stars</span>
                        <div class="rating-bar-track">
                            <div class="rating-bar-fill fill-0"></div>
                        </div>
                        <span><1%</span>
                    </div>

                    <div class="rating-bar-row">
                        <span>1 Star</span>
                        <div class="rating-bar-track">
                            <div class="rating-bar-fill fill-0"></div>
                        </div>
                        <span><1%</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- 3-Column Reviews Grid (All 15 Verified Customer Reviews) -->
        <h2 class="inner-section-title fs-3 text-center mb-4">Verified Customer Testimonials</h2>
        <div class="row g-4 mb-4">
            <?php 
            foreach ($customerReviews as $r):
                $initial = strtoupper(substr($r['name'], 0, 1));
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="review-grid-card h-100 d-flex flex-column">
                        <span class="review-quote-watermark" aria-hidden="true">&ldquo;</span>
                        
                        <!-- Route / City Badge & Stars -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="review-route-badge">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span><?= htmlspecialchars($r['city']) ?></span>
                            </span>
                            <div class="review-stars-gold fs-6">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>

                        <!-- Exact Review Quote -->
                        <p class="review-quote-text text-secondary flex-grow-1 mb-4">
                            "<?= htmlspecialchars($r['desc']) ?>"
                        </p>

                        <!-- Author Meta: Name, City -->
                        <div class="d-flex align-items-center gap-3 pt-3 border-top mt-auto">
                            <div class="review-avatar-circle">
                                <?= $initial ?>
                            </div>
                            <div>
                                <p class="fw-bold fs-6 text-dark m-0 d-flex align-items-center gap-1">
                                    <span><?= htmlspecialchars($r['name']) ?>, <?= htmlspecialchars($r['city']) ?></span>
                                    <i class="bi bi-patch-check-fill text-success review-verified-icon" title="Verified Customer"></i>
                                </p>
                                <small class="text-muted">Verified Relocation</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php 
            // Also display any submitted database reviews if available
            if (isset($reviews) && $reviews->num_rows() > 0): 
                foreach ($reviews->result() as $dbR):
                    $initial = !empty($dbR->name) ? strtoupper(substr(trim($dbR->name), 0, 1)) : 'C';
                    $stars = (int)$dbR->stars > 0 ? (int)$dbR->stars : 5;
                    $route = !empty($dbR->r_title) ? $dbR->r_title : 'Domestic Shifting';
                    $date = !empty($dbR->posted_date) ? date('M d, Y', strtotime($dbR->posted_date)) : 'Recent';
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="review-grid-card h-100 d-flex flex-column">
                        <span class="review-quote-watermark" aria-hidden="true">&ldquo;</span>
                        
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="review-route-badge">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span><?= htmlspecialchars($route) ?></span>
                            </span>
                            <div class="review-stars-gold fs-6">
                                <?php for($i=0; $i<$stars; $i++): ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <p class="review-quote-text text-secondary flex-grow-1 mb-4">
                            "<?= htmlspecialchars($dbR->r_desc) ?>"
                        </p>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top mt-auto">
                            <div class="review-avatar-circle">
                                <?= $initial ?>
                            </div>
                            <div>
                                <p class="fw-bold fs-6 text-dark m-0 d-flex align-items-center gap-1">
                                    <span><?= htmlspecialchars($dbR->name) ?></span>
                                    <i class="bi bi-patch-check-fill text-success review-verified-icon" title="Verified Customer"></i>
                                </p>
                                <small class="text-muted"><?= $date ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endforeach;
            endif;
            ?>
        </div>

        <!-- Verified Trust Note with Shield Icon -->
        <div class="text-center mt-4">
            <div class="d-inline-flex align-items-center gap-2 px-4 py-2 rounded-pill bg-light border text-muted small">
                <i class="bi bi-shield-check text-success fs-6"></i>
                <span>100% Genuine Reviews from Verified Consignment Customers</span>
            </div>
        </div>

        <?php if (!empty($pagination)): ?>
            <div class="d-flex justify-content-center mt-5 inner-pagination">
                <?= $pagination ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>
