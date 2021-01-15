<?php
/*
Template Name: About
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Mebel - about</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <section class="cover-title" style="background: url('<?php echo get_template_directory_uri();?>/img/about.jpg') no-repeat center/cover">
            <h1 class="cover-title__headline">
                О нас
            </h1>
        </section>
        <section class="aim">
            <div class="container">
                <div class="row justify-content-center aim__aim-content">
                    <div class="col-lg-10">
                        <h3 class="aim__title">
                            Цель работы компании
                        </h3>
                        <p class="aim__description">
                            В глазах клиентов фабрика «Grand mebel» хочет достигнуть репутации производителя <br />
                            качественной продукции, именно поэтому мы уделяем внимание всем этапам <br /> производства,
                            начиная от качества древесины, наполнителей и тканей обивки до  <br /> упаковки и правильной
                            транспортировки.  Все усилия в производстве нашей мебели <br /> направлены на удовлетворение
                            вкусов и желаний наших клиентов!
                        </p>
                    </div>
                </div>
                <div class="row step">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/start-work.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <h4 class="step__title">
                                Начало работ
                            </h4>
                            <p class="step__description">
                                Контроль и непосредственное управление всем производственным 
                                процессом – одна из сильных сторон компании. Самым ранним 
                                этапом является обработки древесины, из которой создаются <br />
                                каркасы наших диванов. Древесина тщательно анализируется, 
                                чтобы устранить любые недостатки. Впоследствии каждый
                                компонент моделируется опытными мастерами в соответствии
                                дизайну. <br />
                                В сборке мы используем высокотехнологичные материалы лучшего
                                качества, чтобы гарантировать долговечность и комфорт наших диванов
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row step step--reverse">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/material.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <h4 class="step__title">
                                Обивочные материалы
                            </h4>
                            <p class="step__description">
                                С точки зрения качества мы не делаем <br /> компромиссов,  и именно поэтому
                                мы бережно относимся к поиску лучшего сырья. В коллекции нашей фабрики
                                представлены материалы <br /> различных фактур и цветов лучших европейских производителей,
                                а также огромный выбор натуральной кожи и замши. Кожа является одним из приоритетов,
                                и она должна соответствовать самым высоким стандартам в нашей отрасли. Только благодаря
                                непрерывным усилиям и исследованиям материалов наша кожа для обивки имеет истинную ценность.
                                Именно за счёт разнообразия обивочных материалов мы способны представить
                                нашим клиентам широкий выбор моделей, функций и цен
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aim__work aim__work--materials">

            </div>
            <div class="container aim__ligt-desc">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <p>
                            <span>Наша страсть – это мебель!</span> Творческий потенциал и профессионализм руководителей
                            компании на старте производства позволили быстро войти на рынок мебели России
                            и представить уникальные модели. Наша мебель отличается высоким качеством и
                            оригинальным дизайном, а так же уникальностью механизмов, специально разработанными
                            конструкторами фабрики. Развитие бренда “Grand mebel” идет от внутренней политики
                            компании и главный фундамент – это любовь к дизайну.
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <p>
                            Непрерывные исследования и инновации позволяют нам создавать
                            функциональную мебель с изысканным дизайном, не забывая при
                            этом о традиционных ценностях. Совокупностью мастерства конструкторов
                            и тонким вкусом дизайнера создаётся идеальная мебели. Вся ее красота
                            подчеркивается в современных формах и линиях. Четкое видение настоящего
                            и взгляд на будущее, благодаря этому мы развиваемся каждый день.
                            В результате мы добиваемся элегантности современных форм каждого элемента
                        </p>
                    </div>
                </div>
            </div> 
            <div class="aim__work aim__work--manufacture">

            </div>
            <div class="container">
                <div class="row step">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/szycie.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <h4 class="step__title">
                                Искусство сшивания
                            </h4>
                            <p class="step__description">
                                Изготовление чехлов – это один из важнейших <br /> этапов  производства мебели
                                и тут мы уделяем <br /> особое внимание деталям: идеальная строчка, совершенно
                                прямая, выполненная с нитками контрастных цветов, которые не только <br /> подчёркивают
                                соотношение сторон, но недвусмысленно выражают элегантность и стиль. 
                                Немаловажную роль играет высокое качество используемой нами швейной фурнитуры
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row step step--reverse">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/gamma.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <h4 class="step__title">
                                Цветовая гамма
                            </h4>
                            <p class="step__description">
                                В наших коллекциях можно выбрать широкий <br /> спектр оттенков,
                                что позволяет создавать гармоничные сочетания цветов и фактур <br />
                                для одной и той же модели. Мы можем <br />подобрать именно те цвета,
                                которые <br /> органично впишется в Ваш интерьер
                            </p>
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