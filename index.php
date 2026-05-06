<?php
$pageTitle = 'OtoGOAT Auto Detailing Philippines | PPF, Graphene Coating & Ceramic Tint';
$pageDescription = 'Book premium auto detailing, PPF, graphene coating, nano ceramic tint, restoration, and motorcycle protection with OtoGOAT Philippines.';
include __DIR__ . '/includes/header.php';
?>
<section class="hero section-dark">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <p class="eyebrow">Zero To Greatest Of All Time</p>
            <h1>GOAT-Level Protection for Your Ride.</h1>
            <p class="hero-text">Paint Protection Film, Graphene Coating, Nano Ceramic Tint, Car Restoration, and Auto Detailing built for Philippine roads.</p>
            <div class="hero-actions">
                <a class="btn btn-red" href="booking.php">Book Your OtoGOAT Treatment</a>
                <a class="btn btn-outline" href="services.php">View Services</a>
            </div>
        </div>
        <div class="hero-card reveal">
            <div class="mini-loader-card">
                <?php include __DIR__ . '/includes/loader.php'; ?>
            </div>
        </div>
    </div>
</section>

<section class="trust-strip">
    <div class="container trust-grid">
        <div><strong>4+</strong><span>Branch Areas</span></div>
        <div><strong>PPF</strong><span>Paint Protection</span></div>
        <div><strong>Tint</strong><span>Nano Ceramic</span></div>
        <div><strong>Detailing</strong><span>Cars & Motorcycles</span></div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading reveal">
            <p class="eyebrow">Premium Services</p>
            <h2>Built to protect, restore, and elevate your vehicle.</h2>
        </div>
        <div class="cards-grid">
            <?php foreach ($services as $service): ?>
            <article class="service-card reveal">
                <span class="card-number">0<?php echo array_search($service, $services) + 1; ?></span>
                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                <p><?php echo htmlspecialchars($service['short']); ?></p>
                <a href="services.php#<?php echo htmlspecialchars($service['slug']); ?>">Learn More</a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-split section-dark">
    <div class="container split-grid">
        <div class="reveal">
            <p class="eyebrow">Why OtoGOAT</p>
            <h2>Not just clean. Protected, restored, and ready for the road.</h2>
        </div>
        <div class="feature-list reveal">
            <p><strong>Premium finish:</strong> High-gloss presentation for daily drivers, weekend cars, and show builds.</p>
            <p><strong>Protection-first service:</strong> Designed to reduce wear from sun, rain, road dust, and daily use.</p>
            <p><strong>Lead-focused booking:</strong> Visitors can request a quote quickly from any page.</p>
        </div>
    </div>
</section>

<section class="section booking-preview" id="quote">
    <div class="container booking-panel reveal">
        <div>
            <p class="eyebrow">Quick Booking</p>
            <h2>Tell us your vehicle. We will recommend the right treatment.</h2>
            <p>Use this form as the main booking funnel for the website. Submissions are sent to email and backed up to a CSV file.</p>
        </div>
        <?php include __DIR__ . '/includes/booking-form.php'; ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading reveal">
            <p class="eyebrow">Branches</p>
            <h2>Choose your preferred OtoGOAT branch.</h2>
        </div>
        <div class="branch-grid">
            <?php foreach ($branches as $branch): ?>
            <article class="branch-card reveal">
                <h3><?php echo htmlspecialchars($branch['name']); ?></h3>
                <p><?php echo htmlspecialchars($branch['address']); ?></p>
                <a href="tel:<?php echo preg_replace('/\D+/', '', $branch['phone']); ?>">Call <?php echo htmlspecialchars($branch['phone']); ?></a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="final-cta section-dark">
    <div class="container reveal">
        <h2>From Zero to GOAT - protect your vehicle today.</h2>
        <a class="btn btn-red" href="booking.php">Get a Free Quote</a>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
