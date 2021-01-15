<?php
/*
Template Name: Fabrics
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
    <main class="fabrics">
        <section class="cover-title" style="background: url('<?php echo get_template_directory_uri();?>/img/fabrics.jpg') no-repeat center/cover">
            <h1 class="cover-title__headline">
                Ткани
            </h1>
        </section>
        <div class="container">
            <div class="row step step--reverse">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/shenil.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/green.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/blue.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/gold.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/yait.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/gray.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/brown.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/green down.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Шенилл
                        </h4>
                        <div class="step__desc-wrapper">
                            <p class="step__description">
                                Это одна из самых популярных тканей
                                в изготовлении мягкой мебели. Надо сразу отметить,
                                что это натуральный материал (хлопок, вискоза), в который в
                                незначительной мере добавлены искусственные и синтетические волокна.
                            </p>
                            <p class="step__description">
                                Если определять, как выглядит ткань шенилл, то это ворсовая ткань,
                                мохнатые (начесанные) нити которой аккуратно наносятся на основные,
                                что создает эффект ворса
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row step">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/rogoja.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/jrange.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/big brown.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/gray up.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/big gray.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/gray small right.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/brown down right.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/brown down.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Рогожка
                        </h4>
                        <div class="step__desc-wrapper">
                            <p class="step__description">
                                Этот плотный, грубый материал получается в результате двойного или
                                тройного переплетения нитей. В результате на поверхности полотна
                                образуются крупные фактурные квадраты, расположенные в шахматном порядке.
                            </p>
                            <p class="step__description">
                                Между тем тканая материя, которая используется при изготовлении мебели 
                                и домашнего текстиля, состоит из более мягких хлопчатобумажных, 
                                льняных, шелковых и шерстяных нитей. Поверхность полотна ворсистая, 
                                обладает шелковистым блеском
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row step step--reverse">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/jakard.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/up small.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/big blue.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/small right up.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/big gray1.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/small orange.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/small dark blue.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/small rigt down.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Жаккард
                        </h4>
                        <div class="step__desc-wrapper">
                            <p class="step__description">
                                Это  материал с крупными узорами, которые объемны на ощупь и придают особую
                                роскошь. Это своего рода переплетение нитей, создающих тканый шедевр.
                            </p>
                            <p class="step__description">
                                Ткань жаккард может быть изготовлена как из натуральных волокон хлопка, льна, шелка, 
                                синтетических тканей или совмещать в себе много переплетений разного происхождения. 
                                Поэтому четко отнести ее к какой-либо группе тканей невозможно
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row step">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/velur.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/pink.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/big dark pink.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/small right upp.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/Big gray up.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/br1.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/br 2.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/small right ddown.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Велюр
                        </h4>
                        <p class="step__description">
                            Бархатистая, приятная на ощупь, мягкая ткань. Ворс может быть расположен 
                            вертикально по всей ткани или на отдельных участках приглажен в одну сторону. 
                            Ворс отделывают тиснением, расчёсывают по трафарету или укладывают в виде разнообразных рисунков, 
                            поэтому велюр может быть гладким, фасонным, тиснёным и др.  Для обивки мягкой мебели применяются 
                            велюры хлопчатобумажные и шерстяные
                        </p>
                    </div>
                </div>
            </div>

            <div class="row step step--reverse">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/flok.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/gr3.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/brr 4.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bllu1.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/pr1.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/sssmal1 pink" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bbblue11.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bblue dowwn.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Флок
                        </h4>
                        <div class="step__desc-wrapper">
                            <p class="step__description">
                                Любая бархатистая поверхность вызывает только приятные тактильные ощущения. 
                                И флок – ткань не исключение. Недаром таким спросом пользуются диваны, 
                                кресла и пуфики с густым низким ворсом.
                            </p>
                            <p class="step__description">
                                Все флоковые ткани производятся нетканными методами. 
                                Флок состоит из двух частей: основы и ворса. Основа может быть хлопком, 
                                полиэстером или нейлоном. На нее приклеивается ворс с помощью новых 
                                специальных технологий.
                            </p>
                            <p class="step__description">
                                Готовый материал обрабатывается специальными составами, улучшающими его характеристики: 
                                придающими блеск, антистатические качества, водостойкость и т. д. Мебель, 
                                изготовленнаяиз флока, прослужит Вам длительное время
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section class="cover-title" style="background: url('<?php echo get_template_directory_uri();?>/img/skin.jpg') no-repeat center/cover">
            <h2 class="cover-title__headline">
                Кожа
            </h2>
        </section>
        <div class="container">
            <div class="row step">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/natkoja.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/redd.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/ggarr1.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bblluue1.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/greeee2.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/g1g.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/dddaarkbb2.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/grar22.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Натуральная кожа
                        </h4>
                        <p class="step__description">
                            Кожа — прочный и гибкий долговечный материал, получаемый путём выделки шкур в
                            условиях традиционного хозяйства
                            или промышленного предприятия. Натуральная кожа является основным облицовочным 
                            материалом для изготовления высококачественной, «престижной» мягкой мебели
                        </p>
                    </div>
                </div>
            </div>

            <div class="row step step--reverse">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/ecokoja.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/ye2.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bbblack.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/brrroowo2.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bbbig garary12.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/ggagaara12.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/daddadrk bbbrow.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/yayayw1.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Экокожа
                        </h4>
                        <p class="step__description">
                            Состоит из натуральной хлопковой основы — подложки, 
                            на которую нанесена полимерная пленка. Благодаря современным 
                            технологиям,на тканевой основе изделия никогда не заметишь каких-либо деформаций, 
                            а вот прочность, мягкость и эластичность присутствуют в полном объеме. Полиуретан обеспечивает 
                            материалу отличные эксплуатационные способности: не боится пониженной температуры, восстанавливается 
                            после небольших повреждений. При правильном уходе настоящая экокожа прослужит долго, радуя красивым внешним видом
                        </p>
                    </div>
                </div>
            </div>

            <div class="row step">
                <div class="col-lg-6 col-lg-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/natkoja.png" alt="ecokoja" class="step__fabrics-image">
                    <div class="step__fabrics">
                        <img src="<?php echo get_template_directory_uri();?>/img/upupup22.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/ggrggrgrgeg22n.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/rrrrirrghtt uu.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/bigbigbig brown.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/sssmsamal brown.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/rrrirght bbro33n.png" alt="" class="step__fabrics-hover">
                        <img src="<?php echo get_template_directory_uri();?>/img/rightttt343.png" alt="" class="step__fabrics-hover">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="step__content">
                        <h4 class="step__title">
                            Искусственная кожа
                        </h4>
                        <p class="step__description">
                            Искусственная кожа производится путем напыления специального полимера на тканевую основу. 
                            Такой вариант обработки позволяет получить материал, по качествам ничуть не уступающий 
                            натуральной коже. Она прекрасно подходит для отделки мягкой мебели
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
</body>
</html>