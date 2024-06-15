<?php
session_start();
include 'includes/config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Display user profile information and form to update email
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $sql_update = "UPDATE users SET email='$email' WHERE username='$username'";
        if ($conn->query($sql_update) === TRUE) {
            echo "Profile updated successfully";
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    }
} else {
    echo "User not found";
}
?>

<?php include 'includes/header.php'; ?>

<h2>Profile Management</h2>
<form method="post" action="profile.php">
    Username: <?php echo $row['username']; ?><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    <input type="submit" value="Update Profile">
</form>

<?php include 'includes/footer.php'; ?>
