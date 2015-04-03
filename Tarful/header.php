<?php //tarful
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/fonts/typos.css" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/js/bootstrap.js"></script>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>
	<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'> 
	


	<?php wp_head(); 
	$current_user = wp_get_current_user();
	?>
</head>


<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		

<div id="navbar" class="top-navbar">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<img src="<?php bloginfo('stylesheet_directory');?>/images/zoi.png" alt="">
	</a>
</div>

<div class="col-xs-7 col-sm-7 col-md-7 col-lg-8">
	 <nav id="site-navigation" class="navigation top-navigation" role="navigation"> 
 	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-nav-menu' ) ); ?> 
	 </nav><!-- #site-navigation -->
</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 menu-account">
	<?php global $woocommerce; ?>

	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3  ">
		<a class="" href="">
			<center><img src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" alt="car-shop" /></center>
		</a>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-4 menu-cart">
		<a class="" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
			<center><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cart.png" alt="car-shop" /></center>
		</a>
	
		<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
			<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
		</a>	
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
		<?php if (is_user_logged_in()) { ?>
			<a href="<?php echo get_permalink(8); ?>">
		<?php 
			if ( ($current_user instanceof WP_User) ) {
			echo get_avatar( $current_user->user_email, 32 );
			}
		 ?>
		</a>
		<?php }else{ ?>
			<a href="<?php echo get_permalink(7); ?>" s>
				<h5>Crear cuenta</h5>
			</a>
		<?php } ?>
		
	</div>
	
</div>

 
 </div><!-- #navbar -->



<div id="content" class="site-content">
