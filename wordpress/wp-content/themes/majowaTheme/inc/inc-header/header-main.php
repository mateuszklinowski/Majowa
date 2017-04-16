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