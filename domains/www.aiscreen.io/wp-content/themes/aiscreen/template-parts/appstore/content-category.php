  <div class="main-custom-content__content">
    <h2 class="main-custom-content__title"><?php echo $args ['term']->name ?></h2>
    <div class="main-custom-content__items">
         <?php 
              $args = array(
                'post_type' => 'applications',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'app_category',
                        'field'    => 'slug',
                        'terms'    => $args ['term']->slug ,
                        'lang' => get_locale(),
                    ),
                ),
             );

              $the_query = new WP_Query( $args ); ?>
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
