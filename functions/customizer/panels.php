<?php
function panel_customizer($wp_customize){
     // Panel Theme Options
     $wp_customize->add_panel(
        'theme_options', 
        array(
            'title' => 'Theme Options',   
            'description' => '<p>Theme Options</p>',         
            'priority' => 160
        )
    );
}