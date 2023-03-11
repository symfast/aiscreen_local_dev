<?php $q = new WP_Query(array('post_type' => 'guides','orderby' => 'none','post_parent' => $args['id']));?>
<?php if( $q->have_posts() ) : ?>
 <ul class="guides-menu__list guides-menu__sublist ">
  <?php while( $q->have_posts() ) : $q->the_post(); ?>
    <li <?php echo (get_the_ID()== $args['current_id']) ? 'class="_active"' : '' ; ?>><a href="<?php the_permalink();?>"> <?php the_title(); ?></a> </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>     
