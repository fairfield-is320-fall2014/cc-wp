<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'customizr', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'customizr-style', get_stylesheet_uri(), array('customizr')  );
}
?>
