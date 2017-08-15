<?php get_header(); ?>

	<?php if( is_post_type_archive('people') ) : ?>
	<?php
		$page = get_page_by_title( 'who we are' );
	?>
	<div class="row expanded align-middle" style="background: url(<?php echo get_the_post_thumbnail_url($page->ID, 'bg'); ?>); background-size: cover;" id="pageImage">
	<?php else : ?>
	<div class="row expanded align-middle" id="pageImage">
	<?php endif; ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="small-12 medium-6 large-3 columns animated fadeInUp text-center" style="-webkit-animation-delay: <?php echo get_post_field( 'menu_order', $post->ID); ?>s;-moz-animation-delay: <?php echo get_post_field( 'menu_order', $post->ID); ?>s;-ms-animation-delay: <?php echo get_post_field( 'menu_order', $post->ID); ?>s;animation-delay: <?php echo get_post_field( 'menu_order', $post->ID); ?>s;">
			<div class="card">
				<?php
					if(has_post_thumbnail()) {
						the_post_thumbnail();
					}
				?>
				<div class="card-section">
					<h4><?php the_title(); ?></h4>
					<?php
						$title = get_post_meta( get_the_ID(), '_wwa__title', true );
						if($title !=''){
					?>
					<h5><?php echo $title; ?></h5>
					<?php
						}
					?>
					<?php the_content(); ?>
				</div>
				<div class="card-section">
					<?php
						$linkedin = get_post_meta( get_the_ID(), '_wwa__linkedin', true );
						if($linkedin !=''){
					?>
					<a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
					<?php
						}
					?>
					<?php
						$facebook = get_post_meta( get_the_ID(), '_wwa__facebook', true );
						if($facebook !=''){
					?>
					<a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
					<?php
						}
					?>
					<?php
						$twitter = get_post_meta( get_the_ID(), '_wwa__twitter', true );
						if($twitter !=''){
					?>
					<a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a>
					<?php
						}
					?>
					<?php
						$youtube = get_post_meta( get_the_ID(), '_wwa__youtube', true );
						if($youtube !=''){
					?>
					<a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube-square"></i></a>
					<?php
						}
					?>
					<?php
						$instagram = get_post_meta( get_the_ID(), '_wwa__instagram', true );
						if($instagram !=''){
					?>
					<a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>