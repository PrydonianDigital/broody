<?php
	/*
		Template Name: FAQs
	*/
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row expanded" style="background: url(<?php the_post_thumbnail_url('bg'); ?>); background-size: cover;" id="pageImage">
	<?php
		$entries = get_post_meta( get_the_ID(), '_faq_home', true );
		foreach ( (array) $entries as $key => $entry ) {
			$title = $text = '';
			if ( isset( $entry['_faq__title'] ) ) {
				$title = esc_html( $entry['_faq__title'] );
			}
			if ( isset( $entry['_faq__text'] ) ) {
				$text = wpautop( $entry['_faq__text'] );
			}
	?>
	<div class="small-12 columns animated fadeInUp"  style="-webkit-animation-delay: <?php echo $key; ?>s;-moz-animation-delay: <?php echo $key; ?>s;-ms-animation-delay: <?php echo $key; ?>s;animation-delay: <?php echo $key; ?>s;">
		<div class="row bg">
			<div class="small-12 columns">
				<div class="faq">
					<?php if ( isset( $entry['_faq__title'] ) ) { ?> <h3><?php echo $title; ?></h3> <?php } ?>
					<div class="answer">
						<?php if ( isset( $entry['_faq__text'] ) ) { ?> <?php echo $text; ?> <?php } ?>
					</div>
				</div>
			</div>
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