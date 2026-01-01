<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Z9 International</title>
    <meta name="description" content="Frequently Asked Questions about Z9 International's AI, Blockchain, and Security services.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Structured Data for FAQ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What services does Z9 International provide?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We specialize in Artificial Intelligence, Cybersecurity audits, Blockchain development, and custom enterprise software engineering."
        }
      }, {
        "@type": "Question",
        "name": "How does Z9 ensure software security?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We employ a Defense-in-Depth architecture, including WAF, rigorous input validation, automated anomaly detection, and regular security audits."
        }
      }, {
        "@type": "Question",
        "name": "Where is Z9 International located?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We are a Pakistan-based software house with a global clientele."
        }
      }]
    }
    </script>
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">Frequently Asked Questions</h1>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>What services does Z9 International provide?</h3>
                    <p>We specialize in Artificial Intelligence, Cybersecurity audits, Blockchain development, and custom enterprise software engineering.</p>
                </div>
                <div class="faq-item">
                    <h3>How does Z9 ensure software security?</h3>
                    <p>We employ a Defense-in-Depth architecture, including Web Application Firewalls (WAF), rigorous input validation, automated anomaly detection, and regular security audits to protect your data.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you offer internships or jobs?</h3>
                    <p>Yes, please check our <a href="careers.php">Careers</a> page for the latest openings for developers and security analysts.</p>
                </div>
                <div class="faq-item">
                    <h3>How can I contact the founder?</h3>
                    <p>You can reach out through our <a href="contact.php">Contact</a> page. Our team filters important inquiries for Mr. Naseem Khan.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>
</html>
