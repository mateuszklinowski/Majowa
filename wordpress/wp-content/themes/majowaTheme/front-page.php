<?php

get_header();

?>

<div class="page-container">
    <div class="banner-container">
        <div class="banner-image">

            <div class="banner-cut-div">
                <img src="<?php echo get_template_directory_uri() ?>/img/majowa-white.png">
                <div class="todayClasses">
                    <?php
                    $db = new DB('majowa','127.0.0.1','root','2200953');
                    //                $db = new DB('bboosteurzmk','bboosteurzmk.mysql.db','bboosteurzmk','J8aK969E5w');
                    $classes = $db->getToDaysClasses();
                    $i = 0;

                    if(count($classes) > 0){

                        echo '<p>DZIŚ</p>';
                        while(isset($classes[$i])){
                            $start_hour = date('H:i', strtotime($classes[$i]['start_hour']));
                            $end_hour = date('H:i', strtotime($classes[$i]['end_hour']));
                            echo "<div class='classBlock'>".$start_hour." - ".$end_hour." <b>".$classes[$i]['class']."</b></div>";
                            $i++;
                        }
                    }
                    else{
                        echo 'Nie ma nic';
                    }
                    ?>
                </div>
            </div>


        </div>


        </div>

    <div class="row">
        <div class="news-container">
            <div class="main-text-container">
                <h1>Taniec to nasza pasja</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis vel purus at rhoncus.<br/>
                    Phasellus egestas a nulla quis elementum. Suspendisse egestas augue vel ultricies dapibus. Duis vitae mi et augue euismod auctor scelerisque eget orci..<br/>
                    Integer tincidunt egestas tellus iaculis sodales. Donec sed mi consectetur, rutrum mauris id, mollis turpis..<br/>
                    Donec vel iaculis urna, at cursus velit.
                </p>
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
            <a class="blog-button" href="http://localhost:120/?page_id=134">WIĘCEJ</a>
        </div>
    </div>

    <div class="row whitebg">
        <div class="classes-container" id="zajecia">
            <h2>nasze zajęcia</h2>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/TANGO.jpg">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=219">
                        <div class="class-name">
                            Tango
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/JAZZ.jpg">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=223">
                        <div class="class-name">
                            JAZZ
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/SALSA.jpg">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=221">
                        <div class="class-name">
                            SALSA
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/ZUMBA.png">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=225">
                        <div class="class-name">
                            ZUMBA
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/latino.png">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=227">
                        <div class="class-name">
                            LATINO SOLO
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/PILATES.png">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=230">
                        <div class="class-name">
                            PILATES
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/JOGA2.jpg">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=232">
                        <div class="class-name">
                            JOGA
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/gim2.jpg">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=236">
                        <div class="class-name">
                            GIMNASTYKA
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes-box">
                <div class="single-class">
                    <img src="<?php echo get_template_directory_uri() ?>/img/zajecia/taniec1.jpg">
                    <div class="class-hover" id="<?php echo get_home_url()?>/?p=234">
                        <div class="class-name">
                            TANIEC UŻYTKOWY
                        </div>
                        <span></span>
                        <div class="class-short-info">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="newsletter-container">
            <i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
            <p>Chcesz być na bieżąco z tym, co się u nas dzieje? Zapisz się do newslettera,
                <br/>
                a nie ominie Cię żadne tanczne wydarzenie!
            </p>
            <div class="input-group">
                <input placeholder="Wpisz adres email" type="text">

                <button>ZAPISZ SIĘ</button>
            </div>
        </div>
    </div>

    <div class="row whitebg">
        <div class="graphic-container">
            <h2>grafik</h2>
            <div id="grafik">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="instructors-container">
            <h2>Instruktorzy</h2>
            <div class="instructors-box">
                <div class="trainer">
                    <a href="<?php echo get_home_url()?>/?p=195">
                        <img src="<?php echo get_template_directory_uri() ?>/img/maja.jpg">
                    </a>

                    <div class="trainer-info">
                        <h3>Maja Kucharska</h3>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=219">Tango</button>
                    </div>
                </div>
                <div class="trainer">
                    <a href="<?php echo get_home_url()?>/?p=198">
                        <img src="<?php echo get_template_directory_uri() ?>/img/magda.png">
                    </a>
                    <div class="trainer-info">
                        <h3>Magdalena Barabańska</h3>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=221">SALSA</button>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=234">Towarzyski</button>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=227">Latino Solo</button>
                    </div>
                </div>
                <div class="trainer">
                    <a href="<?php echo get_home_url()?>/?p=211">
                        <img src="<?php echo get_template_directory_uri() ?>/img/marta.png">
                    </a>
                    <div class="trainer-info">
                        <h3>Marta „Nakaya” Dudek</h3>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=232">Joga</button>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=225">Zumba</button>
                    </div>
                </div>
                <div class="trainer">
                    <a href="<?php echo get_home_url()?>/?p=209">
                        <img src="<?php echo get_template_directory_uri() ?>/img/Krzysztof.png">
                    </a>
                    <div class="trainer-info">
                        <h3>Krzysztof Kardaś</h3>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=219">Tango</button>
                    </div>
                </div>
                <div class="trainer">
                    <a href="<?php echo get_home_url()?>/?p=215">
                        <img src="<?php echo get_template_directory_uri() ?>/img/ania.png">
                    </a>
                    <div class="trainer-info">
                        <h3>Anna Ziębińska</h3>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=230">Pilates</button>
                    </div>
                </div>
                <div class="trainer">
                    <a href="<?php echo get_home_url()?>/?p=215">
                        <img src="<?php echo get_template_directory_uri() ?>/img/Facu.png">
                    </a>
                    <div class="trainer-info">
                        <h3>Facundo Penalva</h3>
                        <button class="dance-btn" id="<?php echo get_home_url()?>/?p=219">Tango</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="row">
        <div class="box classes" id="zajecia">
            <h1>ZAJĘCIA</h1>
            <div class="classes-content">
                <div class="col-md-6 classes-pairs">
                    <div class="pairs-box classes-box ps-top-to-bottom">
                        <div class="classes-dances">
                            <a >Tango</a>
                            <a >Salsa</a>
                            <a >Taniec Użytkowy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 classes-solo">
                    <div class="solo-box classes-box ps-top-to-bottom">
                        <div class="classes-dances">
                            <a >Latino</a>
                            <a >Taniec brzucha</a>
                            <a >Zumba</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 classes-kids">
                    <div class="kids-box classes-box ps-top-to-bottom">
                        <div class="classes-dances">
                            <a >Dzieci tańczą</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 classes-healthy">
                    <div class="healthy-box classes-box ps-top-to-bottom">
                        <div class="classes-dances">
                            <a >Joga</a>
                            <a >Pilates</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row transparent-bg">
        <div class="box newsletter">
            <i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
            <p>Chcesz być na bieżąco z tym, co się u nas dzieje? Zapisz się do newslettera,
                <br/>
                a nie ominie Cię żadne tanczne wydarzenie!
            </p>
            <div class="input-group">
                <input placeholder="Wpisz adres email" type="text">
                <button>ZAPISZ SIĘ</button>
            </div>

        </div>
    </div>
    <div class="row">
        <h1>GRAFIK</h1>
        <div class="box grafik grey-bg" id="grafik">
            <div class="grafik-table">
                <?php /*if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: */?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php /*endif; */?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box instructors">
            <h1>PROWADZĄCY</h1>
            <div class="instructors-content">
                <div class="col-md-3 col-sm-6">
                    <div class="trainer">
                        <img src="<?php /*echo get_template_directory_uri() */?>/img/maja.jpg">
                        <div class="trainer-info">
                            <h3>Maja Kucharska</h3>
                            <button>Tango</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer">
                        <img src="<?php /*echo get_template_directory_uri() */?>/img/magda.png">
                        <div class="trainer-info">
                            <h3>Magdalena Barabańska</h3>
                            <button>Taniec Użytkowy</button>
                            <button>Latino Solo</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer">
                        <img src="<?php /*echo get_template_directory_uri() */?>/img/marta.png">
                        <div class="trainer-info">
                            <h3>Marta Dudek</h3>
                            <button>Zumba</button>
                            <button>Joga</button>
                            <button>Taniec brzucha</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer">
                        <img src="<?php /*echo get_template_directory_uri() */?>/img/ania.png">
                        <div class="trainer-info">
                            <h3>Anna Ziębińska</h3>
                            <button>Pilates flow</button>
                            <button>Pilates 50+</button>
                            <button>Taniec dla dzieci</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer">
                        <img src="<?php /*echo get_template_directory_uri() */?>/img/Krzysztof.png">
                        <div class="trainer-info">
                            <h3>Krzysztof Kardaś</h3>
                            <button>Tango</button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>-->
</div>


<?php get_footer()?>