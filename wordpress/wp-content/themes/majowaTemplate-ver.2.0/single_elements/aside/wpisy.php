<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 27.12.2017
 * Time: 10:48
 */
?>
<div class="latest-news-box">

    <a class="latest-post-image" href=" <?php echo get_permalink();?> ">
        <img src=" <?php the_post_thumbnail_url(); ?>" alt="<?php the_title()?>">
    </a>
    <div class="news-title_date">
            <a class="aside--news__title" href="<?php echo get_permalink();?>">
                <?php the_title() ?>
</a>
<div class="meta">
    <?php echo get_the_date()?>
</div>
</div>
</div>
