<?php if ( $error ) : ?>
	<div class="alert alert-danger text-center w-100 mb-3" role="alert">
		<?php echo $error; ?>
	</div>
<?php endif; ?>
<?php if ( $message ) : ?>
	<div class="alert alert-success text-center w-100 mb-3" role="alert">
		<?php echo $message; ?>
	</div>
<?php endif; ?>