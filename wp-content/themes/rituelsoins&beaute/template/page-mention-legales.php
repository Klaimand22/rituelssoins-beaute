<?php /* Template Name: Mention légales */ get_header();

?>

<?php include 'title-subtitle.php'; ?>

<?php foreach (get_field('mention_legales') as $i => $mention_legale) : ?>

    <div class="mention_legales">
        <h3 class="text"><?php echo $mention_legale['title']; ?></h3>
        <p class="description"> <?php echo $mention_legale['description']; ?></p>
    </div>
    </div>


<?php endforeach; ?>



<?php get_footer(); ?>