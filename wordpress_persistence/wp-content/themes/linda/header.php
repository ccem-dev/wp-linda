<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Linda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="header" style="padding-top: 20px;">
		<!-- <a href="<?php bloginfo("template_directory"); ?>/index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a> -->
		<!-- <span class="logo"><?php the_custom_logo(); ?></span> -->
		<span class="logo"><img src="<?php bloginfo("template_directory"); ?>/images/logo_login.jpg" width="200" alt="" /></span>
		<ul class="icons" style="padding-right:30px">
			<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<!-- <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li> -->
			<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<!-- <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li> -->
		</ul>
	</header>



	<div id="content" class="site-content">
