<?php get_header(); ?>
<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): the_post(); ?>
		
	<?php endwhile; ?>
	
	<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>