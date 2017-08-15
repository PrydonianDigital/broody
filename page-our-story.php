<?php
	/*
	Template Name: Our Story
	*/
	get_header(); ?>

			<div class="row expanded align-middle" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;" id="pageImage">
				<div class="small-12">
					<div class="row expanded align-center small-up-1 medium-up-2" id="ourStory">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

						<?php else : ?>

						 <?php endif; ?>
					</div>
				</div>
			</div>

<?php get_footer(); ?>