<?php
$layout_name = basename(__FILE__, '.php');
$prefix      = $layout_name . '_';
$title       = get_sub_field($prefix . 'title');
$show        = get_sub_field($prefix . 'show');
$color       = get_sub_field($prefix . 'color');
$products    = array();

if ('latest' === $show) {
	$args = array(
		'post_type'      => 'product',
		'post_status'    => 'publish',
		'posts_per_page' => 12,
	);

	$products = new WP_Query($args);
}
?>
<section class="product-slider">
	<div class="container">
		<div class="content <?php echo $color ? 'bg-light-' . $color : ''; ?>">
			<?php
			if ($title) {
			?>
				<h2 class="title"><?php echo $title; ?></h2>
			<?php
			}
			?>

			<div class="product-slider-wrapper" data-id="<?php echo get_row_index(); ?>">
				<div class="swiper-wrapper">
					<?php
					if (is_array($products)) {
						foreach ($products as $product) {
					?>
							<div class="product-slider-slide swiper-slide">
								<?php get_template_part('template-parts/product', 'slide', array('id' => $product->ID)); ?>
							</div>
							<?php
						}
					} else {
						if ($products->have_posts()) {
							while ($products->have_posts()) {
								$products->the_post();
							?>
								<div class="product-slider-slide swiper-slide">
									<?php get_template_part('template-parts/product', 'slide', array('id' => get_the_ID())); ?>
								</div>
					<?php
							}
						}
						wp_reset_query();
					}
					?>
				</div>
			</div>
			<div class="swiper-arrows">
				<div class="swiper-button-prev swiper-button-prev-<?php echo get_row_index(); ?>"></div>
				<div class="swiper-button-next swiper-button-next-<?php echo get_row_index(); ?>"></div>
			</div>
		</div>
	</div>
</section>