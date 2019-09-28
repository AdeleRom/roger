<!DOCTYPE html>
<html>

<head>
    <?php include 'blocks/head.php'; ?>
</head>

<body class="video video-n">
    <div class="wrapper">
        <section class="record">
            <div class="container">
                <div class="timer-block text-center">
                    <p class="big min-t">Запись исчезнет через:</p>
                    <div class="clock simple-dots"></div>
                </div>
            </div>
        </section>

        <section class="under-record">
            <div class="container">
                <div class="for-title text-center">
                    <p class="big">Мастер-класс Эдуарда Мавлютова и Марии Солодар</p>
                    <div class="min-title min">«Мышление на $1 млн: узнайте, как ограничения в голове <br class="d-none d-xl-inline"> влияют на ваш доход».</div>
                </div>
            </div>
        </section>

        <section class="video-section">
            <div class="container">
                <div class="for-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php /*<div class="pause-click"></div>
                        <div class="play-click active"></div>*/ ?>
                        <div id="player" class="embed-responsive-item"></div>
                    </div>
                </div>
                <div class="txt mt-5 text-center">
                    <p class="big">Нажмите на кнопку ниже, чтобы выгодно занять место в онлайн-школе "Паззлы"</p>
                </div>
                <div class="orders d-flex flex-column justify-content-center align-items-center flex-sm-row">
                    <div class="order mx-3 my-3">
                        <a href="https://shop.cursonline.ru/buy/421273/40441" target="_blank">Хочу участвовать</a>
                    </div>
                    <div class="order mx-3 my-3">
                        <a href="https://shop.cursonline.ru/buy/421272/40441" target="_blank">Участие в рассрочку</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'blocks/footer.php'; ?>
    </div>

    <?php include 'blocks/scripts.php'; ?>

    <script>
        var timeSpend = 1000 * 60 * 60 * 24;

        if (jQuery.cookie('ytimer2') != undefined) {
            var interval = ((new Date()).getTime() - jQuery.cookie('ytimer2'));
            if (interval > timeSpend) {
                timeSpend = 0;
            } else {
                timeSpend -= interval;
            }
        } else {
            jQuery.cookie('ytimer2', (new Date()).getTime(), {
                expires: 365
            });
        }

        jQuery('.clock').countdown({
            until: timeSpend / 1000,
            format: 'HMS'
        });

        function butthide() {
            //$('.video-block .timing, .video-block .order').hide();
            //$('.wrapper').hide();
        }

        $(document).ready(function() {
            if (timeSpend < 1) {
                butthide()
            }
        });

    </script>

    <script>
        // Loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '100%',
                width: '100%',
                playerVars: {
                    'controls': 1,
                    'showinfo': 0,
                    'rel': 0,
                    'autoplay': 1
                },
                videoId: 'Cyn2BHItxkc',
                events: {
                    //'onStateChange': onPlayerStateChange,
                    'onReady': onPlayerReady,
                }
            });
        }


        function onPlayerReady(event) {
            $('.play-click').click(function() {
                player.playVideo();
                $(this).removeClass('active');
                $('.pause-click').addClass('active');
            });

            $('.pause-click').click(function() {
                player.pauseVideo();
                $(this).removeClass('active');
                $('.play-click').addClass('active');
            });
        }

    </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54774214, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54774214" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>
