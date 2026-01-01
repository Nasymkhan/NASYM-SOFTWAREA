<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard - Z9 International</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/buttons.css">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #f5f7fa;
    }
    .navbar {
        background: white;
    }
    .dashboard-container {
        padding: 40px 0;
    }
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    .welcome-text h1 {
        font-size: 24px;
        color: #333;
    }
    .welcome-text span {
        color: #0066cc;
    }
    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }
    .card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        gap: 15px;
    }
    .card-icon {
        width: 50px;
        height: 50px;
        background: #e3f2fd;
        color: #0066cc;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }
    .card-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
    }
    .profile-info {
        list-style: none;
    }
    .profile-info li {
        margin-bottom: 12px;
        color: #555;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .status-badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }
    .status-active {
        background: #e8f5e9;
        color: #2e7d32;
    }
    .action-btn {
        display: inline-block;
        padding: 8px 16px;
        background: #0066cc;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s;
    }
    .action-btn:hover {
        background: #0052a3;
    }
    #loading {
        text-align: center;
        padding: 50px;
        font-size: 18px;
        color: #666;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="logo" style="text-decoration: none; display: flex; align-items: center; gap: 10px; font-size: 1.5rem; font-weight: bold; color: #0066cc;">
          <img src="assets/img/favicon.png" alt="Z9 Logo" style="height: 40px; width: auto;">
          <span>Z9 International</span>
        </a>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="#" onclick="logout()">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container dashboard-container">
    <div id="loading">Loading dashboard...</div>
    
    <div id="dashboard-content" style="display: none;">
        <div class="dashboard-header">
            <div class="welcome-text">
                <h1>Welcome back, <span id="user-fullname">User</span>!</h1>
                <p>Manage your profile and applications</p>
            </div>
            <button onclick="logout()" class="button Team" style="padding: 10px 20px; font-size: 14px;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>

        <div class="dashboard-grid">
            <!-- Profile Card -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="card-title">My Profile</div>
                </div>
                <ul class="profile-info">
                    <li><i class="fas fa-envelope"></i> <span id="user-email">email@example.com</span></li>
                    <li><i class="fas fa-user-tag"></i> <span id="user-username">username</span></li>
                    <li><i class="fas fa-map-marker-alt"></i> <span id="user-location">Location, Country</span></li>
                    <li><i class="fas fa-shield-alt"></i> Status: <span class="status-badge status-active">Active</span></li>
                </ul>
                <div style="margin-top: 20px;">
                    <a href="#" class="action-btn">Edit Profile</a>
                </div>
            </div>

            <!-- Applications Card -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="card-title">Job Applications</div>
                </div>
                <p style="color: #666; margin-bottom: 15px;">You haven't submitted any job applications yet.</p>
                <a href="careers.php" class="action-btn">Browse Jobs</a>
            </div>

            <!-- Messages Card -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="card-title">Messages</div>
                </div>
                <p style="color: #666; margin-bottom: 15px;">No new messages from support.</p>
                <a href="contact.php" class="action-btn">Contact Support</a>
            </div>
        </div>
    </div>
  </div>

  <script src="assets/js/auth.js"></script>
</body>
</html>
