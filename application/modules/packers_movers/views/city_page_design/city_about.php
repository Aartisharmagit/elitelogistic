<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!isset($htmlcontent)) {
    include 'city_content.php';
}
?>

<!-- City Details & Narrative Section -->
<div class="city-about-card bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light-subtle mb-4">

  <!-- 1. Intro & Overview Block -->
  <div class="city-intro-box">
    <?= $htmlcontent ?>
  </div>

  <!-- 2. Why Choose Features Block -->
  <?php if (!empty($htmlcontent1)): ?>
    <div class="city-why-box">
      <?= $htmlcontent1 ?>
    </div>
  <?php endif; ?>

  <!-- 3. Relocation Workflow & Plan Your Shift CTA -->
  <?php if (!empty($htmlcontent2)): ?>
    <div class="city-process-box">
      <?= $htmlcontent2 ?>
    </div>
  <?php endif; ?>

</div>
