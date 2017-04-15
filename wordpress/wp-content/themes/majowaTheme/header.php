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

<div class="singIn-container">
    <form method="POST" action="https://docs.google.com/forms/d/1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE"
          onsubmit="return window.submitGoogleForm(this);">

    <div class="dance-form-btn dance-form-toggle" id="wParze">
        <img src="<?php echo get_template_directory_uri()?>/img/icons/w_parach.png">
        <span>W PARZE</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
        <div class="toggle-radio-div">
            <div class="toggle-radio-option radio-input">
                Tango
            </div>
            <div class="toggle-radio-option radio-input">
                Salsa
            </div>
            <div class="toggle-radio-option radio-input">
                Taniec użytkowy
            </div>
        </div>
    </div>
    <div class="dance-form-btn dance-form-toggle" id="Solo">
        <img src="<?php echo get_template_directory_uri()?>/img/icons/solo.png">
        <span>SOLO</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
        <div class="toggle-radio-div">
            <div class="toggle-radio-option radio-input">
                Latino Solo
            </div>
            <div class="toggle-radio-option radio-input">
                Jazz
            </div>
            <div class="toggle-radio-option radio-input">
                Zumba
            </div>
        </div>
    </div>
    <div class="dance-form-btn dance-form-toggle" id="dlaZdrowia">
        <img src="<?php echo get_template_directory_uri()?>/img/icons/fit.png">
        <span>DLA ZDROWIA</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
        <div class="toggle-radio-div">
            <div class="toggle-radio-option radio-input">
                Joga
            </div>
            <div class="toggle-radio-option radio-input">
                Gimnastyka
            </div>
            <div class="toggle-radio-option radio-input">
                Pilates
            </div>
        </div>
    </div>

        <div class="col-sm-6">
            <label for="Imie">Imie</label>
            <input type="text" placeholder="Imie" id="Imie" name="entry.1782511083" required>
        </div>
        <div class="col-sm-6">
            <label for="nazwisko">Nazwisko</label>
            <input type="text" placeholder="Nazwisko" id="Nazwisko" name="entry.173465573">
        </div>
        <div class="col-sm-6">
            <label for="nrTelefonu">Nr telefonu</label>
            <input type="text" placeholder="Nr telefonu" id="nrTelefonu" name="entry.774965994" required>
        </div>
        <div class="col-sm-6">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="entry.1943066783">
        </div>
        <div class="clearfix"></div>
        <input id="zajecia-input" type="hidden" value="" name="entry.491094824">
        <input id="jakSie-input" type="hidden" value="" name="entry.1492233592">

        <div class="dance-form-toggle" id="jakSieDowiedziales">
            <span>SKĄD DOWIEDZIAŁEŚ SIĘ O STRONIE?</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
            <div class="toggle-radio-div whitebg">
                <div class="toggle-radio-option select-input">
                    Facebook
                </div>
                <div class="toggle-radio-option select-input">
                    Znajomi
                </div>
                <div class="toggle-radio-option select-input">
                    Ulotka
                </div>
                <div class="toggle-radio-option select-input">
                    Internet
                </div>
                <div class="toggle-radio-option select-input">
                    Inne...
                </div>
            </div>
        </div>

        <button class="submitBtn" type="submit">Zapisz Się</button>
    </form>
</div>


