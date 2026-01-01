<?php
// public/index.php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- SEO -->
  <title>Z9 International | Enterprise AI & Blockchain Solutions</title>
  <meta name="description" content="Z9 International is a high-defense, AI-powered software house in Pakistan founded by Naseem Khan. We specialize in AI, Cybersecurity, and Blockchain.">
  <meta name="keywords" content="Z9 International, Naseem Khan, Software House Pakistan, AI Development, Cybersecurity, Blockchain">
  <meta name="author" content="Z9 International">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph -->
  <meta property="og:title" content="Z9 International | Enterprise AI & Blockchain Solutions">
  <meta property="og:description" content="Leading software house in Pakistan specializing in AI, Cybersecurity, and Blockchain. Secure. Scalable. Smart.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://z9international.com">
  <meta property="og:image" content="assets/img/og-image.jpg">

  <!-- Security Headers (Meta Fallback) -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' https:; script-src 'self' 'unsafe-inline' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' data: https:;">

  <!-- Assets -->
  <link rel="icon" href="assets/img/favicon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/buttons.css">
  <link rel="stylesheet" href="assets/css/background.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar">
    <div class="container nav-wrapper">
      <a href="index.php" class="logo">
        <img src="assets/img/favicon.png" alt="Z9 Logo">
        <span>Z9 International</span>
      </a>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="careers.php">Careers</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.html" class="button Explore" style="width: 100px; justify-content: center;"><span class="button__text" style="transform: none;">Login</span></a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero" id="home">
    <div class="container hero-content">
      <h1>The Future of <span class="highlight">Secure AI</span></h1>
      <p>Defense-in-depth architecture meets next-gen Artificial Intelligence. Z9 International builds the unbuildable.</p>
      <div class="hero-buttons">
        <a href="contact.php" class="button Explore">
          <span class="button__text">Get Started</span>
          <span class="button__icon"><svg class="svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg></span>
        </a>
      </div>
    </div>
  </header>

  <!-- Founder Section -->
  <section class="section founder-section">
    <div class="container">
      <div class="founder-card">
        <div class="founder-img">
          <!-- Placeholder for Founder Image -->
          <div style="width: 200px; height: 200px; background: #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 3rem; color: #666;">
            <i class="fas fa-user-tie"></i>
          </div>
        </div>
        <div class="founder-info">
          <h2>Meet the Founder</h2>
          <h3>Naseem Khan</h3>
          <p class="role">Founder & CEO</p>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
          <p class="bio">
            A visionary leader in the tech industry, Naseem Khan combines deep expertise in 
            <strong>Artificial Intelligence</strong>, <strong>Cybersecurity</strong>, and <strong>Blockchain</strong> 
            to drive Z9 International's mission. With a focus on defensive architecture and automated systems, 
            he leads a team dedicated to building secure, resilient digital infrastructure.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Features/Services Preview -->
  <section class="section" id="services">
    <div class="container">
      <h2 class="section-title">Our Expertise</h2>
      <div class="grid-3">
        <div class="card">
          <i class="fas fa-brain fa-3x"></i>
          <h3>Artificial Intelligence</h3>
          <p>Machine Learning models, anomaly detection, and automated decision systems.</p>
        </div>
        <div class="card">
          <i class="fas fa-shield-alt fa-3x"></i>
          <h3>Cybersecurity</h3>
          <p>High-defense architecture, WAF implementation, and proactive threat monitoring.</p>
        </div>
        <div class="card">
          <i class="fas fa-code fa-3x"></i>
          <h3>Software Engineering</h3>
          <p>Scalable, clean, and maintainable code for enterprise-grade applications.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Z9 International. All rights reserved.</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>
