<?php get_header(); ?>

	<?php if( have_posts() ): ?> 
		<?php while( have_posts() ): the_post(); ?>
		
		<div id="post_intro">
			<div id="intro_text" class="medium-5 columns">
				<h2>Orange Nano blog</h2>
				<p>Ideeën en gedachten uit de krochten van ons gezamenlijke orange nano brein</p>
			</div>
		</div>
		
		<div class="post">
			<a href="<?php echo home_url(); ?>/blog" class="columns link_back">< terug naar overzicht</a>
			
			<!-- the date of posting -->
			<p class="columns italic"><?php the_time('F j, Y'); ?></p>
			
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
			
			<!-- text/content -->
			<div class="medium-12 columns"><?php the_content(); ?></div>
			
			<a href="<?php echo home_url(); ?>/blog" class="columns link_back">< terug naar overzicht</a>
		</div>
		
	<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>