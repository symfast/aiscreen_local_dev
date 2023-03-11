<div class="guides-menu__item">
  <h3 class="guides-menu__title <?php echo (get_the_ID()== $args['current_id']) ? ' active' : '' ; ?>" id="menu_<?php echo $args['id']; ?>"><?php the_title(); ?></h3>
       <?php $q = new WP_Query(array('post_type' => 'guides','orderby' => 'none','post_parent' => $args['id'] ));?>
          <?php if( $q->have_posts() ) : ?>
           <ul class="guides-menu__list">
            <?php while( $q->have_posts() ) : $q->the_post(); ?>
              <li <?php echo (get_the_ID()== $args['current_id']) ? 'class="_active"' : '' ; ?>><a href="<?php the_permalink();?>"> <?php the_title(); ?></a>
                <?php  get_template_part('template-parts/guides/guides-menu-subitem',null,array('id'=>$post->ID,'current_id'=>$args['current_id'] ) ); ?>
              </li>
           <?php endwhile; ?>
           </ul>
        <?php endif; ?>
      <?php wp_reset_postdata(); ?>     
</div>
