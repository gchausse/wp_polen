<?php
function polen_enqueue_style() {
    wp_enqueue_style('polen_style',get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'polen_enqueue_style' );
add_theme_support('post-thumbnails');
?>
