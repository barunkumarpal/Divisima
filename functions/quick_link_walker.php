<?php

class Quick_link_foot extends Walker_Nav_Menu{
    public function start_lvl( &$output, $depth = 0, $args = []){
        $output .= '<ul>';
    }    

    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0){
        $output .= '<li>';
        $output .= $args->before;
        $output .= '<a href="'.$item->url.'">';
        $output .= $args->link_before.$item->title.$args->link_after;
        $output .='</a>';
        $output .= $args->after;
    }    
    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0){
        $output .= '</li>';
        if (in_array("menu-break", $item->classes)) {
            $output .='</ul><ul>';
        }

    }
   

    public function end_lvl( &$output, $depth = 0, $args = []){
        $output .= '</ul>';
    }
}