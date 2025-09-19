<?php

defined('ABSPATH') || exit('NO Access');


add_action('wp_enqueue_scripts', 'prestige_enqueue_scripts');

function prestige_enqueue_scripts()
{

    $theme_obj = wp_get_theme();
    $theme_version = $theme_obj->get('Version');

    // style 
    wp_enqueue_style('prestige-app-css', PRESTIGE_THEMEURL . 'assets/css/app.css');

    wp_enqueue_style('prestige-style', get_stylesheet_uri(  ));

    // fonts
//    $font_family = prestige_settings('font-family');
// //    wp_enqueue_style('prestige-font-family', PRESTIGE_THEMEURL . 'assets/fonts/' . $font_family . '.css' , null, $theme_version);






    // scripts 
    wp_enqueue_script('jquery'); 
    wp_enqueue_script('prestige-app-js', PRESTIGE_THEMEURL . 'assets/js/app.js',null,  $theme_version, true);



}
