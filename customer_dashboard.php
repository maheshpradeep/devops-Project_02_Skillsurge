<?php
include('includes/header.php');

// Security check: only allow logged-in users
if (!isset($_SESSION['user_id']) || $_SESSION['login_role'] !== 'customer') {
  header("Location: login.php");
  exit();
}

$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
$role = $_SESSION['login_role'];
?>



<main>
  <section>
    <h2>Welcome, <?= htmlspecialchars($username) ?>!</h2>
    <p><strong>User ID:</strong> <?= htmlspecialchars($user_id) ?></p>
    <p><strong>You are logged in as:</strong> <?= ucfirst($role) ?></p>

    <p>This is your <strong>Customer Dashboard</strong>.</p>
    <!-- Add customer-specific options here -->
  </section>
</main>

<?php include('includes/footer.php'); ?>
