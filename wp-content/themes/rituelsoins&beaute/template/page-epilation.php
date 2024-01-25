<?php /* Template Name: Epilation */
get_header();
?>

<?php foreach (get_field('title_description') as $i => $title_description) : ?>
    <h1 class="title-page"><?php echo $title_description['title']; ?></h1>
    <h2 class="subtitle-page"><?php echo $title_description['description']; ?></h2>
<?php endforeach; ?>

<div class="epilation-price">

    <!-- dynamic version -->
    <?php foreach (get_field('cire-price') as $i => $cire_price) : ?>
        <div class="cire-price">
            <?php $image = $cire_price['icone'];
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="epilation-stuff-price-text">
                <h2><?php echo $cire_price['title']; ?></h2>
                <div class="colonne">
                    <p><?php echo $cire_price['description-colonne-1']; ?></p>
                    <p><?php echo $cire_price['description-colonne-2']; ?></p>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach (get_field('fil-price') as $i => $fil_price) : ?>
        <div class="fil-price">
            <?php $image = $fil_price['icone'];
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="epilation-stuff-price-text">
                <h2><?php echo $fil_price['title']; ?></h2>
                <p><?php echo $fil_price['description']; ?></p>
            </div>

        </div>
    <?php endforeach; ?>
</div>





<div class="epilation-banner">
    <?php $image = get_field('epilation-banner');
    if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <!-- en attendant -->
</div>

<div class="forfait-container">
    <div class="forfait-container-border">
        <h2>Forfait Epilation</h2>
        <p>
            <?php the_field('forfait-epilation-description'); ?>
        </p>
    </div>
    <div class="forfait-container-download">
        <?php $file = get_field('forfait-pdf');
        if ($file) : ?>
            <a class="button button-green" href="<?php echo $file['url']; ?>">TÉLÉCHARGER LA PLAQUETTE TARIFAIRE</a>
        <?php endif; ?>


    </div>

</div>

<div class="epilation-card">
    <div class="epilation-card-container">
        <div class="epilation-card-item">
            <div class="icone">
                <div class="border"></div>
                <?php $image = get_field('epilation-card-1-icone');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="border"></div>
            </div>
            <div class="text">
                <p><?php the_field('epilation-card-1-description1'); ?></p>
                <p><?php the_field('epilation-card-1-description2'); ?></p>
                <p><?php the_field('epilation-card-1-description3'); ?></p>
            </div>
        </div>
        <div class="epilation-card-item">
            <div class="icone">
                <div class="border"></div>
                <?php $image = get_field('epilation-card-2-icone');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="border"></div>
            </div>
            <div class="text">
                <p><?php the_field('epilation-card-2-description1'); ?></p>
                <p><?php the_field('epilation-card-2-description2'); ?></p>
                <p><?php the_field('epilation-card-2-description3'); ?></p>
            </div>
        </div>
    </div>

</div>




<?php get_footer(); ?>