<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => "Understand how we protect and manage your personal data across all moving services.",
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]); ?>

<!-- Privacy Content Section -->
<section class="inner-section-white py-5" id="privacy-policy-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="inner-card p-4 p-lg-5">
                    <h2 class="inner-section-title mb-4">Our Commitment to Your Data Privacy</h2>
                    
                    <p class="legal-card-text text-secondary mb-4">
                        At <strong><?= htmlspecialchars($companyName) ?></strong>, we take the confidentiality of your personal and relocation information seriously. This policy outlines how we collect, store, and utilize data obtained through our website, mobile communications, and relocation booking forms.
                    </p>

                    <h2 class="inner-section-title fs-3 mb-3">Data Collection, Usage &amp; Security Protocols</h2>

                    <h3 class="fw-bold fs-5 text-dark mb-2">1. Information We Collect</h3>
                    <p class="legal-card-text text-secondary mb-4">
                        To provide accurate quotations and execute relocations safely, we collect personal contact details (name, phone number, email address), origin and destination addresses, inventory lists, and transit insurance preferences.
                    </p>

                    <h3 class="fw-bold fs-5 text-dark mb-2">2. How We Use Your Information</h3>
                    <p class="legal-card-text text-secondary mb-4">
                        Your data is solely used to organize on-site or virtual surveys, generate IBA-compliant billing invoices, assign driver teams, and provide live GPS consignment tracking. We never sell or lease your personal information to third-party marketing companies.
                    </p>

                    <h3 class="fw-bold fs-5 text-dark mb-2">3. Data Security & Storage</h3>
                    <p class="legal-card-text text-secondary mb-4">
                        All digital transactions, booking records, and identification paperwork are stored in secure, encrypted databases accessible only by authorized operations staff.
                    </p>

                    <h3 class="fw-bold fs-5 text-dark mb-2">4. Contact & Inquiries</h3>
                    <p class="legal-card-text text-secondary mb-0">
                        If you have questions regarding our privacy practices or wish to update your details, please reach out to our compliance desk at <a href="mailto:<?= !empty($email) ? $email : 'support@elitelogistics.com' ?>" class="text-primary fw-bold"><?= !empty($email) ? $email : 'support@elitelogistics.com' ?></a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>