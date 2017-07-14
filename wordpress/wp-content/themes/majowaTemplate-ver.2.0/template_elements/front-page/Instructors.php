<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 13.07.2017
 * Time: 22:01
 */
?>

<div class="container-fluid container--margins__top  pseudo--slant__before bg--pattern">
    <div class="row">
                <?php
                $arg=array(
                    'posts_per_page' => 12,
                    'post_type' => 'post',
                    'category__in' => [10],
                );
                $instructors = new WP_Query($arg);
                if ($instructors ->have_posts()){
                    while ( $instructors ->have_posts()){
                        $instructors ->the_post();
                        require (TEMPLATEPATH . '/single_elements/instruktor.php');
                    }
                }
                ?>
    </div>
</div>
