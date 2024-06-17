$(function () {
    let translate = [];
    translate.push(

        // Навигация
        ["Главная", "Main"],
        ["Поддержка", "Support"],
        ["Пользовательское соглашение", "User agreement"],

        // Шапка
        ["Каталог", "Catalog"],
        ["Купить сейчас", "Go buy now"],
        ["для игры", "for game"],
        ["Приватный чит", "Private hack"],
        ["Контакты", "Contacts"],
        ["Добро пожаловать в", "Welcome to"],
        ["лучший магазин", "the best store"],
        ["по продаже приватных читов", "selling private cheats"],
        [
            "Большой каталог приватных качественных читов, созданных опытными разработчиками, которые сделают вашу игру более продуктивной и комфортной.",
            "A large catalog of private high-quality cheats created by experienced developers that will make your game more productive and comfortable."
        ],

        // Каталог
        ["Низкая цена", "Low price"],
        ["Высокая цена", "Up price"],
        ["Все читы", "All cheats"],
        ["Сортировка игр", "Sort games"],
        ["Популярные", "Popular"],
        ["Новинки", "New"],
        ["Представляем вашему вниманию каталог приватных читов для", "We present to your attention a catalog of private cheats for"],
        [
            "от надёжных разработчиков. Все софты используют современный способ обхода античита игры. Читы включают в себе все необходимые функции, которые помогут вам уничтожать своих противников. Простой запуск и установка.",
            "from reliable developers. All software uses a modern way to bypass the anti-cheat game. Cheats include all the necessary features that will help you destroy your opponents. Easy start-up and installation."
        ],

        // Футер
        [
            "Интернет-магазин Softix — лучший сборник читов в одном месте! Большая база мало известных и премиальных софтов, на которые мы предоставляем возможность приобретения со скидкой до 70%.",
            "The Softix online store is the best collection of cheats in one place! A large database of little-known and premium varieties, for which we provide the opportunity to purchase at a discount of up to 70%."
        ],
        ["Гарантии", "Garants"],
        ["Поставщики", "Suppliers"],
        ["Скидки и акции", "Discounts"],
        ["Навигация", "Navigation"],
        ["Информация", "Information"],
        
        // Тикеты
        [
            "Если у Вас появились вопрос или проблема по поводу купленного продукта на нашем сайте оставьте своё обращение на данной странице. Так же Вы сможете посмотреть свои ранее оставленные запросы.",
            "If you have any question or problem about the purchased product on our website, leave your message on this page. You will also be able to view your previously left requests."
        ],
        ["Создайте обращение", "Create ticket"],
        ["Отправьте запрос в поддержку для решения Вашего вопроса прямо сейчас", "Send a support request to resolve your issue right now"],
        ["История обращений", "History tickets"],
        ["Все ответы от поддержки будут приходить на сайт и на Эл. почту", "All responses from the support will be sent to the website and to the Email."],

        // Товары
        ["Оставить отзыв", "Create review"],
        ["Оставьте свой отзыв", "Make ur review"],
        ["Пусто", "Empty"],
        ["Популярный продукт", "Popular product"],
        ["продукта", "products"],
        ["продуктов", "products"],
        ["продукт", "product"],
        ["Перейти", "More"],
        ["Популярное", "Popular"],
        // Страница товара
        ["Статус чита", "Cheat Status"],
        ["Требования", "Requirements"],
        ["Функции", "Functions"],
        ["Выберите удобный Вам тарифный план для покупки", "Choose a tariff plan that is convenient for you to purchase"],
        ["Принять договор оферты", "Accept the offer agreement"],
        ["день", "day"],
        ["дня", "days"],
        ["дней", "days"],
        ["дней", "деньs"],
        ["Отзывы", "Reviews"],
        ["Приобрести", "Go buy"],
        ["Желаете приобрести без комиссии? Напишите мне в Telegram или Discord", "Would you like to purchase without commission? Write to me in Telegram or Discord"],
        
        // FAQ
        ["Скачать", "Download"],
        ["Пакет с компонентами", "Component package"],
        ["Обновление видеодрайвера", "Video driver update"],
        ["Обновление всех драйверов", "Updating all drivers"],
    );

    if ($.cookie('lang') != null) {
        translateFunc($.cookie('lang'));
    } else {
        $.cookie('lang', 'en');
        translateFunc('en');
    }

    $('.translate-overlay .select').click(function () {
        $('.translate-overlay .select').removeClass('active');
        $(this).addClass('active');
        $.removeCookie('lang');
        $.cookie('lang', $(this).data('id'));
        translateFunc($(this).data('id'));
    });

    function translateFunc(lang) {
        $('.translate-overlay .select').removeClass('active');

        if (lang == 'ru') {
            $('.translate-overlay .select[data-id="ru"]').addClass('active');
            $('.mobile-navbar .mb-change').attr('href', '/politic-ru');
            $('header .navbar-nav .menu .mb-change').attr('href', '/politic-ru');
            
            $('#tickets .content.select .block .go-send .input input').attr('placeholder', 'Эл. почта');
            $('#products .search-block .search input').attr('placeholder', 'Поиск игры');
            
            $('body .change-price-mb-dollar').each(function() {
                $(this).text($(this).data('ruble') + '₽');
            });

            if ($('.change-slider-price-mb-dollar')) {
               $('.change-slider-price-mb-dollar').removeClass('dollar')
            }
            
            $('#product .content .main-info .right-block .go-buy .price span').text($('#product .main-info .right-block .select .select-sub .sel.active .change-price-mb-dollar').data('ruble') + '₽');            
            
            $('#products .products .product-wrapper .product .block .price span').text('от');
            
            for (let i = 0; i < translate.length; i++) {
                $('body :not(script)').contents().filter(function () {
                    return this.nodeType === 3;
                }).replaceWith(function () {
                    return this.nodeValue.replace(translate[i][1], translate[i][0]);
                });
            }
        } else {
            $('.translate-overlay .select[data-id="en"]').addClass('active');
            
            $('#tickets .content.select .block .go-send .input input').attr('placeholder', 'Email');
            $('#products .search-block .search input').attr('placeholder', 'Search game');

            $('body .change-price-mb-dollar').each(function() {
                $(this).text($(this).data('dollar') + '$');
            });

            if ($('.change-slider-price-mb-dollar')) {
               $('.change-slider-price-mb-dollar').addClass('dollar')
            }
            
            $('#product .content .main-info .right-block .go-buy .price span').text($('#product .main-info .right-block .select .select-sub .sel.active .change-price-mb-dollar').data('dollar') + '$');
                        
            $('#products .products .product-wrapper .product .block .price span').text('from');
            
            for (let i = 0; i < translate.length; i++) {
                $('body :not(script)').contents().filter(function () {
                    return this.nodeType === 3;
                }).replaceWith(function () {
                    return this.nodeValue.replace(translate[i][0], translate[i][1]);
                });
            }
        }
    }
});
