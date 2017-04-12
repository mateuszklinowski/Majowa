<?php
/*
    Template Name: Dance
 */

get_header();
?>

        <div class="dance-container">

            <div class="about-photo-area">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
            <div class="about-text">
                <h2>Zajęcia</h2>
                <br/>
                <img src="<?php echo get_template_directory_uri() ?>/img/maja.jpg">

                <br/>
                Zajęcia
                <br/>
                //wczytaj  zajęcia TODO
                <br/>
                <br/>
                <div class="contact-ways">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> taniec.zabrze@gmail.com
                    <br/>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i> (+48) 535 299 316
                    <br/>
                    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>  /majowaszkola
                </div>

            </div>
            <div class="clearfix"></div>
        </div>


<?php get_footer()?>