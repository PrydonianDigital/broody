<?php get_header(); ?>

	<div class="row expanded align-center" id="blogPage" style="background: url(<?php the_post_thumbnail_url('bg'); ?>); background-size: cover;">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="small-12 medium-8 columns bg">
				<div class="meta">
					<small>By <?php the_author(); ?> | <?php the_date(); ?> | <?php the_category(', '); ?></small>
				</div>
				<div class="row expanded titleSpace">
					<div class="small-12 medium-8">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="small-12 medium-4 text-right">
						<h2><small><?php comments_number( '0', '1', '%' ); ?> <i class="fa fa-comments" aria-hidden="true"></i></small></h2>
					</div>
				</div>
			</div>
			<div class="small-12 medium-8 columns bg">
				<?php the_content(); ?>
			</div>
			<div class="small-12 medium-8 columns bg">
				<hr>
			</div>
			<div class="small-12 medium-8 columns bg">
				<?php comments_template( '/comments.php' ); ?>
			</div>

		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>