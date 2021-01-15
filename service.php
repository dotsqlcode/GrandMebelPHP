<?php
/*
Template Name: Service
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Mebel - service</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <section class="cover-title" style="background: url('<?php echo get_template_directory_uri();?>/img/service.jpg') no-repeat center/cover">
            <h1 class="cover-title__headline">
                Сервис
            </h1>
        </section>
        <section class="service-terms">
            <div class="container">
                <h2 class="service-terms__title">
                    Условия гарантии
                </h2>
                <span class="service-terms__description">
                    Гарантийный срок изделий – <span>18 месяцев</span> с даты выпуска
                </span>
            </div>
            <div class="service-terms__items-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 offset-xl-1">
                            <div class="term-item">
                                <div class="term-item__num">
                                    01
                                </div>
                                <p class="term-item__content">
                                    Гарантийное обслуживание включает в себя проведение 
                                    ремонтных работ и замену дефектных частей изделия
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 offset-xl-6">
                            <div class="term-item">
                                <div class="term-item__num">
                                    02
                                </div>
                                <p class="term-item__content">
                                    Недостатки изделий, выявленные в течение гарантийного срока и возникшие по вине 
                                    фабрики, будут бесплатно устранены cервисной службой «Grand mebel»
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 offset-xl-1">
                            <div class="term-item">
                                <div class="term-item__num">
                                    03
                                </div>
                                <p class="term-item__content">
                                    На уцененную мебель притензии к качеству и внешнему виду не  принимаются 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2 offset-lg-1 d-flex align-items-end">
                            <svg class="service-terms__icon">
                                <use xlink:href="#hummer" />
                            </svg>
                        </div>
                        <div class="col-xl-5 offset-xl-3">
                            <div class="term-item m-0">
                                <div class="term-item__num">
                                    04
                                </div>
                                <p class="term-item__content">
                                    Претензии по внешнему виду изделия, некомплекту, а также несоответствию заказа принимаются только  
                                    при получении изделия заказчиком. В дальнейшем такие претензии 
                                    не принимаются, а все работы по ремонту осуществляются только за счет покупателя
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-desc" style="background: url('<?php echo get_template_directory_uri();?>/img/cover-service1.jpg') no-repeat center/cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <p>
                            Характер дефекта определяет эксперт предприятия, который составляет при осмотре мебели акт экспертизы, о чем сообщает покупателю
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="warranty-service">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="warranty-service__title">
                            Гарантийное обслуживание не производится в случае:
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5">
                        <ul class="warranty-service__list">
                            <li class="warranty-service__list-item">
                                1) Истечения гарантийного срока
                            </li>
                            <li class="warranty-service__list-item">
                                2) Нанесения ущерба изделию или его утери вследствие обстоятельств непреодолимой силы (стихия, пожар, наводнение, несчастные случаи и т.д.)
                            </li>
                            <li class="warranty-service__list-item">
                                3) Нанесения ущерба изделию в результате умышленных или ошибочных действий потребителя
                            </li>
                            <li class="warranty-service__list-item">
                                4) Нанесения изделию ущерба в результате внесения изменений в его конструкцию
                            </li>
                            <li class="warranty-service__list-item">
                                5) Нанесения изделию ущерба в результате внесения изменений в его конструкцию
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <ul class="warranty-service__list">
                            <li class="warranty-service__list-item">
                                6) Наличия следов постороннего вмешательства в изделие или ремонта изделия самостоятельно либо организациями, предприятиями или частными лицами, не уполномоченными на это Фабрикой
                            </li>
                            <li class="warranty-service__list-item">
                                7) Невыполнения условий эксплуатации
                            </li>
                            <li class="warranty-service__list-item">
                                8) Нанесения ущерба изделию, вызванного попаданием внутрь изделия посторонних предметов, жидкостей, животных, насекомых и т.д.
                            </li>
                            <li class="warranty-service__list-item">
                                9) Превышения допустимых нагрузок на механизм трансформации
                            </li>
                            <li class="warranty-service__list-item">
                                10) Наличия на изделии механических повреждений
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-warning">
            <div class="container">
                Во всех вышеперечисленных случаях сервисное обслуживание производится за счет покупателя по фабричным расценкам
            </div>
        </section>
        <section class="warranty-service">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="warranty-service__title">
                            Примечание:
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5">
                        <ul class="warranty-service__list">
                            <li class="warranty-service__list-item">
                                ► Легкие складки на облицовочном материале мягких элементов, возникающие после снятия нагрузок 
                                и исчезающие после легкого разглаживания рукой, допускаются и не являются дефектом мебели
                            </li>
                            <li class="warranty-service__list-item">
                                ► Незначительные разнооттеночность цвета и отличие рисунка лакокрасочного покрытия (декора) не является дефектом мебели
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <ul class="warranty-service__list">
                            <li class="warranty-service__list-item">
                                ► Мелкие волосяные трещины (так называемый “эффект растрескивания”), 
                                потертости мебельного покрытия из натуральной кожи, возникающие при эксплуатации мебели в 
                                местах постоянной эксплуатации не являются дефектом мебели
                            </li>
                            <li class="warranty-service__list-item">
                                ► Претензии на изделия с загрязнениями, возникшими в процессе 
                                эксплуатации изделия, фабрикой не принимаются
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-desc" style="background: url('<?php echo get_template_directory_uri();?>/img/cover-service2.jpg') no-repeat center/cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <p>
                            Фабрика оставляет за собой право без предварительного уведомлениявносить конструктивные изменения в моделях 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-offer">
            <div class="container">
                <div class="row step">
                    <div class="col-lg-6 col-lg-6">
                        <div class="step__image-wrap">
                            <img src="<?php echo get_template_directory_uri();?>/img/service-offer.jpg" alt="" class="step__image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="step__content">
                            <h4 class="step__title">
                                Сервисное обслуживание
                            </h4>
                            <div class="step__desc-wrapper">
                                <div class="step__desc-wrapper">
                                    <p class="step__description">
                                        Гарантийное сервисное обслуживание осуществляется по заявлению покупателя, поданному 
                                        в салон, где была приобретена мебель, или в Службу сервиса Фабрики. Устранения 
                                        выявленных недостатков осуществляется Службой сервиса Фабрики в течение <span>45 дней</span> 
                                        с момента вывоза изделия на Фабрику и включает в себя проведение ремонтных 
                                        работ и замену дефектных частей изделия.
                                    </p>
                                    <p class="step__description">
                                        Ремонт производится на дому или на Фабрике, в зависимости от характера дефекта. 
                                        Вывоз и ремонт осуществляется после предварительной чистки мебельного покрытия покупателем. 
                                        По вопросам гарантийного обслуживания обращайтесь по телефону или оставьте заявку в 
                                        сервисную службу, заполнив бланк заявки:
                                    </p>
                                </div>
                            </div>
                            <a href="tel:84957675127" class="step__number">
                                8 495 767 51 27
                            </a>
                            <span class="step__open-time">
                                Понедельник - пятница с 9-00 до 18-00
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-terms">
            <div class="container">
                <h2 class="service-terms__title">
                    Постгарантийное обслуживание
                </h2>
                <span class="service-terms__description">
                    По вопросам постгарантийного обслуживания Вы можете обратиться в сервисную службу фабрики, осуществляющую следующие виды работ:
                </span>
            </div>
            <div class="service-terms__items-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-1">
                            <div class="term-item">
                                <div class="term-item__num">
                                    01
                                </div>
                                <h4 class="term-item__title">
                                    Мелкий ремонт мягкой мебели
                                </h4>
                                <p class="term-item__content">
                                    Ремонт мебели, у которой закончился срок гарантии 
                                    (например: замена колесиков, при которой не требуется вывоз дивана на Фабрику)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 offset-xl-5">
                            <div class="term-item">
                                <div class="term-item__num">
                                    02
                                </div>
                                <h4 class="term-item__title">
                                    Перетяжка мягкой мебели
                                </h4>
                                <p class="term-item__content">
                                    Это могут быть ткани из единой коллекции тканей фабрики, а также ткани, предоставленные клиентом. 
                                    Единственное ограничение - ткань должна быть мебельной. Фабрика «Гранд Мебель» 
                                    также осуществляет перетяжку кожаной мебели
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 offset-xl-1">
                            <div class="term-item">
                                <div class="term-item__num">
                                    03
                                </div>
                                <h4 class="term-item__title">
                                    Замена каркасов и других частей дивана
                                </h4>
                                <p class="term-item__content">
                                    Возможна замена как на дому, так и с вывозом изделия на фабрику. 
                                    При этом, по желанию клиента, возможно изменение габаритных размеров
                                    и изменение формы различных частей дивана
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-form" style="background: url('<?php echo get_template_directory_uri();?>/img/service-form.jpg') no-repeat center/cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <h4 class="service-form__title">
                            Заявка на сервис
                        </h4>
                        <p class="service-form__description">
                            После заполнения и отправки нижеприведенной формы электронной <br />
                            версии бланка с Вами свяжется представитель сервисной службы.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="callback">
                            <?php echo do_shortcode('[contact-form-7 id="1326" title="Сервис"]') ?>
                            
                        </div>
                    </div>
                    <div class="callback__agree callback__agree--service">
                        Нажимая на кнопку, вы даете согласие на обработку своих персональных данных
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php' ?>
    <?php wp_footer(); ?>
</body>
</html>