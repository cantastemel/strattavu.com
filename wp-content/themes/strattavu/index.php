<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="row">
            	<div class="small-12 medium-12 columns">
					<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				</div>
			</div>
			<?php get_template_part('loop'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
