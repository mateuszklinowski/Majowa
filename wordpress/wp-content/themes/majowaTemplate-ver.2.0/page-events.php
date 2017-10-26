<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 02.08.2017
 * Time: 22:23
 */
/*
    Template Name: Wydarzenia
 */
?>
<?php get_header(); ?>

<?php require_once 'template_elements/banner.php'?>
    <div class="col-md-8 col-md-offset-1">
        <h1 class="title text-center"><?php the_title()?></h1>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-sm-7">
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                </div>
                <div class="clearfix"></div>
                <?php
                $arg=array(
                    'post_type' => 'post',
                    'category__in' => [5]
                );
                $events = new WP_Query($arg);
                ?>

                <?php if ( $events ->have_posts() ) : ?>
                    <!-- Add the pagination functions here. -->
                    <!-- Start of the main loop. -->
                    <?php while ( $events ->have_posts() ) : $events ->the_post();  ?>

                        <?php
                        require (TEMPLATEPATH . '/single_elements/singleEventPromo.php');
                        ?>
                        <!-- the rest of your theme's main loop -->

                    <?php endwhile; ?>
                    <!-- End of the main loop -->

                    <!-- Add the pagination functions here. -->
                    <div class="clearfix"></div>
                    <div class="nav-previous nav-padding alignleft"><?php next_posts_link( "Starsze wpisy <i class='fa fa-long-arrow-right' aria-hidden='true'></i>" ); ?></div>
                    <div class="nav-next nav-padding alignright"><?php previous_posts_link( "<i class='fa fa-long-arrow-left' aria-hidden='true'></i> Nowsze wpisy" ); ?></div>

                <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php require_once  'template_elements/aside.php'?>
<div class="clearfix"></div>

<?php get_footer()?>