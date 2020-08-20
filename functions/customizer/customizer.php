<?php
function theme_customize_register($wp_customize){
   
    // Panels
    panel_customizer($wp_customize);

    // Sections
    theme_customize_sections($wp_customize);

    // Settings
    theme_customize_settings($wp_customize);
}