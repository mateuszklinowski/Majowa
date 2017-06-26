<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 13.05.2017
 * Time: 23:28
 */

$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

$custom = get_post_custom();


$day = substr($custom['dzien_miesiac'][0],0,2);
$month = substr($custom['dzien_miesiac'][0],2,2);

?>

<div class="event-container">
    <img class="event-image-box" src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt ?>">
<!--    <div class="event-image-box" style="background: url(<?php /*the_post_thumbnail_url() */?>)center no-repeat; background-size: cover"></div>-->
    <div class="event-info">
        <div class="date-container">
            <span class="date-day"><?php echo $day; ?></span>
            <span class="date-month"><?php echo $month; ?></span>
        </div>
        <h2 class="event-title"><?php the_title(); ?></h2>
        <p class="event-info-row"><?php echo $custom['godzina'][0]?> &nbsp </p>
        <p class="event-info-row"><?php echo $custom['lokacja'][0]?> &nbsp </p>
        <a class="event-info-button" href="<?php echo get_permalink();?>">
            Czytaj dalej...
        </a>
    </div>
</div>
<div class="gap40px"></div>


