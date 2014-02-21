<div class="block block-icons">
	<div class="row">
		<h3 class="medium-9 medium-offset-2 large-2 large-offset-0 columns"><?php the_sub_field('title_reference'); ?></h3>
		<article class="medium-9 medium-offset-2 large-8 large-offset-1 columns">
			<h2><?php the_sub_field('title'); ?></h2>
			<div class="intro">
				<?php the_sub_field('intro'); ?>
			</div>
			<?php the_sub_field('content'); ?>
			
			<?php if( have_rows('icons') ): ?>
			<ul class="icons">
				<?php while( have_rows('icons') ) : the_row(); ?>
					<li class="small-6 columns">
						<img src="<?php the_sub_field('icon_image'); ?>" />
						<h4><?php the_sub_field('icon_title'); ?></h4>
						<p><?php the_sub_field('icon_text')?></p>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</article>
	</div>
</div>