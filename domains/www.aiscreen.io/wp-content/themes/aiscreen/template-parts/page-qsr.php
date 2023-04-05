<?php
/**
 * The main template file
 */

get_header(); ?>
<main>

    <?php if( have_rows('block-qsr') ): ?>
       <?php while( have_rows('block-qsr') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/qsr/'.get_row_layout() ); ?>
        <?php endwhile; ?>
    <?php endif; ?>
   
</main>

<?php
get_footer();
