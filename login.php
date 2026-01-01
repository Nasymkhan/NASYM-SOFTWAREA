<?php
require_once __DIR__ . '/../app/Core/WAF.php';
WAF::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In - Z9 International</title>
  <link rel="icon" href="assets/img/favicon.png" type="image/png">
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/auth.css">
  <link rel="stylesheet" href="assets/css/buttons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .navbar {
        background: white;
    }
    .auth-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }
    .auth-card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
      padding: 40px;
      animation: slideUp 0.5s ease;
    }
    @keyframes slideUp {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .auth-header {
      text-align: center;
      margin-bottom: 30px;
    }
    .auth-header h2 {
      color: #0066cc;
      margin-bottom: 10px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #333;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      font-size: 16px;
      transition: border-color 0.3s;
    }
    .form-group input:focus {
      border-color: #0066cc;
      outline: none;
    }
    .auth-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }
    .auth-footer a {
      color: #0066cc;
      text-decoration: none;
      font-weight: 600;
    }
    .alert {
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      display: none;
    }
    .alert-error {
      background-color: #ffebee;
      color: #c62828;
      border: 1px solid #ffcdd2;
    }
    .alert-success {
      background-color: #e8f5e9;
      color: #2e7d32;
      border: 1px solid #c8e6c9;
    }
    .btn-block {
      width: 100%;
      padding: 12px;
      background: #0066cc;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s;
    }
    .btn-block:hover {
      background: #0052a3;
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
          <li><a href="signup.php">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="auth-container">
    <div class="auth-card">
      <div class="auth-header">
        <h2>Welcome Back</h2>
        <p>Sign in to access your dashboard</p>
      </div>

      <div id="alert-box" class="alert"></div>

      <form id="login-form">
        <div class="form-group">
          <label for="username">Username or Email</label>
          <input type="text" id="username" name="username" required placeholder="Enter your username or email">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required placeholder="Enter your password">
        </div>

        <button type="submit" class="btn-block">Sign In</button>
      </form>

      <div class="auth-footer">
        <p>Don't have an account? <a href="signup.php">Create one</a></p>
      </div>
    </div>
  </div>

  <script src="assets/js/auth.js"></script>
</body>
</html>
