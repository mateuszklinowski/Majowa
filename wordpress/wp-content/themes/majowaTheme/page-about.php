<?php
/*
    Template Name: About Us
 */

get_header();
?>

    <div class="page-container page-about index-container">
        <?php require (TEMPLATEPATH . '/inc/inc-pageTitle.php'); ?>
        <div class="row">
            <div class="main-container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                <div class="clearfix"></div>
            </div>

            <?php require (TEMPLATEPATH . '/inc/inc-aside.php'); ?>
        </div>
    </div>
<?php get_footer()?>