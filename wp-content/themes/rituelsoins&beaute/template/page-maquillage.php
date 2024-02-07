<?php /* Template Name: Maquillage  */
get_header();



?>
<?php include 'title-subtitle.php'; ?>

<?php foreach (get_field('makeup_table') as $i => $maquillage) :
    /* Modulo */
    if ($i % 2 == 0) {
        $class = 'even';
    } else {
        $class = 'odd';
    }
?>
    <div class="makeup-table <?php echo $class; ?>">
        <div class="details">
            <h3><?php echo $maquillage['title']; ?></h3>
            <p><?php echo $maquillage['prices']; ?></p>
        </div>
        <div class="description">
            <p><?php echo $maquillage['description']; ?></p>
        </div>
    </div>

<?php endforeach; ?>



<?php foreach (get_field('zao-table') as $i => $zao_table) : ?>
    <div class="zao-table">

        <div class="description">
            <h3><?php echo $zao_table['description']; ?></h3>
            <p><?php echo $zao_table['description_2']; ?></p>
        </div>
        <div class="image">
            <img src="<?php echo $zao_table['image']['url']; ?>">
        </div>

    </div>



    <div class="zao-card center">
        <div class="zao-card-image">
            <img src="<?php echo $zao_table['zao-card-image']['url']; ?>">
        </div>
        <div class="zao-card-description">
            <p><?php echo $zao_table['zao-card-description']; ?></p>
        </div>
    </div>
<?php endforeach; ?>


<div class="banner-image">
    <!-- Dynamic version with acf -->
    <?php foreach (get_field('banner-image') as $i => $banner_image) : ?>

        <img src="<?php echo $banner_image['image']['url']; ?>">
    <?php endforeach; ?>
</div>


<?php get_footer(); ?>