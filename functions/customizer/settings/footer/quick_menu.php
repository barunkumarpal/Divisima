<?php

function quick_menu($wp_customize){
    // Footer Menu Quick Link

        // Setting
        $wp_customize->add_setting(
            'quick_link_head',
            []
        );

        // Control
        $wp_customize->add_control(
            'quick_head_id',
            array(
                'label' => 'Quick Link Menu Heading',
                'section'   => 'footer',
                'settings' => 'quick_link_head'
            )
        );
}