<h3>Wydarzenia:</h3>
<!--latest 4 events-->
<div>
    <?php
    $arg = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'category__in' => 5,
    );

    $last4POSTS = new WP_Query($arg);

    if ($last4POSTS->have_posts()) {

        while ($last4POSTS->have_posts()) {
            $last4POSTS->the_post();
            get_template_part('post-files/wydarzenia');

        }
    }
    ?>
</div>