<?php
/**
 * The main template file
 */
get_header(); ?>

 <main>
    <section class="block-header">
        <div class="container">
           <h1 class="block-header__title"><?php the_field('title'); ?></h1>
       </div>
    </section>
    <section class="custom-content">
         <?php  get_template_part( 'template-parts/appstore/filter' ); ?>
        <div class="custom-content__main main-custom-content">
            <div class="container">
                <div class="main-custom-content__body app-content">
              
                    <?php   
                      $taxonomy = 'app_category';
                      $terms = get_terms([
                       'taxonomy' => $taxonomy,
                       'hide_empty' => true,
                       
                      ]); ?>
                                  
                      <?php foreach ($terms as $term):  ?>
                                   
                        <?php  get_template_part( 'template-parts/appstore/content-category',null,array('term' => $term ) ); ?>
                      <?php endforeach; ?>     
               </div>
            </div>
        </div>
    </section>
   
      <?php if( have_rows('block') ): ?>
      <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
        <?php endwhile; ?>
      <?php endif; ?> 
     
     <?php  get_template_part( 'template-parts/blocks/static/ready-to-get'); ?>
</main>

<?php
get_footer();
