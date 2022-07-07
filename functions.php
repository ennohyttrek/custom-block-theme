<?php

function custom_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'custom_stylesheets' );

function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Hauptmenü [main-menu]' ),
        'mobile-menu' => __( 'Mobilmenü' ),
        'secondary-menu' => __( 'Nebenmenü' )
        )
   );
 }
 add_action( 'init', 'register_my_menus' );


//Shortcode Main Menu DE [main-menu-de]
function main_menu_de_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav",
        'echo' => false ) );

}
add_shortcode('main-menu', 'main_menu_de_shortcode');