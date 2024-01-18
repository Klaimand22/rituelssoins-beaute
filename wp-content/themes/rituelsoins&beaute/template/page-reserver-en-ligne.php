<?php /* Template Name: Reserver en ligne */
get_header();
?>

<?php foreach (get_field('title_description') as $i => $title_description) : ?>
    <h1 class="title-page"><?php echo $title_description['title']; ?></h1>
    <h2 class="subtitle-page"><?php echo $title_description['description']; ?></h2>
<?php endforeach; ?>

<div id="kalendes-widget-container"></div>
<?php get_footer(); ?>