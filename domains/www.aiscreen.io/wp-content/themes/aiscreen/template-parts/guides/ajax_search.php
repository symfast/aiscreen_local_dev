<?php  

add_filter( 'posts_where', 'title_filter', 10, 2 );

$query = new WP_Query( array( 
 'search_prod_title' => $_POST['keyword'], 
 'post_type'     => 'guides',
) ); 
remove_filter( 'posts_where', 'title_filter', 10, 2 );
?>

<?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>  
      <h2 class="guides-content__lable"><?php the_title(); ?></h2>
      <span class="guides-content__subtitle"><?php the_field('description'); ?></span>  
      <?php  if( have_rows('blocks') ) : ?>
         <?php while( have_rows('blocks') ):   the_row(); ?>
            <?php get_template_part( 'template-parts/guides/page-content-block'); ?> 

        <?php endwhile; ?>
    <?php endif; ?> 

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



