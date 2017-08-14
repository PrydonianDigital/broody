<?php
	/*
	Template Name: Our Story
	*/
	get_header();
?>
<style>
#pageImage {

	padding: 165px 1.875rem 0;
}
@media screen and (max-width: 40em) {
	#pageImage {
		height: auto;
		padding: calc(50px + 0.937rem) 0 0.937rem 0;
	}
}
</style>
<div class="row expanded small-collapse align-top collapse " style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;" id="pageImage">
	<div class="small-12" id="map"></div>
</div>
<div class="row expanded align-middle">
</div>
	<div class="small-12">
		<div class="row expanded align-top large-unstack" id="ourStory">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

			<?php else : ?>

			 <?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>