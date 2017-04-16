<div class="row">
    <div class="main-container">
        <?php
        $arg = array(
            'posts_per_page' => 8,
            'post_type' => 'post',
            'category__not_in' => [10, 11],
        );
        $last8POSTS = new WP_Query($arg);
        if ($last8POSTS->have_posts()) {

            while ($last8POSTS->have_posts()) {
                $last8POSTS->the_post();
                require (TEMPLATEPATH . '/templateParts/blogMain.php');
            }
        }
        ?>
        <div class="clearfix"></div>
    </div>