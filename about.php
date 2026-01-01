<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Z9 International</title>
    <meta name="description" content="Learn about Z9 International, our mission, vision, and the team driving AI and Blockchain innovation in Pakistan.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">About Z9 International</h1>
            <div class="about-content">
                <p>Z9 International is a premier software house based in Pakistan, dedicated to solving complex problems through advanced technology. Founded by Naseem Khan, we are at the forefront of the AI and Blockchain revolution.</p>
                
                <h2>Our Mission</h2>
                <p>To empower businesses with secure, intelligent, and scalable digital infrastructure that withstands the threats of tomorrow.</p>

                <h2>Our Vision</h2>
                <p>A world where technology serves humanity with integrity, security, and boundless innovation.</p>

                <h2>Core Values</h2>
                <ul class="values-list">
                    <li><strong>Security First:</strong> We build defense into every line of code.</li>
                    <li><strong>Innovation:</strong> We don't just follow trends; we set them.</li>
                    <li><strong>Integrity:</strong> Transparent, ethical, and reliable partnership.</li>
                </ul>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>
</html>
