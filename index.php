<?php
// Set page variable for the header
$page = 'home';
include('includes/header.php');
?>

<main>
  <!-- Hero Section -->
  <section class="welcome">
    <h1>Welcome to SkillSurge</h1>
    <p>Your go-to platform to hire or get hired for freelance services.</p>
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
          <H2>Graphic Design</H2>
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
          <p>Looking to tell your story or boost conversions? Our writers craft compelling, SEO-friendly content tailored to your brand’s voice. From blogs to product descriptions, SkillSurge delivers words that work.</p>

        </div>
      </div>
    </div>
  </section>

  <!-- User Comments / Ratings -->
  <section class="user-comments">
    <h2>What Our Users Say</h2>
    <div class="comments">
      <div class="comment">
        <p>"Amazing platform! Found great clients here." - <strong>Alex</strong></p>
      </div>
      <div class="comment">
        <p>"Easy to use and reliable service!" - <strong>Sara</strong></p>
      </div>
      <div class="comment">
        <p>"A great place to showcase your skills." - <strong>David</strong></p>
      </div>
    </div>
  </section>

  <!-- Optional second slideshow or call-to-action -->
  <section class="call-to-action">
    <h2>Get Started Today</h2>
    <p>Whether you're a freelancer or a business, SkillSurge has something for you.</p>
    
    <?php if (!isset($_SESSION['user_id'])): ?>
      <a href="signup.php" class="btn">Join Now</a>
    <?php endif; ?>
  </section>
</main>

<?php include('includes/footer.php'); ?>
