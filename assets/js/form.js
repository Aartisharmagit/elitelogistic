document.addEventListener("DOMContentLoaded", function () {
    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Clear previous errors and highlights
            form.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            form.querySelectorAll(".field-error-msg").forEach(el => el.remove());

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            
            // Get fields
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            let hasErrors = false;

            // Helper to show field error
            function showError(inputEl, message) {
                if (!inputEl) return;
                inputEl.classList.add("input-error-highlight");
                inputEl.classList.remove("is-valid-field");
                
                const errorDiv = document.createElement("div");
                errorDiv.className = "field-error-msg";
                errorDiv.innerHTML = `<i class="bi bi-exclamation-circle-fill"></i> ${message}`;
                
                // Find the wrapper (either .field-wrap, .form-group, or parent)
                const wrapper = inputEl.closest(".field-wrap") || inputEl.closest(".form-group") || inputEl.closest(".input-wrap-custom") || inputEl.parentElement;
                
                // Append inside the wrapper
                wrapper.appendChild(errorDiv);
            }

            // Validate Name
            if (nameInput) {
                const val = nameInput.value.trim();
                if (!val) {
                    showError(nameInput, "The Name field is required.");
                    hasErrors = true;
                }
            }

            // Validate Phone
            if (phoneInput) {
                const val = phoneInput.value.trim();
                if (!val) {
                    showError(phoneInput, "The Mobile field is required.");
                    hasErrors = true;
                } else if (!/^\d+$/.test(val)) {
                    showError(phoneInput, "The Mobile field must contain only numbers.");
                    hasErrors = true;
                } else if (val.length !== 10) {
                    showError(phoneInput, "The Mobile field must be exactly 10 digits.");
                    hasErrors = true;
                }
            }

            if (hasErrors) {
                if (resultBox) {
                    resultBox.innerHTML = ""; // Clear loader/previous messages
                }
                return; // Stop form submission
            }

            const formData = new FormData(this);
            const submitBtn = form.querySelector('button[type="submit"]');
            const btnText = submitBtn ? submitBtn.querySelector('.btn-text-content') : null;
            const btnLoading = submitBtn ? submitBtn.querySelector('.btn-loading-content') : null;

            // Show button loading spinner & disable button
            if (submitBtn) {
                submitBtn.disabled = true;
            }
            if (btnText && btnLoading) {
                btnText.classList.remove('d-inline-flex');
                btnText.classList.add('d-none');
                btnLoading.classList.remove('d-none');
                btnLoading.classList.add('d-inline-flex');
            }

            // Show loader in resultBox
            if (resultBox) {
                resultBox.innerHTML = "<p class='form-loader-text text-muted small my-2'><span class='spinner-border spinner-border-sm me-1' role='status' aria-hidden='true'></span>Please wait...</p>";
            }

            // Remember initial Moving From city if present
            const mfromInput = form.querySelector('input[name="mfrom"]');
            const initialCity = mfromInput ? mfromInput.getAttribute("value") || "" : "";

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {
                // Restore button state
                if (submitBtn) {
                    submitBtn.disabled = false;
                }
                if (btnText && btnLoading) {
                    btnText.classList.remove('d-none');
                    btnText.classList.add('d-inline-flex');
                    btnLoading.classList.remove('d-inline-flex');
                    btnLoading.classList.add('d-none');
                }

                if (data.trim() === "1") {
                    if (form.id === "quotemodal") {
                        data = `
                            <div class="quote-success-card text-center my-2">
                                <div class="quote-success-icon-wrap mx-auto mb-2">
                                    <svg class="quote-success-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="quote-checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="quote-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                    </svg>
                                </div>
                                <div class="fw-bold mb-1" style="font-size: 18px; color: #0b224d;">
                                    Thanks, we'll call you within 15 minutes.
                                </div>
                                <p class="text-muted mb-3" style="font-size: 13.5px;">
                                    Your relocation quote request has been locked with IBA approved standard rates.
                                </p>
                                <button type="button" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-semibold" data-bs-dismiss="modal">
                                    Close Window
                                </button>
                            </div>
                        `;
                    } else {
                        data = `
                            <div class='alert alert-success mt-3'>
                                <p class='text-success fw-bold mb-0'>Thank you! Your request has been submitted successfully.</p>
                            </div>
                        `;
                    }
                    
                    form.reset();
                    if (mfromInput && initialCity) {
                        mfromInput.value = initialCity;
                    }
                    form.querySelectorAll(".is-valid-field").forEach(el => el.classList.remove("is-valid-field"));
                }

                if (resultBox) {
                    resultBox.innerHTML = data;
                    if (form.id !== "quotemodal") {
                        setTimeout(() => resultBox.innerHTML = "", 8000);
                    }
                }
            })
            .catch(err => {
                // Restore button state
                if (submitBtn) {
                    submitBtn.disabled = false;
                }
                if (btnText && btnLoading) {
                    btnText.classList.remove('d-none');
                    btnText.classList.add('d-inline-flex');
                    btnLoading.classList.remove('d-inline-flex');
                    btnLoading.classList.add('d-none');
                }

                if (resultBox) {
                    resultBox.innerHTML = "<p class='form-error-text text-danger small my-2'><i class='bi bi-exclamation-triangle-fill me-1'></i>Something went wrong! Please try again.</p>";
                }
            });

        });

    });

    // Enhanced interactive behaviors for #quotemodal
    const qModal = document.getElementById("qteModal");
    const qForm = document.getElementById("quotemodal");

    if (qForm) {
        const phoneField = qForm.querySelector('input[name="phone"]');
        const nameField = qForm.querySelector('input[name="name"]');
        const emailField = qForm.querySelector('input[name="email"]');
        const mfromField = qForm.querySelector('input[name="mfrom"]');
        const mtoField = qForm.querySelector('input[name="mto"]');
        const msgField = qForm.querySelector('textarea[name="message"]');
        const charCount = document.getElementById("modalMsgCharCount");
        const resetBtn = document.getElementById("resetQuotemodalBtn");
        const defaultCity = mfromField ? mfromField.getAttribute("value") || "" : "";

        // Live validation for Phone
        if (phoneField) {
            phoneField.addEventListener("input", function () {
                this.value = this.value.replace(/\D/g, '').slice(0, 10);
                if (this.value.length === 10) {
                    this.classList.add("is-valid-field");
                    this.classList.remove("input-error-highlight");
                    const err = this.closest(".field-wrap")?.querySelector(".field-error-msg");
                    if (err) err.remove();
                } else {
                    this.classList.remove("is-valid-field");
                }
            });
        }

        // Live validation for Name
        if (nameField) {
            nameField.addEventListener("input", function () {
                if (this.value.trim().length >= 2) {
                    this.classList.add("is-valid-field");
                    this.classList.remove("input-error-highlight");
                    const err = this.closest(".field-wrap")?.querySelector(".field-error-msg");
                    if (err) err.remove();
                } else {
                    this.classList.remove("is-valid-field");
                }
            });
        }

        // Live validation for Email
        if (emailField) {
            emailField.addEventListener("input", function () {
                const val = this.value.trim();
                if (val && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                    this.classList.add("is-valid-field");
                } else if (!val) {
                    this.classList.remove("is-valid-field");
                } else {
                    this.classList.remove("is-valid-field");
                }
            });
        }

        // Live validation for From / To
        if (mfromField) {
            if (mfromField.value.trim()) {
                mfromField.classList.add("is-valid-field");
            }
            mfromField.addEventListener("input", function () {
                if (this.value.trim().length > 0) {
                    this.classList.add("is-valid-field");
                } else {
                    this.classList.remove("is-valid-field");
                }
            });
        }

        if (mtoField) {
            mtoField.addEventListener("input", function () {
                if (this.value.trim().length > 0) {
                    this.classList.add("is-valid-field");
                } else {
                    this.classList.remove("is-valid-field");
                }
            });
        }

        // Requirements Character Counter
        if (msgField && charCount) {
            msgField.addEventListener("input", function () {
                const len = this.value.length;
                charCount.textContent = `${len} / 250`;
            });
        }

        // Clear Form Link
        if (resetBtn) {
            resetBtn.addEventListener("click", function () {
                qForm.reset();
                if (mfromField) {
                    mfromField.value = defaultCity;
                    if (defaultCity) {
                        mfromField.classList.add("is-valid-field");
                    } else {
                        mfromField.classList.remove("is-valid-field");
                    }
                }
                qForm.querySelectorAll(".is-valid-field").forEach(el => {
                    if (el !== mfromField) el.classList.remove("is-valid-field");
                });
                qForm.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
                qForm.querySelectorAll(".field-error-msg").forEach(el => el.remove());
                if (charCount) charCount.textContent = "0 / 250";
                const resultBox = document.getElementById("resultquotemodal");
                if (resultBox) resultBox.innerHTML = "";
            });
        }
    }

    // Modal autofocus on phone field when opened
    if (qModal) {
        qModal.addEventListener("shown.bs.modal", function () {
            const phoneField = qModal.querySelector('input[name="phone"]');
            if (phoneField) {
                phoneField.focus();
            }
        });
    }

});
