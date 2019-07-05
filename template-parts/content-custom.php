<?php
/**
 * Template part for displaying page content in custom-page-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HWCOE_UFL
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php if( have_rows('landing_page_modules') ): ?>
			<?php while ( have_rows('landing_page_modules') ) : the_row(); ?>
				<?php
				  /*
				   * Double Content
				   */
				  ?>
				<?php if( get_row_layout() == 'double_content' ): ?>
					<?php include( HWCOE_UFL_CHILD_INC_DIR . '/modules/ufl-double-content.php' ); ?>
				<?php endif // double_content ?>
				<?php
				  /*
				   * Short Timeline Display
				   */
				  ?>
				<?php if( get_row_layout() == 'short_timeline_display' ): ?>
					<?php include( HWCOE_UFL_CHILD_INC_DIR . '/modules/ufl-cf-timeline.php' ); ?>
				<?php endif // short_timeline_display ?>
				
 			<?php endwhile // the_row ?>
		<?php endif // have_rows ?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer container">
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hwcoe-ufl' ),
				'after'  => '</div>',
			) );
			
			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', 'hwcoe-ufl' ),
					the_title( '<span class="sr-only">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-## -->
