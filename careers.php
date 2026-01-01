<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Z9 International</title>
    <meta name="description" content="Join the team at Z9 International. We are looking for talented developers, security experts, and AI engineers.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/nav.php'; ?>

    <section class="section">
        <div class="container">
            <h1 class="page-title">Join Our Team</h1>
            <p class="text-center">We are always looking for exceptional talent to join our mission.</p>
            
            <div class="careers-form-container">
                <h3>Apply Now</h3>
                <form id="jobForm" onsubmit="submitJob(event)">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cnic">CNIC</label>
                        <input type="text" id="cnic" name="cnic" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="role">Position Applied For</label>
                        <select id="role" name="role" class="form-control">
                            <option value="AI Engineer">AI Engineer</option>
                            <option value="Backend Developer">Backend Developer</option>
                            <option value="Frontend Developer">Frontend Developer</option>
                            <option value="Security Analyst">Security Analyst</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience">Years of Experience</label>
                        <input type="number" id="experience" name="experience" min="0" required class="form-control">
                    </div>
                    
                    <button type="submit" class="button Explore">
                        <span class="button__text">Submit Application</span>
                    </button>
                    <div id="form-alert" class="alert" style="display:none; margin-top: 10px;"></div>
                </form>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/careers.js"></script>
</body>
</html>
