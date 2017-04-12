<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 21.03.2017
 * Time: 01:56
 */
?>


<div class="latest-news-box">

<a class="latest-post-image" href=" <?php echo get_permalink();?> ">
    <img src=" <?php the_post_thumbnail_url(); ?> ">
</a>
    <div class="news-title_date">
        <div class="title">
            <a href="<?php echo get_permalink();?>">
                <?php the_title() ?>
            </a>
        </div>
        <div class="meta">
            <?php echo get_the_date()?>
        </div>
    </div>

</div>



