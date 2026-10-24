<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// 15 Exact FAQ items provided
$faqsList = [
    [
        'q' => 'How do I choose the best packers and movers in India?',
        'a' => 'Choose a company that is experienced, charges reasonable rates and uses proper documentation and packing technique.'
    ],
    [
        'q' => 'How much do ' . $company3 . ' charge for household shifting?',
        'a' => 'The charges vary according to the distance, household size, packaging material and other factors.'
    ],
    [
        'q' => 'Is ' . $company3 . ' IBA-approved?',
        'a' => 'The company represents itself as an IBA approved logistics partner reference number ' . $ibaCode . '.'
    ],
    [
        'q' => 'Is ' . $company3 . ' ISO certified?',
        'a' => 'Yes, the company claims that it has ' . $isoCode . ' Quality Certification.'
    ],
    [
        'q' => 'Can you provide fixed rate moving quotations?',
        'a' => 'Yes, we have written price lock quotations on the basis of moving requirements.'
    ],
    [
        'q' => 'How do I book household shifting services?',
        'a' => 'Tell us your location, moving date and household requirements for getting quotation.'
    ],
    [
        'q' => 'What kind of services do you offer?',
        'a' => 'We provide household shifting, office shifting, bike shifting and car transportation services among others.'
    ],
    [
        'q' => 'What packing materials do you use?',
        'a' => 'We use 5-layered bubble packaging for suitable goods along with other protective packing materials.'
    ],
    [
        'q' => 'How can I track my shipment while in transit?',
        'a' => 'The company provides GPS monitoring of containers for applicable shipments.'
    ],
    [
        'q' => 'Do you provide bike shifting services between two cities?',
        'a' => 'Yes, bike shifting services are provided by the company. You need to contact the team for your routing and rates.'
    ],
    [
        'q' => 'Do you provide car transportation services?',
        'a' => 'Yes, we provide car transportation services depending upon the routing and service arrangements.'
    ],
    [
        'q' => 'Do you provide office relocation services?',
        'a' => 'Yes, the company assists businesses in arranging office packing and loading services.'
    ],
    [
        'q' => 'In which cities do you operate?',
        'a' => 'The company claims its presence in more than 250 Indian cities.'
    ],
    [
        'q' => 'How can I save on household shifting costs?',
        'a' => 'You can plan your move earlier, remove unnecessary goods and get a written quotation based on your actual requirements.'
    ],
    [
        'q' => 'Do you provide transit damage assurance?',
        'a' => 'Yes, the company provides zero transit damage assurance. Get the details of written terms and applicable conditions.'
    ]
];

// Schema JSON-LD for FAQs
$schemaFaqs = [];
foreach ($faqsList as $faq) {
    $schemaFaqs[] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['a']
        ]
    ];
}
$schemaJson = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $schemaFaqs
];
?>

<script type="application/ld+json">
<?= json_encode($schemaJson, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Banner (Distinct from below section heading) -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Help & Support Center',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'FAQs']
    ]
]); ?>

<!-- FAQs Section (White Background) -->
<section class="inner-section-white" id="faqs-main-section" aria-label="Frequently Asked Questions">
    <div class="container">
        
        <!-- Section Title (Exact Heading from User: Frequently Asked Questions) -->
        <div class="text-center inner-section-header mb-5">
            <div class="inner-section-tag">
                <span class="inner-section-bar"></span>
                <span>Relocation Guidance</span>
            </div>
            <h2 class="inner-section-title">Frequently Asked Questions</h2>
            <p class="inner-section-subtitle">
                Clear answers and verified information about relocation, packing, quotes, and delivery standards.
            </p>
        </div>

        <div class="row g-4 g-lg-5">
            
            <!-- Left Column: Sticky Help Card -->
            <div class="col-12 col-lg-4">
                <div class="faq-sticky-card">
                    <div class="faq-sticky-icon-box">
                        <i class="bi bi-headset"></i>
                    </div>

                    <h2 class="fw-bold fs-4 text-dark mb-2">Still have questions?</h2>
                    <p class="faq-sticky-desc text-secondary mb-4">
                        Our moving coordinators are available to answer your specific requirements and provide written quotations.
                    </p>

                    <!-- Call & WhatsApp Action Buttons -->
                    <div class="d-grid gap-2 mb-4">
                        <?php if (!empty($phone)): ?>
                            <a href="<?= $phonehtml ?>" class="faq-btn-call" title="Call our moving team">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call: <?= $phone ?></span>
                            </a>
                        <?php endif; ?>

                        <?php if (!empty($whatsapphtml)): ?>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="faq-btn-wa" title="Chat on WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                                <span>Chat on WhatsApp</span>
                            </a>
                        <?php endif; ?>

                        <button type="button" class="btn-inner-primary w-100 mt-1" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <span>Get Free Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>

                    <!-- Trust Note -->
                    <div class="d-flex align-items-center gap-2 p-3 bg-light rounded-3 text-secondary small">
                        <i class="bi bi-shield-check text-success fs-5"></i>
                        <span>Written quotations &amp; verified IBA partner</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: All 15 FAQ Accordions -->
            <div class="col-12 col-lg-8">
                
                <div class="faq-list">
                    <?php 
                    $index = 0;
                    foreach ($faqsList as $faq): 
                        $isOpen = ($index === 0) ? 'open' : '';
                        $index++;
                    ?>
                        <details class="faq-accordion-item" <?= $isOpen ?>>
                            <summary class="faq-summary">
                                <span><?= htmlspecialchars($faq['q']) ?></span>
                                <span class="faq-summary-icon"><i class="bi bi-plus"></i></span>
                            </summary>
                            <div class="faq-body">
                                <?= htmlspecialchars($faq['a']) ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>