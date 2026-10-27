<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 1. Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Track Your Shipment',
    'bc_desc' => 'Monitor your consignment in real time with our live GPS-enabled tracking system. Enter your Tracking ID, LR No., or Consignment Note.',
    'breadcrumbs' => [
        ['name' => 'Track Your Shipment']
    ]
]); ?>

<!-- 2. Main Tracking Section -->
<section class="py-5 bg-light position-relative overflow-hidden" id="tracking-portal">
    <div class="container py-lg-3">

        <!-- Tracking Search Form Card -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white">
                    <div class="p-4 p-md-5">
                        <div class="text-center mb-4">
                            <span class="badge bg-danger-subtle text-danger px-3 py-1 rounded-pill fw-bold text-uppercase small mb-2">
                                <i class="bi bi-broadcast me-1"></i> Live GPS Tracking Portal
                            </span>
                            <h2 class="h3 fw-bold text-dark mb-2">Track Consignment Status</h2>
                            <p class="text-secondary small mb-0">Enter your Consignment Number, LR Number, or Tracking ID from your booking docket.</p>
                        </div>

                        <!-- Form -->
                        <form id="tracking_form" class="mb-3" onsubmit="return false;">
                            <div class="tracking-search-box">
                                <div class="tracking-input-group">
                                    <span class="tracking-input-icon text-danger ps-3 pe-2">
                                        <i class="bi bi-truck fs-4"></i>
                                    </span>
                                    <input type="text" 
                                           id="trackingNumberInput" 
                                           name="trackingNumber" 
                                           class="form-control tracking-input-field border-0 shadow-none ps-2 fs-6 fw-semibold" 
                                           placeholder="Enter G.R. Number or Consignment ID (e.g. 123456 or ABC #123456)" 
                                           required 
                                           autocomplete="off"
                                           value="">
                                    <button type="reset" class="btn btn-light rounded-circle tracking-reset-btn text-secondary me-2" title="Clear">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                                <button class="btn btn-danger tracking-submit-btn rounded-pill fw-bold d-flex align-items-center justify-content-center gap-2 shadow-sm" type="submit" id="tracking_submit">
                                    <span>Track Now</span>
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>

                        <!-- Quick Sample Suggestions from Real Admin Shipments -->
                        <?php if (!empty($samples)): ?>
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 pt-2 text-muted small">
                            <span class="fw-medium"><i class="bi bi-lightbulb me-1 text-warning"></i> Recent Consignment:</span>
                            <?php foreach ($samples as $s): ?>
                                <?php 
                                    $val = !empty($s['gr_no']) ? $s['gr_no'] : '#' . $s['id'];
                                    $label = !empty($s['c_name']) ? $s['c_name'] . ' #' . $val : $val;
                                ?>
                                <button type="button" class="btn btn-sm btn-outline-secondary py-0 px-2 rounded-pill tracking-sample-chip" data-sample="<?= htmlspecialchars($label) ?>">
                                    <i class="bi bi-box-seam me-1"></i><?= htmlspecialchars($label) ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Status / Alert Message Container -->
                        <div id="statusMessage" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Dynamic Tracking Results Container -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <!-- Success Shipment Card -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4 bg-white contact-tracking-details-card">
                    <!-- Top Status Strip -->
                    <div class="p-3 p-md-4 bg-dark text-white d-flex flex-wrap align-items-center justify-content-between gap-3 border-bottom border-secondary border-opacity-25">
                        <div>
                            <span class="text-white-50 small d-block text-uppercase fw-semibold letter-spacing-1">Consignment Docket</span>
                            <span class="fs-4 fw-bold text-white" id="lrNumber">-</span>
                            <span class="badge bg-white text-dark fw-bold small ms-2 px-2.5 py-1 shadow-sm">
                                <i class="bi bi-person-fill text-danger me-1"></i><span id="customerName">-</span>
                            </span>
                        </div>
                        <div class="text-md-end">
                            <span class="badge bg-danger px-3 py-2 rounded-pill fs-6 fw-bold d-inline-flex align-items-center gap-2 shadow-sm">
                                <span class="spinner-grow spinner-grow-sm text-white track-live-pulse" role="status"></span>
                                <span id="shipmentType">Household / Cargo Shifting</span>
                            </span>
                            <span class="text-light small d-block mt-1">
                                <i class="bi bi-calendar-event me-1"></i> Schedule: <strong class="text-white" id="ex_del_date">Standard Route Schedule</strong>
                            </span>
                        </div>
                    </div>

                    <!-- Route & Details Banner -->
                    <div class="p-4 bg-light border-bottom">
                        <div class="row g-3 align-items-center">
                            <!-- Origin -->
                            <div class="col-12 col-md-5">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="bg-danger text-white rounded-circle p-2 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0 track-origin-icon">
                                        <i class="bi bi-geo-alt-fill fs-5"></i>
                                    </div>
                                    <div>
                                        <span class="text-muted small d-block fw-semibold text-uppercase">Pickup Origin</span>
                                        <strong class="fs-5 text-dark d-block lh-sm" id="origin">-</strong>
                                    </div>
                                </div>
                            </div>

                            <!-- Route Connector Arrow -->
                            <div class="col-12 col-md-2 text-center py-2 py-md-0">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <i class="bi bi-arrow-right fs-3 text-danger d-none d-md-block"></i>
                                    <i class="bi bi-arrow-down fs-3 text-danger d-md-none"></i>
                                </div>
                            </div>

                            <!-- Destination -->
                            <div class="col-12 col-md-5">
                                <div class="d-flex align-items-start gap-3 justify-content-md-end text-md-end">
                                    <div class="order-md-1">
                                        <span class="text-muted small d-block fw-semibold text-uppercase">Delivery Destination</span>
                                        <strong class="fs-5 text-dark d-block lh-sm" id="destination">-</strong>
                                        <span class="small text-success fw-medium"><i class="bi bi-shield-check me-1"></i>Door-to-Door Delivery</span>
                                    </div>
                                    <div class="bg-success text-white rounded-circle p-2 d-flex align-items-center justify-content-center shadow-sm order-md-2 flex-shrink-0 track-dest-icon">
                                        <i class="bi bi-pin-map-fill fs-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone Progress Stepper -->
                    <div class="p-4 bg-white border-bottom">
                        <h6 class="fw-bold text-dark mb-4 text-uppercase small letter-spacing-1">
                            <i class="bi bi-diagram-3-fill text-danger me-2"></i> Shipment Progress Pipeline
                        </h6>

                        <div class="position-relative px-2 px-md-4 py-3">
                            <div class="progress track-progress-track">
                                <div class="progress-bar contact-progress-bar bg-danger" role="progressbar"></div>
                            </div>
                            <div class="d-flex justify-content-between position-relative mt-n3 contact-steps-container">
                                <!-- Step 1: Processing -->
                                <div class="contact-step step-processing text-center">
                                    <span class="step-icon"><i class="bi bi-box-seam"></i></span>
                                    <strong class="d-block small mt-1 step-label">Processing</strong>
                                    <span class="d-block text-muted small step-date" id="processing-date"></span>
                                </div>
                                <!-- Step 2: Picked Up -->
                                <div class="contact-step step-picked text-center">
                                    <span class="step-icon"><i class="bi bi-truck"></i></span>
                                    <strong class="d-block small mt-1 step-label">Picked Up</strong>
                                    <span class="d-block text-muted small step-date" id="picked-date"></span>
                                </div>
                                <!-- Step 3: In Transit -->
                                <div class="contact-step step-transit text-center">
                                    <span class="step-icon"><i class="bi bi-building"></i></span>
                                    <strong class="d-block small mt-1 step-label">In Transit</strong>
                                    <span class="d-block text-muted small step-date" id="transit-date"></span>
                                </div>
                                <!-- Step 4: Delivered -->
                                <div class="contact-step step-delivered text-center">
                                    <span class="step-icon"><i class="bi bi-check2-circle"></i></span>
                                    <strong class="d-block small mt-1 step-label">Delivered</strong>
                                    <span class="d-block text-muted small step-date" id="delivered-date"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Tracking Activity Table -->
                    <div class="p-4 p-md-5 bg-white">
                        <h6 class="fw-bold text-dark mb-4 text-uppercase small letter-spacing-1">
                            <i class="bi bi-clock-history text-danger me-2"></i> Detailed Tracking Activity Ledger
                        </h6>

                        <div class="table-responsive rounded-3 border">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="track-th-status"><i class="bi bi-flag me-1 text-danger"></i> Milestone Status</th>
                                        <th class="track-th-time"><i class="bi bi-clock me-1 text-danger"></i> Date & Time</th>
                                        <th class="track-th-detail"><i class="bi bi-geo-alt me-1 text-danger"></i> Checkpoint & Activity Details</th>
                                    </tr>
                                </thead>
                                <tbody id="trackingTableBody">
                                    <!-- Populated dynamically via JS -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Direct Escalation Support Footer -->
                    <div class="p-4 bg-light-subtle border-top d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-danger-subtle text-danger p-2 d-flex align-items-center justify-content-center track-support-icon">
                                <i class="bi bi-headset fs-5"></i>
                            </div>
                            <div>
                                <strong class="d-block text-dark small">Need instant assistance for this consignment?</strong>
                                <span class="text-muted small">Speak directly to our 24x7 Central Transit Desk</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <a href="<?= $phonehtml ?>" class="btn btn-outline-dark btn-sm rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill text-danger"></i> <?= $phone ?>
                            </a>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-sm rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2">
                                <i class="bi bi-whatsapp"></i> WhatsApp Help
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- 4. Key Security & GPS Features -->
        <div class="row g-4 mt-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                    <div class="bg-danger-subtle text-danger rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center track-feature-icon">
                        <i class="bi bi-geo-fill fs-4"></i>
                    </div>
                    <h3 class="h6 fw-bold text-dark mb-2">GPS Satellite Telemetry</h3>
                    <p class="text-secondary small mb-0">Every vehicle in our fleet is equipped with 24x7 satellite GPS sensors for real-time tracking.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                    <div class="bg-primary-subtle text-primary rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center track-feature-icon">
                        <i class="bi bi-shield-lock-fill fs-4"></i>
                    </div>
                    <h3 class="h6 fw-bold text-dark mb-2">Tamper-Proof Seal</h3>
                    <p class="text-secondary small mb-0">Container locks are sealed with numbered digital security seals that open only in client presence.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                    <div class="bg-success-subtle text-success rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center track-feature-icon">
                        <i class="bi bi-bell-fill fs-4"></i>
                    </div>
                    <h3 class="h6 fw-bold text-dark mb-2">Milestone Notifications</h3>
                    <p class="text-secondary small mb-0">Instant automated updates dispatched upon departure, tollway crossing, and city hub arrival.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                    <div class="bg-warning-subtle text-warning-emphasis rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center track-feature-icon">
                        <i class="bi bi-patch-check-fill fs-4"></i>
                    </div>
                    <h3 class="h6 fw-bold text-dark mb-2">IBA Code Certified</h3>
                    <p class="text-secondary small mb-0">Official IBA Code (<?= $ibaCode ?>) carrier dockets accepted across all nationalized banks.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked Up',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info py-2 px-3 rounded-3 d-flex align-items-center gap-2"><div class="spinner-border spinner-border-sm text-primary" role="status"></div><span>Searching consignment details, please wait...</span></div>');
            $(this).prop('disabled', true);
            $('.contact-tracking-details-card').hide();

            $.post("<?php echo site_url('tracking/track') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').show();

                    // Populate details
                    $('#customerName').text(response.main.c_name || '-');
                    $('#lrNumber').text(response.main.tracking_id || '-');
                    $('#shipmentType').text(response.main.ship_type || 'Household / Cargo Shifting');
                    $('#origin').text(response.main.ship_from || '-');
                    $('#destination').text(response.main.ship_to || '-');
                    $('#ex_del_date').text(response.main.ex_del_date || 'Standard Route Schedule');

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Reset previous step classes
                    $('.contact-step').removeClass('completed active');

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date || '');
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date || '');
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date || '');
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date || '');
                    }

                    // Set active step
                    if (activeStep > 0) {
                        $(`.contact-step:nth-child(${activeStep})`).addClass('active');
                    }

                    // Update progress bar width
                    $('.contact-progress-bar').css('width', progress + '%');

                    // Build tracking table
                    if (Array.isArray(response.timeline) && response.timeline.length > 0) {
                        response.timeline.forEach(item => {
                            const stepName = steps[item.type] || 'Milestone Update';
                            const dateStr = item.date ? `${item.date}${item.time ? ' <span class="track-table-time"><i class="bi bi-clock me-1"></i>' + item.time + '</span>' : ''}` : '-';
                            const detailStr = item.place ? (item.remarks ? `<strong>${item.place}</strong> &ndash; ${item.remarks}` : `<strong>${item.place}</strong>`) : (item.remarks || 'Consignment milestone logged');
                            
                            $('#trackingTableBody').append(`
                                <tr>
                                    <td><span class="track-badge-pill">${stepName}</span></td>
                                    <td>${dateStr}</td>
                                    <td>${detailStr}</td>
                                </tr>
                            `);
                        });
                    } else {
                        $('#trackingTableBody').append(`
                            <tr>
                                <td colspan="3" class="text-center py-3 text-muted">No timeline events recorded yet.</td>
                            </tr>
                        `);
                    }

                    $('#statusMessage').empty();

                    // Scroll to results
                    $('html, body').animate({
                        scrollTop: $('.contact-tracking-details-card').offset().top - 80
                    }, 400);
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger py-2 px-3 rounded-3 d-flex align-items-center gap-2"><i class="bi bi-exclamation-triangle-fill"></i><span>${response.message}</span></div>`);
                }
            }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
                $('#tracking_submit').prop('disabled', false);
                $('#statusMessage').html('<div class="alert alert-danger py-2 px-3 rounded-3 d-flex align-items-center gap-2"><i class="bi bi-exclamation-triangle-fill"></i><span>Error: ' + textStatus + ' - ' + errorThrown + '</span></div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('');
            $('#trackingTableBody').empty();
        });

        // Sample chip buttons
        $('.tracking-sample-chip').click(function () {
            const sample = $(this).data('sample');
            $('#trackingNumberInput').val(sample);
            $('#tracking_submit').click();
        });

        // Auto-search if query parameter exists
        <?php if ($this->input->get('track') || $this->input->get('id')): ?>
            const initialQuery = '<?= htmlspecialchars($this->input->get("track") ?: $this->input->get("id"), ENT_QUOTES, "UTF-8") ?>';
            if (initialQuery) {
                $('#trackingNumberInput').val(initialQuery);
                $('#tracking_submit').click();
            }
        <?php endif; ?>
    });
</script>