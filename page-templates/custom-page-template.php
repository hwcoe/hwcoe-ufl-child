<?php
/**
 * Template Name: Custom Page Template
 * 
 * @package HWCOE_UFL
 *
 */
get_header(); ?>

<div id="main" class="full-width-content">
	<?php 
		echo "<div class=\"container\">";
			hwcoe_ufl_entry_title();
			echo "</div>";
	?>
    
     <?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'custom' ); ?>
    
    <?php endwhile; // End of the loop. ?>
    
	
    
</div>

<?php get_footer(); ?>