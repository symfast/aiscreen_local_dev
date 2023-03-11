<?php  $the_query = new WP_Query( array( 
    'p'   => get_sub_field('block_link'),
    //'numberposts' => 1,
    'post_type'   => 'static_bloks',
) ); 
?>

<?php  if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
    <?php if( have_rows('block') ): ?>
       <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?> 
       <?php endwhile; ?>
    <?php endif; ?>
<?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>      

