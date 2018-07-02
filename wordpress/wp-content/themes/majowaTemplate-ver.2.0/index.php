
<?php get_header(); ?>

<?php require_once 'template_elements/banner.php'?>

<div class="col-md-8 col-md-offset-1">
    <h1 class="title text-center">
        <?php
        if(is_home()){
            echo 'BLOG';
        } else {
            the_title();
        }

        ?>
    </h1>
    <div class="row">


        <?php

        $args = array('posts_per_page' => 8,
                      'category__not_in' => array(get_category_by_slug('instruktor')->term_id),
                      'orderby' => 'date',
                      'order' => 'desc',
                      'paged'=>get_query_var('paged')

        );
        $myQuery = new WP_Query($args);
        $items = $myQuery->query($args);

        ?>

        <?php if ( $myQuery->have_posts() ) : ?>
            <!-- Add the pagination functions here. -->
            <!-- Start of the main loop. -->
            <?php while ( $myQuery->have_posts() ) : $myQuery->the_post();  ?>

                <?php
                require (TEMPLATEPATH . '/single_elements/singleEventPromo.php');
                ?>
                <!-- the rest of your theme's main loop -->

            <?php endwhile; ?>
            <!-- End of the main loop -->

            <!-- Add the pagination functions here. -->
            <div class="clearfix"></div>
            <div class="nav-previous nav-padding alignright btn btn-danger"><?php next_posts_link( "Starsze wpisy <i class='fa fa-long-arrow-right' aria-hidden='true'></i>" ); ?></div>
            <div class="nav-next nav-padding alignleft btn btn-danger"><?php previous_posts_link( "<i class='fa fa-long-arrow-left' aria-hidden='true'></i> Nowsze wpisy" ); ?></div>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <div class="clearfix"></div>

    </div>
</div>
<?php require_once  'template_elements/aside.php'?>

<?php get_footer()?>