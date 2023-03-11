 <section class="bl_see_what">
    <div class="container">
        <div class="bl_see_what__content">
            <h2>
              <?php the_sub_field('title'); ?>
          </h2>
          <div class="bl_see_what__items">
            <div class="swiper bl_see_what__slider">
                <div class="swiper-wrapper">
                  <?php if( have_rows('items') ): ?>
                     <?php while( have_rows('items') ): the_row(); ?>
                        <div class="swiper-slide">
                            <h3>
                             <?php the_sub_field('title'); ?>
                         </h3>
                         <p>
                            <?php the_sub_field('text'); ?>
                        </p>
                        <div class="bl_see_what__img">

                          
                          <?php $image = get_sub_field('image');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>                       

                      </div>  

                      <?php 
                      $link = get_sub_field('link');
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="btn_underline_white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?> 
                 </div>
              <?php endwhile; ?>
          <?php endif; ?>
      </div>
      <div class="swiper-button-prev">
        <img src="<?php echo get_template_directory_uri()?>/img/icons/arrow_left_white_reviews.svg" alt="slide_left">
    </div>
    <div class="swiper-button-next">
        <img src="<?php echo get_template_directory_uri()?>/img/icons/arrow_right_white_reviews.svg" alt="slide_right">
    </div>
</div>
</div>
</div>
</div>
</section>
