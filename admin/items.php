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
					<h3>Список записей</h3>
				</div>
			</header>
			
			<section class="section-0 py-4 mb-5">
				<div class="container">
					<div class="row py-1">
						<div class="col-auto ml-auto">
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Добавить запись
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<?php foreach( $data->cck as $ct ) : ?>
										<a class="dropdown-item" href="<?php echo $baseurl.'/admin/item/?type='.$ct['name']; ?>"><?php echo $ct['label']; ?></a>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					
					<hr class="my-3">
					
					<?php if ( count($data->items) ) : ?>
						<?php foreach( $data->items as $item ) : ?>
							<div class="row py-1 align-items-center">
								<div class="col-md-8 mb-3 mb-md-0">
									<a href="<?php echo $baseurl; ?>/admin/item/<?php echo $item['alias']; ?>?type=<?php echo $item['type']; ?>"><?php echo $item['title']; ?></a>
								</div>
								<div class="col-md-4">
									<small><?php echo $item['alias']; ?></small>
								</div>
							</div>
							<hr class="my-1">
						<?php endforeach; ?>
						
						<?php /*<pre><?php print_r($data->items); ?></pre>*/ ?>
					<?php else : ?>
						<p>Записи отсутствуют</p>
					<?php endif; ?>
				</div>
			</section>

			<?php include 'blocks/footer.php'; ?>
		</div>
		
		<?php include 'blocks/scripts.php'; ?>
	</body>
</html>