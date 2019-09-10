<?php

function header_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'pruebas template' )
    ));
}
add_action('init', 'header_menus');
 
function load_style(){

   wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );

  //wp_enqueue_style( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0' );

   // wp_enqueue_style( 'icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0' );

  wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css?family=Dancing+Script&display=swap', array(), '1.0.0' );

  wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0' );

  // wp_enqueue_style( 'style', get_stylesheet_uri(), array('materialize', 'icons'), '1.0.0' );

}
add_action('wp_enqueue_scripts','load_style'); 

