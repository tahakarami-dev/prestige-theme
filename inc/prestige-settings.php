<?php
// Prestige theme settings using Codestar Framework

if (class_exists('CSF')) {

    $prefix = 'prestige_settings';

    CSF::createOptions($prefix, array(
        'menu_title' => 'پرستیژ',
        'menu_slug'  => 'prestige-settings',
    ));

    CSF::createSection($prefix, array(
        'title'  => 'Tab Title 1',
        'fields' => array(
            array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Simple Text',
            ),
        )
    ));
}

function prestige_settings($key = '')
{
    $options = get_option('prestige_settings');
    return isset($options[$key]) ? $options[$key] : null;
}
