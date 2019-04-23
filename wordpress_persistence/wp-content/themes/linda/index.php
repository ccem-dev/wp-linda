<!DOCTYPE HTML>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Linda
 */

get_header();
?>
<html>
	<head>
		<title>LINDA BRASIL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/css/main.css" />
		<link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/images/flor_rosa.png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">



							<!-- Banner -->
								<section id="banner">
									<div class="content">
                                        <div id="primary" class="content-area">
                                            <main id="main" class="site-main">

                                                <?php
                                                if ( have_posts() ) :

                                                    if ( is_home() && ! is_front_page() ) :
                                                        ?>
                                                        <header>
                                                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                                        </header>
                                                    <?php
                                                    endif;

                                                    /* Start the Loop */
                                                    while ( have_posts() ) :
                                                        the_post();

                                                        /*
                                                         * Include the Post-Type-specific template for the content.
                                                         * If you want to override this in a child theme, then include a file
                                                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                                         */
                                                        get_template_part( 'template-parts/content', get_post_type() );

                                                    endwhile;

                                                    the_posts_navigation();

                                                else :

                                                    get_template_part( 'template-parts/content', 'none' );

                                                endif;
                                                ?>

                                            </main><!-- #main -->
                                        </div><!-- #primary -->
									</div>
<!--									<span class="image object">-->
<!--										<img src="--><?php //bloginfo("template_directory"); ?><!--/images/pic10.jpg" alt="" />-->
<!--									</span>-->
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Erat lacinia</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3>Portitor ullamcorper</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Ipsum sed dolor</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="<?php bloginfo("template_directory"); ?>/images/pic01.jpg" alt="" /></a>
											<h3>Interdum aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php bloginfo("template_directory"); ?>/images/pic02.jpg" alt="" /></a>
											<h3>Nulla amet dolore</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php bloginfo("template_directory"); ?>/images/pic03.jpg" alt="" /></a>
											<h3>Tempus ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php bloginfo("template_directory"); ?>/images/pic04.jpg" alt="" /></a>
											<h3>Sed etiam facilis</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php bloginfo("template_directory"); ?>/images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php bloginfo("template_directory"); ?>/images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">


								<?php
								get_sidebar();
								?>

							<!-- Section -->


							<!-- Footer -->
							<?php

							get_footer();
							?>

						</div>
					</div>

			</div>



		<!-- Scripts -->
			<script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php bloginfo("template_directory"); ?>/assets/js/browser.min.js"></script>
			<script src="<?php bloginfo("template_directory"); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php bloginfo("template_directory"); ?>/assets/js/util.js"></script>
			<script src="<?php bloginfo("template_directory"); ?>/assets/js/main.js"></script>

	</body>
</html>
