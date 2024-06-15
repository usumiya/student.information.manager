<?php
// Example of fetching post details from database
include 'includes/config.php';

$post_id = $_GET['id']; // Assuming id is passed through URL parameter
$sql = "SELECT * FROM posts WHERE id=$post_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $post = $result->fetch_assoc();
    // Display post details
    $content = $post['content'];
    $created_at = $post['created_at'];
} else {
    echo "Post not found";
}
?>

<?php include 'includes/header.php'; ?>

<h2>Post Details</h2>
<div>
    <p><?php echo $content; ?></p>
    <p>Created at: <?php echo $created_at; ?></p>
</div>

<?php include 'includes/footer.php'; ?>
