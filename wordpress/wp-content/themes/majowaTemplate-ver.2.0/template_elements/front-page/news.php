
<div class="container-fluid relative container--margins">
    <h1 class="title text-center">Wydarzenia</h1>
        <div class="news--box">
            <?php
            $arg=array(
                'posts_per_page' => -1,
                'post_type' => 'post',
                'category__in' => [30],
            );
            $last4POSTS = new WP_Query($arg);
            if ($last4POSTS ->have_posts()){
                while ( $last4POSTS ->have_posts()){
                    $last4POSTS->the_post();
                    require (TEMPLATEPATH . '/single_elements/frontPageNews.php');
                }
            }
            ?>
            <?php
            $arg=array(
                'posts_per_page' => 9,
                'post_type' => 'post',
                'category__not_in' => [30],
            );
            $last4POSTS = new WP_Query($arg);
            if ($last4POSTS ->have_posts()){
                while ( $last4POSTS ->have_posts()){
                    $last4POSTS->the_post();
                    require (TEMPLATEPATH . '/single_elements/frontPageNews.php');
                }
            }
            ?>
            <div class="clearfix"></div>
        </div>
        <button class="newsBox-slideBtn" id="news-slideRight"><i class="fa fa-angle-double-right fa-4x" aria-hidden="true"></i></button>
        <button class="newsBox-slideBtn" id="news-slideLeft"><i class="fa fa-angle-double-left fa-4x" aria-hidden="true"></i></button>
        <!--<a class="blog-button" href="<?php /*echo get_home_url()*/?>/wydarzenia/">WIĘCEJ</a>-->
</div>