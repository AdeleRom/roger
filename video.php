<!DOCTYPE html>
<html>

<head>
    <?php include 'blocks/head.php'; ?>
</head>

<body class="video">
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
                    <p class="big">Мастер-класс Эдуарда Мавлютова</p>
                    <div class="min-title min">Деньги, отношения и здоровье: как получить желаемые результаты, <br class="d-none d-xl-inline">  убрав барьеры в своей голове.</div>
                </div>
            </div>
        </section>

        <section class="video-section">
            <div class="container">
                <div class="for-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <div class="pause-click"></div>
                        <div class="play-click active"></div>
                        <div id="player" class="embed-responsive-item"></div>
                    </div>
                </div>
                <div class="orders to-show flex-column justify-content-center align-items-center flex-sm-row d-flex" style="/*display:none;*/">
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
	var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            playerVars: {
                'controls': 0,
                'showinfo': 0,
                'rel': 0,
                'autoplay': 1
            },
            videoId: 'P8NfoiidMjg',
            events: {
                'onStateChange': onPlayerStateChange,
                'onReady': onPlayerReady,
            }
        });
    }

    var timer1 = false;

    // Время в секундах. После этого выполняется первый показ контента (текст)
    var step1Sec = 6780;//310

    function onPlayerStateChange(event) {
        //if($(window).width() > 767) {
            if (event.data == YT.PlayerState.PLAYING) {

                var interval = setInterval(function(){
                    if ( player.getCurrentTime() > step1Sec && !timer1 ) {
                        timer1 = true;
                        clearInterval(interval);
                        aftertime();
                    }
                },1000);
            }
        //}
    }

    function onPlayerReady (event) {
           $('.play-click').click(function(){
                player.playVideo();
               $(this).removeClass('active');
               $('.pause-click').addClass('active');
           });

           $('.pause-click').click(function(){
               player.pauseVideo();
                $(this).removeClass('active');
               $('.play-click').addClass('active');
           });
       }

    if($(window).width() < 768) {
        //aftertime ();
    }

    function aftertime() {
        $('.to-show').addClass('d-flex');
    }
        
	var timeSpend = 1000*60*60*24;

	if (jQuery.cookie('ytimer') != undefined)
	{
		  var interval = ((new Date()).getTime() - jQuery.cookie('ytimer'));
		  if (interval > timeSpend){
			  timeSpend = 0;
		  } else {
			  timeSpend -= interval;
		  }
		}
		else
		{
		  jQuery.cookie('ytimer', (new Date()).getTime());
		}

		jQuery('.clock').countdown({until: timeSpend/1000, format: 'HMS', onExpiry:butthide});


	   if(timeSpend < 1) {
		   butthide()
	   } 

	function butthide(){

		//$('.wrapper').remove();
	}
</script>


</body>

</html>
