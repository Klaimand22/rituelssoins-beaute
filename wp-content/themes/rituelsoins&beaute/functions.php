<?php
// add IMAGE SIZE
add_image_size('soins-banner', 1400, 600, ['center', 'center']);

add_image_size('soins-banner', 400, 400, ['center', 'center']);

add_theme_support('custom-logo');

function add_style()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_script('kalendes', 'https://www.kalendes.com/site/scripts/widget.js', false, '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/kalendes.js', ['kalendes'], '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/header-mobile.js', ['header-mobile'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_style');


function custom_register_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => 'Menu principal',
    ));
}
add_action('after_setup_theme', 'custom_register_nav_menu', 0);
