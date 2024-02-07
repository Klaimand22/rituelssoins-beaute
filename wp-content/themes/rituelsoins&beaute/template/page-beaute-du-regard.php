<?php /* Template Name: Beauté du regard  */
get_header();

?>
<?php include 'title-subtitle.php'; ?>




<!-- Dynamic version -->
<?php $prix_image = get_field('prix_image'); ?>
<?php foreach (get_field('prix_image') as $i => $prix_image) : ?>
    <div class="tarif-container">
        <div class="tarif">
            <div class="text">
                <h2>Tarifs</h2>
                <p>
                    <?php echo $prix_image['text']; ?>
                </p>
            </div>
            <img src="<?php echo $prix_image['image']['url']; ?>" alt="">
        </div>
    </div>
<?php endforeach; ?>




<?php foreach (get_field('prices') as $i => $soin) :

    // make alternate css class for spreadsheet if modulo 2 == 0
    $class = ($i % 2 == 0) ? 'spreadsheet-even' : 'spreadsheet-odd';

?>
    <div class="spreadsheet <?php echo $class; ?> margin-top-15 border-solid-top-padding">
        <div class="details">
            <h3 class="bollent"><?php echo $soin['title']; ?></h3>
            <p><?php echo $soin['description']; ?></p>
        </div>
        <div class="price">

            <div class="service-price">
                <div class="duration">
                    <p><?php echo $soin['duration']; ?></p>
                </div>
                <p><?php echo $soin['price']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>





<div class="border-radius text-padding-green">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icone_PNG/icone_feuille.png" alt="Icone Feuille">
    <h3>
        Nous travaillons en collaboration avec la marque Lami Lashes engagée avec des produits aux ingrédients
        d'origine
        naturelle, VEGAN, non testé sur animaux, éco certifiés et respectueux du corps.
    </h3>
</div>

<div class="center-text margin-top-5">
    <p> Teinture cils/sourcils, rehaussement, soin lash botox : trouvez le soin qui correspond à vos
        envies et
        vos besoins.</h3>

</div>
<?php get_footer(); ?>