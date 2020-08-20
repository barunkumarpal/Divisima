<?php get_header(); 
defined( 'ABSPATH' ) || exit;
?>

<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4><a href="<?php echo site_url('/all-products');?>">SHOP</a></h4>
			<div class="site-pagination">
				<!-- <a href="">Home</a> /
				<a href="">Shop</a> / -->
				<?php do_action('custom_breadcrumb'); ?>
			</div>
		</div>
	</div>
<!-- Page info end -->
<?php
if(have_posts()){
    $count = 0;
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $count++;         
        }
        if( $count <= 0 ){?>

            <div class="container">
                <div class="row justify-content-center p-4 m-4">
                    <div class="col-md-6 text-center">
                        <h2>Your cart is empty!</h2>
                        <a href="<?php echo site_url().'/all-products';?>" class="btn btn-danger mt-4">Shop Now</a>
                    </div>
                </div>
            </div>           

        <?php }else{           
                
                get_template_part('templates/content', 'cart');               
            
            }    
}


get_footer();