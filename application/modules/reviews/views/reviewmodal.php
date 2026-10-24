<!-- Review Modal (#rvwmdl) -->
<div class="modal fade review-custom-modal" id="rvwmdl" tabindex="-1" aria-labelledby="rvwmdlLabel">
    <div class="modal-dialog modal-dialog-centered review-modal-dialog">
        <div class="modal-content review-modal-content border-0">
            
            <!-- HEADER: ~76px high (icon 40px, title 19px, subline 13px), rotating close btn -->
            <div class="review-modal-header position-relative d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3 pe-2">
                    <!-- 40px Round Gradient Feedback Icon -->
                    <div class="review-modal-header-icon flex-shrink-0 d-flex align-items-center justify-content-center" aria-hidden="true">
                        <i class="bi bi-chat-square-heart-fill"></i>
                    </div>
                    <div class="review-modal-header-text">
                        <div class="review-modal-title fs-5 fw-bold text-white mb-0" id="rvwmdlLabel">Share your feedback</div>
                        <p class="review-modal-subtitle mb-0">Reviews, suggestions or complaints, we read every one.</p>
                    </div>
                </div>

                <!-- 38px Rounded Square Close Button (Hover turns orange & rotates 90deg) -->
                <button type="button" class="review-modal-close-btn flex-shrink-0" data-bs-dismiss="modal" aria-label="Close review dialog" title="Close">
                    <i class="bi bi-x-lg" aria-hidden="true"></i>
                </button>

                <!-- 3px Orange-to-Blue Gradient Stripe along bottom edge -->
                <div class="review-modal-header-stripe" aria-hidden="true"></div>
            </div>

            <!-- BODY: Compact layout, no scrollbar on desktop -->
            <div class="modal-body review-modal-body">
                <form method="post" id="reviewsform" onsubmit="return false">
                    
                    <!-- 1. Star Rating (Label & Stars on one row) -->
                    <div class="review-modal-field review-field-group mb-row" id="revRatingGroup">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <label class="review-modal-label mb-0">
                                How was your experience? <span class="review-required-star" aria-hidden="true">*</span>
                                <span class="visually-hidden">(required)</span>
                            </label>
                            <div class="review-rating-wrapper d-inline-flex align-items-center gap-2">
                                <div class="review-star-rating d-inline-flex flex-row-reverse" role="radiogroup" aria-label="Rating from 1 to 5 stars">
                                    <input type="radio" name="stars" value="5" id="rating-star-5" class="review-star-input visually-hidden">
                                    <label for="rating-star-5" class="review-star-label" title="5 stars - Excellent" data-rating-text="Excellent">
                                        <i class="bi bi-star-fill"></i>
                                    </label>

                                    <input type="radio" name="stars" value="4" id="rating-star-4" class="review-star-input visually-hidden">
                                    <label for="rating-star-4" class="review-star-label" title="4 stars - Very good" data-rating-text="Very good">
                                        <i class="bi bi-star-fill"></i>
                                    </label>

                                    <input type="radio" name="stars" value="3" id="rating-star-3" class="review-star-input visually-hidden">
                                    <label for="rating-star-3" class="review-star-label" title="3 stars - Good" data-rating-text="Good">
                                        <i class="bi bi-star-fill"></i>
                                    </label>

                                    <input type="radio" name="stars" value="2" id="rating-star-2" class="review-star-input visually-hidden">
                                    <label for="rating-star-2" class="review-star-label" title="2 stars - Fair" data-rating-text="Fair">
                                        <i class="bi bi-star-fill"></i>
                                    </label>

                                    <input type="radio" name="stars" value="1" id="rating-star-1" class="review-star-input visually-hidden">
                                    <label for="rating-star-1" class="review-star-label" title="1 star - Poor" data-rating-text="Poor">
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                </div>
                                <span id="reviewRatingFeedback" class="review-rating-feedback-badge" aria-live="polite" style="display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <!-- 2 & 3. Full Name and Email Address (Side by Side) -->
                    <div class="row g-3 mb-row review-name-email-row">
                        <div class="col-12 col-sm-6">
                            <div class="review-modal-field review-field-group field-wrap">
                                <label for="revName" class="review-modal-label">
                                    Full Name <span class="review-required-star" aria-hidden="true">*</span>
                                    <span class="visually-hidden">(required)</span>
                                </label>
                                <div class="review-input-wrapper position-relative">
                                    <i class="bi bi-person-fill review-field-icon review-icon-muted" aria-hidden="true"></i>
                                    <input type="text" 
                                           class="review-modal-input" 
                                           id="revName" 
                                           name="name" 
                                           placeholder="e.g. Rahul Sharma" 
                                           autocomplete="name" 
                                           required>
                                    <span class="review-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="review-modal-field review-field-group field-wrap">
                                <label for="revEmail" class="review-modal-label">
                                    Email Address <small class="text-muted fw-normal">(optional)</small>
                                </label>
                                <div class="review-input-wrapper position-relative">
                                    <i class="bi bi-envelope-fill review-field-icon review-icon-muted" aria-hidden="true"></i>
                                    <input type="email" 
                                           class="review-modal-input" 
                                           id="revEmail" 
                                           name="email" 
                                           placeholder="e.g. rahul@example.com" 
                                           autocomplete="email">
                                    <span class="review-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Review Title (Full Width) -->
                    <div class="review-modal-field review-field-group field-wrap mb-row">
                        <label for="revTitle" class="review-modal-label">
                            Review Title <small class="text-muted fw-normal">(optional)</small>
                        </label>
                        <div class="review-input-wrapper position-relative">
                            <i class="bi bi-chat-left-quote-fill review-field-icon review-icon-muted" aria-hidden="true"></i>
                            <input type="text" 
                                   class="review-modal-input" 
                                   id="revTitle" 
                                   name="title" 
                                   placeholder="e.g. Seamless 3BHK household relocation to Hyderabad">
                            <span class="review-valid-check" aria-hidden="true"><i class="bi bi-check-circle-fill"></i></span>
                        </div>
                    </div>

                    <!-- 5. Experience Box (Full Width, ~96px High, Character Counter) -->
                    <div class="review-modal-field review-field-group field-wrap mb-row">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="revDesc" class="review-modal-label mb-0">
                                Your Experience <span class="review-required-star" aria-hidden="true">*</span>
                                <span class="visually-hidden">(required)</span>
                            </label>
                            <span id="revDescCharCount" class="review-char-counter" aria-live="polite">0 / 500</span>
                        </div>
                        <div class="review-input-wrapper position-relative">
                            <textarea class="review-modal-input review-modal-textarea" 
                                      id="revDesc" 
                                      name="desc" 
                                      rows="3" 
                                      maxlength="500" 
                                      placeholder="Tell us what went well or what we could do better..." 
                                      required></textarea>
                        </div>
                    </div>

                    <!-- 6. Primary Action Button (50px Orange Gradient) & Clear Form Link -->
                    <div class="review-modal-actions mt-1">
                        <button id="submitbtn" type="submit" class="review-modal-submit-btn w-100">
                            <span class="btn-text-content d-inline-flex align-items-center justify-content-center">
                                <span class="review-btn-label">Submit review</span>
                                <i class="bi bi-send-fill ms-2 review-plane-icon" aria-hidden="true"></i>
                            </span>
                            <span class="btn-loading-content d-none align-items-center justify-content-center">
                                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                <span>Publishing review...</span>
                            </span>
                        </button>

                        <!-- Clear form link below button -->
                        <div class="text-center mt-2">
                            <button type="button" class="review-modal-reset-link" id="resetReviewFormBtn">
                                <i class="bi bi-arrow-counterclockwise me-1" aria-hidden="true"></i>Clear form
                            </button>
                        </div>
                    </div>

                    <!-- Dynamic Result / Error Container -->
                    <div id="result" class="review-modal-result-box mt-2" aria-live="polite"></div>
                </form>
            </div>

            <!-- FOOTER NOTE: Slim light-blue strip (~40px) with shield icon -->
            <div class="review-modal-footer">
                <div class="review-trust-strip d-flex align-items-center justify-content-center gap-2 text-center">
                    <i class="bi bi-shield-check text-primary flex-shrink-0" aria-hidden="true"></i>
                    <span class="review-trust-text">Verified reviews only. We never publish your email.</span>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    const revForm = document.getElementById('reviewsform');
    const submitBtn = document.getElementById('submitbtn');
    const resultBox = document.getElementById('result');
    const charCounter = document.getElementById('revDescCharCount');
    const descInput = document.getElementById('revDesc');
    const nameInput = document.getElementById('revName');
    const emailInput = document.getElementById('revEmail');
    const titleInput = document.getElementById('revTitle');
    const resetBtn = document.getElementById('resetReviewFormBtn');
    const ratingFeedback = document.getElementById('reviewRatingFeedback');
    const starLabels = document.querySelectorAll('.review-star-label');
    const starInputs = document.querySelectorAll('.review-star-input');
    const ratingGroup = document.getElementById('revRatingGroup');

    const ratingTexts = {
        '1': 'Poor',
        '2': 'Fair',
        '3': 'Good',
        '4': 'Very good',
        '5': 'Excellent'
    };

    function getSelectedRating() {
        const checked = document.querySelector('.review-star-input:checked');
        return checked ? checked.value : null;
    }

    function updateRatingBadge(val) {
        if (!ratingFeedback) return;
        if (val && ratingTexts[val]) {
            ratingFeedback.textContent = ratingTexts[val];
            ratingFeedback.style.display = 'inline-flex';
            ratingFeedback.classList.add('rating-badge-pop');
            setTimeout(() => ratingFeedback.classList.remove('rating-badge-pop'), 200);
        } else {
            ratingFeedback.textContent = '';
            ratingFeedback.style.display = 'none';
        }
    }

    // Hover effect on star labels
    starLabels.forEach(label => {
        label.addEventListener('mouseenter', function () {
            const inputId = this.getAttribute('for');
            const targetInput = document.getElementById(inputId);
            if (targetInput) {
                updateRatingBadge(targetInput.value);
            }
        });
    });

    const starContainer = document.querySelector('.review-star-rating');
    if (starContainer) {
        starContainer.addEventListener('mouseleave', function () {
            const selected = getSelectedRating();
            updateRatingBadge(selected);
        });
    }

    // Radio change event
    starInputs.forEach(input => {
        input.addEventListener('change', function () {
            updateRatingBadge(this.value);
            if (ratingGroup) {
                ratingGroup.classList.remove('input-error-highlight');
            }
        });
    });

    // Experience Character Counter
    if (descInput && charCounter) {
        descInput.addEventListener('input', function () {
            const len = this.value.length;
            charCounter.textContent = `${len} / 500`;
            if (len >= 5) {
                this.classList.add('is-valid-field');
                this.classList.remove('input-error-highlight');
            } else {
                this.classList.remove('is-valid-field');
            }
        });
    }

    // Live validation for Name
    if (nameInput) {
        nameInput.addEventListener('input', function () {
            if (this.value.trim().length >= 2) {
                this.classList.add('is-valid-field');
                this.classList.remove('input-error-highlight');
            } else {
                this.classList.remove('is-valid-field');
            }
        });
    }

    // Live validation for Email
    if (emailInput) {
        emailInput.addEventListener('input', function () {
            const val = this.value.trim();
            if (val && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                this.classList.add('is-valid-field');
            } else if (!val) {
                this.classList.remove('is-valid-field');
            } else {
                this.classList.remove('is-valid-field');
            }
        });
    }

    // Clear form
    if (resetBtn && revForm) {
        resetBtn.addEventListener('click', function () {
            revForm.reset();
            starInputs.forEach(i => i.checked = false);
            updateRatingBadge(null);
            if (charCounter) charCounter.textContent = '0 / 500';
            revForm.querySelectorAll('.is-valid-field').forEach(el => el.classList.remove('is-valid-field'));
            revForm.querySelectorAll('.input-error-highlight').forEach(el => el.classList.remove('input-error-highlight'));
            if (resultBox) resultBox.innerHTML = '';
        });
    }

    // AJAX Submission Handling
    if (submitBtn && revForm) {
        submitBtn.addEventListener('click', function (e) {
            e.preventDefault();

            let hasErrors = false;
            const nameVal = nameInput ? nameInput.value.trim() : '';
            const descVal = descInput ? descInput.value.trim() : '';
            const ratingVal = getSelectedRating();

            revForm.querySelectorAll('.input-error-highlight').forEach(el => el.classList.remove('input-error-highlight'));

            if (!ratingVal) {
                if (ratingGroup) ratingGroup.classList.add('input-error-highlight');
                hasErrors = true;
            }
            if (!nameVal) {
                if (nameInput) nameInput.classList.add('input-error-highlight');
                hasErrors = true;
            }
            if (!descVal) {
                if (descInput) descInput.classList.add('input-error-highlight');
                hasErrors = true;
            }

            if (hasErrors) {
                if (resultBox) {
                    let errMsg = 'Please fill in all required fields marked with *.';
                    if (!ratingVal) errMsg = 'Please select a star rating and complete the required fields.';
                    resultBox.innerHTML = `<div class="alert alert-danger py-1 px-3 small mb-0 d-flex align-items-center gap-2"><i class="bi bi-exclamation-triangle-fill flex-shrink-0"></i><span>${errMsg}</span></div>`;
                }
                return;
            }

            const formData = new FormData(revForm);
            const btnText = submitBtn.querySelector('.btn-text-content');
            const btnLoading = submitBtn.querySelector('.btn-loading-content');

            submitBtn.disabled = true;
            if (btnText && btnLoading) {
                btnText.classList.remove('d-inline-flex');
                btnText.classList.add('d-none');
                btnLoading.classList.remove('d-none');
                btnLoading.classList.add('d-inline-flex');
            }

            if (resultBox) {
                resultBox.innerHTML = '<p class="text-muted small my-1 text-center"><span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Posting your review...</p>';
            }

            fetch('<?php echo site_url("reviews/review") ?>', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                if (btnText && btnLoading) {
                    btnText.classList.remove('d-none');
                    btnText.classList.add('d-inline-flex');
                    btnLoading.classList.remove('d-inline-flex');
                    btnLoading.classList.add('d-none');
                }

                if (data.err === 0) {
                    if (resultBox) {
                        resultBox.innerHTML = `
                            <div class="review-success-card text-center my-1">
                                <div class="review-success-star-wrap mx-auto mb-2">
                                    <i class="bi bi-star-fill review-success-star"></i>
                                </div>
                                <div class="review-success-title fw-bold mb-1">
                                    Thank you, your review helps other families!
                                </div>
                                <p class="review-success-desc text-muted mb-2">
                                    Your verified rating and feedback have been received successfully.
                                </p>
                                <button type="button" class="btn btn-outline-primary review-success-btn px-4 py-1 rounded-pill fw-semibold" data-bs-dismiss="modal">
                                    Close Window
                                </button>
                            </div>
                        `;
                    }
                    revForm.reset();
                    starInputs.forEach(i => i.checked = false);
                    updateRatingBadge(null);
                    if (charCounter) charCounter.textContent = '0 / 500';
                    revForm.querySelectorAll('.is-valid-field').forEach(el => el.classList.remove('is-valid-field'));
                } else {
                    if (resultBox) {
                        resultBox.innerHTML = `<div class="alert alert-danger py-1 px-3 small mb-0"><i class="bi bi-exclamation-triangle-fill me-1"></i>${data.msg || 'An error occurred.'}</div>`;
                    }
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                if (btnText && btnLoading) {
                    btnText.classList.remove('d-none');
                    btnText.classList.add('d-inline-flex');
                    btnLoading.classList.remove('d-inline-flex');
                    btnLoading.classList.add('d-none');
                }
                if (resultBox) {
                    resultBox.innerHTML = '<div class="alert alert-danger py-1 px-3 small mb-0"><i class="bi bi-exclamation-triangle-fill me-1"></i>An error occurred while posting your review. Please try again.</div>';
                }
            });
        });
    }

    // Modal autofocus on first input when opened
    const rvwModalEl = document.getElementById('rvwmdl');
    if (rvwModalEl) {
        rvwModalEl.addEventListener('shown.bs.modal', function () {
            if (nameInput) nameInput.focus();
        });
    }
});
</script>
