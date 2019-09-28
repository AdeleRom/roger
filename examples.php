<!DOCTYPE html>
<html>
	<head>
		<?php include 'blocks/head.php'; ?>
	</head>
	<body>
		<div class="wrapper">
			<nav class="navbar navbar-light bg-light">
				<a class="navbar-brand" href="<?php echo $baseurl; ?>">CL9 System</a>
			</nav>
			
			<header class="header py-4">
				<div class="container">
					<span data-toggle="modal" data-target="#ModalThanks">Шапка</span>
				</div>
			</header>
			
			<section class="section-0 py-3">
				<div class="container">
					<div class="mb-5 small">
						<p>Для валидации форм используется плагин <a target="_blank" href="https://jqueryvalidation.org/">jqueryvalidation.org</a>. <br>
						Для работы валидации, нужно добавить соответствующим полям атрибут required и добавить кнопке класс:</p>
						<p>1) "send" (тут атрибут кнопки type="submit") - для отправки форм обычным путём с 
						перезагрузкой страницы и переходом на обработчик. Подходит для стандартных форм 
						с разных сервисов рассылки.</p>
						<p>2) "send-ajax" (тут атрибут кнопки type="button") - отправляет формус помощью 
						ajax без перезагрузки страницы. Отправка происходит на обработчик, указанный 
						в action формы.</p>
						<p>
							В ajax форме есть 2 основных варианта развития событий:<br>
							1) После отправки формы нас перекинет на указанную ссылку. Для этого нужно добавить в форму поле с названием "redirect" и задать ему значение в виде ссылки.
							2) После отправки формы покажет модальное окно. Для этого нужно добавить в форму поле с названием "thanks_modal" и задать ему значение в виде селектора модального окна.
						</p>
					</div>
					
					<style>
						.form-block {
							max-width: 450px;
							margin: 0 auto;
						}
					</style>
					
					<div class="mb-5 text-center">
						<h5 class="mb-3" data-toggle="modal" data-target="#ModalThanks">Пример Ajax формы с редиректом:</h5>
						
						<div class="form-block">
							<form method="post" enctype="multipart/form-data" action="<?php echo $baseurl; ?>/sender.php">
								<div class="inputblock mb-2">
									<input type="text" name="name" placeholder="Имя *" required data-msg-required="Введите Имя" />
								</div>
								<div class="inputblock mb-2">
									<input type="email" name="email" placeholder="Email *" required data-msg-required="Введите Email" />
								</div>
								<div class="inputblock mb-2">
									<textarea name="comm" placeholder="Вопрос *" required data-msg-required="Введите Вопрос"></textarea>
								</div>
								<div class="controls">
									<button type="button" class="cl-btn send-ajax">Отправить</button>
								</div>
								
								<input type="hidden" name="redirect" value="<?php echo $baseurl; ?>/thanks">
								<input type="hidden" name="referer" value="<?php echo $pageurl; ?>">
							</form>
						</div>
					</div>
					
					<div class="mb-5 text-center">
						<h5 class="mb-3">Пример Ajax формы с модальным окном благодарности:</h5>
						
						<div class="form-block">
							<form method="post" enctype="multipart/form-data" action="<?php echo $baseurl; ?>/sender.php">
								<div class="inputblock mb-2">
									<input type="text" name="name" placeholder="Имя *" required data-msg-required="Введите Имя" />
								</div>
								<div class="inputblock mb-2">
									<input type="email" name="email" placeholder="Email *" required data-msg-required="Введите Email" />
								</div>
								<div class="inputblock mb-2">
									<textarea name="comm" placeholder="Вопрос *" required data-msg-required="Введите Вопрос"></textarea>
								</div>
								<div class="controls">
									<button type="button" class="cl-btn c-green send-ajax">Отправить</button>
								</div>
								
								<input type="hidden" name="thanks_modal" value="#ModalThanks">
								<input type="hidden" name="referer" value="<?php echo $pageurl; ?>">
							</form>
						</div>
					</div>
				</div>
			</section>

			<footer class="footer bg-dark mt-5 py-4">
				<div class="container text-light">
					CL9 System. <?php echo date('Y'); ?> © Copyright
				</div>
			</footer>
		</div>
		
		<div class="modal fade" id="ModalThanks" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<p>Спасибо, ваша заявка принята</p>
					</div>
					<div class="modal-footer justify-content-center">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'blocks/scripts.php'; ?>
		
	</body>
</html>