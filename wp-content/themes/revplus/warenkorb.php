<?php
/*
Template Name: Warenkorb.php
*/
get_header();
?>
<main>
    <div class="container pt-5 pb-5">
        <div class="row">
        <?php echo  do_shortcode( '[woocommerce_cart]');?>
        </div>
    </div>

</main>
<?php get_footer();?>