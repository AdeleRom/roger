<?php
	/*
		Основные переменные в шаблоне:
		$meta - массив с метаданными (задается в основном index файле системы)
		$baseurl - основной линк сайта
		$css - массив ссылок на CSS файлы
		$js - массив ссылок на JS файлы
		$ismobile - мобильное устройтво или нет (1 \ 0)
		$pageurl - текущая ссылка на страницу с учетом параметров
		$data - контент с БД вида: $data['тип контента']['название поля'] = 'значение поля';
	*/
	
	function monthTranslate($month) {
		switch ($month) {
			case 1: 
				$newName = 'января';
				break;
			case 2:
				$newName = 'февраля';
				break;
			case 3:
				$newName = 'марта';
				break;
			case 4:
				$newName = 'апреля';
				break;
			case 5:
				$newName = 'мая';
				break;
			case 6:
				$newName = 'июня';
				break;
			case 7:
				$newName = 'июля';
				break;
			case 8:
				$newName = 'августа';
				break;
			case 9:
				$newName = 'сентября';
				break;
			case 10:
				$newName = 'октября';
				break;
			case 11:
				$newName = 'ноября';
				break;
			case 12:
				$newName = 'декабря';
				break;
		}
		return $newName;
	}
	
	date_default_timezone_set('Europe/Moscow');
	
	$currentDate = new DateTime("now");
	$addHtmlForm = '';
	//$currentDate->modify('+1 day');
	 
	# Если время после 20:00
	if ( $currentDate->format('H') >= 20 && $currentDate->format('i') > 0 ) :
		$currentDate->modify('+1 day');
		$addHtmlForm = '<input type="hidden" name="custom_late" value="late">';
	endif;
?>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

<title><?php echo $meta['title']; ?></title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="title" content="<?php echo $meta['title']; ?>" />
<meta name="description" content="<?php echo $meta['desc']; ?>" />
 <meta name="keywords" content="<?php echo $meta['keys']; ?>"> 
<link rel="image_src" href="<?php echo $meta['image']; ?>" />

<meta property="og:locale" content="ru_RU"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?php echo $meta['title']; ?>"/>
<meta property="og:description" content="<?php echo $meta['desc']; ?>"/>
<meta property="og:image" content="<?php echo $meta['image']; ?>"/>
<meta property="og:url" content="<?php echo $baseurl; ?>"/>
<meta property="og:site_name" content="<?php echo $meta['sitename']; ?>"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $meta['title']; ?>">
<meta name="twitter:description" content="<?php echo $meta['desc']; ?>">
<meta name="twitter:image" content="<?php echo $meta['image']; ?>">

<meta itemprop="name" content="<?php echo $meta['title']; ?>"/>
<meta itemprop="description" content="<?php echo $meta['desc']; ?>"/>
<meta itemprop="image" content="<?php echo $meta['image']; ?>"/>

<?php
	# Подключаем CSS файлы
	if ( count($css) ) :
		foreach ( $css as $url ) :
			echo '<link rel="stylesheet" href="'.$url.'?t='.date('U').'" type="text/css">'; 
		endforeach;
	endif;
?>

<!-- Facebook Pixel Code --> 
<script> 
  !function(f,b,e,v,n,t,s) 
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 
  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; 
  n.queue=[];t=b.createElement(e);t.async=!0; 
  t.src=v;s=b.getElementsByTagName(e)[0]; 
  s.parentNode.insertBefore(t,s)}(window, document,'script', 
  'https://connect.facebook.net/en_US/fbevents.js'); 
  fbq('init', '2242191939376458'); 
  fbq('track', 'PageView'); 
</script> 
<noscript><img height="1" width="1" style="display:none" 
  src="https://www.facebook.com/tr?id=2242191939376458&ev=PageView&noscript=1" 
/></noscript> 
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144353873-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144353873-1');
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