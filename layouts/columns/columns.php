<?php
$layout_name = basename( __FILE__, '.php' );
$prefix      = $layout_name . '_';
$columns     = get_sub_field( $prefix . 'columns' );
?>
<section class="columns">
	<div class="container">
		<div class="content">
			<?php
			if ( $columns ) {
				foreach ( $columns as $column ) {
					?>
					<div class="column">
						<?php echo $column['columns_column']; ?>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>
