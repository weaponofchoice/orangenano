<div class="block block-accordion">
	<div class="row">
		<h3 class="medium-9 medium-offset-2 large-2 large-offset-0 columns"><?php the_sub_field('title_reference'); ?></h3>
		<article class="medium-9 medium-offset-2 large-8 large-offset-1 columns">
			<h2><?php the_sub_field('title'); ?></h2>
			<p><?php the_sub_field('content')?></p>				
		
		<?php if( have_rows('accordion') ): ?>
		<div class="accordion">
			<?php while( have_rows('accordion') ) : the_row(); ?>
				<h4><?php the_sub_field('accordion_title'); ?></h4>
				<div>
					<p><?php the_sub_field('accordion_content'); ?></p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		</article>
	</div>
</div>