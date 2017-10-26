<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 18.06.2017
 * Time: 17:47
 */


function getAllStyles (){
    wp_enqueue_style('boostrapCSSmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(),'1.0','all');
    wp_enqueue_style('jQueryUiCss', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(),'1.12','all');
    wp_enqueue_style('mainCSS', get_template_directory_uri().'/css/main.css', array(),'1.0.0','all');
    wp_enqueue_style('headerCSS', get_template_directory_uri().'/css/header.css', array(),'1.0.0','all');

}
function getAllScripts(){
    wp_enqueue_script('jQuery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',array(),'1.0',true);
    wp_enqueue_script('jQueryUI','https://code.jquery.com/ui/1.12.0/jquery-ui.min.js',array(),'1.12',true);
    wp_enqueue_script('bootstrapJS','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array(),'1.0',true);
    /*wp_enqueue_script('sweetAlerts','https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.min.js',array(),'1.0.0',true);*/
    wp_enqueue_script('font-awesome',"https://use.fontawesome.com/59ea93251c.js",array(),'1.0.0',true);
    wp_enqueue_script('mainJS',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
    wp_enqueue_script('sliderJS',get_template_directory_uri().'/js/news_slider.js',array(),'1.0.0',true);
}

add_action('wp_enqueue_scripts','getAllStyles');
add_action('wp_enqueue_scripts','getAllScripts');

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