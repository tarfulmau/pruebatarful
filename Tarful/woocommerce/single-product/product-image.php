<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>
<div class="images">

	<?php
		if ( has_post_thumbnail() ) {

			$image_title 	= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
		}
	?>

	<?php  ?>

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
		    	}?>
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
