<?php
/*
Template Name: verkaufshits.php
*/
get_header();
?>
<main>
    <div class="container pt-5 pb-5">
        <div class="row">
        <?php echo  do_shortcode( '[products orderby="id" order="DESC columns="4" ]');?>
        </div>
    </div>

</main>
<?php get_footer();?>