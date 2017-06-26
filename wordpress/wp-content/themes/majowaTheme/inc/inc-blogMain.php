<div class="row">
    <div class="main-container">

        

        <?php if ( have_posts() ) : ?>
            <!-- Add the pagination functions here. -->
            <!-- Start of the main loop. -->
            <?php while ( have_posts() ) : the_post();  ?>

                <?php
                require (TEMPLATEPATH . '/templateParts/blogMain.php');
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