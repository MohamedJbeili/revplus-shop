<?php get_header();?>
<main>
    <div class="container single-post">
        <div class="row">
        this is blog
       
               <?php the_post(); ?>
            <div class="col-sm-6 m-auto">
              <div class="post single-post">
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
        </div> <!-- col-sm-6 -->
        <div class="post-pagination flex-center-between ">
   
<?php
   if ( get_previous_post_link() ) {
    previous_post_link('%link',' <i class="fa-solid fa-chevron-left"></i> vorheriger Beitrag' );}
     else{ echo '<span class="me-2"> <i class="fa-solid fa-chevron-left"></i> vorheriger Beitrag </span>';} 
   if ( get_next_post_link() ) {
	next_post_link( '%link','nächster Beitrag <i class="fa-solid fa-chevron-right ms-2 me-0"></i>' );}
     else{ echo '<span class="ms-2"> nächster Beitrag <i class="fa-solid fa-chevron-right ms-2 me-0"></i> </span>';} 
 

?>

</div> <!-- post-pagination -->
        
</div>


         

            

            
        </div><!-- row -->

    </div><!-- container -->
</main>

<?php get_footer();?>