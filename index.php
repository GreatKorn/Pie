<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Pie</title>
</head>
<body>

    <section class="promo">
        <div class="container">
            <header class="header">
                <div class="header__logo">
                    Сладкий сундук
                </div>
                <div class="header__item">
                    <div class="header__adres">
                        г. Санкт Петербург, <br> ул. Куйбышева 31
                        <img src="./src/icons/FacebookPlaces.png" alt="metka">
                    </div>
                    
                </div>
                <div class="header__contacts">
                    <img src="/src/icons/tel.png" alt="tel">
                    <div class="header__phone">
                        8 (812) 844-95-49
                    </div>
                    <div class="header__day">
                        Ежедневно с 9:00 до 20:00
                    </div>
                </div>
            </header>

            <div class="promo__header">
                <div class="promo__txt">
                    вкуснейшие
                </div>
                <div class="promo__subheader">
                    Пирожные и капкейки от 150 ₽/шт. с доставкой по Санкт Петербургу
                </div>
                <div class="promo__txt2">
                    Приготовим за 3 часа в день заказа. <br>
                    Доставка на авто в холодильнике.
                </div>
                <div class="promo__block">
                    <button class="button">Перейте в каталог</button>
                    <div class="promo__txt3">9 различных видов <br> на выбор</div>
                </div>
            </div>
        </div>
    </section>

    <?php
    ini_set('display_errors', E_ALL);
    require_once "fakeDate.php";
    ?>

    <section class="catalog">
        <div class="container">
            <div class="catalog__header">
                Для любых событий и дорогих вам людей
            </div>

            <div class="catalog__carts row">

                <?php
                    for($i = 0; $i < count($arr); $i++){
                        $img = $arr[$i]['img'];
                        $title = $arr[$i]['title'];
                        $text = $arr[$i]['text'];
                        $price = $arr[$i]['price'];
                        $btnText = $arr[$i]['btnText'];
                        echo
                        <<<RENDER
                        <div class="catalog__card col-sm-4" style="width: 18rem;">
                            <img src="$img" class="card-img-top" alt="cake">
                            <div class="catalog__card-body">
                                <h5 class="catalog__card-title">$title</h5>
                                <p class="catalog__card-text">$text</p>
                                <div class="catalog__price">$price</div>
                                <button class="button button_catalog">$btnText</button>
                            </div>
                        </div>
                        RENDER;
                    }
                ?>
            </div>
        </div>
    </section>

</body>
</html>