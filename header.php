<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.gstatic.com" />
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
					<nav id="main-menu" aria-label="Main menu">
						<?php //strl_menu_main( 'main' ); ?>
					</nav>
					<nav id="submenu" aria-label="Submenu">
						<?php //strl_menu_main( 'secondary' ); ?>
					</nav>
				</div>

				<div class="menu-toggle" style="display: none;">
					<button class="menu-icon" type="button">
						<i class="fa-regular fa-bars"></i>
						<i class="fa-regular fa-times"></i>
						<span class="screen-reader-text">
							<?php _e( 'Menu', 'toms' ); ?>
						</span>
					</button>
				</div>
			</div>
		</header>
		<main id="main">
