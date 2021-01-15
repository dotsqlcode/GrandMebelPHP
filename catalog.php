<?php
/*
Template Name: Catalog
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
        <section class="cover-title" style="background: url('<?php the_field('catalog-page-image') ?>') no-repeat center/cover">
            <h1 class="cover-title__headline">
                <?php the_field('catalog-page-title') ?>
            </h1>
        </section>
            
        <section class="catalog-items">
            <div class="container">
                <div class="row">
                    
                <?php
                global $post;

                $myposts = get_posts([ 
                    'numberposts' => 1000,
                    'category_name'    => 'catalog_link',
                    'tag' => get_field('catalog_slug'),
                    'orderby'     => 'date',
	                'order'       => 'ASC',
                ]);

                $count = 0;

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        if($count % 2 == 0) {
                                
                        ?>
                            <div class="col-xl-4 offset-xl-1 col-lg-4 offset-lg-1">
                                <a href="<?php the_field('catalog-item_link') ?>" class="catalog-item">
                                    <div class="catalog-item__image-wrap">
                                        <img src="<?php the_field('catalog-item_image') ?>" alt="" class="catalog-item__image">
                                    </div>
                                    <h3 class="catalog-item__title">
                                        <?php the_field('catalog-item_name') ?>
                                    </h3>
                                    <div class="catalog-item__desc">
                                        <?php the_field('catalog-item_desc') ?>
                                    </div>
                                </a>
                            </div>
                            
                        <?php 
                        } else {
                            ?>
                            <div class="col-xl-4 offset-xl-2 col-lg-4 offset-lg-2">
                                <a href="<?php the_field('catalog-item_link') ?>" class="catalog-item">
                                    <div class="catalog-item__image-wrap">
                                        <img src="<?php the_field('catalog-item_image') ?>" alt="" class="catalog-item__image">
                                    </div>
                                    <h3 class="catalog-item__title">
                                        <?php the_field('catalog-item_name') ?>
                                    </h3>
                                    <div class="catalog-item__desc">
                                        <?php the_field('catalog-item_desc') ?>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }

                        $count ++;
                    }
                } else {
                    // Постов не найдено
                }
                $count = 0;
                wp_reset_postdata(); // Сбрасываем $post
                ?>
                    
                    
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
</body>
</html>