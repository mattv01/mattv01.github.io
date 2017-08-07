<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class('pmenu-push'); ?>>

<?php
	$latte_preloader_display = get_theme_mod('latte_preloader_display');
	$latte_menu_display = get_theme_mod('latte_menu_display');
?>

<?php if( isset($latte_preloader_display) && $latte_preloader_display != 1 ): ?>
	<div class="preloader"><div class="status">&nbsp;</div></div>
<?php endif; ?>

	<div class="site-wrapper">

	<?php if( isset($latte_menu_display) && $latte_menu_display != 1 ): ?>

		<nav class="pmenu pmenu-vertical pmenu-left" id="pmenu">
			<h3 id="hideLeftPush"><?php _e( 'Menu', 'latte' ); ?> <i class="fa fa-arrow-right"></i></h3>
			<ul id="menu-short" class="latte-push-menu menu">
				<li class="menu-item"><a href="http://localhost:8888/wordpress/#intro">Home</a></li>
				<li class="menu-item"><a href="http://localhost:8888/wordpress/#about">About Me</a></li>
				<li class="menu-item"><a href="http://localhost:8888/wordpress/#services">Portfolio</a></li>
				<li class="menu-item"><a href="http://localhost:8888/wordpress/#contact">Contact Me</a></li>
				<li class="menu-item"><a href="http://localhost:8888/wordpress/#social">Find Me</a></li>
			</ul>
		</nav>

		<a id="showLeftPush" class="fa fa-bars"></a>

	<?php endif; ?>
