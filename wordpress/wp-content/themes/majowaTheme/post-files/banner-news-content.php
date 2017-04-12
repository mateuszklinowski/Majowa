
<h1><?php the_title() ?></h1>

<h2><?php $custom = get_post_custom_values('data_wydarzenia');
    echo DateConvert::convertToPl($custom[0]);
    ?></h2>


<a href="<?php echo  get_permalink() ?>">CZYTAJ WIĘCEJ</a>
