<?php /* Template Name: Epilation */
get_header();
?>

<body>
    <h1 class="title-page">Epilation</h1>

    <div class="epilation-price">
        <div class="cire-price">
            <?php $image = get_field('epilation-cire-icone');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="epilation-stuff-price-text">
                <h2><?php the_field('epilation-stuff-title1'); ?></h2>
                <p><?php the_field('epilation-stuff-price1'); ?>€</p>
            </div>
            <div class="epilation-stuff-price-text">
                <h2><?php the_field('epilation-stuff-title2'); ?></h2>
                <p><?php the_field('epilation-stuff-price2'); ?>€</p>
            </div>
            <div class="epilation-stuff-price-text">
                <h2><?php the_field('epilation-stuff-title3'); ?></h2>
                <p><?php the_field('epilation-stuff-price3'); ?>€</p>
            </div>

        </div>
        <div class="fil-price">
            <?php $image = get_field('epilation-cire-icone');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="epilation-stuff-price-text">
                <h2><?php the_field('epilation-stuff-title1'); ?></h2>
                <p><?php the_field('epilation-stuff-price1'); ?>€</p>
            </div>
            <div class="epilation-stuff-price-text">
                <h2><?php the_field('epilation-stuff-title2'); ?></h2>
                <p><?php the_field('epilation-stuff-price2'); ?>€</p>
            </div>
            <div class="epilation-stuff-price-text">
                <h2><?php the_field('epilation-stuff-title3'); ?></h2>
                <p><?php the_field('epilation-stuff-price3'); ?>€</p>
            </div>

        </div>
    </div>


    <div class="epilation-banner">
        <?php $image = get_field('epilation-banner');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <!-- en attendant -->
        <img src="https://picsum.photos/1000/1000" alt="">
    </div>

    <div class="forfait-container">
        <div class="forfait-container-border">
            <h2>Forfait Epilation</h2>
            <p>Nous proposons également un forfait épilation comprenant les aisselles, le maillot au choix ainsi que les
                jambes au choix. 
                <br>
                Pour toutes zones supplémentaires, nous demandons un supplément de 4€. 
            </p>
        </div>
        <div class="forfait-container-download">
            <a class="button button-green" href="<?php echo get_home_url() . '/wp-content/uploads/2021/03/forfait-epilation.pdf' ?>">TÉLÉCHARGER LA
                PLAQUETTE TARIFAIRE </a>
        </div>

    </div>

    <div class="epilation-card">
        <div class="epilation-card-container">
            <div class="epilation-card-item">
                <?php $image = get_field('epilation-card-1-icone');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="epilation-card-text">
                    <p><?php the_field('epilation-card-1-description1'); ?></p>
                    <p><?php the_field('epilation-card-1-description2'); ?></p>
                    <p><?php the_field('epilation-card-1-description3'); ?></p>
                </div>
            </div>
            <div class="epilation-card-item">
                <?php $image = get_field('epilation-card-2-icone');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="epilation-card-text">
                    <p><?php the_field('epilation-card-2-description1'); ?></p>
                    <p><?php the_field('epilation-card-2-description2'); ?></p>
                    <p><?php the_field('epilation-card-2-description3'); ?></p>
                </div>
            </div>
        </div>

    </div>

</body>

<? get_footer(); ?>