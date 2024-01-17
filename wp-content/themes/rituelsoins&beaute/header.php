<?php

?>
<!-- Simple header  -->
<html lang="fr">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header-info">
            <p>
                Rituels Soins & Beauté, votre institut à Challes-les-Eaux
            </p>
        </div>

        <nav class="container">

            <div class="menu-container">
                <div class="header-logo"><?php the_custom_logo(); ?></div>
                <?php wp_nav_menu(array('menu' => 'primary_menu')); ?>
                <div class="header-button">
                    <a class="button-header text-decoration-none" href="<?php echo get_home_url() . '/reserver-en-ligne'; ?>">Réserver en
                        ligne</a>
                </div>

            </div>

        </nav>
    </header>
    <!-- End header  -->