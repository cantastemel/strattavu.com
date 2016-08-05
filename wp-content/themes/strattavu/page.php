<?php get_header(); ?>

<main role="main">

    <section>
        <div class="row">
            <div class="small-12 medium-12 columns">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <?php include 'modular-content.php'; ?>

</main>

<?php get_footer(); ?>
