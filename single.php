<?php get_header(); ?>

	<div class="row align-center" id="blogPage">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="small-12 columns animated fadeInUp">
				<div class="meta">
					<small>By <?php the_author(); ?> | <?php the_date(); ?> | <?php the_category(', '); ?></small>
				</div>
				<div class="row titleSpace">
					<div class="small-12 medium-8 columns">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="small-12 medium-4 columns text-right">
						<h2><small><?php comments_number( '0', '1', '%' ); ?> <i class="fa fa-comments" aria-hidden="true"></i></small></h2>
					</div>
				</div>
			</div>
			<div class="small-12 medium-8 columns animated fadeInUp">
				<?php the_post_thumbnail('wwww'); ?>
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>