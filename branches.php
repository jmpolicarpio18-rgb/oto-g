<?php
$pageTitle = 'OtoGOAT Branches | Contact and Locations';
$pageDescription = 'Find OtoGOAT branch areas and contact numbers for booking auto detailing and vehicle protection services.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-dark"><div class="container reveal"><p class="eyebrow">Branches</p><h1>Find your nearest OtoGOAT branch.</h1></div></section>
<section class="section"><div class="container branch-grid">
<?php foreach ($branches as $branch): ?>
<article class="branch-card reveal"><h3><?php echo htmlspecialchars($branch['name']); ?></h3><p><?php echo htmlspecialchars($branch['address']); ?></p><a href="tel:<?php echo preg_replace('/\D+/', '', $branch['phone']); ?>">Call <?php echo htmlspecialchars($branch['phone']); ?></a></article>
<?php endforeach; ?>
</div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
