<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>
<body>
    <?php
    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Проверка логина и пароля
        // В данном примере используется простая проверка
        if ($username === "admin" && $password === "https://zelenka.guru/nekksi/") {
            $_SESSION['logged_in'] = true;
        }
    }

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    ?>
        <div class="admin-panel">
            <h2>Welcome, Admin!</h2>
            <a href="/index.php?edit=true">Edit Index Page</a>
            <a href="edit_globals.php" style="display: none;">Edit Global Settings</a>
            <!-- Другие ссылки для редактирования страниц -->
            <a href="logout.php">Logout</a>
        </div>
    <?php
    } else {
    ?>
        <div class="admin-panel">
            <h2>Login</h2>
            <form method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    <?php
    }
    ?>
</body>
</html>
