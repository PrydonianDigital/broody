<?php
	/*
	Template Name: Our Story
	*/
	get_header();
?>
<style>
#contactPage {
	margin: 155px 0 0 0;
	padding: 0;
}
@media screen and (max-width: 40em) {
	#contactPage {
		height: auto;
		margin-top: calc(45px + 0.937rem);
		padding: 0;
	}
}
</style>
<div class="row expanded small-collapse collapse" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;" id="contactPage">
	<div class="small-12 animated zoomIn" id="map"></div>
</div>
<div class="row align-top">
	<div class="small-12 columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else : ?>

		 <?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>