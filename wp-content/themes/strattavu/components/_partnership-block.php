<section class="partnership-block" style="background-image: url('<?php the_sub_field('partnership_bg'); ?>');" >
    <div class="row">
        <div class="small-12 medium-10 large-12 medium-centered large-uncentered columns">
        <?php if (get_sub_field('partnership_logo')) : ?>
            <div class="section-icon">
                <img src="<?php the_sub_field('partnership_logo'); ?>">
            </div>
        <?php endif; ?>
			<h2><?php the_sub_field('partnership_title'); ?></h2>
			<div class="section-body">
				<?php the_sub_field('partnership_text'); ?>
			</div>
        </div>
    </div>
</section>