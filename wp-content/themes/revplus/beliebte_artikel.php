<?php
/*
Template Name: beliebte_artikel.php
*/
get_header();
?>
<main>
    <div class="container pt-5 pb-5">
        <div class="row">
        <?php echo  do_shortcode( '[best_selling_products limit="4" columns="4" orderby="popularity"]');?>
        </div>
    </div>

</main>
<?php get_footer();?>