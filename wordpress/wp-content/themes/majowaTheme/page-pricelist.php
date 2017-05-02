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

                <div id="accordion">
                    <h3>zumba, latino solo, joga, taniec brzucha, salsa, taniec użytkowy, cubano solo</h3>
                    <div>
                        <div class="col-sm-6">
                            <div class="column-title">Rodzaj karnetu</div>
                            <div class="column-content">pojedyncze wejście</div>
                            <div class="column-content">karnet 0,5 miesiąca (2 kolejne zajęcia)</div>
                            <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                            <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Liczba zajęć</div>
                            <div class="column-content">1</div>
                            <div class="column-content">2</div>
                            <div class="column-content">3</div>
                            <div class="column-content">8</div>
                            <div class="column-content">8</div>
                            <div class="column-content">12</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Cena</div>
                            <div class="column-content">25zł</div>
                            <div class="column-content">40zł</div>
                            <div class="column-content">70zł</div>
                            <div class="column-content">110zł</div>
                            <div class="column-content">120zł</div>
                            <div class="column-content">170zł</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Koszt 1 lekcji</div>
                            <div class="column-content">-</div>
                            <div class="column-content">20zł</div>
                            <div class="column-content">18zł</div>
                            <div class="column-content">14zł</div>
                            <div class="column-content">15zł</div>
                            <div class="column-content">14zł</div>
                        </div>
                    </div>
                    <h3>tango, jazz (lekcja 1 godz)</h3>
                    <div>
                        <div class="col-sm-6">
                            <div class="column-title">Rodzaj karnetu</div>
                            <div class="column-content">pojedyncze wejście</div>
                            <div class="column-content">karnet 0,5 miesiąca (2 kolejne zajęcia)</div>
                            <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                            <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
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
                            <div class="column-content">150zł</div>
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
                    <h3>tango (lekcja 1,5 godz)</h3>
                    <div>
                        <div class="col-sm-6">
                            <div class="column-title">Rodzaj karnetu</div>
                            <div class="column-content">pojedyncze wejście</div>
                            <div class="column-content">karnet 0,5 miesiąca (2 kolejne zajęcia)</div>
                            <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                            <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
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
                            <div class="column-content">330zł</div>
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
                    <h3>pilates 50+
                        (2 razy / tydzień)</h3>
                    <div>
                        <div class="col-sm-6">
                            <div class="column-title">Rodzaj karnetu</div>
                            <div class="column-content">pojedyncze wejście</div>
                            <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 2 miesiące (16 kolejnych zajęć)</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Liczba zajęć</div>
                            <div class="column-content">1</div>
                            <div class="column-content">8</div>
                            <div class="column-content">16</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Cena</div>
                            <div class="column-content">10zł</div>
                            <div class="column-content">64zł</div>
                            <div class="column-content">112zł</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Koszt 1 lekcji</div>
                            <div class="column-content">-</div>
                            <div class="column-content">8zł</div>
                            <div class="column-content">7zł</div>
                        </div>
                    </div>
                    <h3>pilates flow</h3>
                    <div>
                        <div class="col-sm-6">
                            <div class="column-title">Rodzaj karnetu</div>
                            <div class="column-content">pojedyncze wejście</div>
                            <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                            <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                            <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Liczba zajęć</div>
                            <div class="column-content">1</div>
                            <div class="column-content">4</div>
                            <div class="column-content">8</div>
                            <div class="column-content">12</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Cena</div>
                            <div class="column-content">15zł</div>
                            <div class="column-content">48zł</div>
                            <div class="column-content">90zł</div>
                            <div class="column-content">135zł</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="column-title">Koszt 1 lekcji</div>
                            <div class="column-content">-</div>
                            <div class="column-content">12zł</div>
                            <div class="column-content">11zł</div>
                            <div class="column-content">11zł</div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <?php require (TEMPLATEPATH . '/inc/inc-aside.php'); ?>
        </div>
    </div>

<?php get_footer()?>