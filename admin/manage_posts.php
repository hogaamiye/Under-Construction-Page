<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
include '../includes/header.php';
?>

<h2>Manage Blog Posts</h2>
<p>Coming soon...</p>

<?php include '../includes/footer.php'; ?>
