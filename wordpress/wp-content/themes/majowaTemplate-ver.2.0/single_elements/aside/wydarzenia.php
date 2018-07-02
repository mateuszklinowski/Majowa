<?php
$custom = get_post_custom();

if (!function_exists('convertMonth')) {
    function convertMonth($month){
        switch ($month){
            case '01':
                return 'Styczeń';
                break;
            case '02':
                return 'Luty';
                break;
            case '03':
                return 'Marzec';
                break;
            case '04':
                return 'Kwiecień';
                break;
            case '05':
                return 'Maj';
                break;
            case '06':
                return 'Czerwiec';
                break;
            case '07':
                return 'Lipiec';
                break;
            case '08':
                return 'Sierpień';
                break;
            case '09':
                return 'Wrzesień';
                break;
            case '10':
                return 'Październik';
                break;
            case '11':
                return 'Listopad';
                break;
            case '12':
                return 'Grudzień';
                break;
            default:
                return '';
                break;
        }
    }
}


if(array_key_exists('dzien_miesiac',$custom)){
    $day = substr($custom['dzien_miesiac'][0],0,2);
    $month = substr($custom['dzien_miesiac'][0],2,2);
    $year = substr($custom['dzien_miesiac'][0],4,4);
    if($year == '' && $month != ''){
        $year = date("Y");
    }
    $textDate = convertMonth($month).' '.$day.', '.$year;

    if($day == ''){
        $textDate = get_the_date();
    }


} else {
    $textDate = get_the_date();
}

?>

<div class="latest-news-box">

    <a class="latest-post-image" href=" <?php echo get_permalink();?> ">
        <img src=" <?php the_post_thumbnail_url(); ?>" alt="<?php the_title()?>">
    </a>
    <div class="news-title_date">
            <a class="aside--news__title" href="<?php echo get_permalink();?>">
                <?php the_title() ?>
            </a>
        <div class="meta">
            <?php echo $textDate?>
        </div>
    </div>
</div>

