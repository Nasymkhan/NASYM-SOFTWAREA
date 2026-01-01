<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Z9 International</title>
    <meta name="description" content="Explore our services: AI Development, Cybersecurity Audits, Blockchain Solutions, and Custom Software Engineering.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">Our Services</h1>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-robot"></i>
                    <h3>AI & Machine Learning</h3>
                    <p>Custom NLP models, predictive analytics, and computer vision systems designed to automate your business processes.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-lock"></i>
                    <h3>Cybersecurity & Defense</h3>
                    <p>Comprehensive security audits, penetration testing, and implementation of Defense-in-Depth architectures.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-link"></i>
                    <h3>Blockchain Solutions</h3>
                    <p>Smart contract development, dApp creation, and private blockchain infrastructure for secure data management.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Web & Mobile Development</h3>
                    <p>Full-stack development using modern frameworks (React, Node, PHP, Python) with a focus on performance and security.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>
</html>
