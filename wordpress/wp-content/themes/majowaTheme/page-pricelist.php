<?php
/*
    Template Name: Pricelist
 */

get_header();
?>

    <div class="page-container page-about index-container">

        <div class="page-title">
            <div class="title">
               <h1> <?php wp_title(''); ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="main-container pricelist-container">

                <style type="text/css">
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
                    </tbody></table>

                <!--<table>
                    <thead></thead>
                    <tbody>
                    <tr>
                        <td colspan="3" rowspan="6"> zumba, latino solo, joga, taniec brzucha,<br/> salsa, taniec użytkowy,<br/> cubano solo </td>
                        <td colspan="5">pojedyńcze wejscie</td>
                        <td>1zł</td>
                        <td>25zł</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="5">pojedyńcze wejscie</td>
                        <td>1zł</td>
                        <td>25zł</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="5">pojedyńcze wejscie</td>
                        <td>1zł</td>
                        <td>25zł</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="5">pojedyńcze wejscie</td>
                        <td>1zł</td>
                        <td>25zł</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="5">pojedyńcze wejscie</td>
                        <td>1zł</td>
                        <td>25zł</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="5">pojedyńcze wejscie</td>
                        <td>1zł</td>
                        <td>25zł</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>-->

                <div class="clearfix"></div>
            </div>


            <aside class="aside-container">
                <h3>Nowe wpisy:</h3>
                <!--Latest 4 posts-->
                <div>
                    <?php
                    $arg = array(
                        'posts_per_page' => 4,
                        'post_type' => 'post',
                        'category__not_in' => 5,
                    );

                    $last4POSTS = new WP_Query($arg);

                    if ($last4POSTS->have_posts()) {

                        while ($last4POSTS->have_posts()) {
                            $last4POSTS->the_post();
                            get_template_part('post-files/aside-last-posts');

                        }
                    }
                    ?>
                </div>
                <!--end-->


                <h3>Znajdź nas na:</h3>
                <div class="aside-social-container">
                    <a class="aside-facebook-btn">
                        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                    </a>
                </div>


                <h3>Wydarzenia:</h3>
                <!--latest 4 events-->
                <div>
                    <?php
                    $arg = array(
                        'posts_per_page' => 4,
                        'post_type' => 'post',
                        'category__in' => 5,
                    );

                    $last4POSTS = new WP_Query($arg);

                    if ($last4POSTS->have_posts()) {

                        while ($last4POSTS->have_posts()) {
                            $last4POSTS->the_post();
                            get_template_part('post-files/aside-last-posts');

                        }
                    }
                    ?>
                </div>
                <!--end-->
            </aside>
            <div class="clearfix"></div>
        </div>
    </div>

<?php get_footer()?>