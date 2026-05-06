<?php
$pageTitle = 'Book OtoGOAT | Request a Quote';
$pageDescription = 'Request an OtoGOAT booking quote for PPF, graphene coating, nano ceramic tint, car restoration, detailing, and motorcycle protection.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-dark">
    <div class="container reveal">
        <p class="eyebrow">Booking Funnel</p>
        <h1>Request Your OtoGOAT Quote.</h1>
        <p>Send your vehicle details and preferred branch. OtoGOAT will contact you for confirmation.</p>
    </div>
</section>
<section class="section">
    <div class="container booking-panel single reveal">
        <?php include __DIR__ . '/includes/booking-form.php'; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
