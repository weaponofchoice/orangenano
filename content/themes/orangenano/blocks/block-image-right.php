<div class="block block-image-right" id="<?php echo 'block-'; echo $i; ?>" style="background-color:<?php the_sub_field('background_color'); ?>">
	<div class="row">
		<article class="medium-9 medium-offset-2 large-7 large-offset-0 columns">
			<h3><?php the_sub_field('title_reference'); ?></h3>
			<h2><?php the_sub_field('title'); ?></h2>
			<div class="intro">
				<?php the_sub_field('intro'); ?>
			</div>
			<?php the_sub_field('content'); ?>
		</article>
		<div class="image medium-6 medium-offset-3 large-4 large-uncentered columns">
			<img src="<?php the_sub_field('image_right'); ?>" />
		</div>
	</div>
</div>
