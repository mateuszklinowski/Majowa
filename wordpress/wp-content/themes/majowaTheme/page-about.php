<?php
/*
    Template Name: About Us
 */

get_header();
?>

    <div class="page-container page-about index-container">

        <div class="page-title">
            <div class="title">
                <h1><?php wp_title(''); ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="main-container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
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




<!--    <div class="about-container">
        <div class="about-banner">
            <p>O NAS</p>
        </div>

        <div class="about-content row">
            <div class="box">
                <?php /*if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: */?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php /*endif; */?>
            </div>
        </div>


    </div>
-->
<?php get_footer()?>