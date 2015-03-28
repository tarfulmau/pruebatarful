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


 /*// Funcion a nuestro gusto que queramos incluir
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

//función sobreescribe una que ya existe en el tema padre
if ( ! function_exists( 'theme_special_nav' ) ) {
    function theme_special_nav() {
        //  Hacer algo.
    }
}*/


 ?>