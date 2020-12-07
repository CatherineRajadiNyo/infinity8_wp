<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		
		<link rel="shortcut icon" href="<?php echo THEME_ASSET_PATH; ?>images/favicon.png" type="image/x-icon">
		<link rel="icon" href="<?php echo THEME_ASSET_PATH; ?>images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.typekit.net/ccj0oge.css">
		<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css">
		<link rel="stylesheet" href="<?php echo THEME_ASSET_PATH; ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo THEME_ASSET_PATH; ?>css/style.min.css">

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a class="navbar-brand" href="/"><img src="<?php echo THEME_ASSET_PATH; ?>images/logo@2x.png" alt="logo" /></a>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
						wp_nav_menu(
							array(
								'menu' => 'primary',
								'menu_class' => 'navbar-nav mr-auto',
								'container' => '',
							)
						);
					?>
					<ul class="navbar-nav" style="flex-grow: 0;">
						<li class="menu-item">
							<a class="btn btn-outline-secondary" href="#">Book Appointment</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>