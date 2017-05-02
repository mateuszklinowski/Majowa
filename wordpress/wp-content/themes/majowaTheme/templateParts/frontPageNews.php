


    <div class="single-news news-link-area" id="<?php echo get_permalink()?>">
        <div class="post-thumbnail-box" style="background: url(<?php the_post_thumbnail_url() ?>)center no-repeat; background-size: cover">

        </div>
<!--        <img class="single-news-photo" src=" --><?php //the_post_thumbnail_url(); ?><!-- ">-->
        <div class="news-category"><?php
            $categories = get_the_category();
            if ($categories[0]->name == 'Ważne'){
                echo $categories[1]->name;
            }else{
                echo $categories[0]->name;
            }

            ?>
        </div>
        <div class="single-news-text">
            <h3 class="post-tite"><?php the_title()?></h3>
            <p class="post-preview">
                <?php echo excerpt(30); ?>
            </p>
            <a class="read-more-btn" href="<?php echo get_permalink();?>">
                Czytaj dalej...
            </a>
        </div>
    </div>

