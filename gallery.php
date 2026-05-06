<?php
$pageTitle = 'OtoGOAT Gallery | Before and After Auto Detailing';
$pageDescription = 'View OtoGOAT work samples and before-and-after auto detailing results.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-dark"><div class="container reveal"><p class="eyebrow">Gallery</p><h1>Before and after proof will be placed here.</h1><p>Add your real car photos inside assets/images/gallery/ when available.</p></div></section>
<section class="section"><div class="container gallery-grid">
<?php for ($i = 1; $i <= 6; $i++): ?>
<div class="gallery-placeholder reveal">Gallery Image <?php echo $i; ?></div>
<?php endfor; ?>
</div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
