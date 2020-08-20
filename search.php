<?php get_header();

if(have_posts()){
    echo "<div class='container mt-4 mb-4 pt-4'>"; 
    echo "<h2 class='pb-4'>Your Search Result For: ".esc_html(get_search_query())."</h2>";
    echo "<div class='row'>";  
    
    while(have_posts()){
        the_post();        
        get_template_part('templates/content', get_post_type());           
    }
    echo "</div>";
    echo "</div>";
}

get_footer();