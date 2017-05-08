<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 05.05.2017
 * Time: 23:42
 */

$custom = get_post_custom();
$charakter = false;
$kogo = false;
$ubior = false;
$kiedy = false;

if(isset($custom['charakter_zajec'][0]) && $custom['charakter_zajec'][0] !== ''){
    $charakter = true;
}
if(isset($custom['dla_kogo'][0]) && $custom['dla_kogo'][0] !== ''){
    $kogo = true;
}
if(isset($custom['ubior'][0]) && $custom['ubior'][0] !== ''){
    $ubior = true;
}
if(isset($custom['kiedy_zaczac'][0]) && $custom['kiedy_zaczac'][0] !== ''){
    $kiedy = true;
}

if($charakter || $kogo || $ubior || $kiedy){
    echo "<div class='class-info-container'>";
    if($charakter){
        echo "<h3>Charakter zajęć:</h3>";
        print_r("<p>".$custom['charakter_zajec'][0]."</p>");
    }
    if($kogo){
        echo "<h3>Dla kogo:</h3>";
        print_r("<p>".$custom['dla_kogo'][0]."</p>");
    }
    if($ubior){
        echo "<h3>Ubiór:</h3>";
        print_r("<p>".$custom['ubior'][0]."</p>");
    }
    if($kiedy){
        echo "<h3>Kiedy zacząć:</h3>";
        print_r("<p>".$custom['kiedy_zaczac'][0]."</p>");
    }

    echo "<button id='toggleSingIn'>ZAPISZ SIĘ</button>";
    echo "</div>";
}

?>


