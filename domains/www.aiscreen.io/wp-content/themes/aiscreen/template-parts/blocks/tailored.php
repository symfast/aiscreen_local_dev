    <section class="bl_tailored">
        <div class="container">
            <div class="bl_tailored__content">
                <div class="bl_tailored__top">
                    <h2>
                     <?php the_sub_field('title'); ?>
                 </h2>
                 <p>
                     <?php the_sub_field('text'); ?>
                 </p>
             </div>
             <div class="bl_tailored__slides">
                <div class="swiper bl_tailored__slider">
                    <div class="swiper-wrapper">

                      <?php if( have_rows('items') ): ?>
                         <?php while( have_rows('items') ): the_row(); ?>    
                            
                            <?php if (get_sub_field('background_image')): ?> 

                            <div class="swiper-slide" style="background-image: url(<?php the_sub_field('background_image');?>)">
                             <?php else: ?>
                                
                                 <div class="swiper-slide" style="background-image: url(<?php echo get_template_directory_uri()?>/img/bg/<?php the_sub_field('color');?>)">

                              <?php endif;?>

                                <h3>
                                <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="bl_tailored__bottom">
                                    <p>
                                     <?php the_sub_field('text'); ?>
                                 </p>
                                 <?php 
                                 $link = get_sub_field('link');
                                 if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self';
                                  ?>
                                  <a class="btn_underline_black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                              <?php endif; ?> 
                          </div>
                      </div>

                  <?php endwhile; ?>
              <?php endif; ?>


          </div>
      </div>
  </div>
</div>
</div>
</section>