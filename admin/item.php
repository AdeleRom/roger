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
					<h3>Тип записи: <?php echo $data->cck['label']; ?></h3>
				</div>
			</header>
			
			<section class="section-0 py-4 mb-5">
				<div class="container">
					<?php if ( $data->cck['name'] ) : ?>
						<form action="<?php echo $baseurl; ?>/admin/item<?php echo ($data->item['alias']) ? '/'.$data->item['alias'] : ''; ?>" method="post">
							<div class="row py-1">
								<div class="col-auto ml-auto">
									<div class="dropdown">
										<a href="<?php echo $baseurl; ?>/admin/items" class="btn btn-link">
											<small>Назад к списку</small>
										</a>
										<?php if ( $data->item['alias'] ) : ?>
										<a href="<?php echo $baseurl; ?>/admin/item-delete/<?php echo $data->item['alias']; ?>" class="btn btn-danger">
											Удалить
										</a>
										<?php endif; ?>
										<button class="btn btn-success send" type="button">
											Сохранить
										</button>
									</div>
								</div>
							</div>
							<hr class="my-3">
							
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>Заголовок</b>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<input 
											type="text" 
											name="title" 
											class="form-control" 
											value="<?php echo $data->item['title']; ?>" 
											required
										>
									</div>
								</div>
							</div>
							<hr class="my-1">
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<b>Алиас</b><br>
									<small>Алиас должен быть уникальным</small>
								</div>
								<div class="col-md-4">
									<div class="form-group m-0">
										<input 
											type="text" 
											name="alias" 
											class="form-control" 
											value="<?php echo $data->item['alias']; ?>" 
											required
										>
									</div>
								</div>
							</div>
							<hr class="my-1" style="border-color: #007BFF;">
							<?php foreach( $data->cck['fields'] as $field ) : ?>
								<?php if ( file_exists('app/data/fields/'.$field['type'].'.php') ) : ?>
									<?php include('app/data/fields/'.$field['type'].'.php'); ?>
									<hr class="my-1">
								<?php endif; ?>
							<?php endforeach; ?>
							
							<input type="hidden" name="type" value="<?php echo $data->cck['name']; ?>">
						</form>
					<?php endif; ?>
					
					<?php /*<pre><?php print_r($data); ?></pre>*/ ?>
				</div>
			</section>

			<?php include 'blocks/footer.php'; ?>
		</div>
		
		<?php include 'blocks/scripts.php'; ?>
	</body>
</html>