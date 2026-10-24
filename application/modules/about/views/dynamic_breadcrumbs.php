<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : (isset($crumb['label']) ? $crumb['label'] : ''));
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];

// Determine title if not explicitly passed as bc_h1
$heading = '';
if (isset($bc_h1) && !empty($bc_h1)) {
    $heading = $bc_h1;
} elseif (isset($bc_title_white) || isset($bc_title_orange)) {
    $heading = trim((@$bc_title_white ? $bc_title_white . ' ' : '') . (@$bc_title_orange ? $bc_title_orange : ''));
} elseif (isset($bc_current) && !empty($bc_current)) {
    $heading = $bc_current;
} elseif (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    $last_crumb = end($breadcrumbs);
    $heading = isset($last_crumb['name']) ? $last_crumb['name'] : (isset($last_crumb['title']) ? $last_crumb['title'] : '');
}
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Compact, Clean & Centered Inner Page Banner -->
<header class="inner-page-banner position-relative overflow-hidden" aria-label="<?= htmlspecialchars($heading) ?>">
    
    <!-- Clean Ambient Lighting: Soft Blue in Top-Right, Faint Orange in Bottom-Left, 6-8% Dotted Grid -->
    <div class="inner-banner-glow-blue position-absolute" aria-hidden="true"></div>
    <div class="inner-banner-glow-orange position-absolute" aria-hidden="true"></div>
    <div class="inner-banner-grid-pattern position-absolute w-100 h-100" aria-hidden="true"></div>

    <!-- Right Corner Large Faint Outline Decorative Icon (Drifts gently on banner hover) -->
    <div class="inner-banner-faint-icon position-absolute d-none d-lg-block" aria-hidden="true">
        <i class="bi <?= !empty($banner_icon) ? htmlspecialchars($banner_icon) : 'bi-truck' ?>"></i>
    </div>

    <div class="container position-relative z-2">
        <div class="inner-banner-text-col text-center">
            
            <!-- Slim Clean Frosted-Glass Pill Breadcrumb (Centered, 32px high, 13px text) -->
            <nav class="inner-bc-pill-wrap justify-content-center" aria-label="breadcrumb">
                <ol class="inner-bc-pill list-unstyled m-0">
                    <!-- Home Link -->
                    <li class="inner-bc-item">
                        <a href="<?= site_url() ?>" class="inner-bc-link" title="Return to Home">
                            <i class="bi bi-house-door-fill inner-bc-home-icon" aria-hidden="true"></i>
                            <span class="inner-bc-link-text">Home</span>
                        </a>
                    </li>

                    <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                        <?php foreach ($breadcrumbs as $crumb): ?>
                            <li class="inner-bc-sep" aria-hidden="true">
                                <i class="bi bi-chevron-right"></i>
                            </li>
                            <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                                <li class="inner-bc-item">
                                    <a href="<?= $crumb['url'] ?>" class="inner-bc-link">
                                        <span class="inner-bc-link-text"><?= htmlspecialchars(isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : (isset($crumb['label']) ? $crumb['label'] : ''))) ?></span>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="inner-bc-item active" aria-current="page">
                                    <span class="inner-bc-current"><?= htmlspecialchars(isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : (isset($crumb['label']) ? $crumb['label'] : ''))) ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php elseif (isset($bc_current) && !empty($bc_current)): ?>
                        <li class="inner-bc-sep" aria-hidden="true">
                            <i class="bi bi-chevron-right"></i>
                        </li>
                        <li class="inner-bc-item active" aria-current="page">
                            <span class="inner-bc-current"><?= htmlspecialchars($bc_current) ?></span>
                        </li>
                    <?php endif; ?>
                </ol>
            </nav>

            <!-- Page Main Title (clamp 1.625rem to 2.25rem) -->
            <?php if (!empty($heading)): ?>
                <h1 class="inner-banner-title m-0"><?= htmlspecialchars($heading) ?></h1>
            <?php endif; ?>

            <!-- Short Centered Orange Underline Bar (36px by 3px) -->
            <div class="inner-banner-underline" aria-hidden="true"></div>


        </div>
    </div>

    <!-- Clean Bottom Edge (Subtle 8px Single Slope Flowing Seamlessly into Page Content) -->
    <div class="inner-banner-bottom-edge" aria-hidden="true">
        <svg viewBox="0 0 1440 10" fill="none" preserveAspectRatio="none">
            <path d="M0,10 L0,0 L1440,8 L1440,10 Z" fill="#ffffff" />
        </svg>
    </div>

</header>