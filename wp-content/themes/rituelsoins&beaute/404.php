<?php get_header(); ?>

<h1 class="title-page">Erreur 404</h1>
<div class="center-text">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="" srcset="">
    <h3>La page que vous recherchez n'existe pas.</h3>
    <p> Si vous cherchez une page en particulier, vous pouvez consulter le plan du site en haut de page ou cliquer sur
        le
        bouton ci-dessous pour revenir à l’accueil.</p>
</div>

<div class="center-div">
    <a class="button button-pink" href="<?php echo get_home_url(); ?>">Retour à l'accueil</a>
</div>

<?php get_footer(); ?>