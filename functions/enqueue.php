<?php
function theme_styles_function(){

    $ver = DEV_MODE ? time() : false;
    $src = get_theme_file_uri();

    // CSS
    wp_enqueue_style('main_style_css', get_stylesheet_uri() );
    wp_enqueue_style( 'style_css', $src.'/main_style_min.css', [], $ver, 'all' );

    // JS
    wp_enqueue_script( 'main_js', $src.'/main_js_min.js', ['jquery'], $ver, true );
    wp_enqueue_script( 'custom_js', $src.'/custom.js', ['jquery'], $ver, true );
    // wp_enqueue_script( 'jquery_3.2', $src.'/js/jquery-3.2.1.min.js', [], $ver, true );
    // wp_enqueue_script( 'bootstrap_min', $src.'/js/bootstrap.min.js', [], $ver, true );
    // wp_enqueue_script( 'slicknav', $src.'/js/jquery.slicknav.min.js', [], $ver, true );
    // wp_enqueue_script( 'owl', $src.'/js/owl.carousel.min.js', [], $ver, true );
    // wp_enqueue_script( 'nicescroll', $src.'/js/jquery.nicescroll.min.js', [], $ver, true );
    // wp_enqueue_script( 'zoom', $src.'/js/jquery.zoom.min.js', [], $ver, true );
    // wp_enqueue_script( 'jquery_ui', $src.'/js/jquery-ui.min.js', [], $ver, true );
    // wp_enqueue_script( 'main_js', $src.'/js/main.js', [], $ver, true );

     // AJAX URL
    wp_localize_script('main_js', 'wp_ajax_obj', [ 
    'ajax_url' => admin_url('admin-ajax.php'),
    'home_url' => home_url('/')
    ]);
}