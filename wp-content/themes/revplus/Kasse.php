<?php
/*
Template Name: kasse.php
*/
get_header();
?>
<main>
    <div class="container pt-5 pb-5">
        <div class="row">
        <h1>Kasse</h1>
        <?php echo  do_shortcode( '[woocommerce_checkout]');?>
        </div>
    </div>

</main>
<?php get_footer();?>