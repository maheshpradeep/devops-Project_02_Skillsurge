<?php
session_start();

// Security check: only allow logged-in users
if (!isset($_SESSION['user_id']) || $_SESSION['login_role'] !== 'service_provider') {
  header("Location: login.php");
  exit();
}

$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
$role = $_SESSION['login_role'];
?>

<?php include('includes/header.php'); ?>

<main>
  <section>
    <h2>Welcome, <?= htmlspecialchars($username) ?>!</h2>
    <p><strong>User ID:</strong> <?= htmlspecialchars($user_id) ?></p>
    <p><strong>You are logged in as:</strong> <?= ucfirst(str_replace("_", " ", $role)) ?></p>

    <p>This is your <strong>Service Provider Dashboard</strong>.</p>
    <!-- Add service provider-specific options here -->
  </section>
</main>

<?php include('includes/footer.php'); ?>
