<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="city-content-card mb-4 p-4 rounded-4 bg-white shadow-sm border border-light-subtle">
  <div class="mb-3">
    <h3 class="city-section-title fw-bold text-navy mb-1 fs-4">
      <i class="bi bi-chat-square-quote-fill text-orange me-2" aria-hidden="true"></i>Testimonials From Our Customers
    </h3>
    <p class="text-muted small mb-0">Please replace these testimonials with your verified customer reviews.</p>
  </div>
  <div class="d-block d-md-none">
    <div class="position-relative px-4">
      <div id="cityReviewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="5000">
        <div class="carousel-indicators city-reviews-indicators">
          <button type="button" data-bs-target="#cityReviewsCarousel" data-bs-slide-to="0" class="city-review-dot active" aria-current="true" aria-label="Review 1"></button>
          <button type="button" data-bs-target="#cityReviewsCarousel" data-bs-slide-to="1" class="city-review-dot" aria-label="Review 2"></button>
          <button type="button" data-bs-target="#cityReviewsCarousel" data-bs-slide-to="2" class="city-review-dot" aria-label="Review 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="city-review-card p-3 rounded-3 bg-light border border-light-subtle d-flex flex-column justify-content-between">
              <div>
                <div class="text-warning small mb-2" aria-label="5 stars rating">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="small text-muted mb-3 fst-italic leading-relaxed">
                  "The team packed our furniture properly and told us about moving charges before beginning."
                </p>
              </div>
              <div class="pt-2 border-top border-light-subtle d-flex align-items-center gap-2">
                <div class="city-review-avatar rounded-circle bg-danger-subtle text-danger fw-bold d-flex align-items-center justify-content-center flex-shrink-0" >AS</div>
                <span class="fw-bold text-navy small">Amit Sharma, Delhi</span>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="city-review-card p-3 rounded-3 bg-light border border-light-subtle d-flex flex-column justify-content-between">
              <div>
                <div class="text-warning small mb-2" aria-label="5 stars rating">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="small text-muted mb-3 fst-italic leading-relaxed">
                  "The household items were organized properly and the staff was careful about fragile kitchen items."
                </p>
              </div>
              <div class="pt-2 border-top border-light-subtle d-flex align-items-center gap-2">
                <div class="city-review-avatar rounded-circle bg-danger-subtle text-danger fw-bold d-flex align-items-center justify-content-center flex-shrink-0" >PN</div>
                <span class="fw-bold text-navy small">Priya Nair, Bangalore</span>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="city-review-card p-3 rounded-3 bg-light border border-light-subtle d-flex flex-column justify-content-between">
              <div>
                <div class="text-warning small mb-2" aria-label="5 stars rating">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="small text-muted mb-3 fst-italic leading-relaxed">
                  "The quotation was proper and the team informed us during transportation."
                </p>
              </div>
              <div class="pt-2 border-top border-light-subtle d-flex align-items-center gap-2">
                <div class="city-review-avatar rounded-circle bg-danger-subtle text-danger fw-bold d-flex align-items-center justify-content-center flex-shrink-0" >RV</div>
                <span class="fw-bold text-navy small">Rahul Verma, Pune</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev city-reviews-nav-btn city-reviews-prev" type="button" data-bs-target="#cityReviewsCarousel" data-bs-slide="prev"
        >
        <i class="bi bi-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next city-reviews-nav-btn city-reviews-next" type="button" data-bs-target="#cityReviewsCarousel" data-bs-slide="next">
        <i class="bi bi-chevron-right"></i>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="d-none d-md-block">
    <div class="row g-3">
      <div class="col-12 col-md-4">
        <div class="city-review-card p-3 rounded-3 bg-light-subtle border border-light-subtle h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="text-warning small mb-2" aria-label="5 stars rating">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="small text-muted mb-3 fst-italic leading-relaxed">
              "The team packed our furniture properly and told us about moving charges before beginning."
            </p>
          </div>
          <div class="pt-2 border-top border-light-subtle d-flex align-items-center gap-2">
            <div class="city-review-avatar rounded-circle bg-danger-subtle text-danger fw-bold d-flex align-items-center justify-content-center flex-shrink-0" >AS</div>
            <span class="fw-bold text-navy small d-block">Amit Sharma, Delhi</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="city-review-card p-3 rounded-3 bg-light-subtle border border-light-subtle h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="text-warning small mb-2" aria-label="5 stars rating">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="small text-muted mb-3 fst-italic leading-relaxed">
              "The household items were organized properly and the staff was careful about fragile kitchen items."
            </p>
          </div>
          <div class="pt-2 border-top border-light-subtle d-flex align-items-center gap-2">
            <div class="city-review-avatar rounded-circle bg-danger-subtle text-danger fw-bold d-flex align-items-center justify-content-center flex-shrink-0" >PN</div>
            <span class="fw-bold text-navy small d-block">Priya Nair, Bangalore</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="city-review-card p-3 rounded-3 bg-light-subtle border border-light-subtle h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="text-warning small mb-2" aria-label="5 stars rating">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="small text-muted mb-3 fst-italic leading-relaxed">
              "The quotation was proper and the team informed us during transportation."
            </p>
          </div>
          <div class="pt-2 border-top border-light-subtle d-flex align-items-center gap-2">
            <div class="city-review-avatar rounded-circle bg-danger-subtle text-danger fw-bold d-flex align-items-center justify-content-center flex-shrink-0" >RV</div>
            <span class="fw-bold text-navy small d-block">Rahul Verma, Pune</span>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
