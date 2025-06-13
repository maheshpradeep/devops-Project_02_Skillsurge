<?php
// Set page variable for the header
$page = 'about';
include('includes/header.php');
?>

<main>
  <!-- Hero Section -->
  <section class="welcome">
    <h1>About SkillSurge</h1>
    <p>Connecting talented freelancers with businesses worldwide</p>
  </section>

  <!-- Our Story Section -->
  <section class="our-story">
    <div class="container">
      <h2>Our Story</h2>
      <div class="story-content">
        <!-- Removed the team image -->
        <div class="story-text">
          <p>SkillSurge was founded in 2025 with a simple mission: to create a platform where talented freelancers can connect with businesses that need their skills.</p>
          <p>What started as a small community of digital professionals has grown into a global marketplace serving thousands of clients and freelancers across different industries.</p>
          <p>We believe in the power of remote work and the freedom it brings to both businesses and professionals. Our platform is designed to make this connection seamless, secure, and beneficial for all parties involved.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Under Development Banner - Placed between main and footer -->
<div class="development-banner">
  <div class="banner-content">
    <i class="fas fa-tools"></i>
    <h3>We're Still Improving!</h3>
    <p>Our about page is currently under development.Thank you for your patience.</p>
  </div>
</div>

<?php include('includes/footer.php'); ?>
