<div class="block" id="<?php echo 'block-'; echo $i; ?>" style="background-color:<?php the_sub_field('background_color'); ?>">
	<div class="row">
		<h3 class="medium-9 medium-offset-2 large-2 large-offset-0 columns"><?php the_sub_field('title_reference'); ?></h3>
		<article class="medium-9 medium-offset-2 large-8 large-offset-1 columns">
			<h2><?php the_sub_field('title'); ?></h2>
			<div class="intro">
				<?php the_sub_field('intro'); ?>
			</div>
			<?php the_sub_field('content'); ?>
			
			<?php if( have_rows('link_to_ON') ): ?>
				<?php while( have_rows('link_to_ON') ): the_row(); ?>
					<a href="<?php the_sub_field('link'); ?>">
						<div class="link_on small-10">
							<h2><?php the_sub_field('title')?></h2>
							<div class="arrow right"><span></span></div>
							<p><?php the_sub_field('subtitle'); ?></p>
						</div>
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
		</article>
	</div>
</div>