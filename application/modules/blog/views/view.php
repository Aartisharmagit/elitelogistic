<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('format_blog_date')) {
    function format_blog_date($dateStr) {
        if (empty($dateStr)) return date('M d, Y');
        $clean = str_replace('/', '-', trim($dateStr));
        $ts = strtotime($clean);
        if ($ts !== false && $ts > 0) {
            return date('M d, Y', $ts);
        }
        return $dateStr;
    }
}
?>

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
                            <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                                <img src="<?= $singleImg ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?>" class="img-fluid w-100 blog-details-img">
                            </div>
                        <?php endif; ?>
                        
                        <!-- Meta Info -->
                        <?php
                        $rawDate = !empty($query[0]->date) ? $query[0]->date : (!empty($query[0]->timestamp) ? date('Y-m-d', strtotime($query[0]->timestamp)) : (!empty($query[0]->created_at) ? $query[0]->created_at : date('Y-m-d')));
                        $postDate = format_blog_date($rawDate);
                        $authorName = !empty($query[0]->author) ? $query[0]->author : 'Admin';
                        $readTime = !empty($query[0]->time) ? $query[0]->time : '4 min read';
                        ?>
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small flex-wrap">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event blog-icon-primary"></i> <?= $postDate ?></span>
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

                        <!-- Tags Section -->
                        <?php if (!empty($query[0]->tags)): ?>
                            <div class="mt-4 pt-3 border-top d-flex flex-wrap align-items-center gap-2">
                                <span class="text-muted small fw-bold"><i class="bi bi-tags me-1"></i> Tags:</span>
                                <?php foreach (explode(',', $query[0]->tags) as $tag): if(trim($tag)): ?>
                                    <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><?= htmlspecialchars(trim($tag)) ?></span>
                                <?php endif; endforeach; ?>
                            </div>
                        <?php endif; ?>
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

                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        $rRawDate = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('Y-m-d', strtotime($post->timestamp)) : (!empty($post->created_at) ? $post->created_at : date('Y-m-d')));
                                        $rDate = format_blog_date($rRawDate);
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none post-link-item blog-post-link-item">
                                            <?php if (!empty($imagePath)): ?>
                                                <div class="flex-shrink-0">
                                                    <img src="<?= $imagePath ?>" alt="thumb" class="rounded-3 shadow-sm blog-recent-post-img">
                                                </div>
                                            <?php else: ?>
                                                <div class="flex-shrink-0 rounded-3 d-flex align-items-center justify-content-center bg-light border text-muted" style="width: 60px; height: 60px;">
                                                    <i class="bi bi-file-earmark-text fs-4"></i>
                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <p class="fw-bold text-dark mb-1 blog-post-title"><?= htmlspecialchars($post->title) ?></p>
                                                <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> <?= $rDate ?></small>
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
                            <h3 class="fw-bold fs-5 mb-2">Need Shifting Help?</h3>
                            <p class="text-muted small mb-3">Our relocation experts are available 24/7 to plan your interstate move with maximum safety.</p>
                            <a href="<?= site_url('contact-us') ?>" class="btn-inner-primary w-100 justify-content-center">
                                <span>Contact Moving Expert</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold" id="shareModalLabel">Share This Guide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <div class="d-flex justify-content-around text-center mb-4">
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="text-decoration-none text-success social-share-btn" data-type="whatsapp">
                        <i class="bi bi-whatsapp fs-1"></i>
                        <span class="d-block small mt-1">WhatsApp</span>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="text-decoration-none text-primary social-share-btn" data-type="facebook">
                        <i class="bi bi-facebook fs-1"></i>
                        <span class="d-block small mt-1">Facebook</span>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="text-decoration-none text-dark social-share-btn" data-type="twitter">
                        <i class="bi bi-twitter-x fs-1"></i>
                        <span class="d-block small mt-1">Twitter</span>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=YOUR_URL" target="_blank" class="text-decoration-none text-info social-share-btn" data-type="linkedin">
                        <i class="bi bi-linkedin fs-1"></i>
                        <span class="d-block small mt-1">LinkedIn</span>
                    </a>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control bg-light" id="postUrlInput" value="<?= current_url() ?>" readonly>
                    <button class="btn btn-primary" type="button" onclick="navigator.clipboard.writeText(document.getElementById('postUrlInput').value); alert('Link copied to clipboard!');">Copy Link</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-share-btn').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    <?php if (!empty($singleImg)): ?>
    "image": [
        "<?= $singleImg ?>"
    ],
    <?php endif; ?>
    "datePublished": "<?= !empty($query[0]->timestamp) ? date('c', strtotime($query[0]->timestamp)) : (!empty($query[0]->created_at) ? date('c', strtotime($query[0]->created_at)) : date('c')) ?>",
    "author": {
        "@type": "Person",
        "name": "<?= !empty($query[0]->author) ? addslashes($query[0]->author) : 'Admin' ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'Elite Logistics' ?>",
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
