<?php
/**
 * The template used for displaying the 9 most recent products in the homepage
 *
*/
?>
<?php global $cfs; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 zoi-promise-flyer">

	<h3><?php echo get_the_title(12);?></h3>

	<div class="promise-layout">
	<?php echo CFS()->get('zoi_promise_flyer', 12); ?>
	</div>
	<a href="<?php the_permalink(12); ?>">Conoce más información</a>
	
</div>