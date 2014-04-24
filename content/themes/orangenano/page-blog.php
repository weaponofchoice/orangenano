<?php get_header(); ?>

	<?php if( have_posts() ): ?> 
		<?php while( have_posts() ): the_post(); ?>
	
		<div class="post block">
			<p><?php the_date(); ?></p>
			<h2><?php the_title(); ?></h2>
			<div class="image_holder medium-7 columns"><?php the_post_thumbnail(); ?></div>
			<?php the_content(); ?>
		</div>
	
	<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>