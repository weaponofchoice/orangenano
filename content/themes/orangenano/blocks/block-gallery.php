<?php if( have_rows('gallery') ): ?>
<div id="gallery" xml:id="<?php echo 'block-'; echo $i; ?>" class="block" style="background-color:<?php the_sub_field('background_color'); ?>">
	<div class="royalSlider rsDefault">
			<?php while( have_rows('gallery') ) : the_row(); ?>
				<li>
					<div>
						<img class="rsImg" src="<?php the_sub_field('gallery_image'); ?>">
						<h1><?php the_sub_field('gallery_image_caption'); ?></h1>
					</div>
				</li>
			<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>