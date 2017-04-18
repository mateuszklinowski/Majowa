<!DOCTYPE html>
<?php
require_once 'classes/DateConvert.php';
require_once 'classes/DB.php';
require_once 'classes/conn.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kochamy taniec. Naucz się z nami, jeśli nie umiesz tańczyć i zatańcz z nami Dzieci i dorośli, solo i w parach. Tango, zumba, salsa i wiele innych..."/>
    <link rel="canonical" href="http://majowa.eu/" />
    <meta property="og:locale" content="pl_PL" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Taniec Zabrze" />
    <meta property="og:description" content="Kochamy taniec. Naucz się z nami, jeśli nie umiesz tańczyć i zatańcz z nami Dzieci i dorośli, solo i w parach. Tango, zumba, salsa i wiele innych..." />
    <meta property="og:url" content="http://majowa.eu/" />
    <meta property="og:site_name" content="Majowa Szkoła Tańca" />
    <meta property="og:image" content="http://majowa.eu/wp-content/uploads/2015/09/11834679_725985420862205_7553101780174016152_o-300x201.jpg" />
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Kochamy taniec. Naucz się z nami, jeśli nie umiesz tańczyć i zatańcz z nami Dzieci i dorośli, solo i w parach. Tango, zumba, salsa i wiele innych..."/>
    <meta name="twitter:title" content="Taniec Zabrze"/>
    <meta name="twitter:domain" content="Majowa Szkoła Tańca"/>
    <meta name="twitter:image" content="http://majowa.eu/wp-content/uploads/2015/09/MAJOWA_SZKOŁA_TAŃCA11.jpg"/>
    <title>Taniec ZabrzeMajowa Szkoła Tańca | Majowa Szkoła Tańca</title>
    <link href="https://fonts.googleapis.com/css?family=Domine|Montserrat|Old+Standard+TT" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.min.css">
    <?php wp_head();?>
</head>
<body  <?php body_class(); ?>>


<?php require (TEMPLATEPATH . '/inc/inc-header/header-facebook.php');?>

<?php require (TEMPLATEPATH . '/inc/inc-header/header-main.php');?>

<?php require (TEMPLATEPATH . '/inc/inc-header/header-sticky.php');?>

<?php require (TEMPLATEPATH . '/inc/inc-header/header-singIn.php');?>

<aside class="mobile-menu">
    <button class="mobile-menu-button">
        <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <h1>
        <a href="<?php echo get_home_url()?>">
            <img alt="BBoost elo-boosting company" src="<?php echo get_template_directory_uri() ?>/img/logo-a4.png">
        </a>
    </h1>
    <div class="separator"></div>
    <nav>
        <!--<a id="zapiszSie">
            <span class="nav-text">
                ZAPISZ SIĘ!
                <span></span>
            </span>
        </a>
        <a class="red-font" href="<?php /*echo get_home_url()*/?>#grafik">
            <span class="nav-text">
                GRAFIK
                <span></span>
            </span>
        </a>
        <a href="<?php /*echo get_home_url()*/?>#zajecia">
            <span class="nav-text">
                ZAJĘCIA
                <span></span>
            </span>
        </a>-->
        <a href="<?php echo get_home_url()?>">
            <span class="nav-text">
                DZIEJE SIĘ!
                <span></span>
            </span>
        </a>

        <a href="<?php echo get_page_uri('51')?>">
            <span class="nav-text">
                O NAS
                <span></span>
            </span>
        </a>
        <a href="<?php echo get_page_uri('343')?>">
            <span class="nav-text">
                CENNIK
                <span></span>
            </span>
        </a>
        <a href="<?php echo get_page_uri('134')?>">
            <span class="nav-text">
                BLOG
                <span></span>
            </span>
        </a>
        <a href="<?php echo get_page_uri('17')?>">
            <span class="nav-text">
                KONTAKT
                <span></span>
            </span>
        </a>
    </nav>
    <div class="separator"></div>
</aside>


