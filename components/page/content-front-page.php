<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package IL10
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content();
			echo '<h3 style="clear:both;"><a href="' . get_category_link( 2 ) . '">' . get_cat_name( 2 ) . '</a></h3>';
			echo il10_fp_excerpts( 2,3 );
			echo '<h3 style="clear:both;"><a href="' . get_category_link( 1 ) . '">' . get_cat_name( 1 ) . '</a></h3>';
			echo il10_fp_excerpts( 1,3 );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'il10' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'il10' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>

	</footer>
</article><!-- #post-## -->
