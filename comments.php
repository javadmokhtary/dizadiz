<?php
/**
 * The template for displaying comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

if ( post_password_required() ) {
	return;
}

?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
	<?php
	if ( have_comments() ) {
		?>
		<h2 class="comments-title">
			<?php
			if ( '1' === get_comments_number() ) {
				esc_html_e( '1 comment', 'dizadiz' );
			} else {
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', get_comments_number(), 'Comments title', 'dizadiz' ) ),
					esc_html( number_format_i18n( get_comments_number() ) )
				);
			}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'dizadiz' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'<span class="nav-prev-text">%s</span>',
					esc_html__( 'Older comments', 'dizadiz' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span>',
					esc_html__( 'Newer comments', 'dizadiz' )
				),
			)
		);

		if ( ! comments_open() ) {
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'dizadiz' ); ?></p>
			<?php
		}
	}

	comment_form(
		array(
			'logged_in_as'       => null,
			'title_reply'        => esc_html__( 'Leave a comment', 'dizadiz' ),
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);
	?>
</div><!-- #comments -->
