<?php
if( have_rows('modular_content') ):
    while ( have_rows('modular_content') ) : the_row();

        if (get_row_layout() == 'text_block' ){ ?>
            <?php include 'components/_text-block.php'; ?>
        <?php } ?>

        <?php if (get_row_layout() == 'center_block' ){ ?>
            <?php include 'components/_center-block.php'; ?>
        <?php } ?>

        <?php if (get_row_layout() == 'partnership_block' ){ ?>
            <?php include 'components/_partnership-block.php'; ?>
        <?php } ?>
        
        <?php if (get_row_layout() == 'two_column_block' ){ ?>
            <?php include 'components/_two-column-block.php'; ?>
        <?php } ?>

        <?php if (get_row_layout() == 'blue_text_block' ){ ?>
            <?php include 'components/_blue-text-block.php'; ?>
        <?php } ?>

        <?php if (get_row_layout() == 'hero_block' ){ ?>
            <?php include 'components/_hero-block.php'; ?>
        <?php } ?>

        <?php if (get_row_layout() == 'two-column-text-grid' ){ ?>
            <?php include 'components/_two-column-text-grid.php'; ?>
        <?php } ?>



    <?php endwhile; ?>
<?php endif; ?>