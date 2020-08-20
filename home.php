<?php get_header(); ?>

<div class="container-fluid">
    <div class="row p-4">
        <?php if(have_posts()){ while(have_posts()){ 
            the_post(); ?>
            <div class="col-md-3">
                <div class="post_box mt-4 p-4">
                    <h4><?php the_title(); ?></h4>
                    <img src="<?php echo get_the_post_thumbnail_url('', 'thumbnail'); ?>" alt="" class="image-fluid mt-4 mb-4">
                    <p><?php if(has_excerpt()){
                                // echo get_the_excerpt();
                                echo wp_trim_words( get_the_content(), 20 );
                            }else{
                                echo wp_trim_words( get_the_content(), 20 );
                            } ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="btn btn-secondary">Read More</a>
                </div>
            </div>
        <?php } }?>
    </div>
</div>

<?php get_footer(); ?>