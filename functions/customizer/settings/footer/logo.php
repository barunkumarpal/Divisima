<?php
function custom_logo($wp_customize){
// Footer
    // Logo
        // Setting
        $wp_customize->add_setting(
            'aditional_logo',
            []
        );

        // Control
        $wp_customize->add_control( 
            new WP_Customize_Image_Control(
                $wp_customize,
                'ad_logo_id', 
            array(
                'label' => 'Second Logo',                     
                'section' => 'footer',          
                'settings' => 'aditional_logo'
                )
            )
        );
}