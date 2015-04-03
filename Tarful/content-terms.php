<?php
/**
 * The template used for displaying the 9 most recent products in the homepage
 *
*/
?>
<?php global $cfs; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 terms-flyer">

	<h3><?php echo get_the_title(16);?></h3>

	<?php echo CFS()->get('terms_flyer', 16); ?>

</div>