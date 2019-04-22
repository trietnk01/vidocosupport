<div class="breadcrumb-box">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php 
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
				}
				?>
			</div>
		</div>
	</div>
</div>