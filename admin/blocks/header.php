<nav class="navbar navbar-dark bg-primary navbar-expand-md navbar-a-top py-2">
	<a class="navbar-brand" href="<?php echo $baseurl; ?>/admin">CL9 System Panel</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto align-items-center py-4 py-md-0">
			<li class="nav-item mb-2 mb-md-0">
				<a class="nav-link text-light" href="<?php echo $baseurl; ?>/admin">Панель</a>
			</li>
			
			<li class="nav-item mb-2 mb-md-0">
				<a class="nav-link text-light" href="<?php echo $baseurl; ?>/admin/items">Записи</a>
			</li>
			
			<?php if ( $user['type'] == 'admin' ) : ?>
				<li class="nav-item mb-2 mb-md-0">
					<a class="nav-link text-light" href="<?php echo $baseurl; ?>/registration">Регистрация</a>
				</li>
			<?php endif; ?>
			
			<li class="nav-item mb-2 mb-md-0">
				<a class="nav-link text-light" href="<?php echo $baseurl; ?>/admin/config">Настройки</a>
			</li>
			
			<li class="nav-item dropdown ml-0 ml-md-2 mb-2 mb-md-0">
				<a class="btn btn-outline-light btn-sm dropdown-toggle d-inline-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<svg aria-hidden="true" data-prefix="fas" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="mr-1" style="width: 18px;"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" class=""></path></svg>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<span class="dropdown-item-text px-4 py-2"><small><?php echo $user['login']; ?></small></span>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo $baseurl; ?>/logout">Выход</a>
				</div>
			</li>
			<li class="nav-item ml-0 ml-md-3">
				<a class="btn btn-sm btn-link text-light" target="_blank"  href="<?php echo $baseurl; ?>">На главную</a>
			</li>
		</ul>
	</div>
</nav>