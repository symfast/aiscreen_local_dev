
<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="tw-blog"> 
    <?php   get_template_part( 'template-parts/blog2/blog-main' ); ?>
    <?php  get_template_part( 'template-parts/blog2/blog-menu' ); ?>
    <?php /* get_template_part( 'template-parts/blog/blog-carts' ); */ ?>

    <?php if( have_rows('block') ): ?>
      <?php while( have_rows('block') ): the_row(); ?>
         <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
     <?php endwhile; ?>
   <?php endif; ?> 
</main>

<?php get_footer();
