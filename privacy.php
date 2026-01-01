<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Z9 International</title>
    <meta name="description" content="Privacy Policy for Z9 International. How we protect your data.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">Privacy Policy</h1>
            <div class="about-content">
                <p>Last updated: <?php echo date('F d, Y'); ?></p>
                <p>At Z9 International, we take your privacy seriously. This policy describes how we collect, use, and protect your personal information.</p>
                
                <h2>1. Information We Collect</h2>
                <p>We collect information you provide directly to us, such as when you create an account, fill out a contact form, or apply for a job. This may include your name, email address, phone number, and professional details.</p>

                <h2>2. How We Use Your Information</h2>
                <p>We use your information to provide our services, communicate with you, process job applications, and improve our website security.</p>

                <h2>3. Data Security</h2>
                <p>We implement defense-in-depth security measures, including encryption, firewalls, and strict access controls, to protect your data from unauthorized access.</p>

                <h2>4. Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us at privacy@z9international.com.</p>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>
</html>
