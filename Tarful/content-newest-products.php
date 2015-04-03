<?php
/**
 * The template used for displaying the 9 most recent products in the homepage
 *
*/
?>
<?php global $cfs; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<?php 
	$query = new WP_Query( array( 'post_type' => 'product', 'post_per_page=9', 'meta_key'=>'_featured', 'meta_value'=>'no'));

	if ( $query->have_posts() ){
	while ( $query->have_posts() ) : $query->the_post(); 
	$product = get_product( $query->post->ID );  
	$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
	$single_cat = array_shift( $product_cats );	

	?>

	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 product">
		<?php the_post_thumbnail('small'); ?>
		<div class="carousel-caption">
			<div class="category"><a href=""><?php  echo $single_cat->name  ?></a></div>
			<div class="location"><a href="">La gran sabana</a></div>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		</div>
		<div class="avalaible"> <?php echo $product->get_price_html() ;?>| <span> <?php echo $product->get_total_stock() ;?> CUPOS </span></div>
	</div>

	<?php  endwhile;
	wp_reset_postdata(); 

	}else {?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php } ?>

</div>