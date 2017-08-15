<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="row expanded align-middle" style="background: url(<?php the_post_thumbnail_url('bg'); ?>); background-size: cover;" id="pageImage">
				<div class="small-12">
					<div class="row">
						<div class="small-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>

<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>