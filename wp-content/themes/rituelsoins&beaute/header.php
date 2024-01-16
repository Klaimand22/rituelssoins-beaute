<?php

?>
<!-- Simple header  -->
<html lang="fr">

<head>
    <?php wp_head(); ?>
</head>

<header class="header">
    <div class="header-info">
        <p>
            Rituels Soins & Beauté, votre institut à Challes-les-Eaux
        </p>
    </div>
    <nav class="header-nav">
        <ul>
            <li>
                <div class="header-logo"><?php the_custom_logo(); ?></div>
            </li>
            <li><a href="<?php echo get_home_url() . '/epilation' ?>">Epilation</a></li>
            <li><a href="<?php echo get_home_url() . '/minceur' ?>">Minceur</a>
            </li>

            <li><a class="soins" href="<?php echo get_home_url() . '/soins' ?>">Soins</a></li>
            <li><a href="<?php echo get_home_url() . '/mise-en-beaute' ?>">Mise en
                    beauté</a></li>
            <li><a href="<?php echo get_home_url() . '/idees-cadeaux' ?>">Idées
                    Cadeaux</a></li>
            <li><a href="<?php echo get_home_url() . '/a-propos' ?>">A propos</a></li>
            <li><a class="button-header" href="<?php echo get_home_url() . '/reserver-en-ligne' ?>">Réserver
                    en ligne</a></li>

        </ul>
    </nav>
    <!-- <nav class="header-nav">
        <li>
            <div class="header-logo"><?php //the_custom_logo();
                                        ?></div>
        </li>
        <div class="menu-container">
            <?php //wp_nav_menu(array('menu' => 'primary_menu'));
            ?>
        </div>
        <li><a class="button-header" href="<?php //echo get_home_url() . '/reserver-en-ligne'
                                            ?>">Réserver
                en ligne</a></li>
    </nav> -->
</header>
<!-- End header  -->