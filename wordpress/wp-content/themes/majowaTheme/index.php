<?php get_header(); ?>
<div class="page-container index-container">

        <div class="page-title">
            <div class="title">
                <?php wp_title(''); ?>
            </div>
        </div>

    <div class="row">
        <div class="main-container">
            <?php
            $arg = array(
                'posts_per_page' => 8,
                'post_type' => 'post',
                'category__not_in' => [10,11],
            );

            $last8POSTS = new WP_Query($arg);

            if ($last8POSTS->have_posts()) {

                while ($last8POSTS->have_posts()) {
                    $last8POSTS->the_post();
                    get_template_part('post-files/blog-page');

                }
            }
            ?>
            <div class="clearfix"></div>
        </div>
        <aside class="aside-container">
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
                        get_template_part('post-files/aside-last-posts');

                    }
                }
                ?>
            </div>
            <!--end-->


            <h3>Znajdź nas na:</h3>
            <div class="aside-social-container">
                <a class="aside-facebook-btn">
                    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                </a>
            </div>


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
                        get_template_part('post-files/aside-last-posts');

                    }
                }
                ?>
            </div>
            <!--end-->
        </aside>
        <div class="clearfix"></div>
    </div>



</div>
<?php get_footer()?>