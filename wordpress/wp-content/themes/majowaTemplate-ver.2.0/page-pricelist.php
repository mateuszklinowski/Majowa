<?php
/*
    Template Name: Pricelist
 */

get_header();
?>

<?php require_once 'template_elements/banner.php'?>

    <div class="col-md-9">
        <h1 class="title text-center"><?php the_title()?></h1>

            <div class="row">
                <div class="col-md-offset-1 col-md-10 main-container pricelist-container">
                    <div class="alert alert-success" role="alert"><b>Zniżka</b> dla studentów oraz uczniów -10% !</div>
                    <div id="accordion" class="accordion">
                        <h3>Zumba, Latino solo, Joga, Gimnastyka słowiańska, PortDeBras</h3>
                        <div>
                            <div class="col-sm-2">
                                <div class="column-title">Rodzaj zajęć</div>
                                <div class="column-content">Zumba</div>
                                <div class="column-content">Latino solo</div>
                                <div class="column-content">Joga</div>
                                <div class="column-content">Słowiańska</div>
                                <div class="column-content">PortDeBras</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Czas trwania</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">4 zajęcia</div>
                                <div class="column-content">70zł</div>
                                <div class="column-content">70zł</div>
                                <div class="column-content">70zł</div>
                                <div class="column-content">70zł</div>
                                <div class="column-content">70zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">8 zajęc</div>
                                <div class="column-content">120zł</div>
                                <div class="column-content">120zł</div>
                                <div class="column-content">120zł</div>
                                <div class="column-content">120zł</div>
                                <div class="column-content">120zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">12 zajęc</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Pojedyńcze wejście</div>
                                <div class="column-content">25zł</div>
                                <div class="column-content">25zł</div>
                                <div class="column-content">25zł</div>
                                <div class="column-content">25zł</div>
                                <div class="column-content">25zł</div>
                            </div>
                        </div>
                        <h3>Tango, Kizomba</h3>
                        <div>
                            <div class="col-sm-2">
                                <div class="column-title">Rodzaj zajęć</div>
                                <div class="column-content">Kizomba</div>
                                <div class="column-content">Tango A1</div>
                                <div class="column-content">Tango A2</div>
                                <div class="column-content">Tango B1</div>
                                <div class="column-content">Tango B2</div>
                                <div class="column-content">Praktyka</div>
                                <div class="column-content">Milonga</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Czas trwania</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">90min</div>
                                <div class="column-content">90min</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">180min</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">4 zajęcia</div>
                                <div class="column-content">90zł</div>
                                <div class="column-content">90zł</div>
                                <div class="column-content">90zł</div>
                                <div class="column-content">135zł</div>
                                <div class="column-content">135zł</div>
                                <div class="column-content">-</div>
                                <div class="column-content">-</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">8 zajęc</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">260zł</div>
                                <div class="column-content">260zł</div>
                                <div class="column-content">-</div>
                                <div class="column-content">-</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">12 zajęc</div>
                                <div class="column-content">220zł</div>
                                <div class="column-content">220zł</div>
                                <div class="column-content">220zł</div>
                                <div class="column-content">330zł</div>
                                <div class="column-content">330zł</div>
                                <div class="column-content">-</div>
                                <div class="column-content">-</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Pojedyńcze wejście</div>
                                <div class="column-content">30zł</div>
                                <div class="column-content">30zł</div>
                                <div class="column-content">30zł</div>
                                <div class="column-content">40zł</div>
                                <div class="column-content">40zł</div>
                                <div class="column-content">10zł</div>
                                <div class="column-content">10zł</div>
                            </div>
                        </div>
                        <h3>Salsa, Taniec użytkowy</h3>
                        <div>
                            <div class="col-sm-2">
                                <div class="column-title">Rodzaj zajęć</div>
                                <div class="column-content">Salsa</div>
                                <div class="column-content">Taniec użytkowy</div>
                                <!--<div class="column-content">Taniec użytkowy A2</div>-->
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Czas trwania</div>
                                <div class="column-content">60min</div>
                                <div class="column-content">60min</div>

                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">4 zajęcia</div>
                                <div class="column-content">70zł</div>
                                <div class="column-content">70zł</div>

                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">8 zajęc</div>
                                <div class="column-content">120zł</div>
                                <div class="column-content">120zł</div>

                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">12 zajęc</div>
                                <div class="column-content">170zł</div>
                                <div class="column-content">170zł</div>

                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Pojedyńcze wejście</div>
                                <div class="column-content">25zł</div>
                                <div class="column-content">25zł</div>

                            </div>
                        </div>
                        <h3>Taniec dla narzeczonych</h3>
                        <div>
                            <div class="col-sm-3">
                                <div class="column-title">Rodzaj zajęć</div>
                                <div class="column-content">Taniec dla narzeczonych</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="column-title">1 lekcja/para</div>
                                <div class="column-content">60min</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="column-title">1 lekcja</div>
                                <div class="column-content">100zł/para</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="column-title">5 lekcji</div>
                                <div class="column-content">400zł/para</div>

                            </div>
                        </div>
                      <!--  <h3>Pilates flow</h3>
                        <div>
                            <div class="col-sm-2">
                                <div class="column-title">Rodzaj zajęć</div>
                                <div class="column-content">Pilates flow</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Czas trwania</div>
                                <div class="column-content">60min</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">4 zajęcia</div>
                                <div class="column-content">48zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">8 zajęc</div>
                                <div class="column-content">90zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">12 zajęc</div>
                                <div class="column-content">135zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Pojedyńcze wejście</div>
                                <div class="column-content">15zł</div>
                            </div>
                        </div>
                        <h3>Pilates 50+ (2 razy / tydzień)</h3>
                        <div>
                            <div class="col-sm-4">
                                <div class="column-title">Rodzaj zajęć</div>
                                <div class="column-content">Pilates</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Czas trwania</div>
                                <div class="column-content">60min</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">8 zajęc</div>
                                <div class="column-content">64zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">16 zajęc</div>
                                <div class="column-content">112zł</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="column-title">Pojedyńcze wejście</div>
                                <div class="column-content">10zł</div>
                            </div>
                        </div>-->
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

    </div>
<?php require_once  'template_elements/aside.php'?>

<?php get_footer()?>



