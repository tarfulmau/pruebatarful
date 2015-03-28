<?php
/**
 * Tarful footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer class="site-footer" role="contentinfo">
		<div class="container limit">
		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<?php wp_nav_menu( array( 'theme_location' => 'credits-1') ); ?> 
		</div>
		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<?php wp_nav_menu( array( 'theme_location' => 'credits-2') ); ?> 
		</div>
		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<?php wp_nav_menu( array( 'theme_location' => 'credits-3') ); ?> 
		</div>
		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 social-n">
			 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 FB">
			 	<a href=""><h5> síguenos</h5></a>
			 </div>
			 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 TW">
			 	<a href=""><h5> síguenos</h5></a>
			 </div>
			 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 IN">
			 	<a href=""><h5> síguenos</h5></a>
			 </div>
		</div> 

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 credits">
			<h5>2015 ZOI TODOS LOS DERECHOS RESERVADOS</h5>
				<h5>RIF J -XXXXXXX Y RTN: XXXXXXX</h5>
		</div> 
		</div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
