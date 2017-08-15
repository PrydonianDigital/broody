<?php get_header(); ?>

	<div class="row expanded small-up-1 medium-up-3 large-up-4 align-spaced" id="pageImage">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="small-12 medium-6 large-3 columns animated fadeInUp">
				<div class="card">
					<div class="card-section">
						<span class="badge"><?php the_category('</span><span class="badge">'); ?></span>
					</div>
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

			<div class="small-12 medium-6 large-3 columns animated fadeInUp">
				<div class="card">
					<div class="card-divider">
						<h4>Oh dear...</h4>
					</div>
					<div class="card-section">
						<p>We couldn't find anything...</p>
					</div>
				</div>
			</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>