<?php /* Template Name: Beauté du regard  */
get_header();


?>

<h1 class="title-page">Beauté du regard</h1>
<h2 class="subtitle-page"></h2>

<div class="tarif-container">
    <div class="tarif">
        <div class="text">
            <h2>Tarifs</h2>
            <p>
                <br> Teinture sourcils
                14€
                <br> Teinture cils
                20€
                <br> Teinture sourcils et cils
                31€
            </p>
        </div>
        <img src="https://picsum.photos/200/300" alt="">
    </div>
</div>


<?php foreach (get_field('prices') as $i => $soin) :

    // make alternate css class for spreadsheet if modulo 2 == 0
    $class = ($i % 2 == 0) ? 'spreadsheet-even' : 'spreadsheet-odd';

?>
<div class="spreadsheet <?php echo $class; ?>">
    <div class="details">
        <h3><?php echo $soin['title']; ?></h3>
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
<div class="spreadsheet <?php echo $class; ?>">
    <div class="details">
        <h3>Test<?php echo $soin['title']; ?></h3>
        <p>rearezrezzrezrzeezrez<?php echo $soin['description']; ?></p>
    </div>
    <div class="price">

        <div class="service-price">
            <div class="duration">
                <p>10min<?php echo $soin['duration']; ?></p>
            </div>
            <p>500€<?php echo $soin['price']; ?></p>
        </div>
    </div>
</div>


<div class="border-radius text-padding-green">
    <img src="https://picsum.photos/100/100" alt="">
    <h3>
        Nous travaillons en collaboration avec la marque Lami Lashes engagée avec des produits aux ingrédients
        d'origine
        naturelle, VEGAN, non testé sur animaux, éco certifiés et respectueux du corps.
    </h3>
</div>

<div class="center-text">
    <p> Teinture cils/sourcils, rehaussement, soin lash botox : trouvez le soin qui correspond à vos
        envies et
        vos besoins.</h3>

</div>
<?php get_footer(); ?>