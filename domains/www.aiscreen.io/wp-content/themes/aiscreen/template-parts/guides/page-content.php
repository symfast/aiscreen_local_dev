<div class="guides-content">
  <div class="guides-content__body">
    <?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
      <h1 class="guides-content__lable"><?php the_title(); ?></h1>
      <span class="guides-content__subtitle"><?php the_field('description'); ?></span>  
      <?php 
          if( have_rows('blocks') ) {
            while( have_rows('blocks') ) {
                the_row();
                get_template_part( 'template-parts/guides/page-content-block'); 
            
           } } ?>
    <?php }} ?>
  </div>
</div>