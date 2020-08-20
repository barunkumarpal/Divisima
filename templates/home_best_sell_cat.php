<?php
// $terms = get_the_terms( get_the_ID(), 'product_cat' );
                         
// if ( $terms && ! is_wp_error( $terms ) ) : 
 
//     $draught_links = array();
    
//     foreach ( $terms as $term ) {
//         $cat_name[] = $term->name;
//         $cat_link = $term->slug;        
//     }       

//     $join_cats = join( ", ", $cat_name );
   
    ?>
 
    <!-- <li>
       <a href="<?php //echo site_url()."/product-category/$cat_link"; ?>"> <?php //printf(  $join_cats  ); ?> </a>
    </li> -->
<?php //endif; 


$terms = get_the_terms( get_the_ID(), 'product_cat' );
                         
if ( $terms && ! is_wp_error( $terms ) ) :  
    
    // echo "<pre>";
    // print_r($terms);
    // echo "</pre>";

    foreach ( $terms as $term ) {
        // $cat_name[] = $term->name;
        // $cat_link = $term->slug; 
        $term_name= $term->name;       
       
    }      
   
    // echo "<pre>";
    // print_r($term_name);
    // echo "</pre>";
    //$array_o = array_merge($test_array, array_m);

    
    
    // print_r($cat_name);
    // print_r($cat_link);

   // $join_cats = join( ", ", $cat_name );
   
    ?>
 
    <!-- <li>
       <a href="<?php //echo site_url()."/product-category/$cat_link"; ?>"> <?php //printf(  $join_cats  ); ?> </a>
    </li> -->
<?php endif; ?>