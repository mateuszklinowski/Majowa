


<div class="singleNews">
    <img class="singleNews--thumbnail" src="<?php the_post_thumbnail_url() ?>">
    <div class="singleNews--category"><?php
        $categories = get_the_category();
        if ($categories[0]->name == 'Ważne'){
            echo $categories[1]->name;
        }else{
            echo $categories[0]->name;
        }
        ?>
    </div>
    <div class="singleNews--text">
        <h3 class="post-title"><?php the_title()?></h3>
        <p class="post-preview">
            <?php echo excerpt(30); ?>
        </p>
        <a class="read-more-btn" href="<?php echo get_permalink();?>">
            Czytaj dalej...
        </a>
    </div>
</div>

