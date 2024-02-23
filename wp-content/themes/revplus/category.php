/**
 * The template for displaying archive pages.
 *
 *
 * @package revplus
 */


<?php
get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title"><?php single_cat_title(); ?></h1>
            <div class="taxonomy-description"><?php echo category_description(); ?></div>
        </header>

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                // Display the post content as you want for category pages.
            endwhile;
        else :
            // Display a message for no posts in this category.
        endif;
        ?>
    </main>
</div>

<?php

get_footer();
