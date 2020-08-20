<?php
function menu_select_footer_customizer($wp_customize){
    // Menu Select

        // Setting
        $wp_customize->add_setting(
            'menu_select',
            []
        );

        // Control
        $wp_customize->add_control(
            'menu_select_id',
            array(
                'label' => 'Select Menu',
                'section'   => 'footer',
                'settings' => 'menu_select',
                'type'    => 'select',
                'choices' => array(
                    'default' => 'Quick Link Menu',
                    'secondary_menu' => 'Main Menu'
                )
            )
        );
}