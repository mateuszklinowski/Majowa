<?php


function main_scripts_enqueue(){

    wp_enqueue_style('bootstrapCSS', get_template_directory_uri().'/Bootstrap/css/bootstrap.min.css', array(),'1.0.0','all');
    wp_enqueue_style('mainCSS', get_template_directory_uri().'/css/main.css', array(),'1.0.0','all');
    wp_enqueue_script('jQuery',get_template_directory_uri().'/js/jquery-3.1.1.min.js',array(),'3.1.1',true);
    wp_enqueue_script('bootstrapJS',get_template_directory_uri().'/Bootstrap/js/bootstrap.min.js',array(),'1.0.0',true);
    wp_enqueue_script('mainJS',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
    wp_enqueue_script('font-awesome',"https://use.fontawesome.com/59ea93251c.js",array(),'1.0.0',true);
    wp_enqueue_style('https://fonts.googleapis.com/css?family=Abril+Fatface|Fjalla+One',array(),'1.0.0','all');
    wp_enqueue_style('https://fonts.googleapis.com/css?family=Montserrat',array(),'1.0.0','all');
}

add_action('wp_enqueue_scripts','main_scripts_enqueue');

function majowa_theme_setup(){

    add_theme_support('custom-header');

    add_theme_support('post-thumbnails');

    add_theme_support('post-formats');

    add_theme_support('menus');

    add_theme_support('excerpt');

    register_nav_menu('main_nav_menu','Primary header navigation menu');
}

add_action('init','majowa_theme_setup');


function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

