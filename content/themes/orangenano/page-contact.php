<?php get_header(); ?>

<?php if ( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
	
	<?php if( have_rows('page_layout') ): ?>
		<?php while ( have_rows('page_layout') ) : the_row(); ?>
	 		
			<?php if ( get_row_layout() == 'block_text'): ?>
				<?php include(locate_template('blocks/block-text.php')); ?>
			<?php endif; ?>
			
		<?php endwhile; ?>
	<?php endif; ?>
	
	<div id="map"></div>

<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>