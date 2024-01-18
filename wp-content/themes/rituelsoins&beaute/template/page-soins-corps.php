<?php /* Template Name: Soins corps  */
get_header();


?>
<?php foreach (get_field('title_description') as $i => $title_description) : ?>
<h1 class="title-page"><?php echo $title_description['title']; ?></h1>
<h2 class="subtitle-page"><?php echo $title_description['description']; ?></h2>
<?php endforeach; ?>

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


<div class="soins-visage-bouton">
    <a class="button button-green"> Retrouvez nos formules soins visages et dos</a>

    <h4> En manque d'inspiration ?</h4>
    <a class="button button-green"> Retrouvez nos idées caseaux</a>
</div>


<?php get_footer(); ?>