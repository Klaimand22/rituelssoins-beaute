<?php /* Template Name: Onglerie */
get_header();

?><?php include 'title-subtitle.php'; ?>






<div class="container-onglerie">
    <div class="container-onglerie-left">
        <div class="container-onglerie-text">
            <h3 class="text-onglerie">Vernis Semi-Permanent</h3>
            <ul class="list-onglerie">
                <?php foreach (get_field('list-onglerie') as $i => $list_onglerie) : ?>
                    <li><?php echo $list_onglerie['text']; ?></li>
                <?php endforeach; ?>
                </li>
            </ul>
            <img class="" src="https://picsum.photos/1920/1080" alt="">
        </div>

    </div>

    <div class="container-onglerie-img">

    </div>


</div>
<div class="container-onglerie-description">
    <p>Nous utilisons une base protéine nourrissante pour renforcer davantage vos ongles et les solidifier.</p>
</div>

<h3 class="supplement">
    Nous vous offrons la décoration d’un doigt par main. Au delà, nous facturons un
    <b>supplément de 2€</b> par ongle pour les
    stickers, strass, dégradée, paillettes, babyboomer sur vernis de couleurs etc.
</h3>


<?php


foreach (get_field('description_container', get_the_ID()) as $i => $description_container) :

    // make alternate css class for spreadsheet if modulo 2 == 0
    $class = ($i % 2 == 0) ? 'container-even' : 'container-odd';

?>
    <div class="container-description <?php echo $class; ?>">
        <div class="left">
            <img class="img-beaute" src="<?php echo $description_container['image']['url']; ?>" alt="" srcset="">
        </div>
        <div class="right">
            <div class="price">
                <h3 class="text-onglerie"><?php echo $description_container['title']; ?></h3>
            </div>
            <div class="description">
                <p><?php echo $description_container['description']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<h3 class="supplement">
    Nous proposons également le soin <b>Calluspeeling Yumi Feet.</b>
</h3>


<div class="onglerie-button">
    <a href="https://www.yumifeet.com/" target="_blank" class="button button-green ">En savoir
        plus</a>
</div>



<?php get_footer(); ?>