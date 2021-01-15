<?php
/*
Template Name: Bed
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Mebel</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <section class="cover-title" style="background: url('<?php the_field('catalog-element_banner-bg')?>') no-repeat center/cover">
            <h1 class="cover-title__headline">
                <?php the_field('catalog-element_title') ?>
            </h1>
            <span class="cover-title__sub-title">
                <?php the_field('catalog-element_desc') ?>
            </span>
        </section>
        <section class="bed-offer bed-offer--top">
            <div class="container">
                <div class="row bed-item">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <img src="<?php the_field('catalog-element_image') ?>" alt="enigma" class="bed-item__image">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 offset-xl-1 offset-lg-1 d-flex flex-column justify-content-center">
                        <div class="bed-item__content">
                            <?php the_field('element-catalog_full-desc') ?>
                            <a href="#form" class="refer">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bed-desc">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 d-flex align-items-center">
                        <p class="bed-desc__desc">
                            <?php the_field('catalog-element_desc-full') ?>
                        </p>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <img src="<?php the_field('element-catalog_full-desc-picture') ?>" alt="enigma description" class="bed-desc__image">
                    </div>
                </div>
            </div>
        </section>


        <?php 
            if(get_field('catalog-element_desc2-show')) {
        ?>
        <section class="bed-desc">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-xl-5 col-lg-5 d-flex align-items-center">
                        <p class="bed-desc__desc">
                            <?php the_field('catalog-element_desc2-text') ?>
                        </p>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <img src="<?php the_field('catalog-element_desc2-image') ?>" alt="enigma description" class="bed-desc__image">
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>

        <?php 
            if(get_field('catalog-element_desc3-show')) {
        ?>
        <section class="bed-desc">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 d-flex align-items-center">
                        <p class="bed-desc__desc">
                            <?php the_field('catalog-element_desc3-text') ?>
                        </p>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <img src="<?php the_field('catalog-element_desc3-image') ?>" alt="enigma description" class="bed-desc__image">
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>


        <?php
            if(get_field('element-item_gabarit-block-on')) {
        ?>
        <section class="bed-gabarit">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 offset-lg-1">
                        <img src="<?php the_field('element-item_gabarit-image') ?>" alt="" class="bed-gabarit__image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 d-flex justify-content-end">
                        <div class="bed-gabarit__params">
                            <span class="bed-gabarit__params-name">
                                <?php the_field('element-item_gabarit-lable') ?>
                            </span>
                            <div class="bed-gabarit__params-values">
                                <?php the_field('element-item_gabarit-size') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>

        <?php
            if(get_field('element-item_size-show'))
            {
        ?>
        <section class="bed-params" style="background: url('<?php the_field('element-item_size-bg') ?>') no-repeat center/cover">
            <div class="container d-flex align-items-end justify-content-end">
                <div class="bed-params__params">
                    <span class="bed-params__params-name">
                        <?php the_field('element-item_size-lable') ?>
                    </span>
                    <div class="bed-params__values">
                        <?php the_field('element-item_size-value') ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>

        <?php
            if(get_field('element-item_on-after-before')) {
        ?>
        <section class="bed-beforeafter">
            <div class="container">
                <div class="bed-beforeafter-wrap">
                    <div class="beforeafter cocoen">
                        <img src="<?php the_field('element-item_before-after-front') ?>" alt="" class="beforeafter__image">
                        <img src="<?php the_field('element-item_before-after-back') ?>" alt="" class="beforeafter__image">
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>

        <?php
            if(get_field('element-item_var-svov-show')) {
                $svi_var = get_field('element-item_var-svov');
        ?>
        <section class="bed-variable">
            <div class="container">
                <div class="row">
                    <h3 class="bed-variable__title">
                        Варианты отделочных швов
                    </h3>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                        <img src="<?php echo $svi_var['element-item_var-svov-img1'] ?>" alt="" class="bed-variable__image">
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                        <img src="<?php echo $svi_var['element-item_var-svov-img2'] ?>" alt="" class="bed-variable__image">
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                        <img src="<?php echo $svi_var['element-item_var-svov-img3'] ?>" alt="" class="bed-variable__image">
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>

        <?php
            if(get_field('element-item_mecha-show')) {
                $svi_var = get_field('element-item_var-svov');
        ?>
        <section class="bed-mechanism">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="bed-mechanism__title">
                            Механизм трансформации
                        </h3>
                        <a href="https://grand-mebel.moscow/mechanisms" class="bed-mechanism__sub-link">
                            Узнать больше
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-center">
                        <img src="<?php the_field('element-item_mecha-img') ?>" alt="" class="bed-mechanism__image">
                    </div>
                    <div class="offset-xl-1 col-xl-5">
                        <?php the_field('element-item_mecha-desc') ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>


        <?php
            if(get_field('element-item_var-svov-show')) {
                $lokot_var = get_field('element-item_var-lokot');
        ?>
        <section class="bed-variable">
            <div class="container">
                <div class="row">
                    <h3 class="bed-variable__title">
                        Варианты подлокотников
                    </h3>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <img src="<?php echo $lokot_var['element-item_var-lokot-img1'] ?>" alt="" class="bed-variable__image">
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <img src="<?php echo $lokot_var['element-item_var-lokot-img2'] ?>" alt="" class="bed-variable__image">
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <img src="<?php echo $lokot_var['element-item_var-lokot-img3'] ?>" alt="" class="bed-variable__image">
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <img src="<?php echo $lokot_var['element-item_var-lokot-img4'] ?>" alt="" class="bed-variable__image">
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>



        <?php
            if(get_field('element-item_complect-show')) {
        ?>

        <section class="complect-item">
            <div class="container">
                <div class="bed-complect row">
                    <div class="col-xl-7">
                        <div class="bed-complect__content-wrap">
                            <div class="bed-complect__content">
                                <h3 class="bed-complect__title">
                                    Комплектация и характеристики
                                </h3>
                                <p class="bed-complect__desc">
                                    <?php the_field('element-item_complect-desc') ?>
                                </p>
                                <span class="bed-complect__warning">
                                    <?php the_field('element-item_complect-sub-desc') ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <img src="<?php the_field('element-item_complect-image') ?>" alt="enigma material" class="bed-complect__picture">
                    </div>
                </div>
            </div>
        </section>

        <?php
            }
        ?>


        <?php
            if(get_field('element-item_desc-bed-show')) {
        ?>

        <section class="bed-place">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-5">
                        <img src="<?php the_field('element-item_desc-bed-image') ?>" alt="enigma description" class="bed-place__image">
                    </div>
                    <div class="col-xl-5 col-lg-7 d-flex align-items-center">
                        <div class="bed-place__content">
                            <h3 class="bed-place__title">
                                Описание спального места
                            </h3>
                            <?php the_field('element-item_desc-bed') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            }
        ?>


        <?php
            if(get_field('element-item_dop-desc-show')) {
        ?>
        <section class="bed-offer">
            <div class="container">
                <div class="row bed-item bed-item--reverse">
                    <div class="col-xl-3 col-lg-3 col-md-5 d-flex flex-column justify-content-center">
                        <div class="bed-item__content">
                            <?php the_field('element-item_dop-desc-text') ?> 
                            <a href="<?php the_field('catalog-element_desc-full-link') ?>" class="refer">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 offset-xl-2 offset-lg-2">
                        <img src="<?php the_field('element-item_dop-desc-image')?>" alt="enigma" class="bed-item__image">
                    </div> 
                </div>
            </div>
        </section>
        <?php
            }
        ?>

        <?php
            if(get_field('element-item_carkas-block-show')) {
                $carcas_var = get_field('element-item_carkas-var');
                $glass_var = get_field('element-item_carkas-glass');
                $mirror_var = get_field('element-item_carkas-mirror');
        ?>
        <section class="bed-frame">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="bed-frame__title">
                            Варианты отделки каркаса
                        </h3>
                    </div>
                </div>
                <div class="row bed-frame__frame-row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $carcas_var['element-item_carkas-var-1'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $carcas_var['element-item_carkas-var-desc-1'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $carcas_var['element-item_carkas-var-2'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $carcas_var['element-item_carkas-var-desc-2'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $carcas_var['element-item_carkas-var-3'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $carcas_var['element-item_carkas-var-desc-3'] ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="bed-frame__title">
                            Варианты столешницы
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="bed-frame__title bed-frame__title--sub">
                            Стекло
                        </h3>
                    </div>
                </div>
                <div class="row bed-frame__frame-row">
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $glass_var['element-item_carkas-glass-1'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $glass_var['element-item_carkas-glass-desc-1'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $glass_var['element-item_carkas-glass-2'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $glass_var['element-item_carkas-glass-desc-2'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $glass_var['element-item_carkas-glass-3'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $glass_var['element-item_carkas-glass-desc-3'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $glass_var['element-item_carkas-glass-4'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $glass_var['element-item_carkas-glass-desc-4'] ?>
                            </span>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="bed-frame__title bed-frame__title--sub">
                            Зеркало
                        </h3>
                    </div>
                </div>
                <div class="row bed-frame__frame-row">
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $mirror_var['element-item_carkas-mirror-1'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $mirror_var['element-item_carkas-mirror-desc-1'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $mirror_var['element-item_carkas-mirror-2'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $mirror_var['element-item_carkas-mirror-desc-2'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $mirror_var['element-item_carkas-mirror-3'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $mirror_var['element-item_carkas-mirror-desc-3'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                        <div class="bed-frame__item-big">
                            <img src="<?php echo $mirror_var['element-item_carkas-mirror-4'] ?>" alt="" class="bed-frame__item-big-image">
                            <span class="bed-frame__item-big-desc">
                                <?php echo $mirror_var['element-item_carkas-mirror-desc-4'] ?>
                            </span>
                        </div>
                    </div>
                    
                    
                </div>
        </section>
        <?php
            }
        ?>



        <section class="bed-schems">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="bed-schems__title">
                            <?php the_field('element-item_schem-title') ?>
                        </h2>
                        <?php
                            if(get_field('element-item_schem-popup-show')) { 
                        ?>
                            <a class="bed-schems__popup" href="<?php the_field('element-item_schem-popup') ?>">Габариты модулей</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="bed-slider">
                <?php
                    $schems = get_field('element-item_schem-slides');
                    foreach($schems as $schem) {
                        
                        if($schem != '') {
                ?>
                            <div class="bed-slider__slide">
                                <img src="<?php echo $schem?>" alt="enigma schem" class="bed-slider__image">
                            </div>
                <?php
                        }
                    }
                ?>
                
            </div>
        </section>

        <?php
            if(get_field('element-item_popular-fabrics-show')) {
        ?>
            <section class="bed-popmat">
            <h3 class="bed-popmat__title">
                Популярные обивки
            </h3>
            <div class="container-fluid">
                <div class="row">
                    <?php
                        $fabrics = get_field('element-item_fabrics-images');
                        foreach($fabrics as $fabric) {
                            
                            if($fabric != '') {
                    ?>
                            <div class="col-xl-2 col-md-2 col-xs-4 col-4">
                                <div class="bed-popmat__mat-wrap">
                                    <img src="<?php echo  $fabric?>" alt="" class="bed-popmat__mat">
                                </div>
                            </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <a href="http://grand-mebel.moscow/fabrics/" class="bed-popmat__link-more">
                Узнать больше
            </a>
        </section>
        <?php
            }
         ?>
        
        <section class="callback-form callback-form--bed" id="form">
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
                </div>
            </div>
        </section>
        <?php include 'refers.php' ?>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
</body>
</html>