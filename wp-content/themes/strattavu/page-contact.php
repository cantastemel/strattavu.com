<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<main role="main">
	<div id="map"></div>
    <section class="">
        <div class="row">
            <div class="small-12 medium-10 large-12 large-uncentered medium-centered columns">
                <h2><?php the_field('contact_masthead_title'); ?></h2>
                <?php the_field('contact_masthead_body'); ?>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-10 large-12 large-uncentered medium-centered columns">
                <div class="contact-column form-container text-left">
                    <?php the_field('contact_form'); ?>
                </div>
                <div class="contact-column divider">
                    
                </div>
                <div class="contact-column address-container text-left">
                    <div>
                        <?php the_field('address_info'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <?php include 'modular-content.php'; ?>

</main>

<?php get_footer(); ?>