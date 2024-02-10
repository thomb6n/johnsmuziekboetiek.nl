<?php
$layout_name = basename(__FILE__, '.php');
$prefix      = $layout_name . '_';
$title       = get_sub_field($prefix . 'title');
$pretitle    = get_sub_field($prefix . 'pretitle');
?>
<section class="header">
	<div class="container">
		<div class="content">
			<?php
			if ($pretitle) {
			?>
				<p class="pretitle"><?php echo $pretitle; ?></p>
			<?php
			}

			if ($title) {
			?>
				<h1 class="title"><?php echo $title; ?></h1>
			<?php
			}
			?>

			<form role="search" method="get" class="search-form" action="<?php echo site_url('/zoeken'); ?>">
				<label>
					<span class="screen-reader-text">
						<?php _e('Search for:', 'toms') ?>
					</span>
					<input type="search" class="search-field" name="searchwp" placeholder="<?php _e('What are you looking for?', 'toms') ?>" value="<?php echo isset($_GET['searchwp']) ? esc_attr($_GET['searchwp']) : '' ?>" title="<?php _e('Search for:', 'toms') ?>" />
				</label>
				<input type="submit" class="search-submit" value="<?php echo _e('Search', 'toms') ?>" />
			</form>
		</div>
	</div>
</section>