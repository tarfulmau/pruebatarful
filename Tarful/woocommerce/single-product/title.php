<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
	<h1 itemprop="name" class="product_title"><?php the_title(); ?></h1>
</div>

