<?php

function pizzeria_register_styles() {

    wp_register_style(
        'Bootstrap_5', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style('Bootstrap_5');

    wp_enqueue_style('Theme_Styles', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('Popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'pizzeria_register_styles');


// allows to set featured image/thumbnail in backend
function pizzeria_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_image_size('homepage-thumb', 200, 200 );
}
add_action( 'after_setup_theme', 'pizzeria_setup_theme' );


