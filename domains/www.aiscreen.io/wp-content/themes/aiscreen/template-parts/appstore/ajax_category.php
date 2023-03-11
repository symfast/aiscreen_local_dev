     <?php 
     $term_id = $_POST['term_id']; 
     //$terms_array = explode(",", $term_id);
     $args=array( 
       'posts_per_page' => -1,  
       'post_type' => 'applications'
     );
     if (!empty($term_id )) { 
      $args["tax_query"] = array(
       array(
         'taxonomy' => 'app_category',
         'field'    => 'term_id',
         'terms'    =>  $term_id, 
         'operator' => 'IN'
       )  
     ); 
    }
    $the_query  = new WP_Query($args);  
    $term = get_term_by(  'id', $term_id, 'app_category' ); 
    ?>
    <div class="main-custom-content__content">
      <h2 class="main-custom-content__title"><?php echo $term->name ? $term->name : 'All Apps' ?></h2>
      <div class="main-custom-content__items">
        <?php  if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php  get_template_part( 'template-parts/appstore/content-item'); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif;  ?>
      </div>
    </div>
