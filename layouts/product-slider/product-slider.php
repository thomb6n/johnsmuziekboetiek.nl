<?php
$layout_name = basename(__FILE__, '.php');
$prefix      = $layout_name . '_';
$title       = get_sub_field($prefix . 'title');
$show        = get_sub_field($prefix . 'show');
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
		<div class="content">
			<?php
			if ($title) {
			?>
				<h2 class="title"><?php echo $title; ?></h2>
			<?php
			}
			?>

			<div class="product-slider-wrapper">
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
				<!-- <div class="swiper-pagination"></div> -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>