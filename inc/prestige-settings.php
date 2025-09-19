<?php
// Prestige theme settings using Codestar Framework

if (class_exists('CSF')) {

    $prefix = 'prestige_settings';

    CSF::createOptions($prefix, array(
        'menu_title' => 'تنظیمات پرستیژ',
        'menu_slug'  => 'prestige-settings',
        'menu_icon'  => PRESTIGE_THEMEURL . 'assets/images/navigation.svg'
    ));

    CSF::createSection($prefix, array(
        'title'  => 'عمومی',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'هدر',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'فوتر',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'وبلاگ',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'نمونه کار',
        'fields' => array()
    )); 

    CSF::createSection($prefix, array(
        'title'  => 'فروشگاه',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'شبکه‌های اجتماعی',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'سئو',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'عملکرد',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => '404',
        'fields' => array()
    ));

    CSF::createSection($prefix, array(
        'title'  => 'پیشرفته',
        'fields' => array()
    ));
}


function prestige_settings($key = '')
{
    $options = get_option('prestige_settings');
    return isset($options[$key]) ? $options[$key] : null;
}


