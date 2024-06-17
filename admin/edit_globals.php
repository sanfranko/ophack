<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: admin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $siteName = $_POST['site_name'];
    $year = $_POST['year'];

    // Здесь сохраните $siteName и $year в базе данных или файле
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Global Settings</title>
</head>
<body>
    <div class="admin-panel">
        <h2>Edit Global Settings</h2>
        <form method="post">
            <label for="site_name">Site Name:</label>
            <input type="text" id="site_name" name="site_name" required>
            
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" required>
            
            <button type="submit">Save</button>
        </form>
        <a href="admin.php">Back to Admin Panel</a>
    </div>
</body>
</html>