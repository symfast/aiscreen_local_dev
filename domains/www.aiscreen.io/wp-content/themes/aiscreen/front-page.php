<?php
/**
 * The main template file
 */

get_header(); ?>

<main>
    <?php if( have_rows('block') ): ?>
       <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
        <?php endwhile; ?>
    <?php endif; ?>

     <?php  get_template_part( 'template-parts/blocks/static/ready-to-get'); ?>
</main>


<?php
get_footer();
