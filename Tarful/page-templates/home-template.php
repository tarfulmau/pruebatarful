<?php
/**
 * Template Name: Full Width Home Page
 *
 * by Tarful
 *
 */

get_header(); ?>

<div id="main-content" class="site-main limit">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php get_template_part('content','main-slider'); ?>

			<section>

				<div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 mcenter recent-products">

					<?php get_template_part('content', 'newest-products' ); ?>

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8  product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-5.png" alt="">
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4  product ">
						<a href="<?php echo get_permalink(9); ?>">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-6.png" alt="">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 promise-tag mcenter">
							<h2>Conoce la promesa zoi</h2>
						</div>
						</a>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4  product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-6.png" alt="">
					</div>


					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8  product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-5.png" alt="">
					</div>
					
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product">
					<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 mcenter">
						<button type="button" class="btn btn-block avalaible">CONÓCE MAS EXPERIENCIAS</button>
					</div>
				</div>

			</section>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php

get_footer();
