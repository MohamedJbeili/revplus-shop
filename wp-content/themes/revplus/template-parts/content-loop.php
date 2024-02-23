<?php

$i = 0;
if (have_posts()) {
	while (have_posts()) {
		the_post();
		$i++;

		if ($i == 1 && is_home()) {
			continue;
		} ?>

		<article class="page-main__blogpost card mb-4" itemscope itemtype="http://schema.org/Article">
			<?php $urlPostThumbnail = get_the_post_thumbnail_url(); ?>

			<div class="page-main__post-thumbnail d-flex<?php if (false !== $urlPostThumbnail) { ?> js-lazy-image bg-center" data-bg="url('<?php echo $urlPostThumbnail; ?>')<?php } ?>">
				<div class="page-main__post-header position-relative mt-auto pb-5">
					<div class="page-main__post-categories"><?php
						echo get_the_category_list(', '); ?>
					</div>

					<a class="page-main__post-link" href="<?php the_permalink(); ?>">
						<h2 class="page-main__post-title my-1 h3">
							<span itemprop="name">
								<?php echo (get_the_title() == 'Wie die IHK Lüneburg-Wolfsburg Ihre Zwangsbeiträge verschleudert: Lokalhelden Celle 2016' ? 'Wie die IHK Lüneburg-Wolfs-burg Ihre Zwangsbeiträge verschleudert: Lokalhel-den Celle 2016' : get_the_title()); ?>
							</span>
						</h2>
					</a>

					<span class="page-main__post-date"><?php echo get_the_time('d.m.Y', $post->ID); ?></span>

					<div class="page-main__post-author position-absolute d-flex">
						<div class="bg-white rounded-circle overflow-hidden shadow" style="width:3.75rem;height:3.75rem;z-index:2;">
							<img class="js-lazy-image img-fluid" data-src="<?php echo get_avatar_url($post->post_author, array('size' => 60)); ?>">
						</div>

						<span class="card d-block my-auto py-2 pl-3 pr-2 bg-white ml-n2 rounded" style="z-index:1;">von <a href="<?php echo get_author_posts_url($post->post_author); ?>" title="Beiträge von <?php echo get_the_author($post->post_author); ?>" rel="author" itemprop="author"><?php echo get_the_author($post->post_author); ?></a></span>
					</div>
				</div>
			</div>

			<div class="card-body d-lg-flex">
				<div class="page-main__post-excerpt flex-fill text-justify pr-4">
					<?php the_excerpt(); ?>
				</div>

				<a class="btn btn-secondary text-uppercase mt-3 my-lg-auto" href="<?php the_permalink(); ?>">Weiterlesen</a>
			</div>
		</article><?php
	} ?>
	
	<section class="pagination">
		<div class="pagination--previous"><?php previous_posts_link('&larr; Neuere Posts'); ?></div>
		<div class="pagination--next"><?php next_posts_link('Ältere Posts &rarr;'); ?></div>
	</section><?php
} ?>