<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Index Page</title>
</head>
<body>
    <div class="admin-panel">
        <h2>Edit Index Page</h2>
        <!-- Форма для редактирования Главной страницы -->
        <a href="index.php">Back to Admin Panel</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
