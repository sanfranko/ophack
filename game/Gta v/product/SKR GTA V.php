<?php 

session_start();
$is_admin = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];


$product_link = "test";  // значение по умолчанию

if ($is_admin && isset($_POST['edit-link'])) {
    $newLink = $_POST['edit-link'];
    $product_link = $newLink;
    // Здесь вы можете обновить ссылку в вашей базе данных или где вы её храните
}
?>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        <meta name="description" content="I present to your attention the product SKR GTA V — a cheat for GTA V, which contains only chams. Why is he hardcore? Yes, because you will have to shoot yourself, he will not kill in the head for you. You have been infected, logged on to the server and just see how the opponents are running all over the map — this software does not even have a menu.

About the development. The bypass method appeared quite recently and at the moment the undetected status is more than a month. No one has had any problems, so we feel free to buy and use it.

I remind you that the cheat does not even have a menu!
After you log into the game, feel free to connect to the server and check the performance of the product!">
        <meta name="keywords" content="приватный чит для GTA V, читы на GTA V, приватные читы GTA V, чит на GTA V, SKR GTA V, SKR GTA V cheat GTA V">
        <title>GTA V - SKR GTA V</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="/img/favicon.png">
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
        <div class="modal-wrapper">
            <div class="modal send-review">
                <div class="header"> Make ur review
                    <p class="close"> <i class="fa-light fa-xmark"></i> </p>
                </div>
                <div class="input nickname"> <i class="fa-solid fa-user-cowboy"></i>
                    <input type="text" maxlength="15" placeholder="Ваше имя"> </div>
                <div class="input email"> <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Эл. почта"> </div>
                <textarea maxlength="150" placeholder="Напишите свое мнение о товаре..."></textarea>
                <div class="go-send">
                    <div class="rate">
                        <p data-id="4"><i class="fa-solid fa-star"></i></p>
                        <p data-id="3"><i class="fa-solid fa-star"></i></p>
                        <p data-id="2"><i class="fa-solid fa-star"></i></p>
                        <p data-id="1"><i class="fa-solid fa-star"></i></p>
                        <p data-id="0"><i class="fa-solid fa-star"></i></p>
                    </div>
                    <p class="btn" data-cheat-id="40">Отправить</p>
                </div>
            </div>
            <div class="modal accept-email">
                <div class="header"> Подтверждение эл. почты </div>
                <p class="description"> На Ваш электронный адрес <span></span> был отправлен код подтверждения для создания отзыва. </p>
                <p class="inp">Введите высланный код в поле ниже, чтобы продолжить:</p>
                <input type="number" class="custom" placeholder="Код подтверждения">
                <div class="warning fl ai-c"> <i class="fa-solid fa-triangle-exclamation"></i> Если код не приходит в течении 5-ти минут проверьте папку "Спам" </div>
            </div>
        </div>
        <div class="mobile-navbar"> <a href="/index.php">Main</a> <a href="/tickets.html">Support</a> <a href="/faq.html">FAQ</a> <a class="mb-change" href="/politic.html">User agreement</a> </div>
        <div class="translate-overlay">
            <div class="select" data-id="ru"> <img src="/img/ico/ru_RU.png" alt=""> </div>
            <div class="select active" data-id="en"> <img src="/img/ico/en_US.png" alt=""> </div>
        </div>
        <header>
            <div class="container">
                <div class="navbar-nav fl ai-c">
                    <a href="/index.php" class="logo fl ai-c"> <img src="/img/logo.png" alt=""> <span>OPHACK</span> </a>
                    <div class="menu fl ai-c"> <a href="/index.php">Main</a> <a href="/tickets.html">Support</a> <a href="/faq.html">FAQ</a> <a class="mb-change" href="/politic.html">User agreement</a> </div>
                    <label for="check" class="mobile-menu">
                        <input type="checkbox" id="check"> <span></span> <span></span> <span></span> </label>
                </div>
            </div>
        </header>
        <section id="product">
            <div class="container">
                <div class="content">
                    <div class="-navigation-links fl ai-c">
                        <a href="/index.php"> <i class="fa-light fa-house-heart"></i> Catalog </a> <i class="fa-light fa-angle-right"></i> <a href="/index.php">GTA V</a> <i class="fa-light fa-angle-right"></i> <a href="eftchams.html" class="active">SKR GTA V</a> </div>
                    <div class="main-info fl">
                        <div class="left-block">
                            <div class="carousel fl">
                                <div class="screens fl fd-c">
                                    <div class="item" data-id="0"> <img src="/img/cheats/screens/skrgtav_132_9CsvfwiuAO1WyIVJAKh0.jpeg" alt=""> </div>
                                    <div class="item active" data-id="1"> <img src="/img/cheats/screens/skrgtav_132_9E4hy5qMCwLa8QlKKJ7C.jpeg" alt=""> </div>
                                    <div class="item" data-id="2"> <img src="/img/cheats/screens/skrgtav_132_Wm44aQd1MP9h8zeax0fP.jpeg" alt=""> </div>
                                </div>
                                <div class="main-screen fl fd-c ai-c"> <img src="/img/cheats/screens/chams_40_AjdXmUKMR72wfoGIsqkq.jpg" alt="" style="">
                                    <!--                                <video style="display: none" src="" controls="true"></video>-->
                                    <iframe style="display: none" width="100%" height="100%" src="eftchams.html" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> <span style="width: 80%;"></span>
                                    <div class="count"><b>2</b> / 3</div>
                                </div>
                                <div class="preview" style="display: none;">
                                    <div class="container">
                                        <p class="close"> <i class="fa-light fa-xmark"></i> </p> <img src="eftchams.html" alt=""> </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <h2 class="name undetected fl ai-c">
                            SKR GTA V                           <i class="fa-solid fa-shield-check"></i>                        </h2>
                            <p class="pre-title">GTA V</p>
                            <p class="description"> I present you the product SKR GTA V - a cheat for GTA V, which contains all the features you need. Why is it so hard? Because we make only quality cheats that will help you kill everyone in superiority. </p>
                            <div class="fl ai-c">
                                <div class="recom">
                                    <p class="pretitle">Requirements:</p>
                                    <div class="fl ai-c">
                                        <p class="r windows"> <i class="fa-brands fa-windows"></i> <sup>Windows 10</sup> </p>
                                        <p class="r proc"> <i class="fa-solid fa-microchip"></i> <sup>Intel/AMD</sup> </p>
                                    </div>
                                </div>
                                <div class="status">
                                    <p class="pretitle">Cheat Status:</p> <span class="undetected">
                                    <i class="fa-solid fa-shield-check"></i>                                    Undetected                                </span> </div>
                            </div>
                            <div class="go-buy fl ai-e">
                                <div class="fads fl fd-c">
                                    <div class="gulag fl ai-c">
                                        <?php echo "<a href='{$product_link}' target='_blank' class='btn purple goih' data-cheat-id='40'>Download</a>"; ?> </div>
                                    <?php 
if ($is_admin) {
    echo '<button onclick="openEditModal()" style="margin-top: 10px; padding: 5px; border-radius: 5px; background-color: black; border: 1px solid white; color: white;">Edit Link</button>';
}
?>
                                        <div class="modal" id="mymodal_edit">
                                            <div class="modal-content">
                                                <h2>Edit Link Download</h2>
                                                <form method="post" action="">
                                                    <label for="edit-link">Изменить ссылку:</label>
                                                    <input type="text" id="edit-link" name="edit-link">
                                                    <button type="submit">Изменить</button>
                                                </form>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                        function openEditModal() {
                                            document.getElementById('mymodal_edit').style.display = 'block';
                                        }
                                        </script>
                                        <?php 
if ($is_admin && isset($_POST['edit-link'])) {
    $newLink = $_POST['edit-link'];
    // Здесь вы можете обновить ссылку в вашей базе данных или где вы её храните
}
?>
                                </div>
                            </div>
                            <div class="warning fl ai-c"> <i class="fa-solid fa-triangle-exclamation"></i> Password - GTA V</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="content fl ">
                    <div class="col">
                        <a href="/index.php" class="logo fl ai-c"> <img src="/img/logo.png" alt=""> <span>OPHACK</span> </a> <span class="desc">
                        Ophack website - the best collection of cheats in one place! A large database of little known and premium software, on which we provide the opportunity to download for free.
                    </span>
                        <div class="contacts fl ai-c"> <a href="eftchams.html" target="_blank"><i class="fa-brands fa-youtube"></i></a> <a href="https://t.me/softix_news" target="_blank"><i class="fa-brands fa-telegram"></i></a> <a href="https://discord.gg/qkR8sMaADW" target="_blank"><i class="fa-brands fa-discord"></i></a> </div>
                    </div>
                    <div class="col">
                        <p class="title">Navigation</p> <a href="/faq.html">FAQ</a> </div>
                    <div class="col">
                        <p class="title">Information</p> <a href="/politic.html">User agreement</a> </div>
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
        left: 50%;
        z-index: 99999;
        text-align: -webkit-center;
    }
    
    form,
    label {
        color: black;
    }
    </style>