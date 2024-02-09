<?php
$layout_name = basename( __FILE__, '.php' );
$prefix      = $layout_name . '_';
$title       = get_sub_field( $prefix . 'title' );
?>
<section class="header">
	<div class="container-large">
		<div class="content">
			<?php
			if ( $title ) {
				?>
					<h1 class="title"><?php echo $title; ?></h1>
				<?php
			}
			?>
		</div>
	</div>
</section>
