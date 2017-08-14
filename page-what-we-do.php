<?php
	/*
	Template Name: What We Do
	*/
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row expanded align-middle" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;" id="pageImage">

	<?php
		$entries = get_post_meta( get_the_ID(), '_wwd_home', true );
		foreach ( (array) $entries as $key => $entry ) {
			$icon = $title = $text = '';
			if ( isset( $entry['_wwd__icon'] ) ) {
				$icon = esc_html( $entry['_wwd__icon'] );
			}
			if ( isset( $entry['_wwd__title'] ) ) {
				$title = esc_html( $entry['_wwd__title'] );
			}
			if ( isset( $entry['_wwd__text'] ) ) {
				$text = wpautop( $entry['_wwd__text'] );
			}
	?>
	<div class="small-12 medium-4 columns animated fadeInUp text-center"  style="-webkit-animation-delay: <?php echo $key; ?>s;-moz-animation-delay: <?php echo $key; ?>s;-ms-animation-delay: <?php echo $key; ?>s;animation-delay: <?php echo $key; ?>s;">
		<div class="wwd">
			<?php if ( isset( $entry['_wwd__icon'] ) ) { ?> <h2><i class="fa <?php echo $icon; ?>"></i></h2> <?php } ?>
			<?php if ( isset( $entry['_wwd__title'] ) ) { ?> <h3><?php echo $title; ?></h3> <?php } ?>
			<?php if ( isset( $entry['_wwd__text'] ) ) { ?> <?php echo $text; ?> <?php } ?>
		</div>
	</div>
	<?php
		}
	?>
</div>

<?php endwhile; ?>

<?php else : ?>

 <?php endif; ?>

<?php get_footer(); ?>