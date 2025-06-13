<?php
// Start output buffering to prevent premature output
ob_start();

// Check if the session is already started, and start it if not
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Define $page if not already set (to handle page-specific styles)
if (!isset($page)) $page = '';

// Get the current page name (for dynamic styles)
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SkillSurge</title>
  <!-- Always load these consistent styles -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css?v=<?= filemtime('assets/css/style.css') ?>">
  
  <!-- Load page-specific styles -->
  <?php if ($page === 'home'): ?>
    <link rel="stylesheet" href="assets/css/index.css?v=<?= filemtime('assets/css/index.css') ?>">
  <?php endif; ?>
  <?php if ($page === 'account'): ?>
    <link rel="stylesheet" href="assets/css/account.css?v=<?= filemtime('assets/css/account.css') ?>">
  <?php endif; ?>
  <?php if ($page === 'services'): ?>
    <link rel="stylesheet" href="assets/css/service.css?v=<?= filemtime('assets/css/service.css') ?>">
  <?php endif; ?>
  <?php if ($page === 'about'): ?>
    <link rel="stylesheet" href="assets/css/about.css?v=<?= filemtime('assets/css/about.css') ?>">
  <?php endif; ?>
  <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
</head>
<body>
  <header>
    <div class="header-container">
      <div class="logo">
        <h1>SkillSurge</h1>
      </div>
      
      <!-- Mobile menu toggle button -->
      <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
        <i class="fas fa-bars"></i>
      </button>
      
      <nav id="main-navigation">
        <ul class="main-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <!-- Show Account page if logged in -->
          <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="account.php">Account</a></li>
          <?php endif; ?>
        </ul>
        <ul class="auth-nav">
          <?php if (!isset($_SESSION['user_id'])): ?>
            <?php if ($currentPage !== 'login.php'): ?>
              <li><a href="login.php">Login</a></li>
            <?php endif; ?>
            <?php if ($currentPage !== 'signup.php'): ?>
              <li><a href="signup.php">Sign Up</a></li>
            <?php endif; ?>
          <?php else: ?>
            <!-- Display username and role icon if logged in -->
            <li class="welcome-text-li">
              <span class="welcome-text">Welcome <?= $_SESSION['username']?>! 
                <?php if ($_SESSION['login_role'] == 'customer'): ?>
                  <span class="user-role-icon role-customer" title="Customer">
                    <i class="fas fa-user"></i>
                  </span>
                <?php elseif ($_SESSION['login_role'] == 'service_provider'): ?>
                  <span class="user-role-icon role-provider" title="Service Provider">
                    <i class="fas fa-tools"></i>
                  </span>
                <?php elseif ($_SESSION['login_role'] == 'admin'): ?>
                  <span class="user-role-icon role-admin" title="Administrator">
                    <i class="fas fa-user-shield"></i>
                  </span>
                <?php endif; ?>
              </span>
            </li>
            
            <!-- Logout button -->
            <li><a href="logout.php">Logout</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Content would go here -->
