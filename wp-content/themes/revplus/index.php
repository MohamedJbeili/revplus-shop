<?php get_header();?>


<main>
 
  <?php if (is_front_page()){?>
    <section class="container beliebte-artikel pt-5 pb-5">
        <h2 class="text-uppercase text-center title position-relative ">beliebte-artikel</h2>
        
            <?php echo do_shortcode( '[best_selling_products limit="4" columns="4" orderby="popularity" class="products-container mt-5" ]' ); ?>
  
            <a class="btn d-block" href="https://praktikum.medien-host4.de/beliebte-artikel/" role="button">Alle Arikel</a>
            
    </section><!-- container bliebte-artikel -->

    <section id="rabbat">
        <div class="container  pt-5 pb-5">
     <?php mytheme_display_custom_text_block_banner();?>

      <article class="text-center mt-5 p-5">
          <?php
        $section_title = get_theme_mod('custom_text_block_title');
        $section_subtitle = get_theme_mod('custom_text_block_subtitle');
        $section_text = get_theme_mod('custom_text_block_text');
        if ($section_title): ?>
          <h3><?php echo esc_html($section_title); ?></h3>
      
          <?php endif;?>
          <?php if ($section_title): ?>
          <p><?php echo esc_html($section_subtitle); ?></p>
          <?php endif;?>
      
          <?php if ($section_text): ?>
          <p><?php echo esc_html($section_text); ?></p>
          <?php endif;?>
      </article>  

            
      </div>

    </section><!-- container rabbat -->

    <section class="container sonderangebot pt-5 pb-5">
        
        <h2 class="text-uppercase text-center title position-relative ">sonderangebot</h2>
     

        <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity" class="products-container mt-5" ]' ); ?>
      
      <a class="btn d-block" href="https://praktikum.medien-host4.de/sonderangebot/" role="button">Alle reduzierten Artikel</a>
            
   

    </section><!-- container sonderangebot VERKAUFSHITS -->
    <section class="verkaufshits pt-5 pb-5 border-bottom">
        <div class="container">
        
        <h2 class="text-uppercase text-center title position-relative ">Neue Produkte</h2>
     

        <?php echo do_shortcode( '[products  limit="4" orderby="id" order="DESC columns="4" class="products-container mt-5" ]' ); ?>
      
      <a class="btn d-block" href="https://praktikum.medien-host4.de/verkaufshits/" role="button">Alle Verkaufshits</a>
            
      </div>

    </section><!-- container VERKAUFSHITS -->

    <?php } else { 

      ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
    }
     ?> 


</main>

<?php get_footer();?>