<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!isset($htmlcontent)) {
    include 'city_content.php';
}
?>

<div class="city-about-card">
  <?= $htmlcontent ?>
</div>
