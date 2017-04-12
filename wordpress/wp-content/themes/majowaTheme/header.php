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
    <?php wp_head();?>
</head>
<body  <?php body_class(); ?>>


<div class="facebook-btn">
    <a href="https://www.facebook.com/Taniec.Zabrze/?fref=ts">
        <img src="<?php echo get_template_directory_uri() ?>/img/facebook.png" alt="facebook">
    </a>
</div>


    <div class="header-container">
        <header>
            <a class="header-logo-link" href="<?php echo get_home_url()?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-a4.png"  class="header-logo-img">
            </a>
            <div class="menu-container">
                <?php wp_nav_menu(array('theme_location'=>'main_nav_menu')) ?>
            </div>
            <div class="clearfix"></div>
        </header>
    </div>


<div class="sticky-header-container">
    <div class="sticky-menu-container">
        <?php wp_nav_menu(array('theme_location'=>'sticky_menu')) ?>
        <div class="clearfix"></div>
    </div>
</div>



