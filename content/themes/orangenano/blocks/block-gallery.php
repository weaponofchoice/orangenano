<?php if( have_rows('gallery') ): ?>
<div id="gallery" class="block">
	<div class="royalSlider rsDefault">
			<?php while( have_rows('gallery') ) : the_row(); ?>
				<li>
					<div>
						<img src="<?php the_sub_field('gallery_image'); ?>">
						<h1><?php get_sub_field('gallery_image_caption'); ?></h1>
					</div>
				</li>
			<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>