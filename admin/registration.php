<!DOCTYPE html>
<html>
	<head>
		<?php include 'blocks/head.php'; ?>
	</head>
	<body>
		<div class="wrapper pt-0">			
			<?php include 'blocks/message.php'; ?>
			
			<section class="section-v-form d-flex align-items-center">
				<div class="container">
					<div class="card mx-auto">
						<div class="card-body">
						
							<h3 class="mb-4">Регистрация пользователя:</h3>
							
							<form method="post" enctype="multipart/form-data" action="<?php echo $baseurl; ?>/registration">
								<div class="row">
									<div class="col-md-12 mb-3">
										<input class="form-control" type="text" name="login" placeholder="Логин" required>
									</div>
									<div class="col-md-12 mb-3">
										<input class="form-control" type="password" name="password" placeholder="Пароль" required>
									</div>
									<div class="col-md-12 mb-3">
										<input class="form-control" type="password" name="password2" placeholder="Пароль (повторно)" required>
									</div>
									<div class="col-md-12">
										<button type="button" class="btn btn-primary btn-lg w-100 send">Зарегистрировать</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="text-center mt-4">
						<a href="<?php echo $baseurl; ?>/admin" class="btn btn-info btn-sm">Назад в панель</a>
					</div>
				</div>
			</section>

			<?php include 'blocks/footer.php'; ?>
		</div>
		
		<?php include 'blocks/scripts.php'; ?>
		
	</body>
</html>