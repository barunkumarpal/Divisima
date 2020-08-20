<?php get_header(); ?>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
		<?php
		 if( have_rows('home_slider', 'option') ){ 
		 	while( have_rows('home_slider', 'option') ) { 
		 		the_row();

				$img = get_sub_field('image');
				$heading = get_sub_field('heading');
				$sub_heading = get_sub_field('sub_heading');
				$desc = get_sub_field('description');
				$button_one_text = get_sub_field('button_one_text');
				$button_one_url = get_sub_field('button_one_url');
				$button_two_text = get_sub_field('button_two_text');
				$button_two_url = get_sub_field('button_two_url');
				$price_heading = get_sub_field('price_heading');
				$price = get_sub_field('price');
				$price_description = get_sub_field('price_description');

				
				?>
					
				<div class="hs-item set-bg" data-setbg="<?php echo $img; ?>">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-7 text-white">
								<span><?php echo $sub_heading; ?></span>
								<h2><?php echo $heading; ?></h2>
								<p>
									<?php echo $desc; ?>
								</p>
								<a href="<?php echo $button_one_url; ?>" class="site-btn sb-line"><?php echo $button_one_text; ?></a>
								<a href="<?php echo $button_two_url; ?>" class="site-btn sb-white"><?php echo $button_two_text; ?></a>
							</div>
						</div>
						<div class="offer-card text-white">
							<span><?php echo $price_heading; ?></span>
							<h2><?php echo $price; ?></h2>
							<p><?php echo $price_description; ?></p>
						</div>
					</div>
				</div>
				<?php } } ?>	
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo get_theme_file_uri();?>/img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo get_theme_file_uri();?>/img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo get_theme_file_uri();?>/img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
			<?php 
				$args = [
					'post_type' => 'product',
					'posts_per_page' => 5
					// 'meta_key' => 'total_sales',
					// 'orderby' => 'meta_value_num'
				];

				$latest_prod = new WP_Query($args);

				if($latest_prod->have_posts()){
					while($latest_prod->have_posts()){
						$latest_prod->the_post(); ?>			

				<?php get_template_part('templates/shop_product'); 
			
				} wp_reset_postdata(); }	?>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
			<?php 	$args = [
					'post_type' => 'product',
					'posts_per_page' => 8,
					'meta_key' => 'total_sales',
					'orderby' => 'meta_value_num'
				];

				$latest_prod = new WP_Query($args);

				if($latest_prod->have_posts()){
					while($latest_prod->have_posts()){
						$latest_prod->the_post(); 

				$terms = get_the_terms( get_the_ID(), 'product_cat' );
                         
				if ( $terms && ! is_wp_error( $terms ) ) :  					

					foreach ( $terms as $term ) {						
						$cat_link = $term->slug; 
						$term_name= $term->name;       
					
					}   
					$test_arr[] = $term_name;
					$category_link[] = $cat_link;

				endif;
				} 				
				$uniq_cats = array_unique($test_arr);
				$uniq_cats_links = array_unique($category_link);

				foreach ( $uniq_cats as $uniq_cat ) {					
					     
					$uniq_name[] = $uniq_cat;
				}   

				foreach ( $uniq_cats_links as $uniq_cat_link ) {					
					     
					$uniq_link[] = $uniq_cat_link;
				}   
					
				$arr_count = count($uniq_name);

				if($arr_count>=4){
					$max_count = 4;
				}else{
					$max_count = $arr_count-1;
				}
				for($i = 0; $i <= $max_count; $i++){

						
						?>
						<li>
							<a href="<?php echo site_url()."/product-category/".$uniq_link[$i]; ?>"> <?php echo $uniq_name[$i]; ?> </a>
						</li>
	<?php							   
			  }	wp_reset_postdata(); }	?>				
				
			</ul>
			<div class="row">
			<?php 	$args = [
					'post_type' => 'product',
					'posts_per_page' => 8,
					'meta_key' => 'total_sales',
					'orderby' => 'meta_value_num'
				];

				$latest_prod = new WP_Query($args);

				if($latest_prod->have_posts()){
					while($latest_prod->have_posts()){
						$latest_prod->the_post(); 		

				echo '<div class="col-lg-3 col-sm-6">';
				get_template_part('templates/shop_product'); 
				echo "</div>";

				} wp_reset_postdata(); }	?>	
												
			</div>			
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="<?php echo get_theme_file_uri();?>/img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="<?php echo site_url('/all-products') ?>" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->

<?php get_footer(); ?>
	