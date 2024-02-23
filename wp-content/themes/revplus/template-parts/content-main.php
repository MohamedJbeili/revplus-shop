<main id="page-main" class="pb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-8 no--margin">
					<?php if (is_author()): ?>
						<div class="row">
							<div class="col-xs-12">
								<div class="sidebar bottom-sidebar">
									<?php the_widget('Fietz_Author', $instance, array('before_widget' => '<section class="sidebar--widget">', 'after_widget' => '</section>')); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>

					<?php get_template_part('template-parts/content', 'loop'); ?>
				</section>
			</div>

			<aside id="page-sidebar" class="col-12 col-md-5 col-lg-4">
				<div class="sticky-top" style="top:6rem;"><?php
					$arrShariffInstance = array(
						'shariff_facebook'	=> 'on',
						'shariff_twitter'	=> 'on',
						'shariff_googleplus'=> 'on',
						'shariff_xing'		=> 'on',
						'shariff_mail'		=> 'on',
						'shariff_whatsapp'	=> 'on'
					);

					the_widget('Fietz_Shariff', $arrShariffInstance);
					get_sidebar(); ?>
				</div>
			</aside>
		</div>
	</div>
</main>