<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 19.07.2017
 * Time: 09:24
 */
?>

<div class="col-md-3 col-sm-12">
    <h2>Wydarzenia:</h2>
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
                require (TEMPLATEPATH . '/single_elements/aside/wydarzenia.php');

            }
        }
        ?>
    </div>
    <h2>Znajdź nas na:</h2>

        <a class="aside--facebook" href="https://www.facebook.com/Taniec.Zabrze/?fref=ts">
            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
        </a>

    <h2>Wpisy:</h2>
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
                require (TEMPLATEPATH . '/single_elements/aside/wpisy.php');
            }
        }
        ?>
    </div>
</div>
