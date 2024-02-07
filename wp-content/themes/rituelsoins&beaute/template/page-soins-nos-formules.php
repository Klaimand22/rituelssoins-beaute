<?php /* Template Name: Nos Formules */
get_header();


?>
<?php include 'title-subtitle.php'; ?>




<?php foreach (get_field('prices') as $i => $soin) :

    // make alternate css class for spreadsheet if modulo 2 == 0
    $class = ($i % 2 == 0) ? 'spreadsheet-even' : 'spreadsheet-odd';

?>
    <div class="spreadsheet">
        <div class="details">
            <h3><?php echo $soin['title']; ?></h3>
            <p><?php echo $soin['description']; ?></p>
        </div>
        <div class="price">
            <?php if (!empty($soin['duration']) || !empty($soin['price'])) : ?>
                <div class="service-price">
                    <div class="duration <?php if ($soin['duration'] == '') : echo 'hidden';
                                            else : echo $class;
                                            endif; ?>">
                        <p><?php echo $soin['duration']; ?></p>
                    </div>
                    <p><?php echo $soin['price']; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>

<div class="banner-image">
    <!-- Dynamic version with acf -->
    <?php foreach (get_field('banner-image') as $i => $banner_image) : ?>

        <img src="<?php echo $banner_image['image']['url']; ?>">
    <?php endforeach; ?>
</div>


<div class="soins-visage-bouton">
    <a class="button button-green"> Retrouvez nos formules soins visages et dos</a>

    <h4> Manque d'inspiration pour un cadeau ?</h4>
    <a href="<?php echo get_permalink(get_page_by_path('idees-cadeaux')); ?>" class="button button-green"> Retrouvez
        nos idées cadeaux</a>
</div>


<?php get_footer(); ?>