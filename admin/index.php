<?php
// Start the session
session_start();

// For now, we'll simulate a logged-in user.
// In a real application, you would have a login system.
$_SESSION['loggedin'] = true;
$_SESSION['username'] = 'admin';

// Include the header
include '../includes/header.php';
?>

<section id="admin-dashboard">
    <h2>Admin Dashboard</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <ul>
        <li><a href="manage_posts.php">Manage Blog Posts</a></li>
        <li><a href="manage_programs.php">Manage Programs</a></li>
        <li><a href="manage_events.php">Manage Events</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</section>

<?php
// Include the footer
include '../includes/footer.php';
?>
