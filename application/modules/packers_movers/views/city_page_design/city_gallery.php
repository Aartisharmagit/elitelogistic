<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$city_gallery_images = [
    ['file' => 'elite-logistic-packers.webp', 'alt' => 'Elite Logistics and Packers service'],
    ['file' => 'truck-loaded.webp', 'alt' => 'Loaded moving truck'],
    ['file' => 'teams-are-working.webp', 'alt' => 'Moving team loading household goods'],
    ['file' => 'loading-on-truck.webp', 'alt' => 'Household goods being loaded on a truck'],
    ['file' => 'packing-and-unpacking.webp', 'alt' => 'Professional packing and unpacking service'],
    ['file' => 'bike-transportation-service.webp', 'alt' => 'Bike transportation service'],
    ['file' => 'bike-loading.webp', 'alt' => 'Bike loading for transportation'],
    ['file' => 'loading-bike-on-the-truck.webp', 'alt' => 'Bike being loaded on a moving truck'],
];
?>
<section class="container mt-5">
  <div class="row g-3 g-md-4">
    <?php foreach ($city_gallery_images as $index => $image): ?>
      <?php $modal_id = 'cityGalleryModal' . ($index + 1); ?>
      <div class="col-6 col-lg-3">
        <button type="button" class="btn p-0 border-0 w-100" data-bs-toggle="modal" data-bs-target="#<?= $modal_id ?>" aria-label="View <?= html_escape($image['alt']) ?>">
          <div class="ratio ratio-4x3 overflow-hidden rounded-3 shadow-sm">
            <img src="<?= base_url('assets/img/service/' . $image['file']) ?>" alt="<?= html_escape($image['alt']) ?>" title="<?= html_escape($image['alt']) ?>" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
          </div>
        </button>
      </div>
      <div class="modal fade" id="<?= $modal_id ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content border-0 bg-transparent">
            <div class="modal-header border-0 p-2">
              <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close image"></button>
            </div>
            <div class="modal-body p-0 text-center">
              <img src="<?= base_url('assets/img/service/' . $image['file']) ?>" alt="<?= html_escape($image['alt']) ?>" title="<?= html_escape($image['alt']) ?>" class="img-fluid rounded-3 shadow-lg" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
