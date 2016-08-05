<section class="two-column-text-grid">
    <div class="row">
    	<h2 class="section-title"><?php the_sub_field('section_title'); ?></h2>
        <ul class="small-block-grid-1 medium-block-grid-2">
			<?php  
        	if( have_rows('text_columns') ):
			    while ( have_rows('text_columns') ) : the_row();
			?>
				<li class="text-grid--column">
					<div class="text-grid--content">
						<?php the_sub_field('text_column'); ?>
					</div>
				</li>
			<?php
				endwhile;
			endif;
			?>
        </ul>
    </div>
</section>