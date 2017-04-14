<?php include (TEMPLATEPATH . '/classes/conn.php' ); ?>
<div class="banner-container">
    <div class="banner-image">

        <div class="banner-cut-div">
            <img src="<?php echo get_template_directory_uri() ?>/img/majowa-white.png">
            <div class="todayClasses">
                <?php
                $db = new DB($name,$host,$user,$pass);
                //                $db = new DB('bboosteurzmk','bboosteurzmk.mysql.db','bboosteurzmk','J8aK969E5w');
                $classes = $db->getToDaysClasses();
                $i = 0;

                if(count($classes) > 0){

                    echo '<p>DZIŚ</p>';
                    while(isset($classes[$i])){
                        $start_hour = date('H:i', strtotime($classes[$i]['start_hour']));
                        $end_hour = date('H:i', strtotime($classes[$i]['end_hour']));
                        echo "<div class='classBlock'>".$start_hour." - ".$end_hour." <b>".$classes[$i]['class']."</b></div>";
                        $i++;
                    }
                }
                else{
                    echo 'Nie ma nic';
                }
                ?>
            </div>
        </div>


    </div>


</div>