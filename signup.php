<?php
include('database.php');
include('includes/header.php');

$signupMessage = '';

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $role = $_POST['role'];

  // Generate user_id with role prefix
  $user_id = ($role === 'customer') ? 'cus_' . uniqid() : 'ser_' . uniqid();


    // Set role flags
    $is_customer = $role === 'customer' ? 1 : 0;
    $is_service_provider = $role === 'service_provider' ? 1 : 0;

    // Insert user into database
    $sql = "INSERT INTO users (user_id, username, email, password, is_customer, is_service_provider)
            VALUES ('$user_id', '$username', '$email', '$password', '$is_customer', '$is_service_provider')";

if (mysqli_query($conn, $sql)) {
  header("Location: login.php");
  exit(); // Always call exit after header redirection
} else {
  $signupMessage = "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
}
}


?>



<main>
  <section class="signup-container">
    <div class="signup-image">
      <img src="assets/images/signup-image.jpg" alt="Join our platform">
    </div>
    
    <div class="signup-form">
      <h2>Create Your Account</h2>
      <?= $signupMessage ?>
      <form action="signup.php" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />

        <label>Register As</label>
        <div class="role-selection">
          <div class="role-option">
            <input type="radio" id="customer" name="role" value="customer" required />
            <label for="customer">Customer</label>
          </div>
          <div class="role-option">
            <input type="radio" id="service_provider" name="role" value="service_provider" required />
            <label for="service_provider">Service Provider</label>
          </div>
        </div>

        <button type="submit" name="submit" class="btn">Sign Up</button>
      </form>
      <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>
  </section>
</main>

<?php include('includes/footer.php'); ?>


