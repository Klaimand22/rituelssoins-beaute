<?php /* Template Name: A Propos */
get_header();

?>

<?php foreach (get_field('title_description') as $i => $title_description) : ?>
    <h1 class="title-page"><?php echo $title_description['title']; ?></h1>
    <h2 class="subtitle-page"><?php echo $title_description['description']; ?></h2>
<?php endforeach; ?>

<div class="team-description">
    <div class="text">
        <h2>L'équipe</h3>
            <p>
                Laura et son équipe d’esthéticiennes vous accueillent dans un espace calme et chaleureux et s’occupent
                de vous avec bienveillance et professionnalisme. Rituels Soins et Beauté bénéficie de 10 ans
                d’expérience dans le domaine de la beauté et du bien-être.
                Nos esthéticiennes qualifiées en esthétique et cosmétique sont passionnées par le mieux-être et suivent
                régulièrement des formations de qualité.
            </p>
    </div>
    <div class="image" style='background-image : url("https://picsum.photos/200/300")'>
    </div>

</div>
</div>

<div class="team-composition">
    <div class="team-member">
        <div class="image" style='background-image : url("https://picsum.photos/200/300")'>
        </div>
        <div class="text">
            <h3>Laura</h3>
        </div>
    </div>
    <div class="team-member">
        <div class="image" style='background-color : #CDD6C8'>
            <h4>Envie de
                rejoindre l’équipe ?</h4>
            <h4>Contact Nous!</h4>
            <img src="https://picsum.photos/100/100">
            <h4>04 79 44 31 85</h4>
        </div>
        <div class="text">
            <h3>Notre future Collegue ?</h3>
        </div>
    </div>
    <div class="team-member">
        <div class="image" style='background-image : url("https://picsum.photos/200/300")'>
        </div>
        <div class="text">
            <h3>Aurelie</h3>
        </div>
    </div>
</div>

<div class="about-banner">
    <div class="center-text">
        <p>
            Offrez vous une parenthèse beauté ou bien-être au sein de notre institut Rituels Soins et Beauté.
        </p>
    </div>
    <div class="image"><img src="https://picsum.photos/4000/1200"></div>
</div>

<div class="expertise">
    <div class="text">
        <h2>Notre expertise</h2>
        <p>
            La bienveillance avant toute chose : nous vous accueillons dans un cadre positif et respectueux.
            Notre équipe est à votre écoute, s’adapte aux besoins et vous conseille sans aucun jugement.
            La quête de l’excellence : Rituels Soins et Beauté est en veille constante sur les innovations minceur et
            beauté.
            Nous choisissons nos marques partenaires et nos appareils avec la plus grande exigence pour vous offrir des
            prestations d’une grande qualité.
            Bien-être de la planète : être en harmonie avec son corps et son esprit c’est aussi être en harmonie avec
            ses valeurs.
            C’est pourquoi nous accordons une grande importance à nos marques partenaires pour un engagement
            éco-responsable tant par la composition des produits, leur emballage, mais aussi leur lieu de fabrication.
        </p>
    </div>
    <div class="image"> <img src="https://picsum.photos/2000/2000"></div>
</div>

<div class="center-text">
    <h3>l'Institut</h3>
    <p>Nous vous accueillons dans nos nouveaux locaux au style cosy et chaleureux. Nous disposons d’un espace onglerie,
        de 2 cabines d’épilations et de 3 salles de soins. </p>
</div>

<div class="banner-image">
    <img src="https://picsum.photos/2000/2000">
    <img src="https://picsum.photos/2000/2000">
    <img src="https://picsum.photos/2000/2000">
</div>

<div class=horaire>
    <div class="left-text">
        <h3> Nos Horaires</h3>
    </div>

    <div class="horaire-container border-solid-top">


        <div class="horaire-day-container">

            <div class="horaire-day">
                <h3 class="bold">Du Lundi au Vendredi </h3>
                <h3>De 9h à 14h30 </h3>

            </div>
            <div class=line></div>
            <div class="horaire-day">
                <h3 class="bold">Le Samedi </h3>
                <h3>De 9h à 14h30 </h3>
            </div>
        </div>

        <img src="https://picsum.photos/100/100">


    </div>
    <div class="center-text margin-top-5 border-solid-bottom">
        <p>Suivez-notre actualité sur notre page <a href="">Instagram</a>
    </div>

</div>
<div class="left-text">
    <h3> Venir</h3>
</div>
<img class="center" src="https://picsum.photos/1000/400">

<div class="left-text">
    <h3> Nous Contacter</h3>
</div>
<div class="contact">
    <div class="contact-text">
        <p>Nous sommes joignables par téléphone à nos horaires d’ouverture. Pour toutes information, n’hésitez pas à
            nous contacter. </p>
        <p>La prise de rendez-vous se fait via notre plateforme de réservation en ligne ou par téléphone. </p>.
        <p>Retrouvez-nous sur nos réseaux sociaux pour suivre l’actualité de l’Institut !</p>
    </div>
</div>

<?php get_footer(); ?>