
        <?php $q = new WP_Query(array('post_type' => 'guides','orderby' => 'none','post_parent' => $post->ID));?>
          <?php if( $q->have_posts() ) : ?>
           <ul class="guides-menu__list guides-menu__sublist">
            <?php while( $q->have_posts() ) : $q->the_post(); ?>
              <li><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></li>
           <?php endwhile; ?>
           </ul>
        <?php endif; ?>
      <?php wp_reset_postdata(); ?>   


    
</ul>
