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


$day = substr($custom['dzien_miesiac'][0],0,2);
$month = substr($custom['dzien_miesiac'][0],2,2);
$year = '';
if($month){
    $year = '.'.date("Y");
}
?>

<div class="row">
    <div class="col-xs-12">
        <div class="event-box boxShadow_1">
            <img class="event-img boxShadow_1"  src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt ?>">
            <div class="event-info">
                <span class="event-note"><?php echo $custom['godzina'][0]?> &nbsp </span>
                <span class="event-note"><?php echo $custom['lokacja'][0]?> &nbsp </span>
                <span class="event-note"><?php echo $day; ?>.<?php echo $month; ?><?php echo $year; ?> &nbsp </span>
                <div class="event-content"><?php  the_content(); ?></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="gap40px"></div>


