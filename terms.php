<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Z9 International</title>
    <meta name="description" content="Terms of Service for Z9 International.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">Terms of Service</h1>
            <div class="about-content">
                <p>Last updated: <?php echo date('F d, Y'); ?></p>
                <p>Please read these Terms of Service carefully before using the Z9 International website.</p>
                
                <h2>1. Acceptance of Terms</h2>
                <p>By accessing or using our service, you agree to be bound by these Terms. If you disagree with any part of the terms, then you may not access the service.</p>

                <h2>2. Intellectual Property</h2>
                <p>The service and its original content, features, and functionality are and will remain the exclusive property of Z9 International and its licensors.</p>

                <h2>3. User Conduct</h2>
                <p>You agree not to use the website for any unlawful purpose or to solicit others to perform or participate in any unlawful acts.</p>

                <h2>4. Limitation of Liability</h2>
                <p>In no event shall Z9 International be liable for any indirect, incidental, special, consequential or punitive damages.</p>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>
</html>
