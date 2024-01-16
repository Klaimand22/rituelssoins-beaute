<?php /* Template Name: Accueil */
get_header();
?>


<div class="container-background">
    <?php
    $image = get_field('background-logo');
    if (!empty($image)) : ?>
        <img class="background-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif;
    $image = get_field('background-image');
    if (!empty($image)) : ?>
        <img class="background-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

</div>

<div class="discover">
    <p class="about">A PROPOS</p>
    <h1>Rituels Soins et Beauté</h1>
    <h2>Laura et son équipe vous accueillent pour vous accorder une pause bien-<br>être dans
        leurs nouveaux locaux.
    </h2>

    <a class="button button-green" href="<?php echo get_home_url() . '/a-propos' ?>">Découvrir l’institut</a>

</div>

<div class="services">
    <div class="services-container">
        <div class="services-item">
            <?php $image = get_field('service-1-logo');
            if (!empty($image)) : ?>
                <img var(--color-text-green); src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h3><?php the_field('service-1-description'); ?></h3>
        </div>
        <div class="services-item">
            <?php $image = get_field('service-2-logo');
            if (!empty($image)) : ?>
                <img var(--color-text-green); src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h3><?php the_field('service-2-description'); ?></h3>

        </div>
        <div class="services-item">
            <?php $image = get_field('service-3-logo');
            if (!empty($image)) : ?>
                <img var(--color-text-green); src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h3><?php the_field('service-3-description'); ?></h3>

        </div>

    </div>

</div>


<div class="services-grid">
    <div class="services-grid-container">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div class="services-grid-item">
                <?php $image = get_field("service-grid{$i}-image"); ?>
                <?php if (!empty($image)) : ?>
                    <div class="services-grid-img" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
                    <?php else : ?>
                        <div class="services-grid-img">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="services-grid-hover">
                            <h3><?php the_field("service-grid{$i}-title"); ?></h3>
                            <p><?php the_field("service-grid{$i}-description"); ?></p>
                            <a class="button button-pink" href="<?php echo get_home_url() . the_field("service-grid{$i}-title"); ?>">Voir nos
                                soins
                                <?php the_field("service-grid{$i}-title"); ?></a>
                        </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
    </div>
</div>




<?php get_footer(); ?>