
<div class="row">
    <div class="news-container">

        <div class="main-text-container">
            <h1 class="h1-special">Taniec to nasza pasja!</h1>
            <!--<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis vel purus at rhoncus.<br/>
                Phasellus egestas a nulla quis elementum. Suspendisse egestas augue vel ultricies dapibus. Duis vitae mi et augue euismod auctor scelerisque eget orci..<br/>
                Integer tincidunt egestas tellus iaculis sodales. Donec sed mi consectetur, rutrum mauris id, mollis turpis..<br/>
                Donec vel iaculis urna, at cursus velit.
            </p>-->
        </div>
        <div class="news-box">
            <?php
            $arg=array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'category__not_in' => [9,10],
            );

            $last4POSTS = new WP_Query($arg);

            if ($last4POSTS ->have_posts()){

                while ( $last4POSTS ->have_posts()){
                    $last4POSTS->the_post();
                    get_template_part('post-files/news-content');

                }
            }
            ?>
            <div class="clearfix"></div>
        </div>
        <a class="blog-button" href="<?php echo get_home_url()?>">WIĘCEJ</a>
    </div>
</div>