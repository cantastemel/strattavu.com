<?php 
if (get_sub_field('tall_hero')) {
	$tallHero = 'hero--tall';
}else{
	$tallHero = '';
} 

if (get_sub_field('has_video_background')) {
	$poster = get_sub_field('video_poster_image_url');
	$webmURL = get_sub_field('webm_video_url');
	$mp4URL = get_sub_field('mp4_video_url');
}
if (get_sub_field('hero_background_image')) {
    $heroBG = get_sub_field('hero_background_image');
}else{
    $heroBG = '';
}

if (get_sub_field('wide_hero')) {
    $heroWidth = 'large-12';
}else{
    $heroWidth = 'large-8';
}

?>

<section class="hero <?php echo $tallHero; ?>" style="background-image: url('<?php echo $heroBG; ?>')">
    <div class="row">
        <div class="small-12 medium-10 <?php echo $heroWidth; ?> medium-centered columns">
            <?php the_sub_field('hero_text'); ?>
        </div>
    </div>

<?php if (get_sub_field('has_video_background')) { ?>
    <div class="filter"></div>
	<video autoplay="" loop="" poster="<?php echo $poster; ?>" id="bgvid">
        <source src="<?php echo $mp4URL; ?>" type="video/mp4">
        <source src="<?php echo $webmURL; ?>" type="video/webm">
     </video>
<?php } ?>

</section>