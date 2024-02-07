<?php
/* Template Name: A Propos */
get_header();
?>
<?php include 'title-subtitle.php'; ?>


<div class="team-description">
    <div class="text">
        <h2>L'équipe</h3>
            <p>
                <?php echo get_field('team-description'); ?>
            </p>
    </div>

    <div class="image" style="background-image: url('<?php echo get_field('team-image')['url']; ?>')">
    </div>
</div>

<div class="team-composition">
    <?php
    $team_members = get_field('team_members');
    if ($team_members) :
        foreach ($team_members as $i => $team_member) :
    ?>
            <div class="team-member">
                <div class="image" style="background-image: url('<?php echo $team_member['image']['url']; ?>')">
                </div>
                <div class="text">
                    <h3><?php echo $team_member['name']; ?></h3>
                </div>
            </div>
    <?php
        endforeach;
    endif;
    ?>
</div>

<div class="about-banner">
    <div class="center-text">
        <p>
            Offrez vous une parenthèse beauté ou bien-être au sein de notre institut Rituels Soins et Beauté.
        </p>
    </div>
    <div class="image">
        <?php
        $youtube_url = get_field('video_youtube');

        if ($youtube_url) {
            echo $youtube_url;
        }
        ?>
    </div>
</div>

<div class="expertise">
    <div class="text">
        <h2>Notre expertise</h2>
        <p><?php echo get_field('expertise_description'); ?></p>
    </div>
    <div class="image">
        <img src="<?php echo get_field('expertise_image')['url']; ?>" alt="expertise image">
    </div>
</div>

<div class="center-text">
    <h3>l'Institut</h3>
    <p> 
        <?php echo get_field('institut_description'); ?>
    </p>
</div>

<div class="banner-image">
    <?php foreach (get_field('banner-image') as $i => $banner_image) : ?>
        <img src="<?php echo $banner_image['image']['url']; ?>" alt="banner image">
    <?php endforeach; ?>
</div>

<div class="horaire">
    <div class="left-text">
        <h3> Nos Horaires</h3>
    </div>
    <div class="horaire-container border-solid-top">
        <div class="horaire-day-container">
            <?php foreach (get_field('opening_hours') as $i => $opening_hour) : ?>
                <div class="horaire-day">
                    <h3 class="bold"><?php echo $opening_hour['day']; ?></h3>
                    <h3><?php echo $opening_hour['hours']; ?></h3>
                </div>
                <div class="line"></div>
            <?php endforeach; ?>
        </div>
        <img src="<?php echo get_template_directory_uri() . '/assets/icone_PNG/icone_calendrier.png'; ?>" alt="icone calendrier" width="100px" height="100px">
    </div>
    <div class="center-text margin-top-5 border-solid-bottom">
        <p>Suivez-notre actualité sur notre page <a target="_blank" href="<?php echo get_field('instagram_link'); ?>">Instagram</a></p>
    </div>
</div>

<div class="left-text">
    <h3> Venir</h3>
</div>
<img class="center" src="<?php echo get_field('coming_image')['url']; ?>" alt="venu image">
<div class="center-text">
    <p><?php echo get_field('coming_description'); ?></p>
</div>

<div class="left-text">
    <h3> Nous Contacter</h3>
</div>
<div class="contact">
    <div class="contact-text">
        <p><?php echo get_field('contact_info'); ?></p>
    </div>
</div>

<?php get_footer(); ?>