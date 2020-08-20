<?php
function social_customizer($wp_customize){
    // Contacts

    // Social Links

        // Facebook

            // Setting
            $wp_customize->add_setting(
                'contact_fb',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_fb_id', 
            array(
                'label' => 'Facebook Profile',                     
                'section' => 'contacts',          
                'settings' => 'contact_fb'
                )
        
        );

    // Instagram

        // Setting
            $wp_customize->add_setting(
                'contact_ig',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_ig_id', 
            array(
                'label' => 'Instagram Profile',                     
                'section' => 'contacts',          
                'settings' => 'contact_ig'
                )
        
        );

    // G+ Plus

        // Setting
            $wp_customize->add_setting(
                'contact_gp',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_gp_id', 
            array(
                'label' => 'Google+ Account',                     
                'section' => 'contacts',          
                'settings' => 'contact_gp'
                )
        
        );

    // Youtube

        // Setting
            $wp_customize->add_setting(
                'contact_yt',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_yt_id', 
            array(
                'label' => 'Youtube Channel',                     
                'section' => 'contacts',          
                'settings' => 'contact_yt'
                )
        
        );

    // Pinterest

        // Setting
            $wp_customize->add_setting(
                'contact_pntrst',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_pntrst_id', 
            array(
                'label' => 'Pinterest Profile',                     
                'section' => 'contacts',          
                'settings' => 'contact_pntrst'
                )
        
        );

    // Twitter

        // Setting
            $wp_customize->add_setting(
                'contact_twtr',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_twtr_id', 
            array(
                'label' => 'Pinterest Profile',                     
                'section' => 'contacts',          
                'settings' => 'contact_twtr'
                )
        
        );

    // Tumbler

        // Setting
            $wp_customize->add_setting(
                'contact_tumblr',
                []
            );

        // Control
        $wp_customize->add_control(            
                'ad_tumblr_id', 
            array(
                'label' => 'Tumbler Profile',                     
                'section' => 'contacts',          
                'settings' => 'contact_tumblr'
                )
        
        );
}