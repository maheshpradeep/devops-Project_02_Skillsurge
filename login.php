<?php
include('database.php');
include('includes/header.php');

$loginMessage = '';

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = $_POST['password'];
  $selected_role = $_POST['login_role']; // Role selected at login time

  if ($selected_role !== 'customer' && $selected_role !== 'service_provider') {
    $loginMessage = "<p style='color: red;'>Please select a valid role.</p>";
  } else {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $user = mysqli_fetch_assoc($result);

      if (password_verify($password, $user['password'])) {
        // ✅ Login success - store session details
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['login_role'] = $selected_role; // Role selected at login time

        // ✅ Optional: Track login activity
        $trackSql = "INSERT INTO user_logins (user_id, login_role) VALUES ('{$user['user_id']}', '$selected_role')";
        mysqli_query($conn, $trackSql);

        // ✅ Redirect to home page instead of dashboard
        header("Location: index.php");
        exit();
      } else {
        $loginMessage = "<p style='color: red;'>Incorrect password.</p>";
      }
    } else {
      $loginMessage = "<p style='color: red;'>No user found with that email.</p>";
    }
  }
}
?>




<main>
  <section class="login-container">
    <div class="login-form">
      <h2>Login to Your Account</h2>
      <?= $loginMessage ?>
      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
      
        <label>Login As</label>
        <div class="role-selection">
          <div class="role-option">
            <input type="radio" id="login_customer" name="login_role" value="customer" required />
            <label for="login_customer">Customer</label>
          </div>
          <div class="role-option">
            <input type="radio" id="login_service_provider" name="login_role" value="service_provider" required />
            <label for="login_service_provider">Service Provider</label>
          </div>
        </div>
      
        <button type="submit" name="submit" class="btn">Login</button>
      </form>
      <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
    </div>
    
    <div class="login-image">
      <img src="assets/images/login-image.jpg" alt="Login to our platform">
    </div>
  </section>
</main>

<?php include('includes/footer.php'); ?>
