<!DOCTYPE html>
<html>

<head>
    <?php include 'blocks/head.php'; ?>
</head>

<body class="thanks-page">
	<script>
	  fbq('track', 'Lead');
	</script>
    <div class="wrapper">
        <header class="header-thanks">
            <div class="container">
                <div class="hd-row">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-7">
                            <div class="hd-left">
                                <div class="for-title text-center">
                                    <p class="medium">Отлично! <br> Вы успешно зарегистрировались на мастер-класс хакера сознания <br class="d-none d-xl-inline"> Эдуарда Мавлютова.
                                    </p>
                                    <p class="medium p-bot">Чек-лист «Как понять, что вами управляют некорректные намерения и цели» <br class="d-none d-xl-inline"> вы получите на свой email через 5 минут. <br class="d-none d-xl-inline"> Если письмо не пришло, проверьте папку «Спам». Иногда нужные письма попадают в нее.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="hd-right">
                                <img src="<?php echo $baseurl; ?>/assets/images/thanks-box.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="motivation">
            <div class="container">
                <div class="for-title text-center">
                    <div class="min-title">Хотите прямо сейчас разобраться, <br class="d-none d-xl-inline"> почему мотивация не работает?</div>
                    <p class="big">Тогда получите доступ к видеоуроку, благодаря которому вы раз и навсегда поймете, <br class="d-none d-xl-inline"> что мешает вам достигать целей легко и быстро.</p>
                </div>
                <div class="middle-row">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6">
                            <div class="p-list">
                                <p class="medium">Почему одних людей даже неудачи не останавливают, а других постоянно приходится «пинать».</p>
                                <p class="medium">Как работает внутренняя и внешняя мотивация.</p>
                                <p class="medium">Почему после тренингов и прорывов к целям практически всегда происходит падение. И как этого избежать.</p>
                                <p class="medium">Как разжечь неугасающий вечный огонь, который будет постоянно заставлять вас двигаться вперед.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-row">
                    <p class="medium text-center">Секретов всего несколько, но это самые важные принципы <br class="d-none d-xl-inline"> для достижения успеха в любой сфере жизни</p>
                    <div class="row align-items-center justify-content-center to-hide">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="price-block prb-1">
                                <p class="title">Стоимость: всего <span class="blue">199</span> ₽</p>
                                <div class="for-price">
                                    <div class="price">
                                        <p class="min-title">
                                            вместо <strike>2000 ₽</strike>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="ready to-hide">
            <div class="container">
                <div class="rd-row">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="rd-right text-center">
                                <div class="timer-block">
                                    <p class="big min-t">Это разовое предложение, которое действует <br class="d-none d-xl-inline"> только сейчас, только на этой странице. <br class="d-none d-xl-inline"> И оно больше не повторится.</p>
                                    <p class="medium mt-3">Предложение исчезнет через:</p>
                                    <div class="clock simple-dots"></div>
                                </div>
                                <div class="order">
                                    <a href="https://shop.cursonline.ru/buy/421643" target="_blank">Получить доступ к видео всего за 199 р.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'blocks/footer.php'; ?>
    </div>

    <div class="modal fade" id="thanks" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="py-5 text-center">
                    <div class="min-title">Спасибо</div>
                    <p class="big">Наш менеджер перезвонит <br class="d-none d-xl-inline">вам в ближайшее время</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'blocks/scripts.php'; ?>

    <script>
        var timeSpend = 1000 * 60 * 60 * 24;

        if (jQuery.cookie('counter1') != undefined) {
            var interval = ((new Date()).getTime() - jQuery.cookie('counter1'));
            if (interval > timeSpend) {
                timeSpend = 0;
            } else {
                timeSpend -= interval;
            }
        } else {
            jQuery.cookie('counter1', (new Date()).getTime(), {
                expires: 365
            });
        }

        jQuery('.clock').countdown({
            until: timeSpend / 1000,
            format: 'HMS'
        });

        function butthide() {
            $('.to-hide').hide();
        }

        $(document).ready(function() {
            if (timeSpend < 1) {
                butthide()
            }
        });

    </script>

</body>

</html>
