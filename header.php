<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<script src="https://kit.fontawesome.com/84c396f697.js" crossorigin="anonymous"></script>
	</head>
	<body <?php body_class(); ?>>
		<header id="site-header" class="site-header">
			<div class="header-wrapper">
				<div class="site-branding">
					<a id="logo" href="<?php bloginfo( 'wpurl' ); ?>">
						<img src="<?php echo IMAGEPATH . 'logo.svg'; ?>" alt="Site logo">
						<span class="screen-reader-text"><?php bloginfo( 'sitename' ); ?></span>
					</a>
				</div>

				<div id="menus">
					<nav id="primary-menu" aria-label="Primary menu">
						<?php toms_nav_menu( 'primary' ); ?>
					</nav>
					<nav id="secondary-menu" aria-label="Secondary menu">
						<?php toms_nav_menu( 'secondary' ); ?>
					</nav>
				</div>

				<button id="menu-toggle" type="button" aria-label="Toggle the navigation" data-toggle="closed">
					<i class="fa-regular fa-bars open-icon"></i>
					<i class="fa-regular fa-times close-icon"></i>
					<span class="screen-reader-text">
						<?php _e( 'Menu', 'toms' ); ?>
					</span>
				</button>
			</div>
		</header>
		<main id="main">
