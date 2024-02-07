<?php
// add IMAGE SIZE
add_image_size('soins-banner', 1400, 600, ['center', 'center']);

add_image_size('soins-banner', 400, 400, ['center', 'center']);

add_theme_support('custom-logo');

function add_styles_and_scripts()
{

    // Script AOS pour animation de scroll
    wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '1.0', 'all');
    // Enregistrement du style principal
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    // Enregistrement du script externe 'kalendes.js' avec dépendance sur 'kalendes'
    wp_enqueue_script('kalendes', 'https://www.kalendes.com/site/scripts/widget.js', array(), '1.0', true);

    // Enregistrement du script 'header-mobile.js' avec dépendance sur 'kalendes'
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/header-mobile.js', array('kalendes'), '1.0', true);

    // Enregistrement du script 'kalendes.js' avec dépendance sur 'kalendes'
    wp_enqueue_script('main-kalendes-script', get_template_directory_uri() . '/js/kalendes.js', array('kalendes'), '1.0', true);
}




// Ajout de l'action pour la fonction
add_action('wp_enqueue_scripts', 'add_styles_and_scripts');


function custom_register_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => 'Menu principal',
        'secondary_menu' => 'Menu secondaire',
    ));
}
add_action('after_setup_theme', 'custom_register_nav_menu', 0);


function custom_js_import()
{
?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
        AOS.init();
    </script>

<?php
}
add_action('wp_head', 'custom_js_import');


add_theme_support('title-tag');



// Change le logo sur wp-login.php //
function logo_personnalise()
{
    echo '<style type="text/css">
    .login h1 a {
    background-image:url(/wp-content/uploads/logo-rsb.png) !important;
    background-size: 300px 100px !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: contain !important;
    }
    </style>';
}
add_action('login_head', 'logo_personnalise');
