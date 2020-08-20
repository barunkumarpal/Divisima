
<div class="col-lg-4 text-center">
    <h3 class=""><?php echo get_the_title();?></h3>
    <?php if(has_post_thumbnail()){
        echo get_the_post_thumbnail( get_the_ID(), 'thumbnail');
     }?>
    <p class="d-block w-100 text-justify"><?php echo get_the_excerpt();?></p>
    <a href="<?php the_permalink();?>" class="btn btn-secondary">Read More</a>
</div>

