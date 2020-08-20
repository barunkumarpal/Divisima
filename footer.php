
<!-- Footer section -->
<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">

				<?php
					if(get_theme_mod('aditional_logo')){?>					
				<a href="<?php echo site_url('./');?>"><img src="<?php echo get_theme_mod('aditional_logo'); ?>" alt=""></a>
				<?php	} ?>				
			</div>
			<div class="row justify-content-around">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<?php 
						if(get_field('footer_desc', 'option')){
							$field_group = get_field('footer_desc', 'option');
							echo "<h2>".$field_group['title']."</h2>";
							echo $field_group['description'];
						}
						?>						
						<img src="<?php echo get_theme_file_uri();?>/img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">				
						<?php
						// Menu Title
						if(get_theme_mod('quick_link_head')){
							echo "<h2>".get_theme_mod('quick_link_head')."</h2>";
						}

						if(get_theme_mod('menu_select')){
							if(get_theme_mod('menu_select') == 'default'){
								$args = [
									'theme_location' => 'quick_links',
									'walker' => new Quick_link_foot()
								];
	
								wp_nav_menu( $args );
							}else{
								$args = [
									'theme_location' => 'primary',
									'walker' => new Quick_link_foot()
								];
	
								wp_nav_menu( $args );
							}
						}
						
							
						?>						
					</div>
				</div>
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?php echo get_theme_file_uri();?>/img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?php echo get_theme_file_uri();?>/img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
					<?php
						if(get_field('footer_address', 'option')){
							$field_add = get_field('footer_address', 'option');	

							if($field_add['title']){
								echo "<h2>".$field_add['title']."</h2>";
							}

							if($field_add['company_name']){?>
								<div class="con-info">
									<span>C.</span>
									<p><?php echo $field_add['company_name']; ?></p>
								</div>								
							<?php }

							if($field_add['address']){?>
								<div class="con-info">
									<span>B.</span>
									<p><?php echo $field_add['address']; ?></p>
								</div>								
							<?php }

							if($field_add['contact_no']){?>
								<div class="con-info">
									<span>T.</span>
									<p><?php echo $field_add['contact_no']; ?></p>
								</div>								
							<?php }

							if($field_add['email']){?>
								<div class="con-info">
									<span>E.</span>
									<p><?php echo $field_add['email']; ?></p>
								</div>								
							<?php }
							
						}
					?>				
						
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">

					<?php if(get_theme_mod('contact_ig')){ ?>
					<a href="<?php echo get_theme_mod('contact_ig'); ?>" target="_blank" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<?php } ?>

					<?php if(get_theme_mod('contact_gp')){ ?>
					<a href="<?php echo get_theme_mod('contact_gp'); ?>" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<?php } ?>

					<?php if(get_theme_mod('contact_pntrst')){ ?>
					<a href="<?php echo get_theme_mod('contact_pntrst'); ?>" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<?php } ?>					
					
					<?php if(get_theme_mod('contact_fb')){ ?>
					<a href="<?php echo get_theme_mod('contact_fb'); ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<?php } ?>

					<?php if(get_theme_mod('contact_twtr')){ ?>
					<a href="<?php echo get_theme_mod('contact_twtr'); ?>" target="_blank"  class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<?php } ?>

					<?php if(get_theme_mod('contact_yt')){ ?>
					<a href="<?php echo get_theme_mod('contact_yt'); ?>" target="_blank" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<?php } ?>

					<?php if(get_theme_mod('contact_tumblr')){ ?>
					<a href="<?php echo get_theme_mod('contact_tumblr'); ?>" target="_blank"  class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
					<?php } ?>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<?php if(get_theme_mod('copyright')){?>
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php echo get_theme_mod('copyright'); ?> | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<?php } ?>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	
	
	
	
	
	
	

    <?php wp_footer(); ?>
	</body>
</html>
