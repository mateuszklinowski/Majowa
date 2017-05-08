<div class="row whitebg">
    <div class="classes-container" id="zajecia">
        <div class="classes-box">
            <div class="single-class solo-class">
                <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/solo.png">
                <h4 class="class-category">SOLO</h4>
                <div class="class-hover">
                    <div class="classes-links-container">
                        <?php
                        $arg=array(
                            'post_type' => 'post',
                            'category__in' => [11],
                            'meta_key'		=> 'kategoria',
                            'meta_value'	=> 'solo'
                        );
                        $classes = new WP_Query($arg);
                        if ($classes ->have_posts()){
                            while ( $classes ->have_posts()){
                                $classes ->the_post();
                                echo "<a class='single-class-link' href='".get_permalink()."'>".get_the_title()."</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="classes-box">
            <div class="single-class ">
                <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/dla_zdrowia.png">
                <h4 class="class-category">DLA ZDROWIA</h4>
                <div class="class-hover">
                    <div class="classes-links-container">
                        <?php
                        $arg=array(
                            'post_type' => 'post',
                            'category__in' => [11],
                            'meta_key'		=> 'kategoria',
                            'meta_value'	=> 'zdrowie'
                        );
                        $classes = new WP_Query($arg);
                        if ($classes ->have_posts()){
                            while ( $classes ->have_posts()){
                                $classes ->the_post();
                                echo "<a class='single-class-link' href='".get_permalink()."'>".get_the_title()."</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="classes-box">
            <div class="single-class">
                <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/wparze.png">
                <h4 class="class-category">W PARZE</h4>
                <div class="class-hover">
                    <div class="classes-links-container">
                        <?php
                        $arg=array(
                            'post_type' => 'post',
                            'category__in' => [11],
                            'meta_key'		=> 'kategoria',
                            'meta_value'	=> 'pary'
                        );
                        $classes = new WP_Query($arg);
                        if ($classes ->have_posts()){
                            while ( $classes ->have_posts()){
                                $classes ->the_post();
                                echo "<a class='single-class-link' href='".get_permalink()."'>".get_the_title()."</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
