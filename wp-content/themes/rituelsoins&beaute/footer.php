<footer>
    <?php wp_footer(); ?>

    <div class="book-online">
        <a class="button button-pink" href="<?php echo get_home_url() . '/reserver-en-ligne' ?>">Reserver en ligne</a>
    </div>

    <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/Logo_principal_vectoriel_noir.svg' ?>"
            alt="logo rituels soins et beauté">
    </div>

    <div class="footer-container">

        <!-- test -->
        <nav class="footer-nav">
            <ul>
                <li>
                    <a href="<?php echo get_home_url() . '/' ?>">Accueil</a>
                </li>
                <li><a href="<?php echo get_home_url() . '/epilation' ?>">Epilation</a></li>
                <li><a href="<?php echo get_home_url() . '/minceur' ?>">Minceur</a>
                </li>

                <li><a href="<?php echo get_home_url() . '/soins' ?>">Soins</a></li>
                <li><a href="<?php echo get_home_url() . '/mise-en-beaute' ?>">Mise en
                        beauté</a></li>
                <li><a href="<?php echo get_home_url() . '/idees-cadeaux' ?>">Idées
                        Cadeaux</a></li>
                <li><a href="<?php echo get_home_url() . '/a-propos' ?>">A propos</a></li>
                <li><a href="<?php echo get_home_url() . '/reserver-en-ligne' ?>">Réserver
                        en ligne</a></li>

            </ul>
        </nav>

        <div class="footer-contact">
            <div class="footer-contact-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icone_SVG/icone_lieu.svg' ?>"
                    alt="logo adresse">
                <p>ADRESSE
                    <br> ZA du Puits d'Ordet
                    <br>73 190 CHALLES-LES-EAUX
                </p>
            </div>
            <div class="footer-contact-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icone_SVG/icone_tel.svg' ?>"
                    alt="logo tel">
                <p>TÉLÉPHONE
                    <br>
                    04 79 44 31 85
                </p>
            </div>
            <div class="footer-contact-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icone_SVG/icone_facebook.svg' ?>"
                    alt="logo facebook">
                <p>FACEBOOK
                    <br>
                    @Rituels soins et beauté
                </p>
            </div>
            <div class="footer-contact-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icone_SVG/icone_insta.svg' ?>"
                    alt="logo instagram">
                <p>INSTAGRAM
                    <br>
                    @Rituels soins et beauté
                </p>
            </div>
        </div>

        <div class="footer-mentions">
            <div class="footer-mentions-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/Logo_secondaire_vectoriel_noir.svg' ?>"
                    alt="logo cgv">
            </div>
            <div class="footer-mentions-info">
                <div class="rgpd">
                    <a href="<?php echo get_home_url() . '/mentions-legales' ?>">Mentions légales</a>
                    <a href="<?php echo get_home_url() . '/politique-de-confidentialite' ?>">Politique de
                        confidentialité</a>
                </div>
            </div>
            <div class="footer-mentions-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/phyts.png' ?>" alt="logo phys">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/zao.png' ?>" alt="logo zao">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/lpg.png' ?>" alt="logo lpg">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/einatae.png' ?>" alt="logo einatae">
            </div>

</footer>
</body>

</html>