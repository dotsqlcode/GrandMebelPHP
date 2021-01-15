<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Mebel</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
    
<body>
    <?php include 'header.php' ?>
    <main>
        <section class="catalog-wrap">
            <div class="catalog-slider">
            <?php
                global $post;

                $myposts = get_posts([ 
                    'numberposts' => 1000,
                    'category_name'    => 'main_slider',
                    'orderby'     => 'date',
	                'order'       => 'ASC',
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                            <div class="catalog-slider__slide" style="background: url('<?php the_field('background-image_main-slider') ?>') no-repeat center/cover">
                                <div class="container d-flex flex-column justify-content-center">
                                    <h3 class="catalog-slider__title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <?php the_field('slide-desc_main-slider') ?>
                                    <a href="<?php the_field('link_main-slider') ?>" class="refer">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        <?php 
                    }
                } else {
                    // Постов не найдено
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?>
            </div>
        </section>
        <section class="catalog">
            <nav class="catalog-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 d-flex justify-content-center">
                            <a href="<?php the_field('catalog-sofa_main-page') ?>" class="catalog-menu__link">
                                <svg class="catalog-menu__item">
                                    <use xlink:href="#sofa" />
                                </svg>
                                <span class="catalog-menu__item-name">
                                    Диваны
                                </span> 
                            </a>                     
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 d-flex justify-content-center">
                            <a href="<?php the_field('catalog-cheir_main-page') ?>" class="catalog-menu__link">
                                <svg class="catalog-menu__item">
                                    <use xlink:href="#cheirs" />
                                </svg>
                                <span class="catalog-menu__item-name">
                                    Кресла
                                </span> 
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 d-flex justify-content-center">
                            <a href="<?php the_field('catalog-beds_main-page') ?>" class="catalog-menu__link">
                                <svg class="catalog-menu__item">
                                    <use xlink:href="#bed" />
                                </svg>
                                <span class="catalog-menu__item-name">
                                    Кровати
                                </span> 
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 d-flex justify-content-center">
                            <a href="<?php the_field('catalog-console_main-page') ?>" class="catalog-menu__link">
                                <svg class="catalog-menu__item">
                                    <use xlink:href="#consoles" />
                                </svg>
                                <span class="catalog-menu__item-name">
                                    Консоли
                                </span> 
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="catalog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <a href="<?php the_field('catalog-sofa_main-page') ?>" class="catalog-section__item">
                                <div class="catalog-section__mark">
                                    <img src="<?php echo get_template_directory_uri();?>/img/sofa.png" alt="Диваны" class="catalog-section__image">
                                </div>
                                <h4 class="catalog-section__name">
                                    Диваны
                                </h4>
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <a href="<?php the_field('catalog-cheir_main-page') ?>" class="catalog-section__item catalog-section__item--reverse">
                                <div class="catalog-section__mark">
                                    <img src="<?php echo get_template_directory_uri();?>/img/cheir.png" alt="Диваны" class="catalog-section__image">
                                </div>
                                <h4 class="catalog-section__name">
                                    Пуфы и кресла
                                </h4>
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <a href="<?php the_field('catalog-beds_main-page') ?>" class="catalog-section__item">
                                <div class="catalog-section__mark">
                                    <img src="<?php echo get_template_directory_uri();?>/img/bed.png" alt="Диваны" class="catalog-section__image">
                                </div>
                                <h4 class="catalog-section__name">
                                    Кровати
                                </h4>
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <a href="<?php the_field('catalog-console_main-page') ?>" class="catalog-section__item catalog-section__item--reverse">
                                <div class="catalog-section__mark">
                                    <img src="<?php echo get_template_directory_uri();?>/img/console.png" alt="Диваны" class="catalog-section__image">
                                </div>
                                <h4 class="catalog-section__name">
                                    Консоли
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <h4 class="offer__title">
                            Новый салон
                        </h4>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <h5 class="offer__sub-title">
                            Mobel Expo на Нахимовском
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <p class="offer__description">
                            Приглашаем к сотрудничеству дизайн-студии, дизайнеров интерьеров и архитекторов, 
                            готовых участвовать и  реализовывать свои проекты совместно с нашей компанией
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="feedbacks">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h3 class="feedbacks__title">
                            Отзывы
                        </h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feedback-slider">
                        <?php
                            global $post;

                            $myposts = get_posts([ 
                                'numberposts' => 1000,
                                'category_name'    => 'feedbacks_slider'
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                        <div class="feedback-slider__slide">
                                            <div class="feedback-slider__slide-wrapper">
                                                <div class="feedback-slider__slide-image-wrapper">
                                                    <img src="<?php the_field('feedback-photo_feedbacks-slider') ?>" alt="Отзыв" class="feedback-slider__slide-image">
                                                </div>
                                                <div class="feedback-slider__slide-content">
                                                    <p class="feedback-slider__slide-feed">
                                                        <?php the_field('feedback-text_feedbacks-slider') ?>
                                                    </p>
                                                    <span class="feedback-slider__slide-username">
                                                        <?php the_field('feedback-username_feedbacks-slider') ?>
                                                    </span>
                                                    <span class="feedback-slider__slide-work">
                                                        <?php the_field('feedback-work_feedbacks-slider') ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                }
                            } else {
                                // Постов не найдено
                            }

                            wp_reset_postdata(); // Сбрасываем $post
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="callback-form callback-form--main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h4 class="callback-form__title">
                            Заказать звонок
                        </h4>
                        <p class="callback-form__description">
                            Заполните форму, и наши сотрудники <br />
                            свяжутся с вами в ближайщее время
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="callback">
                            <?php echo do_shortcode('[contact-form-7 id="1324" title="Имя / Телефон"]'); ?>
                        </div>
                    </div>
                    <div class="callback__agree callback__agree--main">
                        Нажимая на кнопку, вы даете согласие на обработку своих персональных данных
                    </div>
                </div>
            </div>
        </section>
        <?php include 'refers.php'?>
        <section class="map">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="map-desc">
                            <h4 class="map-desc__name">
                                Магазины
                            </h4>
                            <span class="map-desc__desc">
                                Отдел оптовых продаж
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
                                <a href="https://www.instagram.com/grandmebel_official/?igshid=r2b7ppc3kzra" target="_blank" class="social-media__link">
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
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Addfc8cd9de85ddc9dc00b7313ed7b97351331cec7875109064c96a4970860e89&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
<script src="4e6b4e7e57ae748e3ff4.js"></script></body>
</html>