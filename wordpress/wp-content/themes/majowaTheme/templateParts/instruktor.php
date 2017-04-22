<?php $custom = get_post_custom(); ?>
<div class="trainer">
    <a href="<?php echo get_permalink()?>/?p=195">
        <img src="<?php echo wp_get_attachment_image_url($custom['miniaturka'][0]); ?>">
    </a>
    <div class="trainer-info">
        <h3><?php the_title(); ?></h3>
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
                require (TEMPLATEPATH . '/templateParts/zajeciaTreneraBtn.php');
            }
        }
        ?>
    </div>
</div>