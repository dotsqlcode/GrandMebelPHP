<?php
/*
Template Name: Cooperation
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Mebel - cooperation</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <section class="cover-title" style="background: url('<?php echo get_template_directory_uri();?>/img/cooperation.jpg') no-repeat center/cover">
            <h1 class="cover-title__headline">
                Cотрудничество
            </h1>
        </section>
        <section class="cooperation">
            <div class="container">
                <div class="row step step--reverse">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/diller.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <svg class="step__icon">
                                <use xlink:href="#box" />
                            </svg>
                            <h4 class="step__title">
                                Дилерам
                            </h4>
                            <div class="step__desc-wrapper">
                                <p class="step__description">
                                    Фабрика мебели «Grand mebel» в связи <br />с расширением 
                                    розничной сети ищет <br /> в Москве, Московской области и 
                                    регионах <br /> новые торговые площади.
                                </p>
                                <p class="step__description">
                                    Свои предложения Вы можете выслать, заполнив нижеприведенную форму, 
                                    отправив письмо по электронной почте <span>grandmebel.gm@yandex.ru</span> 
                                    с пометкой «Дилер» или обратиться по телефону <br /> <span>8 (495) 767-51-27</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row step">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/delivery.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <svg class="step__icon">
                                <use xlink:href="#pen" />
                            </svg>
                            <h4 class="step__title">
                                Поставщикам
                            </h4>
                            <div class="step__desc-wrapper">
                                <p class="step__description">
                                    Фабрика мебели «Гранд Мебель» всегда открыта <br /> к  сотрудничеству с поставщиками материалов <br /> и комплектующих. 
                                    Свои предложения Вы можете выслать, заполнив нижеприведенную форму
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cooperation-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <h4 class="cooperation-form__title">
                            Заявка на сотрудничество
                        </h4>
                        <p class="cooperation-form__description">
                            После заполнения и отправки нижеприведенной формы электронной 
                            версии бланка с Вами свяжется представитель фабрики.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="callback">
                            <?php echo do_shortcode('[contact-form-7 id="1325" title="Сотрудничество"]') ?>
                            <div class="callback__agree callback__agree--cooperation">
                                Нажимая на кнопку, вы даете согласие на обработку своих персональных данных
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="map-desc">
                            <h4 class="map-desc__name">
                                Адрес производства
                            </h4>
                            <span class="map-desc__desc">
                                Россия, Московская область, городской округ Мытищи, <br /> деревня Сухарево 140 г
                            </span>
                            <div class="map-desc__contacts">
                                <a href="" class="map-desc__contact">
                                    +7 495 767 51 27
                                </a>
                                <a href="" class="map-desc__contact">
                                    grandmebel.gm@yandex.ru
                                </a>
                            </div>
                            <div class="social-media">
                                <a href="" target="_blank" class="social-media__link">
                                    <svg class="social-media__icon">
                                        <use xlink:href="#instagram" />
                                    </svg>
                                </a>
                                <a href="" target="_blank" class="social-media__link">
                                    <svg class="social-media__icon">
                                        <use xlink:href="#facebook" />
                                    </svg>
                                </a>
                                <a href="" target="_blank" class="social-media__link">
                                    <svg class="social-media__icon">
                                        <use xlink:href="#vk" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa9c145e8375d434fef6dd06487d70af724efa328c9ea92a3faa859ed1f164620&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
</body>
</html>