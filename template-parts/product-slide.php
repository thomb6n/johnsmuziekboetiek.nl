<?php
$id = $args['id'];
$title     = get_the_title($id);
$image_src = get_the_post_thumbnail_url($id, 'woocommerce_thumbnail');
$product   = wc_get_product($id);
$price     = wc_get_price_to_display($product, array('display_context' => 'shop'));
$link      = get_the_permalink($id);
?>
<div class="product-slide">
	<img class="product-image" src="<?php echo $image_src; ?>" alt="">
	<div class="product-info">
		<h3 class="product-title h6"><?php echo $title; ?></h3>
		<p class="product-price"><?php echo '€ ' . $price; ?></p>
	</div>
	<a href="<?php echo $link; ?>" class="overlay-link">
		<span class="screen-reader-text"><?php echo __('Go to', 'toms') . ' ' . $title; ?></span>
	</a>
</div>