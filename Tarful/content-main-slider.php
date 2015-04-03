<?php
/**
 * The template used for displaying the main slider in the homepage.
 *
*/
?>
<?php global $cfs;
$j=0;
$i=0;	 ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

	<?php $args = array('post_type' => 'product', 'meta_key' => '_featured', 'meta_value' => 'yes', 'posts_per_page' => -1 );  
		$featured_query = new WP_Query( $args );  
		$number = $featured_query->found_posts;
		

		if ($featured_query->have_posts()) :   ?>
		
		<ol class="carousel-indicators">
		<?php while ($j < $number) { 
			if ($j==0){
				echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
			} 
			else{
				echo '<li data-target="#carousel-example-generic" data-slide-to="'.$j.'"></li>';
			} 
			$j++; 
		 }?>
		</ol>
	
	<div class="carousel-inner" role="listbox">
	<?php
		while ($featured_query->have_posts()) :   
			$featured_query->the_post();  
			$product = get_product( $featured_query->post->ID );  
			$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
			$single_cat = array_shift( $product_cats );
			?> 

			<div class="item
				<?php if ($i==0) {
					echo 'active';
				} ?> ">
				<?php the_post_thumbnail('large'); ?>
				<div class="carousel-caption"> 
					<div class="category"><a href=""><?php  echo $single_cat->name  ?></a></div>
					<div class="location"><a href="">La gran sabana</a></div>
					<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?><span> <?php echo CFS()->get('lenght');  ?></span></h1></a>
					<div class="avalaible">Quedan <?php echo $product->get_total_stock() ?> Cupos<a href="">Quiero reservar!</a></div>
				</div>
			</div>

			<?php $i=1;?>
		
	<?php
	endwhile;
	?> </div> <?php  

	endif;  

	wp_reset_query(); 

	?>
	</div>


