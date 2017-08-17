<h2 class="comments-title">
    <?php
        printf( _nx( '1 <i class="fa fa-comments" aria-hidden="true"></i> on "%2$s"', '%1$s <i class="fa fa-comments" aria-hidden="true"></i> on "%2$s"', get_comments_number(), 'comments title', 'broody' ),
            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
    ?>
</h2>

<?php
    wp_list_comments( array(
        'style'       => 'div',
        'short_ping'  => true,
        'avatar_size' => 74,
    ) );
?>

<?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
<nav class="navigation comment-navigation" role="navigation">
    <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'broody' ); ?></h1>
    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'broody' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'broody' ) ); ?></div>
</nav><!-- .comment-navigation -->
<?php endif; // Check for comment navigation ?>

<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.' , 'broody' ); ?></p>
<?php endif; ?>

<?php comment_form(); ?>

