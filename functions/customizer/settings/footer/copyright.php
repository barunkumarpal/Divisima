<?php
function customizer_copyright($wp_customize){
     // Copyright

        // Setting
        $wp_customize->add_setting(
            'copyright',
            []
        );

        // Control
        $wp_customize->add_control(
            'copy_id',
            array(
                'label' => 'Copyright',
                'section'   => 'footer',
                'settings' => 'copyright'
            )
        );
}