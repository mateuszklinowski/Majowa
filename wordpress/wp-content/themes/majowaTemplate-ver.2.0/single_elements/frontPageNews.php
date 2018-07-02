


<div class="singleNews">
    <a class="news--link" href="<?php echo get_permalink();?>">
        <div class="news--content">
            <div class="image--wrapper">
                <img class="news--img" data-src="<?php the_post_thumbnail_url() ?>" src="" alt="<?php the_title() ?>">
            </div>
            <article class="news--text">
                <h3 class="post-title"><?php the_title()?></h3>
                <p class="post-preview">
                    <?php echo excerpt(20) ?>
                </p>
                <a class="news--readMore" href="<?php echo get_permalink();?>">
                    Czytaj dalej...
                </a>
            </article>
        </div>
    </a>
<!--    <div class="singleNews--category"><?php
/*        $categories = get_the_category();
        if ($categories[0]->name == 'Ważne'){
            echo $categories[1]->name;
        }else{
            echo $categories[0]->name;
        }
        */?>
    </div>-->
</div>

