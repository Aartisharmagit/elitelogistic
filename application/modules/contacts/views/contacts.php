<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Connect with our 24x7 relocation desk for fast quotations, tracking updates, and queries.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]); ?>

<!-- Contact Section (Single H2) -->
<section class="inner-section-white py-5" id="contact-main-section">
    <div class="container">
        
        <div class="text-center inner-section-header mb-5">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Reach Out to Us</span>
            </div>
            <h2 class="inner-section-title">Get in Touch with Our Moving Experts</h2>
            <p class="inner-section-subtitle">
                Available 24 hours a day across 250+ branch hubs in India for instant relocation support.
            </p>
        </div>

        <div class="row g-4 g-lg-5 align-items-start">
            
            <!-- Left Column: Contact Cards -->
            <div class="col-12 col-lg-5">
                <div class="d-flex flex-column gap-3">
                    
                    <!-- Phone Card -->
                    <div class="inner-card p-4 d-flex align-items-center gap-3">
                        <div class="inner-icon-tile flex-shrink-0 m-0">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Call Us Directly</span>
                            <a href="<?= $phonehtml ?>" class="text-dark fw-bold text-decoration-none fs-5 hover-primary"><?= $phone ?></a>
                            <div class="text-muted small">Toll-Free &amp; 24x7 Transit Helpline</div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="inner-card p-4 d-flex align-items-center gap-3">
                        <div class="inner-icon-tile flex-shrink-0 m-0">
                            <i class="bi bi-envelope-open-fill"></i>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Official Email Desk</span>
                            <a href="<?= $mailhtml ?>" class="text-dark fw-bold text-decoration-none fs-5 hover-primary"><?= $mail ?></a>
                            <div class="text-muted small">Responses within 15 minutes</div>
                        </div>
                    </div>

                    <!-- Head Office Card -->
                    <div class="inner-card p-4 d-flex align-items-center gap-3">
                        <div class="inner-icon-tile flex-shrink-0 m-0">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Corporate Headquarters</span>
                            <div class="text-dark fw-bold fs-6">
                                <?= htmlspecialchars($address) ?>
                            </div>
                            <div class="text-muted small"><?= $isoCode ?> &amp; IBA Approved (<?= $ibaCode ?>)</div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Instant Quote Form (H2 #2) -->
            <div class="col-12 col-lg-7">
                <div class="mb-3">
                    <h2 class="inner-section-title fs-3 mb-2">Request an Instant Moving Estimate</h2>
                </div>
                <?php $this->load->view('contacts/quoteform'); ?>
            </div>

        </div>

    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>