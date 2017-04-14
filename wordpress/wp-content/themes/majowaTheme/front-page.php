<?php

get_header();

?>

<div class="page-container">


    <?php include (TEMPLATEPATH . '/inc-elements/inc-banner.php' ); ?>
    <?php include (TEMPLATEPATH . '/inc-elements/inc-news.php' ); ?>
    <?php include (TEMPLATEPATH . '/inc-elements/inc-classes.php' ); ?>
    <?php include (TEMPLATEPATH . '/inc-elements/inc-newsletter.php' ); ?>
    <?php include (TEMPLATEPATH . '/inc-elements/inc-grafik.php' ); ?>
    <?php include (TEMPLATEPATH . '/inc-elements/inc-instructors.php' ); ?>


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