<?php
/*
    Template Name: Pricelist
 */

get_header();
?>
    <div class="page-container page-about index-container">
        <?php require (TEMPLATEPATH . '/inc/inc-pageTitle.php'); ?>
        <div class="row">
            <div class="main-container pricelist-container">
                <!--<style type="text/css">
                    table.tableizer-table {
                        font-size: 12px;
                        border: 1px solid black;
                        font-family: Arial, Helvetica, sans-serif;
                    }
                    .tableizer-table td {
                        padding: 4px;
                        margin: 3px;
                        border: 1px solid black;
                        background-color: white;
                    }
                    .tableizer-table th {
                        background-color: white;
                        font-weight: bold;
                        border: 1px solid black;
                    }
                </style>
                <table class="tableizer-table">
                    <thead><tr class="tableizer-firstrow"><th></th><th>&nbsp;</th><th>&nbsp;</th><th>cena regularna</th><th>&nbsp;</th></tr></thead><tbody>
                    <tr class="tbold"><td>zajęcia</td><td>rodzaj karnetu</td><td>liczba zajęć</td><td>cena</td><td>koszt 1 lekcji</td></tr>
                    <tr><td rowspan="6">zumba, latino solo, joga, taniec brzucha, salsa, taniec użytkowy, cubano solo</td><td>pojedyncze wejście</td><td>1</td><td class="tbold">25 zł</td><td>&nbsp;</td></tr>
                    <tr><td class="tleft">karnet  0,5 miesiąca (2 kolejne zajęcia)</td><td>2</td><td class="tbold">40 zł</td><td>20 zł</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (4 kolejne zajęcia)</td><td>4</td><td class="tbold">70 zł</td><td>18 zł</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (8 kolejnych zajęć)</td><td>8</td><td class="tbold">110 zł</td><td>14 zł</td></tr>
                    <tr><td class="tleft">karnet 2 miesiące (8 kolejnych zajęć)</td><td>8</td><td class="tbold">120 zł</td><td>15 zł</td></tr>
                    <tr><td class="tleft">ka class="tleft" rnet 3 miesiące (12 kolejnych zajęć)</td><td>12</td><td class="tbold">170 zł</td><td>14 zł</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td rowspan="6">tango, jazz (lekcja 1 godz)</td><td>pojedyncze wejście</td><td>&nbsp;</td><td class="tbold">30 zł</td><td>&nbsp;</td></tr>
                    <tr><td class="tleft">karnet  0,5 miesiąca (2 kolejne zajęcia)</td><td>2</td><td class="tbold">50 zł</td><td>25 zł</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (4 kolejne zajęcia)</td><td>4</td><td class="tbold">90 zł</td><td>23 zł</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (8 kolejnych zajęć)*</td><td>8</td><td class="tbold">150 zł</td><td>19 zł</td></tr>
                    <tr><td class="tleft">karnet 2 miesiące (8 kolejnych zajęć)</td><td>8</td><td class="tbold">170 zł</td><td>21 zł</td></tr>
                    <tr><td class="tleft">karnet 3 miesiące (12 kolejnych zajęć)</td><td>12</td><td class="tbold">220 zł</td><td>18 zł</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td rowspan="6">tango (lekcja 1,5 godz)</td><td>pojedyncze wejście</td><td>&nbsp;</td><td class="tbold">40 zł</td><td>&nbsp;</td></tr>
                    <tr><td class="tleft">karnet  0,5 miesiąca (2 kolejne zajęcia)</td><td>2</td><td class="tbold">75 zł</td><td>38 zł</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (4 kolejne zajęcia)</td><td>4</td><td class="tbold">135 zł</td><td>34 zł</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (8 kolejnych zajęć)*</td><td>8</td><td class="tbold">240 zł</td><td>30 zł</td></tr>
                    <tr><td class="tleft">karnet 2 miesiące (8 kolejnych zajęć)</td><td>8</td><td class="tbold">260 zł</td><td>33 zł</td></tr>
                    <tr><td class="tleft">karnet 3 miesiące (12 kolejnych zajęć)</td><td>12</td><td class="tbold">330 zł</td><td>28 zł</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td rowspan="3"> pilates 50+ <br/> (2 razy / tydzień)</td><td>pojedyncze wejście</td><td>&nbsp;</td><td class="tbold">10 zł</td><td>&nbsp;</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (8 kolejnych zajęć)</td><td>8</td><td class="tbold">64 zł</td><td>8 zł</td></tr>
                    <tr><td class="tleft">karnet 2 miesiące (16 kolejnych zajęć)</td><td>16</td><td class="tbold">112 zł</td><td>7 zł</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td rowspan="4"> pilates flow </td><td>pojedyncze wejście</td><td>&nbsp;</td><td class="tbold">15 zł</td><td>&nbsp;</td></tr>
                    <tr><td class="tleft">karnet 1 miesiąc (4 kolejne zajęcia)</td><td>4</td><td class="tbold">48 zł</td><td>12</td></tr>
                    <tr><td class="tleft">karnet 2 miesiące (8 kolejnych zajęć)</td><td>8</td><td class="tbold">90 zł</td><td>11 zł</td></tr>
                    <tr><td class="tleft">karnet 3 miesiące (12 kolejnych zajęć)</td><td>12</td><td class="tbold">135 zł</td><td>11 zł</td></tr>
                    </tbody></table>-->

                <div id="accordion" class="accordion">
                    <h3>Zumba, Latino solo, Joga, Gimnastyka słowiańska, PortDeBras</h3>
                    <div>
                        <div class="col-sm-2">
                            <div class="column-title">Rodzaj zajęć</div>
                            <div class="column-content">Zumba</div>
                            <div class="column-content">Latino solo</div>
                            <div class="column-content">Joga</div>
                            <div class="column-content">Gimnastyka</div>
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
                    <h3>Tango</h3>
                    <div>
                        <div class="col-sm-2">
                            <div class="column-title">Rodzaj zajęć</div>
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
                            <div class="column-content">90min</div>
                            <div class="column-content">90min</div>
                            <div class="column-content">60min</div>
                            <div class="column-content">180min</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">4 zajęcia</div>
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
                            <div class="column-content">260zł</div>
                            <div class="column-content">260zł</div>
                            <div class="column-content">-</div>
                            <div class="column-content">-</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">12 zajęc</div>
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
                    <h3>Pilates flow</h3>
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
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <?php require (TEMPLATEPATH . '/inc/inc-aside.php'); ?>
        </div>
    </div>

<?php get_footer()?>