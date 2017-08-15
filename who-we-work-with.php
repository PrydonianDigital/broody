<?php get_header(); ?>

	<div class="row expanded" id="wwwwPage">

		<div class="small-12">

			<?php
				$terms = get_terms( array(
				    'taxonomy' => 'who-we-work-with',
				    'hide_empty' => true,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					$i=0;
				    foreach ( $terms as $term ) {
					    ++$i;
					    if ($i % 2 == 0){
					        echo '<div class="row expanded client align-middle"><div class="small-12 small-push-12 medium-6 columns animated fadeInUp text-center"><h5>' . $term->name . '</h5><p>' . $term->description . '</p><p><a class="button hollow" href="' . $term->slug . '">See More</a></p></div><div class="small-12 medium-6 animated fadeInUp text-center wwwwImg"><img src="' . z_taxonomy_image_url($term->term_id, 'wwww') . '"></div></div>';
					    } else {
					        echo '<div class="row expanded client align-middle"><div class="small-12 medium-6 animated fadeInUp text-center wwwwImg"><img src="' . z_taxonomy_image_url($term->term_id, 'wwww') . '"></div><div class="small-12 medium-6 columns animated fadeInUp text-center"><h5>' . $term->name . '</h5><p>' . $term->description . '</p><p><a class="button hollow" href="' . $term->slug . '">See More</a></p></div></div>';
						}
				    }
				}
			?>

		</div>

	</div>

<?php get_footer(); ?>