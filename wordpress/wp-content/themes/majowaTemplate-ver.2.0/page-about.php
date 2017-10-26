<?php
/*
    Template Name: About Us
 */

?>
<?php get_header(); ?>

<?php require_once 'template_elements/banner.php'?>

<div class="col-md-8 col-md-offset-1">
    <h1 class="title text-center"><?php the_title()?></h1>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php require_once  'template_elements/aside.php'?>

<?php get_footer()?>