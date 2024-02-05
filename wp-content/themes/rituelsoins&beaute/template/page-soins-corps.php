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
            <div class="duration <?php echo $class; ?>">
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
    <a href="<?php echo get_permalink(get_page_by_path('idees-cadeaux')); ?>" class="button button-green"> Retrouvez nos
        idées cadeaux</a>
</div>


<?php foreach (get_field('card-description') as $i => $card_description) : ?>
<div class="card-description">
    <div class="card-description-text">
        <p><?php echo $card_description['text']; ?></p>
    </div>

</div>

<?php if ($card_description['image']) : ?>
<div class="card-description-image">
    <img src="<?php echo $card_description['image']['url']; ?>">
</div>
<?php endif; ?>
<?php endforeach; ?>


<div class="banner-image">
    <!-- Dynamic version with acf -->
    <?php foreach (get_field('banner-image') as $i => $banner_image) : ?>

    <img src="<?php echo $banner_image['image']['url']; ?>">
    <?php endforeach; ?>
</div>


<?php get_footer(); ?>