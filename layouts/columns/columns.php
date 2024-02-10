<?php
$layout_name = basename(__FILE__, '.php');
$prefix      = $layout_name . '_';
$columns     = get_sub_field($prefix . 'columns');
?>
<section class="columns">
	<div class="container">
		<div class="content">
			<?php
			if ($columns) {
				foreach ($columns as $column) {
					$title = $column['columns_title'];
					$content = $column['columns_content'];
					$color = $column['columns_color'];
					$link = $column['columns_link'];
			?>
					<div class="column <?php echo $color ? 'bg-light-' . $color : ''; ?>">
						<?php
						if ($title) {
						?>
							<h2 class="title"><?php echo $title; ?></h2>
						<?php
						}

						if ($content) {
						?>
							<p><?php echo $content; ?></p>
						<?php
						}

						if ($link['url']) {
						?>
							<a href="<?php echo $link['url']; ?>" class="overlay-link"></a>
						<?php
						}
						?>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</section>