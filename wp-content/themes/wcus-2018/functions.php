<?php

add_action( 'wp_enqueue_scripts', 'campsite_2017_parent_theme_enqueue_styles' );

function campsite_2017_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'campsite-2017-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'wcus-2018-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'campsite-2017-style' )
    );

}
