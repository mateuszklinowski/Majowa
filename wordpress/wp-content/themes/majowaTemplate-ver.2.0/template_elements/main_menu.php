<div class="container-fluid nav--container__fluid">
    <header class="container nav--container" >
        <a  href="<?php echo get_home_url()?>" title="Majowa Szkoła Tańca">
            <img class="nav--logo" src="<?php echo get_template_directory_uri() ?>/img/majowaWhite.png" alt="Logo Majowa Szkoła Tańca Zabrze">
        </a>
        <nav class="nav--main">
            <?php wp_nav_menu(array('theme_location'=>'main_nav_menu')) ?>
        </nav>
        <div class="clearfix"></div>
    </header>
</div>