<?php
// add IMAGE SIZE
add_image_size('soins-banner', 1400, 600, ['center', 'center']);

add_image_size('soins-banner', 400, 400, ['center', 'center']);

add_theme_support('custom-logo');

function add_style()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
}
add_action('wp_enqueue_scripts', 'add_style');


function custom_register_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => 'Menu principal',
    ));
}
add_action('after_setup_theme', 'custom_register_nav_menu', 0);
