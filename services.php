<?php
// Set page variable for the header
$page = 'services';
include('includes/header.php');
?>

<main>
  <!-- Hero Section -->
  <section class="welcome">
    <h1>Our Freelance Services</h1>
    <p>Connect with skilled professionals for all your project needs</p>
  </section>

  <!-- Slideshow Section -->
  <section class="slideshow">
    <h1>Featured Services</h1>
    <div class="slider">
      <div class="slide">
        <div class="slide-img">
          <img src="assets/images/services/graphic-design.jpg" alt="Graphic Design">
        </div>
        <div class="slide-content">
          <h2>Graphic Design</h2>
          <h3>Bring Your Vision to Life with Stunning Design</h3>
          <p>From logos and branding to UI/UX and social media creatives, our graphic designers blend artistry with strategy. Hire top-tier design talent to transform your ideas into visuals that capture attention and leave a lasting impression</p>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img">
          <img src="assets/images/services/web-development.jpg" alt="Web Development">
        </div>
        <div class="slide-content">
          <h2>Web Development</h2>
          <h3>Build, Launch, and Grow with Custom Web Solutions</h3>
          <p>Need a sleek website or a fully functional web app? Our developers craft tailored solutions using the latest technologies—responsive, scalable, and user-friendly. Whether it's front-end flair or back-end muscle, SkillSurge has you covered.</p>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img">
          <img src="assets/images/services/content-writing.jpg" alt="Content Writing">
        </div>
        <div class="slide-content">
          <h2>Content Writing</h2>
          <h3>Engaging Copy That Captivates and Converts</h3>
          <p>Looking to tell your story or boost conversions? Our writers craft compelling, SEO-friendly content tailored to your brand's voice. From blogs to product descriptions, SkillSurge delivers words that work.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- User Comments / Ratings -->
  <section class="user-comments">
    <h2>What Our Clients Say</h2>
    <div class="comments">
      <div class="comment">
        <p>"SkillSurge connected me with an amazing designer who perfectly captured my brand's essence." - <strong>Horizon Media</strong></p>
      </div>
      <div class="comment">
        <p>"The content writer I hired through SkillSurge doubled our blog traffic in just three months!" - <strong>Growth Ventures</strong></p>
      </div>
      <div class="comment">
        <p>"Fast, professional, and excellent communication throughout my web development project." - <strong>Startup Innovators</strong></p>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action">
    <h2>Ready to bring your project to life?</h2>
    <p>Connect with skilled freelancers who can help your business grow and succeed.</p>
    
    <?php if (!isset($_SESSION['user_id'])): ?>
      <a href="services.php" class="btn">Find Talent Today</a>
    <?php else: ?>
      <a href="services.php" class="btn">Get Started</a>
    <?php endif; ?>
  </section>

  <!-- Under Development Banner - Moving inside main -->
  <div class="development-banner">
    <div class="banner-content">
      <i class="fas fa-tools"></i>
      <h3>We're Still Improving!</h3>
      <p>Our services page is currently under development. Thank you for your patience as we work to bring you the best experience possible.</p>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
