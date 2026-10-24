<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
<!-- Breadcrumbs Section -->
<?php 
$blogTitle = isset($query[0]->title) ? $query[0]->title : 'Moving Guide';
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => $blogTitle,
    'bc_desc' => 'Expert moving insights, packing protocols, and relocation advice.',
    'breadcrumbs' => [
        ['name' => 'Blog', 'url' => site_url('blog')],
        ['name' => $blogTitle]
    ]
]); 
?>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row ">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                        <!-- Image -->
                        <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <?php 
                            $singleImg = '';
                            $imgName = @$query[0]->image;
                            if (!empty($imgName)) {
                                if (file_exists(FCPATH . 'assets/uploads/blog/' . $imgName)) {
                                    $singleImg = base_url('assets/uploads/blog/' . $imgName);
                                } elseif (file_exists(FCPATH . 'assets/uploads/blog/thumb/' . $imgName)) {
                                    $singleImg = base_url('assets/uploads/blog/thumb/' . $imgName);
                                } elseif (file_exists(FCPATH . 'uploads/blogs/' . $imgName)) {
                                    $singleImg = base_url('uploads/blogs/' . $imgName);
                                } elseif (file_exists(FCPATH . $imgName)) {
                                    $singleImg = base_url($imgName);
                                } elseif (substr($imgName, 0, 4) === 'http') {
                                    $singleImg = $imgName;
                                }
                            }
                            ?>
                            <?php if (!empty($singleImg)): ?>
                                <img src="<?= $singleImg ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?>" class="img-fluid w-100 blog-details-img">
                            <?php else: ?>
                                <img src="<?= base_url('assets/img/packers-movers-hero.webp') ?>" alt="Elite Logistics Relocation Guide" class="img-fluid w-100 blog-details-img">
                            <?php endif; ?>
                        </div>
                        
                        <!-- Meta Info -->
                        <?php
                        $postDate = !empty($query[0]->date) ? $query[0]->date : (!empty($query[0]->timestamp) ? date('Y-m-d', strtotime($query[0]->timestamp)) : (!empty($query[0]->created_at) ? $query[0]->created_at : date('Y-m-d')));
                        $authorName = !empty($query[0]->author) ? $query[0]->author : 'Admin';
                        $readTime = !empty($query[0]->time) ? $query[0]->time : '4 min read';
                        ?>
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small flex-wrap">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event blog-icon-primary"></i> <?= date('M d, Y', strtotime($postDate)) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-person-circle text-success"></i> By <?= htmlspecialchars($authorName) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-clock text-primary"></i> <?= htmlspecialchars($readTime) ?></span>
                            </div>
                            <div>
                                <button class="btn btn-sm px-3 rounded-pill fw-bold blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Details -->
                        <h2 class="fw-bold mb-4 blog-details-title"><?= @$query[0]->title ?></h2>
                        <div class="blog-content-wrapper text-muted">
                            <?php 
                            $content = !empty($query[0]->description) ? $query[0]->description : (!empty($query[0]->content) ? $query[0]->content : '');
                            // If description has HTML tags, render as is; otherwise apply nl2br
                            if (strip_tags($content) !== $content) {
                                echo $content;
                            } else {
                                echo nl2br(htmlspecialchars($content));
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar sticky-top blog-sidebar-sticky">
                        <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                            <h2 class="h5 fw-bold mb-4 pb-2 border-bottom blog-icon-primary">Recent Posts</h2>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image ?? '';
                                        $imagePath = '';
                                        if (!empty($image_file)) {
                                            if (file_exists(FCPATH . 'assets/uploads/blog/thumb/' . $image_file)) {
                                                $imagePath = base_url('assets/uploads/blog/thumb/' . $image_file);
                                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                                                $imagePath = base_url('assets/uploads/blog/' . $image_file);
                                            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                                                $imagePath = base_url('uploads/blogs/' . $image_file);
                                            } elseif (file_exists(FCPATH . $image_file)) {
                                                $imagePath = base_url($image_file);
                                            } elseif (substr($image_file, 0, 4) === 'http') {
                                                $imagePath = $image_file;
                                            }
                                        }
                                        if (empty($imagePath)) {
                                            $imagePath = base_url('assets/img/packers-movers-hero.webp');
                                        }

                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        $rDate = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('Y-m-d', strtotime($post->timestamp)) : (!empty($post->created_at) ? $post->created_at : date('Y-m-d')));
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none post-link-item blog-post-link-item">
                                            <div class="flex-shrink-0">
                                                <img src="<?= $imagePath ?>" alt="thumb" class="rounded-3 shadow-sm blog-recent-post-img">
                                            </div>
                                            <div>
                                                <p class="fw-bold text-dark mb-1 blog-post-title"><?= htmlspecialchars($post->title) ?></p>
                                                <small class="text-muted"><i class="bi bi-clock me-1"></i> <?= date('M d, Y', strtotime($rDate)) ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted">No recent posts available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Sticky CTA Widget -->
                        <div class="bg-light p-4 rounded-4 shadow-sm text-center border-top border-4 blog-border-warning">
                            <div class="mb-3">
                                <i class="bi bi-headset blog-icon-lg-primary"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Need Moving Help?</h3>
                            <p class="text-muted small mb-4">Get a quick and free estimate for your relocation directly from our experts.</p>
                            <button class="btn w-100 fw-bold py-2 rounded-pill shadow-sm blog-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                            </button>
                        </div>
                    </aside>
            </div>
        </div>
    </section>

    <!-- Closing Call to Action Band -->
    <?php $this->load->view('home/cta_widget'); ?>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0">
                <div class="modal-title fs-5 fw-bold blog-icon-primary" id="shareModalLabel">Share this post</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-grid gap-3 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-fb">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-tw">
                        <i class="bi bi-twitter me-2"></i> Share on Twitter
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-wa">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>



<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/img/packers-movers-hero.webp') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'MyCompany' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/img/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>