<?php

get_header();

?>
    <div class="page-container index-container">

        <?php require (TEMPLATEPATH . '/inc/inc-pageTitle.php'); ?>

        <div class="row">
            <div class="main-container">
                <div class="single-post-container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    
                    <img class="single-blog-post-image " src=" <?php the_post_thumbnail_url() ?> ">

                    <div class="single-post-text">

                         <?php   the_content();
                        endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <?php require (TEMPLATEPATH . '/inc/inc-aside.php'); ?>

        </div>



    </div>

<?php get_footer();?>