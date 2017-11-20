<?php

// accent color #CA2017
// http://theoperaqueen.com/wp-content/uploads/2017/09/cropped-Photo-2017-02-05-10-29-49-AM-2.jpg

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'lovecraft';
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
