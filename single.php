<?php get_header(); ?>

<div class="container-fluid">
    <div class="row p-4 justify-content-center">
        <?php if(have_posts()){ while(have_posts()){ 
            the_post(); ?>
            <div class="col-md-8">
                <div class="post_box mt-4 p-4">
                    <h4 class="text-center"><?php the_title(); ?></h4>
                    <img src="<?php echo get_the_post_thumbnail_url('', 'medium-large'); ?>" alt="" class="image-fluid mt-4 mb-4">
                    <p> <?php  echo get_the_content(); ?> </p>           
                </div>
            </div>
        <?php } }?>
    </div>
</div>

<?php get_footer(); ?>