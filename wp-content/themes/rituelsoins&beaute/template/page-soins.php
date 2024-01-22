<?php /* Template Name: Soins */
get_header();
?>

<?php foreach (get_field('title_description') as $i => $title_description) : ?>
    <h1 class="title-page"><?php echo $title_description['title']; ?></h1>
    <h2 class="subtitle-page"><?php echo $title_description['description']; ?></h2>
<?php endforeach; ?>

<div class="center">

    <div class="grid-choice">
        <?php
        // Loop through each choice
        for ($i = 1; $i <= 3; $i++) :
            $title = get_field("title-choice-$i");
            $image = get_field("image-choice-$i");
            $link = get_field("link-choice-$i"); // Assume you have a field for the link

            if (!empty($title)) :
        ?>
                <div class="item">
                    <?php if (!empty($link)) : ?>
                        <a href="<?php echo esc_url($link); ?>">
                        <?php endif; ?>

                        <h3 class="title-choice"><?php echo esc_html($title); ?></h3>
                        <div class="grid-choice-img">
                            <?php if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($link)) : ?>
                        </a>
                    <?php endif; ?>
                </div>
        <?php
            endif;
        endfor;
        ?>
    </div>
</div>

<?php get_footer(); ?>