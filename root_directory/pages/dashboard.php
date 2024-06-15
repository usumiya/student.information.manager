<?php
session_start();
include 'includes/config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<?php include 'includes/header.php'; ?>

<h2>Welcome, <?php echo $username; ?></h2>
<p>This is your dashboard.</p>

<?php include 'includes/footer.php'; ?>
