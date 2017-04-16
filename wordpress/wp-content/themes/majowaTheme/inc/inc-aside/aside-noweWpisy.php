<h3>Nowe wpisy:</h3>
<!--Latest 4 posts-->
<div>
    <?php
    $arg = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'category__not_in' => 5,
    );
    $last4POSTS = new WP_Query($arg);
    if ($last4POSTS->have_posts()) {
        while ($last4POSTS->have_posts()) {
            $last4POSTS->the_post();
            require (TEMPLATEPATH . '/templateParts/wydarzenia.php');
        }
    }

    ?>
</div>