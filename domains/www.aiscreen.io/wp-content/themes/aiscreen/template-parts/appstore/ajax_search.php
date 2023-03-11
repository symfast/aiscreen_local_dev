  <div class="main-custom-content__content">
    <h2 class="main-custom-content__title"></h2>
    <div class="main-custom-content__items">
        <?php  
        add_filter( 'posts_where', 'title_filter', 10, 2 );
         $the_query = new WP_Query( array( 
         'search_prod_title' => $_POST['keyword'],
         'post_type' => 'applications', 
         ) ); 
        remove_filter( 'posts_where', 'title_filter', 10, 2 );
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
          
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <?php  get_template_part( 'template-parts/appstore/content-item'); ?>
          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>
      <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

  </div>
</div>
