<?php

get_header();

?>




    <div class="page-container index-container">

        <div class="page-title">
            <div class="title">
                <?php wp_title(''); ?>
            </div>
        </div>

        <div class="row">
            <div class="main-container">

                <div class="single-post-container">
                    <img class="single-blog-post-image" src=" <?php the_post_thumbnail_url(); ?> ">

                    <div class="single-post-text">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <aside class="aside-container">

                <?php
                $category = get_the_category();



                if($category[0] -> name == 'Instruktor'){
                    get_template_part('post-files/instructor-classes');
                }

                 ?>


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

<?php get_footer();?>