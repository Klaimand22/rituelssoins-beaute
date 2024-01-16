<?php /* Template Name: Minceur */
get_header(); ?>


<body>
    <h1 class="title-page">Lpg Cellu M6</h1>
    <div class="minceur-info">
        <div class="minceur-info-item">
            <?php $image = get_field('minceur-info1-icone');
            if (!empty($image)) : ?>
            <div class="minceur-info-img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="minceur-info-text">
                <p><?php the_field('minceur-info1-description'); ?></p>
            </div>
        </div>
        <div class="minceur-info-item">
            <?php $image = get_field('minceur-info2-icone');
            if (!empty($image)) : ?>
            <div class="minceur-info-img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="minceur-info-text">
                <p><?php the_field('minceur-info2-description'); ?></p>
            </div>
        </div>
        <div class="minceur-info-item">
            <?php $image = get_field('minceur-info3-icone');
            if (!empty($image)) : ?>
            <div class="minceur-info-img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="minceur-info-text">
                <p><?php the_field('minceur-info3-description'); ?></p>
            </div>
        </div>

    </div>
    <div class="keyword-container">
        <ul class="keyword">
            <li><?php the_field('minceur-keyword1'); ?></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/ellipse.svg" alt=""></li>
            <li><?php the_field('minceur-keyword2'); ?></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/ellipse.svg" alt=""></li>
            <li><?php the_field('minceur-keyword3'); ?></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/ellipse.svg" alt=""></li>
            <li><?php the_field('minceur-keyword4'); ?></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/ellipse.svg" alt=""></li>
            <li><?php the_field('minceur-keyword5'); ?></li>

        </ul>
    </div>

    <div class="minceur-stuff-container">
        <div class="image-background">
            <?php $image = get_field('minceur-stuff-img');
            if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="minceur-stuff-price">
            <?php $image = get_field('minceur-stuff-icone');
            if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="minceur-stuff-price-text">
                <h2><?php the_field('minceur-stuff-title1'); ?></h2>
                <p><?php the_field('minceur-stuff-price1'); ?>€</p>
            </div>
            <div class="minceur-stuff-price-text">
                <h2><?php the_field('minceur-stuff-title2'); ?></h2>
                <p><?php the_field('minceur-stuff-price2'); ?>€</p>
            </div>
            <div class="minceur-stuff-price-text">
                <h2><?php the_field('minceur-stuff-title3'); ?></h2>
                <p><?php the_field('minceur-stuff-price3'); ?>€</p>
            </div>
        </div>
    </div>

    <div class="minceur-seance-container">
        <div class="minceur-seance-text">
            <div class="minceur-seance-text-border">
                <h2><?php the_field('minceur-seance-title1'); ?></h2>
                <p><?php the_field('minceur-seance-description1'); ?></p>
            </div>

            <div class="minceur-seance-text-border">
                <h2><?php the_field('minceur-seance-title2'); ?></h2>
                <p><?php the_field('minceur-seance-description2'); ?></p>
            </div>
        </div>
        <div class="minceur-seance-img">
            <?php $image = get_field('minceur-seance-img');
            if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>

    <div class="minceur-advice">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icone_PNG/icone_coeur.png" alt="Icone coeur">
        <h3>Pas d’inquiétude, cette technique non invasive n’aura pas d’effets secondaires sur
            <br>votre corps et votre visage.
        </h3>
    </div>

    <div class="minceur-video">

        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/usYa-wGvlo8" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/G5OBs9A0pw0" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


        <?php
        //  ne pas utiliser actuellement

        /*
            $video = get_field('url-youtube1');
            if (!empty($video)) :
            ?>
        <iframe width="560" height="315" src="<?php echo esc_url($video['url']); ?>" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php endif;
            */

                    /*
            $video = get_field('url-youtube2');
            if (!empty($video)) :
            ?>
        <iframe width="560" height="315" src="<?php echo esc_url($video['url']); ?>" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php endif;
            */
        ?>


    </div>
</body>

<?php get_footer(); ?>