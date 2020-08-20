<?php
function all_theme_support(){
    // Title Tag
    add_theme_support('title-tag');

    // Custom Logo
    add_theme_support('custom-logo');
    
    // Menu
    register_nav_menus([
        'primary' => 'Main Menu',
        'quick_links'   => 'Quick Links'
    ]);

    // Image Sizes
    add_image_size( 'product_thumbnail', 260, 400, array( 'left', 'top' ) );


    // Woocommerce
    add_theme_support( 'woocommerce' );
}