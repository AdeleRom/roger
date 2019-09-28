<!DOCTYPE html>
<html>

<head>
    <?php include 'blocks/head.php'; ?>
 <link href="/assets/css/template.css" rel="stylesheet" type="text/css" />

 <link href="/assets/less/template.less" rel="stylesheet" type="text/css" />
 <link href="/assets/less/variables.less" rel="stylesheet" type="text/css" />
 <link href="/assets/less/style.less" rel="stylesheet" type="text/css" />
 <link href="/assets/plugins/swiper/swiper.min.css" rel="stylesheet" type="text/css" />
 <link href="/assets/css/admin.css" rel="stylesheet" type="text/css" />
 <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <header class="header vide" data-video="<?php echo $baseurl; ?>/assets/video/head_bg.mp4" data-poster="<?php echo $baseurl; ?>/assets/video/poster.jpg" id="main">
            <div class="container">
                <div class="top-line d-flex flex-wrap justify-content-between align-items-center">
                    <div class="for-date d-flex align-items-center order-1">
                        <div class="icon">
                            <img src="<?php echo $baseurl; ?>/assets/images/calendar-icon.svg" alt="">
                        </div>
                        <div class="txt">
                            <p><span><?php /*echo $currentDate->format('j'); ?> <?php echo monthTranslate( $currentDate->format('n') );*/ ?>17 сентября 2019</span> <br> 20:00 МСК</p>
                        </div>
                    </div>
                    <div class="min-t text-center order-3 order-md-2">
                        <p>Бесплатный мастер-класс с психологом <br> и автором методики Паззлов <span>Эдуардом Мавлютовым</span></p>
                    </div>
                    <div class="tips d-flex order-2 order-md-3">
                        <div data-toggle="tooltip" data-placement="top" title="Прямой эфир">
                            <img src="<?php echo $baseurl; ?>/assets/images/near-wwd.svg" alt="">
                        </div>
                        <div data-toggle="tooltip" data-placement="top" title="Доступ из любой точки мира">
                            <img src="<?php echo $baseurl; ?>/assets/images/worldwide.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="middle-row">
                    <div class="row no-gutters justify-content-center align-items-end">
                        <div class="col-12 col-md-4">
                            <div class="md-left">
                                <h1 class="title">Выйди на новый уровень результата в доходах,<br class="d-none d-xl-inline">взаимоотношениях и своем здоровье,</h1>
                                <div class="subtitle">
                                    <p class="big"> <span class="w-bg">убрав ограничивающие барьеры в своей голове</span></p>
                                </div>
                                <div class="txt">
                                    Регистрируйтесь уже сейчас и изучайте  <br class="d-none d-xl-inline">  <span class="blue">чек-лист:</span> <br class="d-md-none">  «Некорректные намерения, <br class="d-none d-xl-inline">  которые управляют вами»
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-lg-4">
                            <div class="md-middle d-flex flex-column">
                                <?php /* <div class="img order-2 order-md-1">
                                    <img src="<?php echo $baseurl; ?>/assets/images/middle-img.png" alt="">
                                </div> */ ?>
                                <div class="order order-1 order-md-2">
                                    <a href="#" class="go-to-block" data-target=".last-section">Забронировать место</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4">
                            <div class="md-right">
                                <?php /* <div class="icon">
                                    <img src="<?php echo $baseurl; ?>/assets/images/a-symbol.svg" alt="">
                                </div>  */ ?>
                                <p class="big blue mid-txt">Получите доступ <br class="d-none d-xl-inline"> к закрытой технологии улучшения своей жизни, стоимостью 600 тыс. рублей,</p>
                                <div class="bot-txt">
                                    которая была доступна только <br class="d-none d-xl-inline"> миллионерам и которая уже помогла более 1000 людям
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="transformed">
            <div class="container">
                <div class="pictures-row">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-12 col-md-6 col-lg-4 order-2 order-lg-1">
                            <div class="pt-left d-flex flex-column">
                                <div class="pt-inner ptt-1">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-left-1.png" alt="">
                                        <div class="hd-txt">Сооснователь сообщества «Бизнес Молодость» </div>
                                    </div>
                                </div>
                                <div class="pt-inner ptt-2">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-left-2.png" alt="">
                                        <div class="hd-txt">Телеведущая</div>
                                    </div>
                                </div>
                                <div class="pt-inner ptt-3">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-left-3.png" alt="">
                                        <div class="hd-txt">Эксперт в области налоговой безопасности</div>
                                    </div>
                                </div>
                                <div class="pt-inner ptt-4">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-left-4.png" alt="">
                                        <div class="hd-txt">Сооснователь сообщества «Бизнес Молодость»</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 order-1 order-lg-2 mid-column">
                            <div class="title text-center">Вместе с нами <br class="d-none d-xl-inline"> улучшили<br class="d-none d-xl-inline"> свою жизнь:</div>
                            <div class="pt-inner pt-mid text-center">
                                <div class="img">
                                    <img src="<?php echo $baseurl; ?>/assets/images/pt-mid.png" alt="">
                                    <div class="hd-txt">Блоггер</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-3 order-lg-3">
                            <div class="pt-right d-flex flex-column">
                                <div class="pt-inner ptt-1">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-right-1.png" alt="">
                                        <div class="hd-txt">Президент NL International</div>
                                    </div>
                                </div>
                                <div class="pt-inner ptt-2">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-right-2.png" alt="">
                                        <div class="hd-txt">Топ-маркетолог, продюсер</div>
                                    </div>
                                </div>
                                <div class="pt-inner ptt-3">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-right-3.png" alt="">
                                        <div class="hd-txt">Основатель мастерской детских праздников «Море Шоу»</div>
                                    </div>
                                </div>
                                <div class="pt-inner ptt-4">
                                    <div class="img">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pt-right-4.png" alt="">
                                        <div class="hd-txt">кандидат наук, психолог, астролог</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php /*<div class="order d-lg-none">
                    <a href="#" class="grey go-to-block" data-target=".yes .form-block">
                        <span>Хочу тоже прокачать себя</span>
                        <img src="<?php echo $baseurl; ?>/assets/images/r-arrow-purp.svg" alt="">
                    </a>
                </div>  */ ?>
            </div>
        </section>

        <section class="realise">
            <div class="container">
                <div class="rl-row">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="rl-left">
                                <div class="title">Несмотря на все попытки улучшить<br class="d-none d-xl-inline"> свою жизнь</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="rl-right">
                                <div class="txt min-title">реализоваться в семье,<br class="d-none d-xl-inline"> карьере — <br class="d-none d-xl-inline"><br class="d-lg-none">  <span class="w-bg">вас что-то сдерживает</span></div>
                                <!-- Arrows -->
                                <div class="swiper-button d-flex justify-content-end">
                                    <div class="swiper-button-prev realise-prev"></div>
                                    <div class="swiper-button-next realise-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="for-slider">
                    <!-- Slider -->
                    <div class="swiper-container realise-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rl-block">
                                    <div class="for-title d-flex align-items-center">
                                        <p>Годами не можете сдвинуться <br class="d-none d-xl-inline"> с мертвой точки</p>
                                        <div class="icon">
                                            <img src="<?php echo $baseurl; ?>/assets/images/rl-icon-1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="txt">Год за годом вы ставите себе <br class="d-none d-xl-inline"> вдохновляющие, масштабные <br class="d-none d-xl-inline"> цели: больше зарабатывать, обрести <br class="d-none d-xl-inline"> финансовую свободу, заниматься <br class="d-none d-xl-inline"> любимым делом, раскрывать свой <br class="d-none d-xl-inline"> потенциал — но так и продолжаете <br class="d-none d-xl-inline"> стоять на месте</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rl-block">
                                    <div class="for-title d-flex align-items-center">
                                        <p>Отношения в семье не улучшаются <br class="d-none d-xl-inline"> после десятка попыток</p>
                                        <div class="icon">
                                            <img src="<?php echo $baseurl; ?>/assets/images/rl-icon-2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="txt">Хотите построить крепкую, <br class="d-none d-xl-inline">  счастливую семью, <br class="d-none d-xl-inline">  но вместо этого в ваших отношениях конфликты,  недоверие<br class="d-none d-xl-inline"> и отсутствие понимания</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rl-block">
                                    <div class="for-title d-flex align-items-center">
                                        <p>Постоянно <br class="d-none d-xl-inline"> обвиняете себя и критикуете</p>
                                        <div class="icon">
                                            <img src="<?php echo $baseurl; ?>/assets/images/rl-icon-3.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="txt">Иными словами не любите себя. <br class="d-none d-xl-inline">Каждый раз за малейшую ошибку дрессируете себя. <br class="d-none d-xl-inline"> Не принимаете себя таким,<br class="d-none d-xl-inline"> какой вы есть и стремитесь к чужим идеалам.</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rl-block">
                                    <div class="for-title d-flex align-items-center">
                                        <p>Все перепробовали, <br class="d-none d-xl-inline"> но все остается также</p>
                                        <div class="icon">
                                            <img src="<?php echo $baseurl; ?>/assets/images/rl-icon-4.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="txt">Читаете книги по психологии <br class="d-none d-xl-inline"> и мотивации, уже проходили тренинги, <br class="d-none d-xl-inline"> ретриты, визуализировали цели, но <br class="d-none d-xl-inline"> изменения приходят ненадолго, и вы <br class="d-none d-xl-inline"> возвращаетесь к привычному <br class="d-none d-xl-inline"> сценарию</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rl-block">
                                    <div class="for-title d-flex align-items-center">
                                        <p>Стресс нарастает,  <br class="d-none d-xl-inline"> а желание меняться уходит</p>
                                        <div class="icon">
                                            <img src="<?php echo $baseurl; ?>/assets/images/rl-icon-5.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="txt">
                                        Стрессы, конфликты, неуверенность <br class="d-none d-xl-inline"> в себе и выгорание на работе <br class="d-none d-xl-inline"> отнимают силы и негативно <br class="d-none d-xl-inline"> сказываются на здоровье
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-row">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="for-title">
                                <div class="min-title">Узнайте, как <br class="d-none d-xl-inline"> выйти на новый уровень,</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="txt">освободившись от обид  <br class="d-none d-xl-inline"> и ограничивающих барьеров по методике Паззлы</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="order text-center text-lg-right">
                                <a href="#" class="go-to-block" data-target=".last-section">Принять участие</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="did-you">
            <div class="container">
                <div class="for-title text-center">
                    <div class="title">Все, что у вас сейчас есть в жизни —<br class="d-none d-xl-inline"> это именно то, что хочет ваш мозг</div>
                    <div class="subtitle">
                        <p class="big">Как <span class="w-bg white">замотивировать мозг на новые победы и достижения?</span> Узнаете на мастер-классе.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="will-not">
            <div class="container">
                <div class="wn-row">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-6 offset-xl-6">
                            <div class="for-title">
                                <div class="title">Все, что будет на этом <br>мастер-классе — </div>
                                <div class="subtitle">
                                    <p class="big">раскрытие технологии пазлов, до этого доступной только на сессии стоимостью 600 тыс. рублей, которая уже помогла улучшить жизнь более 1000 людей</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="wn-first">
                                <div class="min-title">Доступ к закрытой технологии<br class="d-none d-xl-inline"> улучшения своей жизни </div>
                                <div class="txt">
                                    <p class="medium">и фундаментальным знаниям<br class="d-none d-xl-inline">  о работе вашего мозга<br class="d-none d-xl-inline"> и о влиянии ежедневных решений<br class="d-none d-xl-inline"> на вашу жизнь</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="wn-inner wn-1">
                                <div class="icon">
                                    <img src="<?php echo $baseurl; ?>/assets/images/wn-icon-1.svg" alt="">
                                </div>
                                <div class="min-t">Узнаете, почему мозг сдерживает ваш доход?</div>
                                <div class="txt">
                                    <p class="medium">почему ваши цели <br class="d-none d-xl-inline"> не реализуются и почему <br class="d-none d-xl-inline"> ваш доход меньше 1 млн. <br class="d-none d-xl-inline"> рублей</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="wn-inner wn-1">
                                <div class="icon">
                                    <img src="<?php echo $baseurl; ?>/assets/images/wn-icon-2.svg" alt="">
                                </div>
                                <div class="min-t">Поймёте системные ошибки в голове мешают достигать желаемого</div>
                                <div class="txt">
                                    <p class="medium">что только системные <br class="d-none d-xl-inline">  ошибки в вашей голове <br class="d-none d-xl-inline">  мешают вам достичь <br class="d-none d-xl-inline">  желаемого</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="wn-inner wn-1">
                                <div class="icon">
                                    <img src="<?php echo $baseurl; ?>/assets/images/wn-icon-3.svg" alt="">
                                </div>
                                <div class="min-t">Научитесь,</div>
                                <div class="txt">
                                    <p class="medium">правильно расставлять <br class="d-none d-xl-inline"> приоритеты между <br class="d-none d-xl-inline"> любовью, здоровьем <br class="d-none d-xl-inline"> и деньгами</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="wn-inner wn-1">
                                <div class="icon">
                                    <img src="<?php echo $baseurl; ?>/assets/images/wn-icon-4.svg" alt="">
                                </div>
                                <div class="min-t">Увидите,</div>
                                <div class="txt">
                                    <p class="medium">Какие события привели к<br class="d-none d-xl-inline"> текущим обстоятельствам? <br class="d-none d-xl-inline"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="wn-inner wn-1">
                                <div class="icon">
                                    <img src="<?php echo $baseurl; ?>/assets/images/wn-icon-5.svg" alt="">
                                </div>
                                <div class="min-t">Сделаете</div>
                                <div class="txt">
                                    <p class="medium">первый шаг<br class="d-none d-xl-inline"> из замкнутого круга и<br class="d-none d-xl-inline">обретения контроля<br class="d-none d-xl-inline"> над своей жизнью</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="wn-last">
                                <div class="min-title">Никаких волшебных пилюль</div>
                                <div class="txt">
                                    <p class="big">
                                        Просто работа с системными ошибками вашего <br class="d-none d-xl-inline"> мозга, которые ограничивают вас<br><span class="w-bg">от лучшей жизни</span>
                                    </p>
                                </div>
                                <div class="order">
                                    <a href="#" class="go-to-block" data-target=".last-section">Взломать мозг и получить результат</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="headliner">
            <div class="container">
                <div class="hd-row">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-3">
                            <div class="hd-left">
                                <div class="for-title">
                                    <!-- <div class="subtitle">
                                        <p class="big">Мастер-класс проведет</p>
                                    </div> -->
                                    <div class="title">Эдуард <br class="d-none d-xl-inline"> Мавлютов</div>
                                    <div class="subtitle">
                                        <p class="big">Ведущий мастер-класса</p>
                                    </div>
                                </div>
                                <div class="for-quotes">
                                    <div class="icon">
                                        <img src="<?php echo $baseurl; ?>/assets/images/quotes.svg" alt="">
                                    </div>
                                    <div class="txt">
                                        Такой онлайн-формат работы <br class="d-none d-xl-inline"> я запускаю впервые, чтобы <br class="d-none d-xl-inline"> каждый мог легко достигать <br class="d-none d-xl-inline"> своих целей, стать счастливым <br class="d-none d-xl-inline"> и свободным от ограничений
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-5">
                            <div class="hd-middle">
                                <img src="<?php echo $baseurl; ?>/assets/images/hd-mid-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-auto">
                            <div class="hd-right">
                                <div class="p-list">
                                    <p>Хакер Сознания</p>
                                    <p>Основатель собственной школы и автор <br class="d-none d-xl-inline"> трансформационной методики «Паззлы»</p>
                                    <p>Стоимость индивидуальной сессии <br class="d-none d-xl-inline"> от 600 тыс. руб.</p>
                                    <p>Один из 5 тренеров в мире, которые <br class="d-none d-xl-inline"> владеют этой уникальной методикой</p>
                                    <p>Врач-хирург, дипломированный психолог</p>
                                    <p>Международный тренер <br class="d-none d-xl-inline"> психоэнергетической коррекции личности</p>
                                    <p>Среди его клиентов политики, депутаты, <br class="d-none d-xl-inline"> топ-менеджеры банков, звезды, <br class="d-none d-xl-inline"> предприниматели</p>
                                    <p>Сертифицированный коуч. Мастер Рейки</p>
                                    <p>Эксперт закрытой VIP-программы Бизнес <br class="d-none d-xl-inline"> Молодости «Миллиард за Миллион», <br class="d-none d-xl-inline"> участниками которой являются <br class="d-none d-xl-inline"> миллионеры со всей страны</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="last-section">
            <div class="container">
                <div class="ls-row">
                    <div class="row">
                        <div class="col-12 col-lg-4 order-2 order-md-1">
                            <div class="ls-left">
                                <div class="min-title">Стоит ли идти <br class="d-none d-xl-inline"> на мастер-класс?</div>
                                <div class="title">Да,</div>
                                <div class="txt">
                                    <p class="big">
                                        если вы готовы начать <br> <span class="w-bg">управлять своей жизнью,</span> <br> привести в гармонию разум, <br class="d-none d-xl-inline"> душу и тело.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-3 order-md-2">
                            <div class="ls-middle">
                                <div class="min-t">Регистрируйтесь прямо <br> сейчас и получите чек-лист</div>
                                <div class="for-pdf d-flex align-items-center">
                                    <div class="icon">
                                        <img src="<?php echo $baseurl; ?>/assets/images/pdf-icon.svg" alt="">
                                    </div>
                                    <div class="txt">
                                        «Некорректные намерения,<br class="d-none d-xl-inline"> которые управляют  <br class="d-none d-xl-inline"> вами»
                                    </div>
                                </div>
                                <div class="form-block">
                                    <form action="https://mail.mariyasolodar.com/add_subscriber.html" method="post">
                                        <div class="input-blocks">
                                            <div class="ib">
                                                <input type="text" name="custom_mob" placeholder="Ваш телефон" required>
                                            </div>
                                            <div class="ib">
                                                <input type="email" name="email" placeholder="Ваш email" required>
                                            </div>
											<?php /*<div class="ib">
												<p class="text-center mb-1">Выберите время</p>
												<select name="custom_time">
													<option value="20.00" >20:00</option>
													<option value="12.00" >12:00</option>
												</select>
											</div>*/ ?>
                                        </div>
                                        <div class="order">
                                            <button type="button" class="pre-send-sms">Зарегистрироваться <br> и получить чек-лист</button>
                                        </div>
                                        
                                        <div class="check-box d-flex align-items-center">
                                            <input type="checkbox" id="policy" name="policy" checked>
                                            <label for="policy">Я согласен <br class="d-none d-xl-inline"> с <a href="#">Политикой конфиденциальности</a></label>
                                        </div>
										<div class="under-order text-center">
                                            <p>или</p>
                                        </div>
                                        <div class="sc-row">
                                            <div class="row align-items-center justify-content-centerween">
                                                <div class="col-12">
                                                    <p class="text-center">Зарегистрируйтесь <br class="d-none d-sm-inline"> через мессенджеры:</p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="sc-inner-row">
                                                        <div class="row justify-content-center">
                                                            <div class="col-auto">
                                                                <a href="https://telegram.me/puzzles_school_bot?start=5d7a2046c2f9a3000f30142d" target="_blank">
                                                                    <img src="<?php echo $baseurl; ?>/assets/images/telegram.svg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-auto">
                                                                <a href="https://vk.com/app6767961_-184749584#dsjdx8_ct5xyn" target="_blank">
                                                                    <img src="<?php echo $baseurl; ?>/assets/images/vk.svg" alt="">
                                                                </a>
                                                            </div>
                                                            <?php /*<div class="col-auto">
                                                                <a href="#" target="_blank">
                                                                    <img src="<?php echo $baseurl; ?>/assets/images/viber.svg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-auto">
                                                                <a href="#" target="_blank">
                                                                    <img src="<?php echo $baseurl; ?>/assets/images/messenger.svg" alt="">
                                                                </a>
                                                            </div>*/ ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<input type="hidden" name="http_referer" value="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
										<input type="hidden" name="campaign_token" value="Vf">
										<input type="hidden" name="thankyou_url" value="<?php echo $baseurl; ?>/thanks">
										<input type="hidden" name="start_day" value="0" />
										<input type="hidden" name="sms_text" value="Подключайся! Паззлы убирают барьеры в голове! http://bit.ly/2JNzExZ" />
										<?php echo $addHtmlForm; ?>
                                    </form>
                                </div>
                                <div class="policy-block d-md-none">
                                    <a href="<?php echo $baseurl; ?>/policy" target="_blank" class="policy-link">Политика конфиденциальности</a>
                                    <div class="rights">Мавлютов <?php echo date('Y'); ?> © All right reserved.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-1 order-md-3">
                            <div class="ls-right">
                                <div class="min-title">Бесплатный <br class="d-none d-xl-inline"> онлайн <br class="d-none d-xl-inline"> мастер-класс.</div>
                                <div class="txt">Бесплатный онлайн мастер-класс, ценностью в 20 000 рублей, чтобы больше людей<br class="d-none d-xl-inline">   узнали методику и помогли себе стать счастливее</div>
                                <div class="policy-block d-none d-md-block">
                                    <a href="<?php echo $baseurl; ?>/policy" target="_blank" class="policy-link">Политика конфиденциальности</a>
                                    <div class="rights">Мавлютов <?php echo date('Y'); ?> © All right reserved.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php /* include 'blocks/footer.php'; */ ?>
    </div>
    
    <?php include 'blocks/comebacker.php'; ?>
    <?php include 'blocks/scripts.php'; ?>

</body>

</html>
