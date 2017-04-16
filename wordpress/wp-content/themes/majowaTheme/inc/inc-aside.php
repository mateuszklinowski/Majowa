<aside class="aside-container">

    <?php
    $category = get_the_category();
    if($category[0] -> name == 'Instruktor'){
        include (TEMPLATEPATH . '/inc/inc-aside/aside-zajeciaTrenera.php');
    }
    else if ($category[0] -> name == 'Taniec'){
        include (TEMPLATEPATH . '/inc/inc-aside/aside-zapiszSie.php');
    }
    ?>

    <?php include (TEMPLATEPATH . '/inc/inc-aside/aside-noweWpisy.php') ?>

    <?php include (TEMPLATEPATH . '/inc/inc-aside/aside-znajdzNas.php') ?>

    <?php include (TEMPLATEPATH . '/inc/inc-aside/aside-wydarzenia.php') ?>

</aside>
<div class="clearfix"></div>