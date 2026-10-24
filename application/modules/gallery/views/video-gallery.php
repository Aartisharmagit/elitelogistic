<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Video Gallery',
    'bc_title_white' => 'Video',
    'bc_title_orange' => 'Gallery',
    'bc_desc' => 'Watch our step-by-step cargo handling processes, transport safety standards, and global freight forwarding in action.'
]); 
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Logistics Process Videos</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= $company3 ?></strong>, we maintain complete transparency in our logistics operations. Watch our field videos to see how our trained professionals handle heavy-duty cargo loading, customs clearance, and safe global transportation to ensure a worry-free shipping experience.
                        </p>
                    </div>

                    <!-- Videos Grid -->
                    <div class="row">
                        <?php if(!empty($videos)): ?>
                            <?php foreach($videos as $video): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-video-card">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?= $video->video_url ?>" title="<?= $video->title ?>" allowfullscreen class="border-0"></iframe>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="fw-bold mb-1 gallery-title-sm"><?= $video->title ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center text-muted">
                                <p>No videos available in the gallery.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Quality commitment banner -->
                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-4">
                        <h2 class="inner-section-title fs-4 text-success mb-2">Our Video Standards &amp; Quality Guidelines</h2>
                        <p class="mb-0 text-muted small">
                            All video clips shown are recorded on-site during actual shifting operations. We do not use simulated or stock footage, ensuring that what you see represents the true quality of service you will receive.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('contacts/quoteform'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>


