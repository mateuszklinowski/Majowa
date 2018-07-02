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
                <h3>Zumba, Latino solo, Salsation, Joga, Salsa, Taniec użytkowy, Gimnastyka słowiańska</h3>
                <div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="column-title">Rodzaj karnetu</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Czas trwania</div>
                        </div>
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="column-title">Rodzaj karnetu</div>
                        <div class="column-content">Pojedyńcze wejście</div>
                        <div class="column-content">Karnet 0,5 miesiąca</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                        <div class="column-content">Karnet 2 miesiące</div>
                        <div class="column-content">Karnet 3 miesiące</div>
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
                        <div class="column-title">Liczba zajęć</div>
                        <div class="column-content">1</div>
                        <div class="column-content">2</div>
                        <div class="column-content">4</div>
                        <div class="column-content">8</div>
                        <div class="column-content">12</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Cena</div>
                        <div class="column-content">25zł</div>
                        <div class="column-content">40zł</div>
                        <div class="column-content">70zł</div>
                        <div class="column-content">125zł</div>
                        <div class="column-content">170zł</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Koszt 1 lekcji</div>
                        <div class="column-content">-</div>
                        <div class="column-content">20zł</div>
                        <div class="column-content">18zł</div>
                        <div class="column-content">15zł</div>
                        <div class="column-content">14zł</div>
                    </div>
                    <!-- <div class="col-sm-2">
                         <div class="column-title">Pojedyńcze wejście</div>
                         <div class="column-content">25zł</div>
                         <div class="column-content">25zł</div>
                         <div class="column-content">25zł</div>
                         <div class="column-content">25zł</div>
                         <div class="column-content">25zł</div>
                     </div>-->
                </div>
                <h3>Tango, Kizomba, Bachata (60min)</h3>
                <div>
                    <div class="col-sm-4">
                        <div class="column-title">Rodzaj karnetu</div>
                        <div class="column-content">Pojedyńcze wejście</div>
                        <div class="column-content">Karnet 0,5 miesiąca</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                        <div class="column-content">Karnet 2 miesiące</div>
                        <div class="column-content">Karnet 3 miesiące</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Czas trwania</div>
                        <div class="column-content">60min</div>
                        <div class="column-content">60min</div>
                        <div class="column-content">60min</div>
                        <div class="column-content">60min</div>
                        <div class="column-content">60min</div>
                        <div class="column-content">60min</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Liczba zajęć</div>
                        <div class="column-content">1</div>
                        <div class="column-content">2</div>
                        <div class="column-content">4</div>
                        <div class="column-content">8</div>
                        <div class="column-content">8</div>
                        <div class="column-content">12</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Cena</div>
                        <div class="column-content">30zł</div>
                        <div class="column-content">50zł</div>
                        <div class="column-content">90zł</div>
                        <div class="column-content">155zł</div>
                        <div class="column-content">170zł</div>
                        <div class="column-content">220zł</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Koszt 1 lekcji</div>
                        <div class="column-content">-</div>
                        <div class="column-content">25zł</div>
                        <div class="column-content">23zł</div>
                        <div class="column-content">19zł</div>
                        <div class="column-content">21zł</div>
                        <div class="column-content">18zł</div>
                    </div>
                </div>
                <h3>Tango (90 min)</h3>
                <div>
                    <div class="col-sm-4">
                        <div class="column-title">Rodzaj karnetu</div>
                        <div class="column-content">Pojedyńcze wejście</div>
                        <div class="column-content">Karnet 0,5 miesiąca</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                        <div class="column-content">Karnet 2 miesiące</div>
                        <div class="column-content">Karnet 3 miesiące</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Czas trwania</div>
                        <div class="column-content">90min</div>
                        <div class="column-content">90min</div>
                        <div class="column-content">90min</div>
                        <div class="column-content">90min</div>
                        <div class="column-content">90min</div>
                        <div class="column-content">90min</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Liczba zajęć</div>
                        <div class="column-content">1</div>
                        <div class="column-content">2</div>
                        <div class="column-content">4</div>
                        <div class="column-content">8</div>
                        <div class="column-content">8</div>
                        <div class="column-content">12</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Cena</div>
                        <div class="column-content">40zł</div>
                        <div class="column-content">75zł</div>
                        <div class="column-content">135zł</div>
                        <div class="column-content">240zł</div>
                        <div class="column-content">260zł</div>
                        <div class="column-content">340zł</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Koszt 1 lekcji</div>
                        <div class="column-content">-</div>
                        <div class="column-content">38zł</div>
                        <div class="column-content">34zł</div>
                        <div class="column-content">30zł</div>
                        <div class="column-content">33zł</div>
                        <div class="column-content">28zł</div>
                    </div>
                </div>
                <h3>Brodway jak z Bajki (45min)</h3>
                <div>
                    <div class="col-sm-4">
                        <div class="column-title">Rodzaj karnetu</div>
                        <div class="column-content">Semestr (od 28.09.17 do 14.01)</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                        <div class="column-content">Karnet 2 miesiące</div>
                        <div class="column-content">Karnet 3 miesiące</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Czas trwania</div>
                        <div class="column-content">45min</div>
                        <div class="column-content">45min</div>
                        <div class="column-content">45min</div>
                        <div class="column-content">45min</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Liczba zajęć</div>
                        <div class="column-content">15</div>
                        <div class="column-content">4</div>
                        <div class="column-content">8</div>
                        <div class="column-content">12</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Cena</div>
                        <div class="column-content">230zł</div>
                        <div class="column-content">70zł</div>
                        <div class="column-content">130zł</div>
                        <div class="column-content">190zł</div>
                    </div>
                    <div class="col-sm-2">
                        <div class="column-title">Koszt 1 lekcji</div>
                        <div class="column-content">15zł</div>
                        <div class="column-content">18zł</div>
                        <div class="column-content">16zł</div>
                        <div class="column-content">16zł</div>
                    </div>
                </div>
                <h3>Lekcje indywidualne</h3>
                <div>
                    <div class="col-sm-3">
                        <div class="column-title">Rodzaj karnetu</div>
                        <div class="column-content">Pojedyńcze wejście</div>
                        <div class="column-content">Karnet 5 wejść</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="column-title">Liczba zajęć</div>
                        <div class="column-content">1</div>
                        <div class="column-content">5</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="column-title">Cena</div>
                        <div class="column-content">120zł</div>
                        <div class="column-content">500zł</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="column-title">Koszt 1 lekcji</div>
                        <div class="column-content">120zł</div>
                        <div class="column-content">100zł</div>
                    </div>
                </div>
                <h3>Karnet open (wszystkie zajęcia)</h3>
                <div>
                    <div class="col-sm-3">
                        <div class="column-title">Rodzaj karnetu</div>
                        <div class="column-content">Karnet 1 miesiąc</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="column-title">Liczba zajęć</div>
                        <div class="column-content">2 wejścia dziennie</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="column-title">Cena</div>
                        <div class="column-content">290zł</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="column-title">Koszt 1 lekcji</div>
                        <div class="column-content">-</div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

</div>
<?php require_once  'template_elements/aside.php'?>

<?php get_footer()?>


