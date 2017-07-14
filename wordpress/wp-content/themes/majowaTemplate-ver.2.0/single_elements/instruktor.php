<?php $custom = get_post_custom(); ?>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <a href="<?php echo get_permalink()?>">
        <img class="img--instructor" src="<?php echo wp_get_attachment_image_url($custom['miniaturka'][0]); ?>" alt="<?php the_title(); ?>">
    </a>
    <div class="trainer-info">
        <h3 class="text-center"><?php the_title(); ?></h3>
        <?php
        $stringFromCustom = $custom['postid'][0];

        $explodedString = explode('"', $stringFromCustom);
        $postIDs= array();
        foreach ($explodedString as $postID) {
            $postID = intval($postID);
            if ($postID!==0) {
                array_push($postIDs, $postID);
            }
        }
        $arg = array(
            'posts_per_page' => 4,
            'post_type' => 'post',
            'category__in' => 11,
            'post__in' => $postIDs
        );
        $last4POSTS = new WP_Query($arg);
        if ($last4POSTS->have_posts()) {
            while ($last4POSTS->have_posts()) {
                $last4POSTS->the_post();
                print_r( "<a class='btn--link' href='".get_the_permalink()."'>".get_the_title()."</a>");
            }
        }
        ?>
    </div>
</div>