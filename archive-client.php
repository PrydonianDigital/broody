<?php get_header(); ?>

	<div class="row expanded" id="contactPage">

		<div class="small-12">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $i++; if(($i % 2) == 0) : ?>

			<div class="row expanded client">

				<div class="small-12 medium-6 columns animated fadeInUp text-center img" style="background: url(<?php the_post_thumbnail_url('bg'); ?>); background-size: cover;"></div>
				<div class="small-12 medium-6 columns animated fadeInUp text-center">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>

			</div>

			<?php else : ?>

			<div class="row expanded client">

				<div class="small-12 medium-6 columns animated fadeInUp text-center">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>
				<div class="small-12 medium-6 columns animated fadeInUp text-center img" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;"></div>

			</div>

			<?php endif; ?>

			<?php endwhile; ?>

			<?php else : ?>

			<?php endif; ?>

		</div>

	</div>

<?php get_footer(); ?>