<?php
define('DEV_MODE', true);
$path = get_theme_file_path();

// Enqueue Styles
require($path.'/functions/enqueue.php');
add_action( 'wp_enqueue_scripts', 'theme_styles_function');

// Theme Support
require($path.'/functions/theme_support.php');
add_action('after_setup_theme', 'all_theme_support');

// Load Products Ajax on shop page
require( $path.'/functions/load_more_products.php');
add_action('wp_ajax_load_more_products_shop', 'load_more_products_on_shop');
add_action('wp_ajax_nopriv_load_more_products_shop', 'load_more_products_on_shop');

// Customizer
require($path.'/functions/customizer/settings/contacts/social_links.php');

require($path.'/functions/customizer/settings/footer/menu_select.php');
require($path.'/functions/customizer/settings/footer/quick_menu.php');
require($path.'/functions/customizer/settings/footer/copyright.php');
require($path.'/functions/customizer/settings/footer/logo.php');

require($path.'/functions/customizer/panels.php');
require($path.'/functions/customizer/sections.php');
require($path.'/functions/customizer/settings.php');
require($path.'/functions/customizer/customizer.php');

add_action('customize_register','theme_customize_register');

// ACF Pro Options Pages
require($path.'/functions/acf/option_pages.php');

// Nav Walker
require($path.'/functions/quick_link_walker.php');

// Remove Actions
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );


// Breadcrumb
require_once($path.'/functions/breadcrumb.php');

// add_action('custom_breadcrumb', 'custom_breadcrumb_func');
add_action('custom_breadcrumb', 'woocommerce_breadcrumb', 20, 0 );




        // return apply_filters( 'woocommerce_product_add_to_cart_text', $text, $this );
        
add_filter('woocommerce_product_add_to_cart_text', 'variable_prod_text', 10, 2);


function variable_prod_text($data, $product){

    if( $product->is_type( 'variable' ) && !is_product()){
        $data = __('Options', 'woocommerce');
    }
    
    return $data;
}