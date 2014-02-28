<?php get_header(); ?>

<?php if ( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
	 
	<?php if( have_rows('page_layout') ): ?>
		<?php while ( have_rows('page_layout') ) : the_row(); ?>
	 		
			<?php if ( get_row_layout() == 'block_text'): ?>
				<?php include(locate_template('blocks/block-text.php')); ?>
			<?php elseif( get_row_layout() == 'gallery'): ?>
				<?php include(locate_template('blocks/block-gallery.php')); ?>
			<?php elseif( get_row_layout() == 'block_image_left'): ?>
				<?php include(locate_template('blocks/block-image-left.php')); ?>
			<?php elseif( get_row_layout() == 'block_image_right'): ?>
				<?php include(locate_template('blocks/block-image-right.php')); ?>
			<?php elseif( get_row_layout() == 'block_textCentered'): ?>
				<?php include(locate_template('blocks/block-textCentered.php')); ?>
			<?php elseif( get_row_layout() == 'block_accordion'): ?>
				<?php include(locate_template('blocks/block-accordion.php')); ?>
			<?php elseif( get_row_layout() == 'block_parallax'): ?>
				<?php include(locate_template('blocks/block-parallax.php')); ?>
			<?php elseif( get_row_layout() == 'block_icons'): ?>
				<?php include(locate_template('blocks/block-icons.php')); ?>
			<?php endif; ?>
		
		<?php endwhile; ?>
	<?php endif; ?>

<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>	
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>