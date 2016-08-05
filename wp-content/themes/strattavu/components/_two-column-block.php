<section class="two-column-block">
    <div class="row">
        <div class="small-12 medium-10 large-12 medium-centered large-uncentered columns">
        	<div class="section-columns">
			<?php  
        	if( have_rows('grid_items') ):
			    while ( have_rows('grid_items') ) : the_row();
			?>


					<?php if( get_sub_field('content_type') == "text" ): ?>
						<div class="section-columns--column column-text">
							<?php the_sub_field('two_column_text'); ?>
						</div>
					<?php endif; ?>

					<?php if( get_sub_field('content_type') == "img" ): ?>
						<?php $push_image = ''; ?>
						<?php if( get_sub_field('push_image_to_bottom')): ?>
							<?php $push_image = 'push-down' ?>
						<?php endif; ?>
						<div class="section-columns--column column-img">
							<img src="<?php the_sub_field('two_column_image'); ?>" class="<?php echo $push_image; ?>">	
						</div>
					<?php endif; ?>

				
			
			<?php
				endwhile;

			endif;
			?>

			</div>
        </div>
    </div>
</section>
