<?php get_header();?>
<main>
    <div class="container">
        
        
        <?php if (have_posts()):?>
            <?php while (have_posts()):?>
               <?php the_post(); ?>
           
              <div class="post">
                <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h3>
                    <span class="post-autor"><i class="fa-solid fa-user fa-sm"></i> <?php the_author_posts_link(); ?></span>
                    <span class="post-date"> <i class="fa-solid fa-calendar-days fa-sm"></i><?php the_time( 'F j, Y' ); ?></span>
                    <span class="post-comments"> <i class="fa-solid fa-comment fa-flip-horizontal fa-sm"></i><?php comments_popup_link('kein Kommentar','1 Kommentar','% Kommentare'); ?></span>
                    <?php the_post_thumbnail('',['class' => 'img-responsive img-thumbnail w-100']) ?> 


		<?php the_content('<p class="post-content">','</p>');?> 
        <hr>
        <p class="categories">
                    <i class="fa-solid fa-tag fa-sm"></i><?php the_category(', '); ?> </p>
        </div> <!-- col-sm-4 -->
        

<?php endwhile;?>
<?php endif;?>
<div class="post-pagination flex-center-between">
<?php
   if ( get_previous_posts_link() ) {
    previous_posts_link( '<i class="fa-solid fa-chevron-left"></i> prev' );}
     else{ echo '<span class="me-2"> <i class="fa-solid fa-chevron-left"></i> prev </span>';} 
   if ( get_next_posts_link() ) {
	next_posts_link( 'Next <i class="fa-solid fa-chevron-right ms-2 me-0"></i>' );}
     else{ echo '<span class="ms-2"> Next <i class="fa-solid fa-chevron-right ms-2 me-0"></i> </span>';} 
 

?>
</div> <!-- post-pagination -->
         

            

            


    </div><!-- container -->
</main>

<?php get_footer();?>