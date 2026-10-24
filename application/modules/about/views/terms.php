<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms and Conditions',
    'bc_desc' => "Terms, conditions, and operating policies governing all relocation and cargo services.",
    'breadcrumbs' => [
        ['name' => 'Terms and Conditions']
    ]
]); ?>

<!-- Terms Content Section -->
<section class="inner-section-white py-5" id="terms-conditions-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="inner-card p-4 p-lg-5">
                    <h2 class="inner-section-title mb-4">Terms &amp; Relocation Service Conditions</h2>
                    
                    <p class="legal-card-text text-secondary mb-4">
                        By engaging the moving, packing, transportation, or warehousing services of <strong><?= htmlspecialchars($companyName) ?></strong>, you agree to comply with the standard terms and guidelines detailed below.
                    </p>

                    <h2 class="inner-section-title fs-3 mb-3">Relocation Policies, Payments &amp; Transit Rules</h2>

                    <h3 class="fw-bold fs-5 text-dark mb-2">1. Quotations and Price Lock</h3>
                    <p class="legal-card-text text-secondary mb-4">
                        All official quotations are generated following an accurate item inventory check. Our written price lock guarantee protects you against unapproved delivery surcharges, provided the confirmed inventory list remains unchanged on moving day.
                    </p>

                    <h3 class="fw-bold fs-5 text-dark mb-2">2. Prohibited Goods</h3>
                    <p class="legal-card-text text-secondary mb-4">
                        Clients must not pack hazardous goods, combustible chemicals, arms, currency, high-value bullion, or contraband items. Such items are strictly prohibited under national transportation regulations.
                    </p>

                    <h3 class="fw-bold fs-5 text-dark mb-2">3. Transit Insurance & Claims</h3>
                    <p class="legal-card-text text-secondary mb-4">
                        Comprehensive transit insurance is provided through authorized national insurers. In the rare event of transit damage, written notification must be submitted within 48 hours of shipment delivery for immediate claim inspection.
                    </p>

                    <h3 class="fw-bold fs-5 text-dark mb-2">4. Payment Schedules</h3>
                    <p class="legal-card-text text-secondary mb-0">
                        An advance booking deposit confirms your moving date and vehicle slot. The remaining balance is payable upon successful loading or prior to final destination unloading as per your contract agreement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Closing Call to Action Band -->
<?php $this->load->view('home/cta_widget'); ?>