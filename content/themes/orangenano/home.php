<?php get_header(); ?>
	
	<div id="post_intro" style="background:url('<?php echo home_url(); ?>/wordpress//media/uploads/2014/04/Orange-Nano-Pattern.jpg');">
		<div id="intro_text" class="medium-4 columns">
			<h2>Orange Nano blog</h2>
			<p>Ideeën en gedachten uit de krochten van ons gezamenlijke orange nano brein</p>
		</div>
	</div>
	
	<?php if ( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>
			
			<?php if( has_post_video() ): ?>
				
				<div class="post post_video block">
					<p class="medium-12 columns italic"><?php the_time('F j, Y'); ?></p>
					<div class="post_content medium-4 columns">
						<!-- post title -->
						<h2 class="medium-12 columns"><?php the_title(); ?></h2>
				
						<!-- summary of text -->
						<?php the_content(); ?><!-- define classes in functions.php -->
					</div>
					<div class="image_holder medium-8 columns"><?php the_post_thumbnail(); ?></div>
				</div>
				
			<?php else : ?>
				
				<div class="post block">
					<p class="medium-12 columns italic"><?php the_time('F j, Y'); ?></p>
					<div class="image_holder medium-3 columns"><?php the_post_thumbnail(); ?></div>
					<div class="post_content medium-9 columns">
						<!-- post title -->
						<h2 class="medium-8 columns"><?php the_title(); ?></h2>
				
						<!-- author profile picture -->
						<div class="medium-1 medium-offset-1 columns"><?php the_author_image(); ?></div>
				
						<!-- author name -->
						<div class="author medium-2 columns">
							<p>author:</p>
							<p class="bold"><?php the_author(); ?></p>
						</div>
				
						<!-- summary of text -->
						<?php the_excerpt(); ?><!-- define classes in functions.php -->

						<!-- 'read more' link -->
						<a class="columns readmore bold italic" href="<?php the_permalink(); ?>">read more</a>						
					</div>
				</div>
				
			<?php endif; ?>
		
		<?php endwhile; ?>
		
		<div class="pagination">
			<?php
				global $wp_query;

				echo paginate_links( array(
					'format' => '/orangenano/blog/page/%#%',
					'end_size' => 10,
					'current' => 0,		
					'total' => $wp_query->max_num_pages
				) );
			?>
		</div>
		
<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>