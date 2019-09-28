<!DOCTYPE html>
<html>
	<head>
		<?php include 'blocks/head.php'; ?>
	</head>
	<body>
		<div class="wrapper">
			<?php include 'blocks/header.php'; ?>
			
			<?php include 'blocks/message.php'; ?>
			
			<header class="header py-4">
				<div class="container">
					<h3>Настройки</h3>
				</div>
			</header>
			
			<section class="section-0 py-4 mb-5">
				<div class="container">					
					<?php if ( count($data->config) ) : ?>
						<form action="<?php echo $baseurl; ?>/admin/config" method="post">
							<div class="row py-1">
								<div class="col-auto ml-auto">
									<button type="submit" class="btn btn-success send">Сохранить</button>
								</div>
							</div>
							<hr class="my-3">
							
							<!-- ********** META ********** -->
							<div class="row py-1">
								<div class="col-12 mb-3 mb-md-0">
									<b>META</b> <br>
									<small>
										Мета данные страницы для социальных сетей и тд.<br>
										Картинка для соц. сетей лежит в по адресу: assets/images/social.jpg и ее размер: 1200x630px
									</small>
								</div>
							</div>
							<hr class="my-2">
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>SITENAME</b> <br>
									<small>
										Название сайта
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<input 
											type="text" 
											name="SITENAME" 
											class="form-control" 
											value="<?php echo $data->config['SITENAME']; ?>"
										>
									</div>
								</div>
							</div>
							<hr class="my-2">
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>TITLE</b> <br>
									<small>
										Заголовок сайта
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<input 
											type="text" 
											name="TITLE" 
											class="form-control" 
											value="<?php echo $data->config['TITLE']; ?>"
										>
									</div>
								</div>
							</div>
							<hr class="my-2">
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>DESCRIPTION</b> <br>
									<small>
										Описание сайта
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<input 
											type="text" 
											name="DESCRIPTION" 
											class="form-control" 
											value="<?php echo $data->config['DESCRIPTION']; ?>"
										>
									</div>
								</div>
							</div>
							<hr class="my-2">
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>KEYWORDS</b> <br>
									<small>
										Ключевые слова сайта (пишутся через запятую)
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<input 
											type="text" 
											name="KEYWORDS" 
											class="form-control" 
											value="<?php echo $data->config['KEYWORDS']; ?>"
										>
									</div>
								</div>
							</div>
							
							<!-- ********** CONFIG ********** -->
							<hr class="mt-2 mb-5">
							<div class="row py-1">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>CACHE</b> <br>
									<small>
										Кеширование, значение 0 или 1 (0 - выключен, 1 - включено)<br>
										Файлы стилей, джаваскриптов и php шаблонов кешируются в каталог: assets/temp/
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0 mb-2">
										<select class="form-control" name="CACHE">
											<option value="0" <?php echo ( $data->config['CACHE'] == 0 ) ? 'selected' : ''; ?>>Выключено</option>
											<option value="1" <?php echo ( $data->config['CACHE'] == 1 ) ? 'selected' : ''; ?>>Включено</option>
										</select>
									</div>
									<?php if ( $data->cache ) : ?>
										<button type="button" class="btn btn-primary btn-sm clear-cache">Очистить кеш</button>
										<small class="text-success ml-3 clear-cache-mess d-none">Кеш успешно очищен</small>
										<small class="text-danger ml-3 clear-cache-mess-err d-none">Произошла ошибка</small>
									<?php else : ?>
										<small class="text-success ml-3 clear-cache-mess">Кеш отсутствует</small>
									<?php endif; ?>
								</div>
							</div>
							<hr class="my-3">
							<div class="row py-1">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>COMPILE_LESS</b> <br>
									<small>
										Компиляция Less в CSS, значение 0 или 1 (0 - выключен, 1 - включено)<br>
										Компилирует assets/less/template.less в assets/css/template.css
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<select class="form-control" name="COMPILE_LESS">
											<option value="0" <?php echo ( $data->config['COMPILE_LESS'] == 0 ) ? 'selected' : ''; ?>>Выключено</option>
											<option value="1" <?php echo ( $data->config['COMPILE_LESS'] == 1 ) ? 'selected' : ''; ?>>Включено</option>
										</select>
									</div>
								</div>
							</div>
							<hr class="my-3">
							<div class="row py-1">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>COMBINE_CSS</b> <br>
									<small>
										Объединение всех CSS файлов в один, значение 0 или 1 (0 - выключен, 1 - включено)
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<select class="form-control" name="COMBINE_CSS">
											<option value="0" <?php echo ( $data->config['COMBINE_CSS'] == 0 ) ? 'selected' : ''; ?>>Выключено</option>
											<option value="1" <?php echo ( $data->config['COMBINE_CSS'] == 1 ) ? 'selected' : ''; ?>>Включено</option>
										</select>
									</div>
								</div>
							</div>
							<hr class="my-3">
							<div class="row py-1">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>COMBINE_JS</b> <br>
									<small>
										Объединение всех JS файлов в один, значение 0 или 1 (0 - выключен, 1 - включено)
									</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<select class="form-control" name="COMBINE_JS">
											<option value="0" <?php echo ( $data->config['COMBINE_JS'] == 0 ) ? 'selected' : ''; ?>>Выключено</option>
											<option value="1" <?php echo ( $data->config['COMBINE_JS'] == 1 ) ? 'selected' : ''; ?>>Включено</option>
										</select>
									</div>
								</div>
							</div>
						</form>
					<?php else : ?>
						<p>Конфиг, видимо, был удален, обратитесь к администратору за помощью</p>
					<?php endif; ?>
				</div>
			</section>

			<?php include 'blocks/footer.php'; ?>
		</div>
		
		<?php include 'blocks/scripts.php'; ?>
		
		<script>
			$(document).ready(function(){
				
				$('.clear-cache').click(function(){
					var button = $(this);
					button.prop('disabled',true);
					var actUrl = '<?php echo $baseurl; ?>/admin/clear-cache';

					$.ajax({
						url: actUrl,
						type: 'post',
						dataType: 'json',
						success: function(data) {
							button.prop('disabled',false);

							console.log(data);
							
							if( data.response == 'ok' ) {				
								$('.clear-cache-mess').removeClass('d-none');

								setTimeout(function(){
									$('.clear-cache-mess').addClass('d-none');
								},3000);
							} else {
								$('.clear-cache-mess-err').removeClass('d-none');

								setTimeout(function(){
									$('.clear-cache-mess-err').addClass('d-none');
								},3000);
							}
						},
						error: function() {
						}
					});
				});
				
			});
		</script>
	</body>
</html>