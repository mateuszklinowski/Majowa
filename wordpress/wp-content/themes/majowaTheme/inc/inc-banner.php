<?php include (TEMPLATEPATH . '/classes/conn.php' ); ?>
<div class="banner-container">
    <div class="banner-image">

        <div class="banner-cut-div">
            <a href="<?php echo get_home_url()?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/majowaWhite.png">
            </a>
            <div class="todayClasses">
                <?php
                $db = new DB($name,$host,$user,$pass);
                $classes = $db->getToDaysClasses();
                $i = 0;
                if(count($classes) > 0){
                    echo '<p>DZIŚ</p>';
                    while(isset($classes[$i])){
                        $start_hour = date('H:i', strtotime($classes[$i]['start_hour']));
                        $end_hour = date('H:i', strtotime($classes[$i]['end_hour']));
                        print_r ("<div class='classBlock'>".$start_hour." - ".$end_hour." <b>".$classes[$i]['class']."</b></div>");
                        $i++;
                    }
                }
                else{
                    echo "Zapraszamy jutro <i class='fa fa-smile-o' aria-hidden='true'></i>";
                }
                ?>
            </div>
        </div>


    </div>


</div>