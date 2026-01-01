<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Z9 International</title>
    <meta name="description" content="Get in touch with Z9 International for your software needs. Secure contact form with automated response.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>Ready to start your project? Send us a message.</p>
                    <ul>
                        <li><i class="fas fa-envelope"></i> contact@z9international.com</li>
                        <li><i class="fas fa-phone"></i> +92 300 1234567</li>
                        <li><i class="fas fa-map-marker-alt"></i> Islamabad, Pakistan</li>
                    </ul>
                </div>
                <div class="contact-form">
                    <form id="contactForm" onsubmit="submitContact(event)">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required class="form-control"></textarea>
                        </div>
                        <!-- Honey Pot -->
                        <div style="display:none;">
                            <input type="text" name="website_url" tabindex="-1" autocomplete="off">
                        </div>
                        
                        <button type="submit" class="button Explore">
                            <span class="button__text">Send Message</span>
                        </button>
                        <div id="form-alert" class="alert" style="display:none; margin-top: 10px;"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/contact.js"></script>
</body>
</html>
