<?php
/**
 * The template for displaying 404 pages (not found)
 * @package WordPress
 * @subpackage Demo -Revplus
 */

get_header();
?>

	<div class="container text-center p-5 page-404">
		<h1 class="page-title mb-3 text-black-50 ">Diese Seite ist nicht gefunden</h1>
		<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
	</div><!-- .container -->

	

<?php
get_footer();
