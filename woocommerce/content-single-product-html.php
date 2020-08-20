<?php ?>
<!-- product section -->
<section id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-section', $product ); ?>>
		<div class="container">
			<div class="back-link">
				<?php do_action( 'woocommerce_before_single_product' );?>
				<a href="./category.html"> &lt;&lt; Back to Category</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<?php if(has_post_thumbnail()){
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID()); ?>													
							<img class="product-big-img" src="<?php echo $featured_img_url; ?>" alt="">                                                   
							<?php } else{?>							
							<img class="product-big-img" src="<?php echo woocommerce_placeholder_img_src(); ?>" alt="">   
						<?php } ?> 						
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<?php	
								global $product;

								$attachment_ids = $product->get_gallery_image_ids();
							
								foreach( $attachment_ids as $attachment_id ) {
									$image_link = wp_get_attachment_url( $attachment_id ); ?>
									<div class="pt active" data-imgbigurl="<?php echo $image_link; ?>">
										<img src="<?php echo $image_link; ?>" alt="">
									</div>									
								<?php }	?>							
						</div>
					</div>
				</div><!-- ./ col-lg-6 -->
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php the_title(); ?></h2>					
					<h3 class="p-price"><?php woocommerce_template_loop_price(); ?></h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div>
					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input type="radio" name="sc" id="xs-size">
							<label for="xs-size">32</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="s-size">
							<label for="s-size">34</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="m-size" checked="">
							<label for="m-size">36</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="l-size">
							<label for="l-size">38</label>
						</div>
						<div class="sc-item disable">
							<input type="radio" name="sc" id="xl-size" disabled>
							<label for="xl-size">40</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="xxl-size">
							<label for="xxl-size">42</label>
						</div>
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>					
					<?php woocommerce_template_loop_add_to_cart(['class' => 'site-btn']); ?>

						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
										Information
									</button>								
								</div>	
								<div class="panel-body">													
									<div class="collapse" id="collapse1">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
										care details
									</button>								
								</div>	
								<div class="panel-body">													
									<div class="collapse" id="collapse2">
										<p>	
											<?php if(get_field('single_product')){
												$field = get_field('single_product');
												echo $field['care_details'];
											}?>	
										</p>		
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
										Shippint & Returns
									</button>								
								</div>	
								<div class="panel-body">													
									<div class="collapse" id="collapse4">
										<?php if(get_field('single_product')){
												$field = get_field('single_product');
												echo $field['shipping_&_returns'];
											}?>	
									</div>
								</div>
							</div>
						</div>

						<div class="social-sharing">
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
						</div>
							
				</div><!-- ./ col-lg-6 -->					
			</div><!-- ./ row -->
		</div><!-- ./ container -->		
	</section>
	<!-- product section end -->