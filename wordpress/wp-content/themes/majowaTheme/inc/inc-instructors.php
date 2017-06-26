<div class="row">
    <div class="instructors-container" id="instruktorzy">
        <h2>Instruktorzy</h2>
        <div class="instructors-box">

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
                    require (TEMPLATEPATH . '/templateParts/instruktor.php');
                }
            }
            ?>
        </div>
    </div>
</div>