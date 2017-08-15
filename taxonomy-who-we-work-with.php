<?php get_header(); ?>

	<div class="row expanded" id="wwwwPage">

		<div class="small-12 columns">
			<h2><?php single_term_title(); ?></h2>
		</div>

	</div>

	<div class="row expanded small-up-1 medium-up-3 large-up-4 align-spaced">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="small-12 medium-6 large-3 columns animated fadeInUp">
				<div class="card">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('card'); ?></a>
					<div class="card-divider">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					<div class="card-section">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>

		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>