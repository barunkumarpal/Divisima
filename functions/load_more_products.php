<?php
function load_more_products_on_shop(){
    $next_page = $_POST['current_page'] + 1;
    global $wp_query;
    $args = [
        'post_type' => 'product',
        'posts_per_page' => 3,
        'paged' => $next_page

    ];

    $query = new WP_Query($args);

    if($query->have_posts()){
        ob_start();

        while($query->have_posts()){
            $query->the_post();
            
            echo "<div class='col-lg-4 col-sm-6'>";
            get_template_part('templates/shop_product');
            echo "</div>";
        }

        wp_send_json_success( ob_get_clean());
    } else{
        wp_send_json_error('No more products!');
    }


}