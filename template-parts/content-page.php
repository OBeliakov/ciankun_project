<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cian_cun
 */

?>


<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	

	<?php cian_cun_post_thumbnail(); ?>


		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cian_cun' ),
				'after'  => '</div>',
			) );
		?>
	

	<?php if ( get_edit_post_link() ) : ?>
		
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'cian_cun' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		
	<?php endif; ?>

