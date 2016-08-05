<?php 
if (get_sub_field('wide_section')) {
    $columnWidth = 'large-12';
}else{
    $columnWidth = 'large-10';
}
?>

<section class="text-block">
    <div class="row">
        <div class="small-12 medium-10 medium-centered <?php echo $columnWidth; ?> columns">
			<div class="section-body">
				<?php the_sub_field('text_area'); ?>
			</div>
			
        </div>
    </div>
</section>