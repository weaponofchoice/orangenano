<?php get_header(); ?>

	<?php if( have_posts() ): ?> 
		<?php while( have_posts() ): the_post(); ?>
		
		<div id="post_intro">
			<img src="" />
			<h2>Orange Nano blog</h2>
			<p>Ideeën en gedachten uit de krochten van ons gezamenlijke orange nano brein</p>
		</div>
		
		<a href="<?php echo home_url(); ?>/blog">< terug naar overzicht</a>
		
		<div class="post">
			<p class="columns"><?php the_date(); ?></p>
			<!-- post title -->
			<h2 class="medium-7 columns"><?php the_title(); ?></h2>
			
			<!-- post image -->
			<div class="image_holder medium-7 columns"><?php the_post_thumbnail(); ?></div>
			
			<!-- author profile picture -->
			<div class="medium-2 medium-offset-1 columns"><?php the_author_image(); ?></div>
			
			<!-- author name -->
			<div class="author medium-4 medium-offset-1 columns">
				<p>author:</p>
				<p class="bold"><?php the_author(); ?></p>
			</div>
			
			<div class="medium-12 columns"><?php the_content(); ?></div>
		</div>
		
		<a href="<?php echo home_url(); ?>/blog">< terug naar overzicht</a>
		
	<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>