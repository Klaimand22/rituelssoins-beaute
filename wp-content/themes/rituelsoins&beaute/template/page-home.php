<?php /* Template Name: Accueil-Home */
get_header();
?>

<script>
    AOS.init();
</script>

<div class="container-background">
    <?php
    $image = get_field('background-logo');
    if (!empty($image)) : ?>
        <img data-aos="zoom-out" class="background-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif;

    $image = get_field('background-image');
    if (!empty($image)) : ?>
        <video class="background-image" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($image['url']); ?>" type="video/mp4">
        </video>
    <?php endif; ?>


</div>

<div class="discover">
    <h2 class="about">A PROPOS</h2>
    <h1 data-aos="zoom-in">Rituels Soins et Beauté</h1>
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
        <?php if (have_rows('service_card')) : ?>
            <?php while (have_rows('service_card')) : the_row(); ?>
                <div class="services-grid-item" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                    <?php $image = get_sub_field('image'); ?>
                    <div class="services-grid-img" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
                        <?php if (empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="services-grid-hover">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <div class="grid">
                                <div class="grid-inner">
                                    <p><?php the_sub_field('description'); ?></p>
                                    <a class="button button-pink" href="<?php echo the_sub_field('link'); ?>">
                                        Voir nos <?php the_sub_field('title'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>




<?php get_footer(); ?>