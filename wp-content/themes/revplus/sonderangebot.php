<?php
/*
Template Name: sonderangebot.php
*/
get_header();
?>
<main>
    <div class="container pt-5 pb-5">
        <div class="row">
        <?php echo  do_shortcode( '[products  columns="4" orderby="popularity"]');?>
        </div>
    </div>

</main>
<?php get_footer();?>