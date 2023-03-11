<div class="guides-menu-mobile">
    <div class="guides-menu-mobile__body">
        <h3 class="guides-menu-mobile__lable">Guides Menu</h3>
        <div class="guides-menu-mobile__items">

           <?php $q = new WP_Query(array('post_type' => 'guides','orderby' => 'none','post_parent' => 0));?>
           <?php if( $q->have_posts() ) : ?>
               <?php while( $q->have_posts() ) : $q->the_post(); ?>
                <?php get_template_part('template-parts/guides/guides-menu-mobile-item'); ?>
            <?php endwhile; ?>
           <?php endif; ?>
          <?php wp_reset_postdata(); ?>   
       </div>
</div>
<div class="guides-menu-mobile__wrap">
    <form action="">
        <input type="text" class="guides-menu-mobile__input" placeholder="Seach" onkeyup="blog_search()" id="keyword">
    </form>
    <i class="guides-menu-mobile__btn" aria-hidden="true">
        <img src="<?php echo get_template_directory_uri()?>/img/icons/seach-white.svg" alt="">
    </i>
    <span class="guides-menu-mobile__arrow"></span>
</div>
</div>