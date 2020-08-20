<div class="col-lg-3 col-sm-6">
<div class="product-item">											
        <div class="pi-pic">
        <?php if(has_post_thumbnail()){
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                <a href="<?php the_permalink();?>">
                    <img src="<?php echo $featured_img_url; ?>"/>                                                    
                    <?php } else{?>
                    <img src="<?php echo woocommerce_placeholder_img_src(); ?>" class="img-fluid"/>
                <?php } ?>   
                </a>                                              
            <div class="pi-links">
                <?php woocommerce_template_loop_add_to_cart(); ?>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
        </div>
        
        <div class="pi-text">
            <h5 class="text-center mb-3"><?php the_title(); ?></h5 class="text-center mb-3">
            <h6 class="text-center"><?php woocommerce_template_loop_price(); ?></h6>                                               
        </div>
    </div>
</div>