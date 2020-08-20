<?php
function custom_breadcrumb_func() {
    global $wp;

    $home_url = site_url();
  $current_page = home_url( $wp->request );
  $slug = basename(get_permalink());  
  $stage = 0;
    
    $breadcrumbs = "<a href=".$home_url.">Home</a>";

     if($home_url !== $slug){
        $str_remove = str_replace(site_url(),"",get_permalink());
        $str_remove = str_replace('/',"",$str_remove);        
        $stage = 1;

        if($str_remove !== '' && $str_remove !== $slug){
            $str_remove = str_replace($slug,"",$str_remove);
            $stage = 2;            
        }

     }
    if($stage == 1){
        $breadcrumbs .= "/ <a href=''>".get_the_title()."</a>";
    }     
    if($stage == 2 && $str_remove !== 'product'){
        $breadcrumbs .= "/ <a href='$home_url/$str_remove'>$str_remove</a>";
        $breadcrumbs .= "/ <a href=''>".get_the_title()."</a>";
    }
    if( $stage == 2 && $str_remove == 'product'){
        $breadcrumbs .= "/ <a href='$home_url/all-products'>";
        $breadcrumbs .= "All Products";
        $breadcrumbs .= "</a>";
        $breadcrumbs .= "/ <a href=''>".get_the_title()."</a>";              
    }

    echo $breadcrumbs;
    
}