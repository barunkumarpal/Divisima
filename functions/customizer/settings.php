<?php
function theme_customize_settings($wp_customize){   

custom_logo($wp_customize);

quick_menu($wp_customize);

menu_select_footer_customizer($wp_customize);
    
customizer_copyright($wp_customize);  

social_customizer($wp_customize);



}