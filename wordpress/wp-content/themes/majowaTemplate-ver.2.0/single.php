<?php get_header(); ?>

<?php require_once 'template_elements/banner.php' ?>

<div class="col-md-8 col-md-offset-1">
    <h1 class="title text-center"><?php the_title() ?></h1>
    <div class="row">
        <div class="col-xs-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php
                require(TEMPLATEPATH . '/single_elements/singleEvent.php');
                ?>
            <?php endwhile;
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php require_once 'template_elements/aside.php' ?>

<div class="clearfix"></div>

<div class="col-xs-11 col-md-10 col-md-offset-1  container-comments">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <?php comments_template(); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <?php comment_form(); ?>
        </div>
    </div>
</div>


<?php get_footer() ?>