  <div class="guides-menu__item">
    <h3 class="guides-menu__title"><?php the_title(); ?></h3>
      <?php $q = new WP_Query(array('post_type' => 'guides','orderby' => 'none','post_parent' => $post->ID));?>
          <?php if( $q->have_posts() ) : ?>
           <ul class="guides-menu__list">
            <?php while( $q->have_posts() ) : $q->the_post(); ?>
              <li><a href="<?php the_permalink();?>"> <?php the_title(); ?></a>
                 <?php get_template_part('template-parts/guides/guides-menu-mobile-subitem'); ?>
              </li>
           <?php endwhile; ?>
           </ul>
        <?php endif; ?>
      <?php wp_reset_postdata(); ?>   
     </ul>
</div>