<?php
/*
Template Name: Shops
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Mebel</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=fec12545-ad22-4fec-b492-4e731ea11d70&lang=ru_RU" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <section id="map" class="map map--shops">
            
        </section>
        <section class="shops">
            <div class="container">
                <h1 class="shops__title">
                    Магазины
                </h1>
                <h3 class="shops__sub-title">
                    Москва
                </h3>
            </div>
            <div class="shops__group">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="1" class="shop-item__name">
                                    ТЦ «Mobel Expo»
                                </a>
                                <span class="shop-item__desc">
                                    Нахимовский проспект, 24
                                </span>
                                <a href="tel:8 (917) 537-17-17" class="shop-item__link">
                                    8 (917) 537-17-17
                                </a>
                                <a href="mailto:gm-mobelexpo@mail.ru" class="shop-item__link">
                                    gm-mobelexpo@mail.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="2" class="shop-item__name">
                                    МЦ «Империя»
                                </a>
                                <span class="shop-item__desc">
                                    Дмитровское шоссе, 161 б
                                </span>
                                <a href="tel:8 (917) 537-17-17 " class="shop-item__link">
                                    8 (917) 537-17-17 
                                </a>
                                <a href="mailto:gm-empire@mail.ru" class="shop-item__link">
                                    gm-empire@mail.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="3" class="shop-item__name">
                                    ТЦ «Черёмушки»
                                </a>
                                <span class="shop-item__desc">
                                    Профсоюзная улица, 56
                                </span>
                                <a href="tel:8 (965) 445-96-49" class="shop-item__link">
                                    8 (965) 445-96-49
                                </a>
                                <a href="mailto:dp3b@divanport.ru" class="shop-item__link">
                                    dp3b@divanport.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="4" class="shop-item__name">
                                    ТРК VEGAS
                                </a>
                                <span class="shop-item__desc">
                                    Каширское шоссе, 24 км МКАД
                                </span>
                                <a href="tel:8 (977) 839-28-59" class="shop-item__link">
                                    8 (977) 839-28-59
                                </a>
                                <a href="mailto:gm-vegas24@mail.ru" class="shop-item__link">
                                    gm-vegas24@mail.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="5" class="shop-item__name">
                                    МЦ «Family room»
                                </a>
                                <span class="shop-item__desc">
                                    Ленинградское шоссе 25
                                </span>
                                <a href="tel:8 (968) 833-83-56" class="shop-item__link">
                                    8 (968) 833-83-56
                                </a>
                                <a href="mailto:lottiirio@mail.ru" class="shop-item__link">
                                    lottiirio@mail.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="6" class="shop-item__name">
                                    МЦ «Family room»
                                </a>
                                <span class="shop-item__desc">
                                    Киевское шоссе, 1,5 км от МКАД
                                </span>
                                <a href="tel:8 (985) 388-02-98" class="shop-item__link">
                                    8 (985) 388-02-98
                                </a>
                                <a href="mailto:lottiroom@mail.ru" class="shop-item__link">
                                    lottiroom@mail.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="7" class="shop-item__name">
                                    ТЦ «Ханой»
                                </a>
                                <span class="shop-item__desc">
                                    Ярославское шоссе, 146, к. 1
                                </span>
                                <a href="tel:8 (925) 004-14-89" class="shop-item__link">
                                    8 (925) 004-14-89
                                </a>
                                <a href="mailto:dp10@divanport.ru" class="shop-item__link">
                                    dp10@divanport.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="8" class="shop-item__name">
                                    МЦ «Roomer»
                                </a>
                                <span class="shop-item__desc">
                                    Улица Ленинская Слобода, 26
                                </span>
                                <a href="tel:8 (916) 016-35-55" class="shop-item__link">
                                    8 (916) 016-35-55
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="9" class="shop-item__name">
                                    МТЦ «Мебель-Сити»
                                </a>
                                <span class="shop-item__desc">
                                    Дмитровское шоссе, 118 к. 1
                                </span>
                                <a href="tel:8 (985) 255-75-69" class="shop-item__link">
                                    8 (985) 255-75-69
                                </a>
                            </div>
                        </div>                        
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="10" class="shop-item__name">
                                    МК «Армада»
                                </a>
                                <span class="shop-item__desc">
                                    Кировоградская улица, 11
                                </span>
                                <a href="tel:8 (977) 934-26-25" class="shop-item__link">
                                    8 (977) 934-26-25
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="11" class="shop-item__name">
                                    ТРЦ «Чайна Таун»
                                </a>
                                <span class="shop-item__desc">
                                    32 км МКАД
                                </span>
                                <a href="tel:8 (926) 370-70-95" class="shop-item__link">
                                    8 (926) 370-70-95
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3 class="shops__sub-title">
                    Московская область
                </h3>
            </div>
            <div class="shops__group">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="12" class="shop-item__name">
                                    ТРК «Красный кит»
                                </a>
                                <span class="shop-item__desc">
                                    г. Красногорск, улица Ленина, 2
                                </span>
                                <a href="tel:8 (926) 370-70-95" class="shop-item__link">
                                    8 (926) 370-70-95
                                </a>
                                <a href="tel:dp9@divanport.ru" class="shop-item__link">
                                    dp9@divanport.ru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3 class="shops__sub-title">
                    Тула
                </h3>
            </div>
            <div class="shops__group">
                <div class="container">
                    <div class="row"> 
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="13" class="shop-item__name">
                                    МЦ «Таурус»
                                </a>
                                <span class="shop-item__desc">
                                    улица Коминтерна, 24 б
                                </span>
                                <a href="tel:8 (427) 279-34-20" class="shop-item__link">
                                    8 (427) 279-34-20
                                </a>
                                <a href="tel:slob83@mail.ru" class="shop-item__link">
                                    slob83@mail.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="14" class="shop-item__name">
                                    ЦМиИ «Мебель Молл»
                                </a>
                                <span class="shop-item__desc">
                                    Осиновая гора, 2
                                </span>
                                <a href="tel:8 (920) 777-06-27" class="shop-item__link">
                                    8 (920) 777-06-27
                                </a>
                                <a href="tel:slob83@mail.ru" class="shop-item__link">
                                    slob83@mail.ru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3 class="shops__sub-title">
                    Хабаровск
                </h3>
            </div>
            <div class="shops__group">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="15" class="shop-item__name">
                                    ИМ «Themebel»
                                </a>
                                <span class="shop-item__desc">
                                    улица Батуевская ветка, 20 б
                                </span>
                                <a href="tel:8 (926) 370-70-95" class="shop-item__link">
                                    8 (914) 216-72-25
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <h3 class="shops__sub-title">
                    Владивосток
                </h3>
            </div>
            <div class="shops__group">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="shop-item">
                                <a href="#map" data-id="16" class="shop-item__name">
                                    МЦ «Таурус»
                                </a>
                                <span class="shop-item__desc">
                                    улица Калинина, 29 б
                                </span>
                                <a href="tel:8 (926) 370-70-95" class="shop-item__link">
                                    8 (996) 423-88-83
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
</body>
</html>