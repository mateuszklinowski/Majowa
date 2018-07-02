<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 02.08.2017
 * Time: 22:29
 */
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
if($alt === ""){
    $alt = get_the_title();
}
$custom = get_post_custom();


if(array_key_exists('dzien_miesiac',$custom)){
    $day = substr($custom['dzien_miesiac'][0],0,2);
    $month = substr($custom['dzien_miesiac'][0],2,2);
    $year = substr($custom['dzien_miesiac'][0],4,4);
    if($year == '' && $month != ''){
        $year = date("Y");
    }
} else {
    $day = '';
    $month = '';
    $year = '';
}
$godzina = '';
$lokalizacja = '';

if(array_key_exists('godzina',$custom)){
    $godzina = $custom['godzina'][0];
}
if(array_key_exists('lokacja',$custom)){
    $lokalizacja = $custom['lokacja'][0];
}
?>

<div class="row">
    <div class="col-xs-12">
        <div class="event-box boxShadow_1">
            <img class="event-img event-img_promo boxShadow_1"  src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt ?>">
            <div class="event-info">
                <span class="event-note"><?php echo $godzina?> &nbsp </span>
                <span class="event-note"><?php echo $lokalizacja?> &nbsp </span>
                <span class="event-note"><?php echo $day; ?>.<?php echo $month; ?>.<?php echo $year; ?> &nbsp </span>
                <h2 class="event-title"><?php the_title(); ?></h2>
                <p class="event-excert"><?php  echo excerpt(40) ?></p>
                <a class="btn btn-primary btn-danger event-btn" href="<?php echo get_permalink();?>">
                    Czytaj dalej...
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="gap40px"></div>

<!--<div class="event-container">
    <img class="event-image-box" src="<?php /*the_post_thumbnail_url()*/?>" alt="<?php /*echo $alt */?>">
    <div class="event-info">
        <div class="date-container">
            <span class="date-day"><?php /*echo $day; */?></span>
            <span class="date-month"><?php /*echo $month; */?></span>
        </div>
        <h2 class="event-title"><?php /*the_title(); */?></h2>
        <p class="event-info-row"><?php /*echo $custom['godzina'][0]*/?> &nbsp </p>
        <p class="event-info-row"><?php /*echo $custom['lokacja'][0]*/?> &nbsp </p>
        <a class="event-info-button" href="<?php /*echo get_permalink();*/?>">
            Czytaj dalej...
        </a>
    </div>
</div>
<div class="gap40px"></div>-->


