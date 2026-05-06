<?php
$pageTitle = 'Contact OtoGOAT | Auto Detailing Booking';
$pageDescription = 'Contact OtoGOAT for auto detailing, PPF, graphene coating, ceramic tint, restoration, and vehicle protection bookings.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-dark"><div class="container reveal"><p class="eyebrow">Contact</p><h1>Message OtoGOAT today.</h1><p>Call, message, or send a booking request.</p></div></section>
<section class="section"><div class="container split-grid reveal"><div><h2>Contact Details</h2><p><?php echo htmlspecialchars($business['phone_primary']); ?></p><p><?php echo htmlspecialchars($business['phone_secondary']); ?></p></div><?php include __DIR__ . '/includes/booking-form.php'; ?></div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
