<?php
session_start();
$is_admin = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
?>
<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Интернет-магазин Ophack — лучший сборник читов в одном месте! Большая база мало известных и премиальных софтов, на которые мы предоставляем возможность приобретения со скидкой до 70%. У нас вы найдете читы на любые игры: Warzone, Tarkov, Rust, Valorant, Dead by daylight, Warface, Cs-Go, Dayz, Fortnite, Gta 5, Калибр, Pubg, Pubg lite, Pubg mobile, Apex Legengs, Rainbow six, Among us, Arma 3 и многие другие.">
    <meta name="keywords" content="купить читы, приватные читы, магазин читов, мир читов, читы на пк, приватный чит, элитные читы, escape from tarkov, тарков, eft, tarkov, побег из таркова, тарков читы, читы тарков, читы для таркова, тарков гайд, тарков чит, чит на тарков, тарков стрим, эскейп фром тарков, tarkov highlights, гайд, eft cheats, escape from tarkov гайд, чит escape from tarkov, wh tarkov, escape from tarkov gameplay, читеры в таркове, escape from tarkov highlights, ескейп фром тарков, тарков нарезка, как играть в тарков, pr0rokk, тарков для новичков, maza4kst, читы для escape from tarkov, читы, тарков гайд для новичков, eft wtf, тарков моменты, тарков патроны, пророкк, тарков вайп, гайд для новичков, voip, читы на тарков, escape from tarkov читы, eft читы, escape from tarkov чит, читы на escape from tarkov, тарков читы 2021, tarkov wipe, чит tarkov, чит, escape from tarkov стрим, тарков рейд, тарков фарм денег, cheats tarkov, стрим, tarkov читы, escape from tarkov читы купить, Crooked,abs,rust">
    <title>Ophack - Free Hack</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="webfonts/all.min.css">
  </head>
  <body>
    <div class="mobile-navbar">
      <a href="#">Главная</a>
      <a href="tickets.html">Поддержка</a>
      <a href="faq.html">FAQ</a>
      <a class="mb-change" href="politic.html">Пользовательское соглашение</a>
    </div>
    <header>
      <div class="container">
        <div class="navbar-nav fl ai-c">
          <a href="#" class="fl ai-c logo">
            <img src="img/logo.png" alt="">
            <span>Ophack</span>
          </a>
          <div class="menu fl ai-c">
            <a href="#">Главная</a>
            <a href="tickets.html">Поддержка</a>
            <a href="faq.html">FAQ</a>
            <a class="mb-change" href="politic.html">Пользовательское соглашение</a>
          </div>
          <label for="check" class="mobile-menu">
            <input type="checkbox" id="check" />
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
      </div>
    </header>
    <section id="header-wrapper">
      <div class="header__slider">
        <div class="bg-game-img">
          <img src="img/games/bg/apexlegends.jpg" alt="">
        </div>
        <div class="bg-game-name">
          <div class="layers glitch">
            <span>Legends</span>
          </div>
        </div>
        <div class="container">
          <div class="content">
            <div class="title">
              <p class="pre-name">
                <i class="fa-solid fa-fire"></i> Популярный продукт
              </p>
              <p class="cheat-name">Collapse</p>
              <p class="for-game">
              <div>A private cheat for playing Valoranta without locks, with good functionality and an excellent price. This software for valorant will help you gain an advantage over other players. Download and win your favorite game together with cheats from Ophack!</div>
              <div>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="products">
      <div class="container">
        <div class="pre-info fl ai-c jc-sb">
          <div class="title popular"> Каталог </div>
          <div class="search-block fl ai-c">
            <div class="search fl ai-c">
              <i class="fa-thin fa-magnifying-glass"></i>
              <span></span>
              <input type="text" placeholder="Поиск игры">
            </div>
          </div>
        </div>
        <div class="products fl fw-w">
 <?php
session_start();
$is_admin = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];

// Подключение к SQLite базе данных
$db = new SQLite3("games.db");

// Проверка наличия таблицы "games" и её создание, если не существует
$checkTableQuery = "SELECT name FROM sqlite_master WHERE type='table' AND name='games'";
$result = $db->querySingle($checkTableQuery);

if (!$result) {
    // Таблица не существует, создаем её
    $createTableQuery = "CREATE TABLE games (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        image TEXT NOT NULL,
        icon TEXT NOT NULL,
        product_count INTEGER NOT NULL DEFAULT 1
    )";
    $db->exec($createTableQuery);
}

// Обработка добавления новой игры
if ($is_admin && isset($_POST['game-name']) && isset($_POST['game-image']) && isset($_POST['game-icon']) && isset($_POST['product-count'])) {
    $gameName = $_POST['game-name'];
    $gameImage = $_POST['game-image'];
    $gameIcon = $_POST['game-icon'];
    $productCount = $_POST['product-count'];

    // Вставляем данные в таблицу
    $insertQuery = "INSERT INTO games (name, image, icon, product_count) VALUES ('$gameName', '$gameImage', '$gameIcon', $productCount)";
    $db->exec($insertQuery);
}

// Обработка обновления деталей игры
// Обработка обновления деталей игры
if ($is_admin && isset($_POST['edit-product-id'])) {
    $gameID = $_POST['edit-product-id'];

    $updateQuery = "UPDATE games SET product_count = :productCount";
    
    if (isset($_POST['edit-game-image'])) {
        $updateQuery .= ", image = :gameImage";
    }

    if (isset($_POST['edit-game-icon'])) {
        $updateQuery .= ", icon = :gameIcon";
    }

    $updateQuery .= " WHERE id = :gameID";

    $stmt = $db->prepare($updateQuery);
    
    $stmt->bindValue(':productCount', $_POST['edit-product-count'], SQLITE3_INTEGER);

    if (isset($_POST['edit-game-image'])) {
        $stmt->bindValue(':gameImage', $_POST['edit-game-image'], SQLITE3_TEXT);
    }

    if (isset($_POST['edit-game-icon'])) {
        $stmt->bindValue(':gameIcon', $_POST['edit-game-icon'], SQLITE3_TEXT);
    }

    $stmt->bindValue(':gameID', $gameID, SQLITE3_INTEGER);
    
    $stmt->execute();
}


?>
          <!DOCTYPE html>
          <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="styles.css">
              <title>Your Website</title>
            </head>
            <body>
              <div class="admin-panel"> <?php if ($is_admin): ?> <h2>Welcome, Admin!</h2><?php endif; ?> <?php
        // Получение данных из таблицы
        $selectQuery = "SELECT * FROM games";
        $result = $db->query($selectQuery);

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $gameName = $row['name'];
    $gameIcon = $row['icon'];
    $gameImage = $row['image']; // Добавьте это

    // Создание папки для игры, если она не существует
    $gameFolder = "game/" . ucfirst(strtolower($gameName)); // Преобразование первой буквы в верхний регистр
    if (!file_exists($gameFolder)) {
        mkdir($gameFolder, 0755, true);
    }

    // Создание файла страницы игры
    $gamePagePath = $gameFolder . "/index.php";
    $gameTemplatePath = "game_template.php";
    if (!file_exists($gamePagePath)) {
        $gameContent = file_get_contents($gameTemplatePath);
        $gameContent = str_replace('$gameName', $gameName, $gameContent);
        $gameContent = str_replace('$gameIcon', $gameIcon, $gameContent);
        $gameContent = str_replace('$gameImage', $gameImage, $gameContent); // Добавьте это
        file_put_contents($gamePagePath, $gameContent);
    }

    // Вывод блока игры
    echo '
																																																								<div class="product-wrapper" data-filter="' . $gameName . '" data-sort="' . $gameName . '" data-popular="*">';
    echo '
																																																									<a href="' . $gameFolder . '/index.php" class="product">';
    echo '
																																																										<img class="m-img" src="' . $gameImage . '" alt="">'; // Изменено на $gameImage
    echo '
																																																											<span class="block">';
    echo '
																																																												<span class="global fl ai-c">';
    echo '
																																																													<span class="icon">';
    echo '
																																																														<span class="icon-img" style="-webkit-mask-image: url(\'' . $gameIcon . '\');"></span>';
    echo '
																																																													</span>';
    echo '
																																																													<span class="fl fd-c">';
    echo '
																																																														<span class="name">' . $gameName . '</span>';
    $productCountText = $row['product_count'] == 1 ? "1 product" : $row['product_count'] . " products";
	 echo '
																																																														<span class="count-products">' . $productCountText . '</span>';
    echo '
																																																													</span>';
    echo '
																																																												</span>';
    echo '
																																																											</a>';
    if ($is_admin) {
        echo '
																																																											<a href="delete_game.php?id=' . $row['id'] . '" style="margin-top: 24px!important; border-bottom: 1px solid #f00; border-radius: 4px;">Delete</a>';
	    echo '
																																																											<a href="javascript:void(0)" onclick="openEditProductModal(' . $row['id'] . ', ' . $row['product_count'] . ', \'' . $row['image'] . '\', \'' . $row['icon'] . '\')" style="margin-top: 24px!important; border-bottom: 1px solid #84c1ff; border-radius: 4px; margin-left: 10px;">Edit Game</a>';
    }
    echo '
																																																										</span>';
    echo '
																																																									</div>';
}
?> <?php if ($is_admin): ?><div class="product-wrapper" data-filter="add_game" data-sort="add_game" data-popular="*">
                  <a href="#" onclick="openGameModal()" class="product">
                    <img class="m-img" src="img/games/bg/add_game.png" alt="">
                    <span class="block">
                      <span class="global fl ai-c">
                        <span class="name">Add Game</span>
                      </span>
                    </span>
                  </a>
                </div> <?php endif; ?> <?php
        // Получение данных из таблицы
        $selectQuery = "SELECT * FROM games";
        $result = $db->query($selectQuery);

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            // Ваш код для отображения игр
        }
        ?> <?php if ($is_admin): ?> <a href="/admin/logout.php">Logout</a> <?php endif; ?> </div>
              <div class="modal" id="edit-product-modal">
                <div class="modal-content">
                  <h2>Edit Game Details</h2>
                  <form method="post" action="">
                    <input type="hidden" id="edit-product-id" name="edit-product-id">
                    <label for="edit-product-count">Количество продуктов:</label>
                    <input type="number" id="edit-product-count" name="edit-product-count" value="1" min="1">
                    <label for="edit-game-image">URL на фон игры:</label>
                    <input type="text" id="edit-game-image" name="edit-game-image">
                    <label for="edit-game-icon">URL на иконку игры:</label>
                    <input type="text" id="edit-game-icon" name="edit-game-icon">
                    <button type="submit">Обновить</button>
                  </form>
                </div>
              </div>
              <script>
                function openEditProductModal(gameID, currentCount, currentImage, currentIcon) {
                  const modal = document.getElementById("edit-product-modal");
                  document.getElementById("edit-product-id").value = gameID;
                  document.getElementById("edit-product-count").value = currentCount;
                  document.getElementById("edit-game-image").value = currentImage;
                  document.getElementById("edit-game-icon").value = currentIcon;
                  modal.style.display = "block";
                }
              </script>
              <div class="modal" id="game-modal">
                <div class="modal-content">
                  <h2>Add New Game</h2>
                  <form method="post" action="">
                    <label for="game-name">Новая игра:</label>
                    <input type="text" id="game-name" name="game-name">
                    <label for="game-image">URL на фон игры:</label>
                    <input type="text" id="game-image" name="game-image" value="">
                    <label for="game-icon">URL на иконку игры:</label>
                    <input type="text" id="game-icon" name="game-icon" value="">
                    <label for="product-count">Количество продуктов:</label>
                    <input type="number" id="product-count" name="product-count" value="1" min="1" style="margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;">
                    <button type="submit" name="add-game">Создать игру</button>
                  </form>
                </div>
              </div>
              <script>
                function openGameModal() {
                  const modal = document.getElementById("game-modal");
                  modal.style.display = "block";
                }
              </script>
            </body>
          </html>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="content fl ">
          <div class="col">
            <a href="/index.php" class="logo fl ai-c">
              <img src="img/logo.png" alt="">
              <span>Ophack</span>
            </a>
            <span class="desc">Ophack online store is the best collection of cheats in one place!</span>
            <div class="contacts fl ai-c">
              <a href="/index.html" target="_blank">
                <i class="fa-brands fa-youtube"></i>
              </a>
              <a href="https://t.me/softix_news" target="_blank">
                <i class="fa-brands fa-telegram"></i>
              </a>
              <a href="https://discord.gg/qkR8sMaADW" target="_blank">
                <i class="fa-brands fa-discord"></i>
              </a>
            </div>
          </div>
          <div class="col">
            <p class="title">Навигация</p>
            <a href="faq.html">FAQ</a>
          </div>
          <div class="col">
            <p class="title">Информация</p>
            <a href="politic.html">Пользовательское соглашение</a>
          </div>
        </div>
        <div class="after-footer fl ai-c jc-sb">
          <div> © 2023 Ophack</div>
          <div class="fl ai-c">
            <img src="img/ico/mastercard.png" alt="">
            <img src="img/ico/visa.png" alt="">
            <img src="img/ico/yandex.png" alt="">
            <img src="img/ico/webmoney.png" alt="">
            <img src="img/ico/qiwi.png" alt="">
            <img src="img/ico/paypal.png" alt="">
            <img src="img/ico/bitcoin.png" alt="">
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/translate.js"></script>
    <script src="js/main.js"></script>
    <script>
      window.onload = function() {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function() {
          document.body.classList.add('loaded');
          document.body.classList.remove('loaded_hiding');
        }, 500);
      }
    </script>
    <script>
      sliderMain([{
        "id": "43",
        "sort_id": "4",
        "game_id": "61",
        "name": "HYDRA",
        "icon": "hydra.png",
        "bg": "hydra.jpg",
        "description": "\u041f\u0440\u0438\u0432\u0430\u0442\u043d\u044b\u0439 \u0447\u0438\u0442 \u0434\u043b\u044f \u0438\u0433\u0440\u044b \u0412\u0430\u043b\u043e\u0440\u0430\u043d\u0442\u0430 \u0431\u0435\u0437 \u0431\u043b\u043e\u043a\u0438\u0440\u043e\u0432\u043e\u043a, \u0441 \u0445\u043e\u0440\u043e\u0448\u0438\u043c \u0444\u0443\u043d\u043a\u0446\u0438\u043e\u043d\u0430\u043b\u043e\u043c \u0438 \u043e\u0442\u043b\u0438\u0447\u043d\u043e\u0439 \u0446\u0435\u043d\u043e\u0439. \u0414\u0430\u043d\u043d\u044b\u0439 \u0441\u043e\u0444\u0442 \u0434\u043b\u044f Valorant \u043f\u043e\u043c\u043e\u0436\u0435\u0442 \u0432\u0430\u043c \u043f\u043e\u043b\u0443\u0447\u0438\u0442\u044c \u043f\u0440\u0435\u0438\u043c\u0443\u0449\u0435\u0441\u0442\u0432\u043e \u043d\u0430\u0434 \u0434\u0440\u0443\u0433\u0438\u043c\u0438 \u0438\u0433\u0440\u043e\u043a\u0430\u043c\u0438. \u041f\u043e\u043a\u0443\u043f\u0430\u0439 \u0438 \u043f\u043e\u0431\u0435\u0436\u0434\u0430\u0439 \u0432 \u043b\u044e\u0431\u0438\u043c\u043e\u0439 \u0438\u0433\u0440\u0435 \u0432\u043c\u0435\u0441\u0442\u0435 \u0441 \u0447\u0438\u0442\u0430\u043c\u0438 \u043e\u0442 Softixcheats!",
        "status": "1",
        "status_detect": "1",
        "rate": "1",
        "popular": "1",
        "date_create": "1669226211",
        "game_name": "Valorant",
        "price": "450",
        "price_dollar": 7
      }, {
        "id": "43",
        "sort_id": "4",
        "game_id": "61",
        "name": "HYDRA",
        "icon": "hydra.png",
        "bg": "hydra.jpg",
        "description": "\u041f\u0440\u0438\u0432\u0430\u0442\u043d\u044b\u0439 \u0447\u0438\u0442 \u0434\u043b\u044f \u0438\u0433\u0440\u044b \u0412\u0430\u043b\u043e\u0440\u0430\u043d\u0442\u0430 \u0431\u0435\u0437 \u0431\u043b\u043e\u043a\u0438\u0440\u043e\u0432\u043e\u043a, \u0441 \u0445\u043e\u0440\u043e\u0448\u0438\u043c \u0444\u0443\u043d\u043a\u0446\u0438\u043e\u043d\u0430\u043b\u043e\u043c \u0438 \u043e\u0442\u043b\u0438\u0447\u043d\u043e\u0439 \u0446\u0435\u043d\u043e\u0439. \u0414\u0430\u043d\u043d\u044b\u0439 \u0441\u043e\u0444\u0442 \u0434\u043b\u044f Valorant \u043f\u043e\u043c\u043e\u0436\u0435\u0442 \u0432\u0430\u043c \u043f\u043e\u043b\u0443\u0447\u0438\u0442\u044c \u043f\u0440\u0435\u0438\u043c\u0443\u0449\u0435\u0441\u0442\u0432\u043e \u043d\u0430\u0434 \u0434\u0440\u0443\u0433\u0438\u043c\u0438 \u0438\u0433\u0440\u043e\u043a\u0430\u043c\u0438. \u041f\u043e\u043a\u0443\u043f\u0430\u0439 \u0438 \u043f\u043e\u0431\u0435\u0436\u0434\u0430\u0439 \u0432 \u043b\u044e\u0431\u0438\u043c\u043e\u0439 \u0438\u0433\u0440\u0435 \u0432\u043c\u0435\u0441\u0442\u0435 \u0441 \u0447\u0438\u0442\u0430\u043c\u0438 \u043e\u0442 Softixcheats!",
        "status": "1",
        "status_detect": "1",
        "rate": "1",
        "popular": "1",
        "date_create": "1669226211",
        "game_name": "Valorant",
        "price": "450",
        "price_dollar": 7
      }, {
        "id": "278",
        "sort_id": "131",
        "game_id": "60",
        "name": "VX EFT",
        "icon": "7370.png",
        "bg": "4646.png",
        "description": "\u041f\u0440\u0435\u0434\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u043c \u0432\u0430\u0448\u0435\u043c\u0443 \u0432\u043d\u0438\u043c\u0430\u043d\u0438\u044e \u0447\u0438\u0442 \u043e\u0442 \u043d\u0435\u043c\u0435\u0446\u043a\u0438\u0445 \u0440\u0430\u0437\u0440\u0430\u0431\u043e\u0442\u0447\u0438\u043a\u043e\u0432. ",
        "status": "1",
        "status_detect": "1",
        "rate": "0.1",
        "popular": "1",
        "date_create": "1669389134",
        "game_name": "Escape from Tarkov",
        "price": "400",
        "price_dollar": 6
      }, {
        "id": "277",
        "sort_id": "230",
        "game_id": "62",
        "name": "SMG Rust",
        "icon": "5503.png",
        "bg": "5203.jpg",
        "description": "\u041f\u0440\u0435\u0434\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u043c \u0432\u0430\u0448\u0435\u043c\u0443 \u0432\u043d\u0438\u043c\u0430\u043d\u0438\u044e \u043a\u0430\u0447\u0435\u0441\u0442\u0432\u0435\u043d\u043d\u044b\u0439 \u043f\u0440\u043e\u0434\u0443\u043a\u0442 \u0434\u043b\u044f RUST \u043e\u0442 \u043a\u043e\u043c\u0430\u043d\u0434\u044b SMG.\r\n\u0421\u043e\u0444\u0442 \u043f\u043e\u0434\u0445\u043e\u0434\u0438\u0442 \u0434\u043b\u044f \u0438\u0433\u0440\u044b \u043f\u043e rage \u0438 legit.\r\n\r\n\u0427\u0438\u0442 \u0438\u043c\u0435\u0435\u0442 \u0441\u0442\u0430\u0442\u0443\u0441 Undetected \u043d\u0430 \u043f\u0440\u043e\u0442\u044f\u0436\u0435\u043d\u0438\u0438 \u043c\u0435\u0441\u044f\u0446\u0430, \u0431\u0443\u0434\u0443\u0442 \u0431\u044b\u0441\u0442\u0440\u044b\u0435 \u043e\u0431\u043d\u043e\u0432\u043b\u0435\u043d\u0438\u044f \u0438 \u0440\u0430\u0441\u0448\u0438\u0440\u0435\u043d\u0438\u0435 \u0444\u0443\u043d\u043a\u0446\u0438\u043e\u043d\u0430\u043b\u0430 \u0441\u043e \u0432\u0440\u0435\u043c\u0435\u043d\u0435\u043c.",
        "status": "1",
        "status_detect": "1",
        "rate": "0.1",
        "popular": "1",
        "date_create": "1669387843",
        "game_name": "RUST",
        "price": "900",
        "price_dollar": 15
      }]);
    </script>
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
    color: black !important;
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