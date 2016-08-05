
<?php 
	$bgPos = get_sub_field('background_position');
	$bgImage = get_sub_field('background_image');
	$contentPos = get_sub_field('content_position');
	$icon = get_sub_field('section_icon');
	$center_block_title = get_sub_field('center_block_title');
	$center_block_text = get_sub_field('center_block_text');
	if (get_sub_field('tall_section')) {
		$tallSection = 'center-column--tall';
	}else{
		$tallSection = '';
	}
?>

<section class="center-column <?php echo $tallSection; ?> section-bg section-bg--<?php echo $bgPos; ?>" style="background-image: url('<?php echo $bgImage; ?>');">
    <div class="row">
        <div class="small-12 medium-10 large-12 medium-centered large-uncentered columns">
        	<div class="section-content align-<?php echo $contentPos; ?>">
        	
        	<?php if ($icon != "") { ?>
            	<div class="section-icon">
            		<img src="<?php echo $icon; ?>">
            	</div>
            <?php } ?>
				
				<h2><?php echo $center_block_title; ?></h2>
				<div class="section-body">
					<?php echo $center_block_text; ?>
				</div>
        	</div>
        </div>
    </div>
</section>