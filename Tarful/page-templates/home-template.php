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
			 
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/images/main-slider.png" alt="...">
						<div class="carousel-caption"> 
							<div class="category"><a href=""> excursionismo</a></div>
							<div class="location"><a href="">La gran sabana</a></div>
							<h1>Parque Nacional La Gran Sabana / Roraima <span>6 días y 5 noches</span></h1>
							<div class="avalaible">Quedan 6 cupos <a href="">Quiero reservar!</a></div>
						</div>
					</div>
					
				<div class="item">
						<img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/images/main-slider.png" alt="...">
						<div class="carousel-caption"> 
							<div class="category"><a href=""> escalada</a></div>
							<div class="location"><a href="">La gran sabana</a></div>
							<h1>Mérida/ Roraima <span>6 días y 5 noches</span></h1>
							<div class="avalaible">Quedan 6 cupos <a href="">Quiero reservar!</a></div>
						</div>
					</div>

				</div>
			</div>

			<section>
				<div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 mcenter recent-products">

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-2.png" alt="">
						<div class="carousel-caption">
							<div class="category"><a href=""> escalada</a></div>
							<div class="location"><a href="">La gran sabana</a></div>
							<h3>Mérida/ Roraima</h3>
						</div>
						<div class="avalaible">999.99 BS | <span>6 cupos</span></div>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4  product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-3.png" alt="">
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4  product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-4.png" alt="">
					</div>


					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8  product">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-5.png" alt="">
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4  product ">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-6.png" alt="">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 promise-tag mcenter">
							<h2>Conoce la promesa zoi</h2>
						</div>
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

			<section>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 mcenter social">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-9.png" alt="">
						<div class="caption">
							<h2> PROXIMAS EXPERIENCIAS <br> SUBSCRIBETE A NUESTRO BOLETIN</h2>

							<form class="form-inline">
							<div class="form-group">
							<label for="exampleInputEmail2"></label>
							<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
							</div>
							<button type="submit" class="btn avalaible">Subscríbete</button>
							</form>
						</div>
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/Untitled-10.png" alt="">
						<div class="caption">
							<h2> comparte tus historias</h2>
							<h2 class="hasthag">#zoivenezuela</h2> 

							<div class="social-icons">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 FB ">
									<img src="/images/fb.png" alt="">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3  col-md-offset-1 TW">
									<img src="/images/fb.png" alt="">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-md-offset-1 col-lg-3 IN">
									<img src="/images/fb.png" alt="">
								</div>
							</div>

						</div>
					</div>
				</div>
				</div>
			

			</section>
		
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php

get_footer();
