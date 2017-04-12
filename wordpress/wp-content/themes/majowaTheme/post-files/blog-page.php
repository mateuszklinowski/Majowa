

<div class="blog-post-container" id="<?php echo get_permalink()?>">
    <div class="post-thumbnail-box" style="background: url(<?php the_post_thumbnail_url() ?>)center no-repeat; background-size: cover">

    </div>
    <!--<img src="<?php /*the_post_thumbnail_url() */?>">-->
    <div class="post-text">
        <h3 class="post-tite"><?php the_title()?></h3>
        <p class="post-preview">
            <?php echo get_the_excerpt(); ?>
        </p>
        <a class="read-more-btn" href="<?php echo get_permalink();?>">
            Czytaj dalej...
        </a>
    </div>
</div>
