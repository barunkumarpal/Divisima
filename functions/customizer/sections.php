<?php

function theme_customize_sections($wp_customize){
    $wp_customize->add_section( 
        'contacts', 
        array(
            'title' => __( 'Contacts' ),            
            'panel' => 'theme_options',
            'priority' => 160        
        ) );
    $wp_customize->add_section( 
        'footer', 
        array(
            'title' => __( 'Footer' ),            
            'panel' => 'theme_options',
            'priority' => 160        
        ) );
}