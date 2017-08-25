<?php get_header(); ?>

	<div class="row expanded align-center" id="blogPage" style="background: url(<?php the_post_thumbnail_url('bg'); ?>); background-size: cover;">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="small-12 medium-8 columns bg">
				<div class="row expanded titleSpace">
					<div class="small-12">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
			</div>
			<div class="small-12 medium-8 columns bg">
				<?php the_content(); ?>
			</div>
			<div class="small-12 medium-8 columns bg">
				<hr>
			</div>

		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>