<?php /* Template Name: Beauté du regard  */
get_header();


?>

<h1 class="title-page">Soins visage corps</h1>
<h2 class="subtitle-page">Une parenthèse de détente, de douceur et de bien-être. </h2>

<div class="tarif-container">
    <div class="tarif">
        <p>
            Teinture sourcils
            14€

            Teinture cils
            20€

            Teinture sourcils et cils
            31€
        </p>
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


<div class="border-radius text-padding-green">
    <h3>
        Nous travaillons en collaboration avec la marque Lami Lashes engagée avec des produits aux ingrédients d'origine
        naturelle, VEGAN, non testé sur animaux, éco certifiés et respectueux du corps.
    </h3>
</div>