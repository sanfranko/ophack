<?php
$gamename = "Valorant";
$gameicon = "/img/games/ico/valorant.png";
$gameimage = "/img/games/bg/valorant.jpeg";

session_start();
$is_admin = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];

$db_file = "products.db";
if (!file_exists($db_file)) {
    $db = new SQLite3($db_file);
    $createTableQuery = "CREATE TABLE products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        image TEXT NOT NULL
    )";
    $db->exec($createTableQuery);
} else {
    $db = new SQLite3($db_file);
}

if ($is_admin && isset($_POST['product-name']) && isset($_POST['product-image'])) {
    $productName = $_POST['product-name'];
    $productImage = $_POST['product-image'];
    $productImage1 = $_POST['product-image1'];
    $productImage2 = $_POST['product-image2'];
    $productImage3 = $_POST['product-image3'];
    $productLink = $_POST['product-link'];

    $insertQuery = "INSERT INTO products (name, image) VALUES ('$productName', '$productImage')";
    $db->exec($insertQuery);

    // Читаем содержимое файла шаблона
    $templateContent = file_get_contents('../../product_template.php');
    
    // Заменяем плейсхолдеры на реальные данные
    $templateContent = str_replace('[GAME_NAME]', $gamename, $templateContent);
    $productContent = str_replace('[PRODUCT_NAME]', $productName, $templateContent);
    $productContent = str_replace('[PRODUCT_IMAGE]', $productImage, $productContent);
    $productContent = str_replace('[PRODUCT_IMAGE1]', $productImage1, $productContent);
    $productContent = str_replace('[PRODUCT_IMAGE2]', $productImage2, $productContent);
    $productContent = str_replace('[PRODUCT_IMAGE3]', $productImage3, $productContent);
    $productContent = str_replace('[PRODUCT_LINK]', $productLink, $productContent);
    
    // Проверяем существование папки и создаем ее при необходимости
    if (!file_exists('product')) {
        mkdir('product', 0777, true);
    }

    // Сохраняем новую страницу продукта
    $productFileName = "product/{$productName}.php";
    file_put_contents($productFileName, $productContent);
}
if ($is_admin && isset($_GET['delete_product_id'])) {
    $productID = $_GET['delete_product_id'];
    
    // Получаем имя продукта для определения имени файла
    $selectQuery = "SELECT name FROM products WHERE id = $productID";
    $productName = $db->querySingle($selectQuery, true)['name'];
    
    // Удаляем запись продукта из базы данных
    $deleteQuery = "DELETE FROM products WHERE id = $productID";
    $db->exec($deleteQuery);
    
    // Удаляем файл продукта
    $productFilePath = "product/{$productName}.php";
    if (file_exists($productFilePath)) {
        unlink($productFilePath);
    }

    header("Location: ".$_SERVER['PHP_SELF']); // Refresh the current page
    exit;
}

?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        <meta name="description" content="На этой странице представлен список самых лучших приватных читов для игры - Escape from Tarkov. Все читы ежедневно обновляются и добавляются новые функции.">
        <meta name="keywords" content="Купить читы на Escape from Tarkov, Escape from Tarkov читы, читы купить Escape from Tarkov, читы на Escape from Tarkov, читы Escape from Tarkov, купить читы Escape from Tarkov">
        <title>Catalog hacks</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="/img/favicon.png" />
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/webfonts/all.min.css"> </head>

    <body>
        <div class="admin-panel">
            <?php if ($is_admin): ?>
                <h2>Welcome, Admin!</h2>
                <?php endif; ?>
                    <?php if ($is_admin): ?> <a href="/admin/logout.php">Logout</a>
                        <?php endif; ?>
        </div>
        <div class="mobile-navbar"> <a href="/index.php">Главная</a> <a href="/tickets.html">Поддержка</a> <a href="/faq.html">FAQ</a> <a class="mb-change" href="/politic.html">Пользовательское соглашение</a> </div>
        <header>
            <div class="container">
                <div class="navbar-nav fl ai-c">
                    <a href="/index.php" class="logo fl ai-c"> <img src="/img/logo.png" alt=""> <span>OPHACK</span> </a>
                    <div class="menu fl ai-c"> <a href="/index.php">Главная</a> <a href="/tickets.html">Поддержка</a> <a href="/faq.html">FAQ</a> <a class="mb-change" href="/politic.html">Пользовательское соглашение</a> </div>
                    <label for="check" class="mobile-menu">
                        <input type="checkbox" id="check" /> <span></span> <span></span> <span></span> </label>
                </div>
            </div>
        </header>
        <section id="cheats-page-wrapper">
            <div class="bg"> <img src="<?php echo $gameimage; ?>" alt=""> </div>
            <div class="container">
                <div class="content">
                    <div class="icon">
                        <div class="icon-img" style="-webkit-mask-image: url('<?php echo $gameicon; ?>');"></div>
                    </div>
                    <p class="name">
                        <?php echo $gamename; ?>
                    </p>
                    <p class="description"> We present to your attention a catalog of private cheats for <span><?php echo $gamename; ?></span> from reliable developers. All software uses a modern way to bypass the anti-cheat game. Cheats include all the necessary features that will help you destroy your opponents. Easy start-up and installation. </p>
                </div>
            </div>
        </section>
        <section id="products" class="cheats">
            <div class="container">
                <div class="-navigation-links fl ai-c">
                    <a href="/index.php"> <i class="fa-light fa-house-heart"></i> Catalog </a> <i class="fa-light fa-angle-right"></i>
                    <a href="#" class="active">
                        <?php echo $gamename; ?>
                    </a>
                </div>
                <div class="pre-info fl ai-c jc-sb">
                    <p class="title popular"> Catalog </p>
                </div>
                <div class="products fl fw-w">
                                                <?php
                $productsQuery = "SELECT * FROM products";
                $result = $db->query($productsQuery);
                while ($product = $result->fetchArray(SQLITE3_ASSOC)) {
                    // Отображаем каждый продукт
                    echo "<div class='product-wrapper' data-popular='popular'>";
                    echo "<a href='product/{$product['name']}.php' class='product'>";
                    echo "<img class='m-img' src='{$product['image']}' alt='{$product['name']}'>";
                    echo "<span class='block fl jc-sb'>";
                    echo "<span class='global fl ai-e'>";
                    echo "<span class='fl ai-c'>";
                    echo "</span>";
                    echo "<span class='fl fd-c'>";
                    echo "<span class='name fl ai-c'>{$product['name']}</span>";
                    echo "<span class='status undetected'>";
                    echo "<span>";
                    echo "<i class='fa-solid fa-shield-check'></i> Undetected";
                    echo "</span>";
                    echo "</span>";
                    echo "</span>";
                    echo "</span>";
                    echo "</span>";
                    echo "</a>";
                     if ($is_admin) {
                        echo "<a href='?delete_product_id={$product['id']}' style='margin-top: 24px!important; border-bottom: 1px solid #f00; border-radius: 4px;'>Delete</a>";
                    }
                    echo "</div>";
                
                }

                ?>
                    <?php if ($is_admin): ?>
                        <div class="product-wrapper" data-filter="add_product" data-sort="add_product" data-popular="*">
                            <a href="#" onclick="openProductModal()" class="product"> <img class="m-img" src="/img/games/bg/add_game.png" alt=""> <span class="block">
                <span class="global fl ai-c">
                    <span class="name">Add Product</span> </span>
                                </span>
                            </a>
                        </div>
                        <?php endif; ?>
                            <div class="modal" id="product-modal">
                                <div class="modal-content">
                                    <h2>Add New Product</h2>
                                    <form method="post" action="">
                                        <label for="product-name">Product Name:</label>
                                        <input type="text" id="product-name" name="product-name">
                                        <label for="product-image">Product Image URL:</label>
                                        <input type="text" id="product-image" name="product-image">
                                        <label for="product-image1">Product Image 1:</label>
                                        <input type="text" id="product-image1" name="product-image1">
                                        <label for="product-image2">Product Image 2:</label>
                                        <input type="text" id="product-image2" name="product-image2">
                                        <label for="product-image3">Product Image 3:</label>
                                        <input type="text" id="product-image3" name="product-image3">
                                        <label for="product-link">Product Link:</label>
                                        <input type="text" id="product-link" name="product-link">
                                        <button type="submit">Add Product</button>
                                    </form>
                                </div>
                            </div>
                            <script>
                            function openProductModal() {
                                const modal = document.getElementById("product-modal");
                                modal.style.display = "block";
                            }
                            </script>
 </div>
        </section>
        <footer>
            <div class="container">
                <div class="content fl ">
                    <div class="col">
                        <a href="/index.pjp" class="logo fl ai-c"> <img src="/img/logo.png" alt=""> <span>OPHACK</span> </a> <span class="desc">
                        Ophack website - the best collection of cheats in one place! A large database of little known and premium software, on which we provide the opportunity to download for free.
                    </span>
                        <div class="contacts fl ai-c"> <a href="escapefromtarkov.html" target="_blank"><i class="fa-brands fa-youtube"></i></a> <a href="https://t.me/softix_news" target="_blank"><i class="fa-brands fa-telegram"></i></a> <a href="https://discord.gg/qkR8sMaADW" target="_blank"><i class="fa-brands fa-discord"></i></a> </div>
                    </div>
                    <div class="col">
                        <p class="title">Навигация</p> <a href="/faq.html">FAQ</a> </div>
                    <div class="col">
                        <p class="title">Информация</p> <a href="/politic.html">Пользовательское соглашение</a> </div>
                </div>
                <div class="after-footer fl ai-c jc-sb">
                    <div> © 2023 Ophack</div>
                    <div class="fl ai-c"> <img src="/img/ico/mastercard.png" alt=""> <img src="/img/ico/visa.png" alt=""> <img src="/img/ico/yandex.png" alt=""> <img src="/img/ico/webmoney.png" alt=""> <img src="/img/ico/qiwi.png" alt=""> <img src="/img/ico/paypal.png" alt=""> <img src="/img/ico/bitcoin.png" alt=""> </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.cookie.js"></script>
        <script src="/js/translate.js"></script>
        <script src="/js/main.js"></script>
    </body>

    </html>
    <style type="text/css">
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }
    
    .modal-content {
        background-color: #fff;
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    /* Стили для формы в модальном окне */
    
    .modal-content form {
        display: flex;
        flex-direction: column;
    }
    
    .modal-content label {
        margin-top: 10px;
    }
    
    .modal-content input[type="text"] {
        margin-bottom: 10px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    .modal-content button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    
    .modal-content button[type="submit"]:hover {
        background-color: #0056b3;
    }
    
    input,
    #game-name {
        color: black!important;
    }
    /* Дополнительные стили, чтобы модальное окно было по центру экрана */
    /* Дополнительные стили для ссылки "Add Game" */
    
    #add-game-block {
        display: none;
    }
    
    .admin-panel:hover #add-game-block {
        display: block;
    }
    
    .admin-panel:hover .product-wrapper[data-filter="add_game"] {
        display: block;
    }
    
    .admin-panel:hover .product-wrapper:not([data-filter="add_game"]) {
        display: block;
    }
    
    .admin-panel {
        position: fixed;
        top: 0;
        left: 45%;
        z-index: 99999;
        text-align: -webkit-center;
    }
    
    form,
    label {
        color: black;
    }
    </style>