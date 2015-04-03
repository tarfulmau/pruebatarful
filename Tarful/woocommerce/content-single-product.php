<?php
/**
 * @author 		Tarful
 * @package 	Tarful/woocommerce
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post, $woocommerce, $product; ?>

<?php
	/* woocommerce_before_single_product hook	 * @hooked wc_print_notices - 10 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mcenter limit">

	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-8">

		<h1 itemprop="name" class="product_title"><?php the_title(); ?></h1>

		<?php $cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
		echo $product->get_categories( ', ', '<div class="category">' . _n( '', '', $cat_count, 'woocommerce' ) . ' ', '</div>' );  ?>


		<div class="images">

			<?php
				if ( has_post_thumbnail() ) {
					$image_title 	= esc_attr( get_the_title( get_post_thumbnail_id() ) );
					$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
					$image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
				}
			?>

			<div id="carousel-product" class="carousel slide main-slider-product" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#carousel-product" data-slide-to="0" class="active"></li>

				    <?php if( has_shortcode( $post->post_content, 'gallery' ) ) {                   
						$gallery = get_post_gallery_images( $post->ID ); 
					    for ($i=0; $i < count($gallery) ; $i++) { 
					    	$j = $i+1;
					    	echo '<li data-target="#carousel-product" data-slide-to="'.$j.'"></li>';
				    		} 	    
				   	} ?>
				</ol>

				  <!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="<?php echo $image_link; ?>" alt="...">
				    </div>

					<?php 
					if ( !empty($gallery)) {
						foreach( $gallery as $image ) {
				   		 $image = str_replace('-150x150','',$image); ?>
				  			
				  			<div class="item">
							    <img src="<?php  echo $image; ?>" alt="...">
							</div>
					<?php }
					} ?>
			   	</div>

			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-desc">
			<?php if ( $post->post_excerpt ) { ?>
				<div itemprop="description">
					<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
				</div>
			<?php } ?>

			<div class="guru">
				<img src="<?php bloginfo('stylesheet_directory');?>/images/guru.png" alt="">
				<h5>Orlando Osorio </br>ZOIGURU </h5>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-includes">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo CFS()->get('loving_reasons'); ?>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo CFS()->get('includes'); ?>
			</div>
		</div>

		<?php get_template_part('content','zoi' ); ?>

		<?php get_template_part('content','terms' ); ?>

	
	</div>


	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-3 product-info">

		<div class="date">
			<h4>Fecha y duración</h4>
			<p><?php 
			echo date('F j, Y', strtotime(CFS()->get('start_date'))); 
			echo '<span>'.CFS()->get('lenght').'</span>';
			?></p>
		</div>

		<div class="place">
			<h4>Lugar <a href="">ver mapa</a></h4>
			
			<p>LA GRAN SABANA</p>
		</div>
		
		<div class="skills">

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>emoción</h4>
				<?php
					$values = CFS()->get('adrenaline');
					foreach ($values as $value => $label) { echo  $value ; }
				?>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>dificultad</h4>
				<?php
					$values = CFS()->get('difficulty');
					foreach ($values as $value => $label) { echo  $value ; }
				?>
			</div>
		</div>
		
		<div class="buy-info">

			<?php if ( $product->is_purchasable() ) {
				$availability      = $product->get_availability();

				if ( $product->is_in_stock() ) {

					 do_action( 'woocommerce_before_add_to_cart_form' ); ?>
						
					<form class="cart" method="post" enctype='multipart/form-data'>

					 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

					 	<?php
					 		if ( ! $product->is_sold_individually() )
					 			woocommerce_quantity_input( array(
					 				'min_value' => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
					 				'max_value' => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product )
					 			) );
					 	?>

					 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

					 	<button type="submit" class="avalaible"><?php echo $product->get_price_html(); ?> <h4>comprar</h4></button>

						<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
					</form>

					<p class="av"> quedan <?php echo $product->get_total_stock() ?> cupos </p> 

			
					<?php  do_action( 'woocommerce_after_add_to_cart_form' );
				 }

				
			} ?>
		 </div> <!--buy-info -->
	</div>




	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />
</div>

</div><!-- #product-<?php the_ID(); ?> -->


<?php do_action( 'woocommerce_after_single_product' ); ?>
