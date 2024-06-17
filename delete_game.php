<?php
session_start();
$is_admin = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];

function deleteFolder($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . "/" . $object))
                    deleteFolder($dir . DIRECTORY_SEPARATOR . $object);
                else
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
            }
        }
        rmdir($dir);
    }
}

if ($is_admin && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Подключение к SQLite базе данных
    $db = new SQLite3("games.db");

    // Получение данных игры для получения названия папки
    $selectQuery = "SELECT * FROM games WHERE id = $id";
    $result = $db->querySingle($selectQuery, true);

    if ($result) {
        $gameName = $result['name'];

        // Запрос на удаление игры из базы данных
        $deleteQuery = "DELETE FROM games WHERE id = $id";
        $db->exec($deleteQuery);

        // Удаление папки с изображениями и всего её содержимого
        $gameFolder = "game/" . ucfirst(strtolower($gameName));
        if (file_exists($gameFolder)) {
            deleteFolder($gameFolder);
        }

        header("Location: index.php"); // Перенаправляем обратно на главную страницу
        exit;
    }
} 

header("Location: index.php");
exit;
?>
