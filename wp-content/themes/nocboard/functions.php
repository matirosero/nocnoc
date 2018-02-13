<?php

add_action( 'wp_enqueue_scripts', 'pinboard_parent_theme_enqueue_styles' );

function pinboard_parent_theme_enqueue_styles() {
    // wp_enqueue_style( 'pinboard-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'nocboard-style',
        get_stylesheet_directory_uri() . '/assets/dist/style.css'
    );

}
