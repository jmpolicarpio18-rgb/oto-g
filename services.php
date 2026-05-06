<?php
$pageTitle = 'OtoGOAT Services | PPF, Graphene Coating, Tint & Detailing';
$pageDescription = 'Explore OtoGOAT services including paint protection film, graphene coating, nano ceramic tint, restoration, auto detailing, and motorcycle protection.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-dark">
    <div class="container reveal">
        <p class="eyebrow">Services</p>
        <h1>Vehicle protection that looks premium and performs daily.</h1>
    </div>
</section>
<section class="section">
    <div class="container service-detail-list">
        <?php foreach ($services as $service): ?>
        <article class="service-detail reveal" id="<?php echo htmlspecialchars($service['slug']); ?>">
            <div>
                <p class="eyebrow">OtoGOAT Service</p>
                <h2><?php echo htmlspecialchars($service['title']); ?></h2>
            </div>
            <div>
                <p><?php echo htmlspecialchars($service['short']); ?></p>
                <a class="btn btn-red" href="booking.php">Get Quote</a>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
