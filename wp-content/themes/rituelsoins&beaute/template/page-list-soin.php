<?php /* Template Name: Listes Soins */
get_header();
?>

Soins
<?php
$title = get_field('title');
$description = get_field('description');
$image = get_field('background_image');
?>


<section>
    <h1><?php echo ($title) ?></h1>
    <p><?php echo ($description) ?></p>
    <img src="<?php echo ($image["sizes"]["soins-banner"]) ?>" alt="<?php echo ($image['alt']) ?>" loading="lazy" width="<?php echo ($image["sizes"]["soins-banner-width"]) ?>" height="<?php echo ($image["sizes"]["soins-banner-height"]) ?>">

</section>

<section class="section-card">
    <?php
    $post = get_post();
    $soins = get_pages([
        'child_of' => $post->ID,
    ]);
    var_dump($soins);

    ?>
    <?php foreach ($soins as $soin) : ?>
        <div class="card-soin">
            <h2><?php echo ($soin->post_title) ?></h2>
            <p class="price"><?php echo (get_field('price', $soin->ID)) ?>€</p>
            <p><?php echo ($soin->post_content) ?></p>
            <a href="<?php echo (get_permalink($soin->ID)) ?>">Voir le soin</a>
            <img src="<?php echo (get_field('image_soin', $soin->ID)["sizes"]["soins-banner"]) ?>" width="400" height="400" alt="<?php echo (get_field('image_soin', $soin->ID)['alt']) ?>" loading="lazy">


        </div>
    <?php endforeach; ?>

</section>

<?php get_footer(); ?>