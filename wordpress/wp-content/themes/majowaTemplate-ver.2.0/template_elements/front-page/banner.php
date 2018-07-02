<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 19.06.2017
 * Time: 19:21
 */
?>

<div class="container--banner pseudo--slant__after">
        <img class="banner--image" src="<?php echo get_template_directory_uri() ?>/img/banner.png" alt="tango milonga zabrze majowa szkoła tańca">

    <div class="todayClasses">
        <?php
        $db = new DB('majowaeusymadmin','127.0.0.1','root','2200953');
        //$db = new DB('majowaeusymadmin','majowaeusymadmin.mysql.db','majowaeusymadmin','At6394jksD');
        $classes = $db->getToDaysClasses();
        $i = 0;
        if(count($classes) > 0){
            echo '<div class="todayClasses-row todayClasses-title">DZIŚ</div>';
            while(isset($classes[$i])){
                $start_hour = date('H:i', strtotime($classes[$i]['start_hour']));
                $end_hour = date('H:i', strtotime($classes[$i]['end_hour']));
                print_r ("<div class='todayClasses-row'><span class='todayClasses-hours'>".$start_hour." - ".$end_hour."</span><b>".$classes[$i]['class']."</b></div>");
                $i++;
            }
        }
        else{
            /*echo "<div class='todayClasses-row'> Zapraszamy jutro <i class='fa fa-smile-o' aria-hidden='true'></i></div>";*/
        }
        ?>
    </div>
</div>
