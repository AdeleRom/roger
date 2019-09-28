<!DOCTYPE html>
<html>
	<head>
		<?php include 'blocks/head.php'; ?>
	</head>
	<body>
		<div class="wrapper">
			<?php include 'blocks/header.php'; ?>
			
			<header class="header py-4">
				<div class="container">
					<h3>Панель</h3>
				</div>
			</header>
			
			<section class="section-0 py-3">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-3">Записи</h4>
									<a href="<?php echo $baseurl; ?>/admin/items" class="btn btn-primary">смотреть</a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-3">Настройки</h4>
									<a href="<?php echo $baseurl; ?>/admin/config" class="btn btn-primary">смотреть</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include 'blocks/footer.php'; ?>
		</div>
		
		<?php include 'blocks/scripts.php'; ?>
		
	</body>
</html>