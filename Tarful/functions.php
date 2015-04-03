<?php //Tarful 


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Register custom menu nav locations
function tarful_register_menus() {
  register_nav_menus(
    array(
       'credits-1' => __( 'Footer IZQ' ),
       'credits-2' => __( 'Footer CTR' ),
       'credits-3' => __( 'Footer DER' )
    )
  );
}
add_action( 'init', 'tarful_register_menus' );

/* remove parent sidebars */
function remove_sidebars() {
  unregister_sidebar( 'sidebar' ); // primary on left
}
add_action( 'widgets_init', 'remove_sidebars', 11 );

// Add currency / symbol
add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['VEF'] = __( 'Bolivar Fuerte - Venezuela (Bs)', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'VEF': $currency_symbol = '<span class="money-currency-symbol">Bs. </span>'; break;
     }
     return $currency_symbol;
}


 ?>