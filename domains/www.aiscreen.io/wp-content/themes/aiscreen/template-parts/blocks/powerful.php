 <section class="bl_powerful">
     <div class="container">
         <div class="bl_powerful__content">
             <div class="bl_powerful__title">
                 <h2>
                     <?php the_sub_field('title'); ?>
                 </h2>
                 <p>
                     <?php the_sub_field('text'); ?>
                 </p>

                 <?php
                    $link = get_sub_field('link');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                     <a class="btn_free_trial" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                 <?php endif; ?>


             </div>
             <div class="bl_ticker__slides">
                 <div class="swiper bl_ticker__slider">
                     <div class="swiper-wrapper">

                         <?php if (have_rows('items')) : ?>

                             <?php while (have_rows('items')) : the_row(); ?>

                                 <div class=" swiper-slide">
                                     <div class="bl_ticker__title">
                                         <h4>
                                             <?php the_sub_field('title'); ?>
                                         </h4>
                                     </div>
                                     <div class="bl_ticker__img">
                                         <div class="img">



                                             <?php $image = get_sub_field('image');
                                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                                if ($image) {
                                                    echo wp_get_attachment_image($image, $size);
                                                }
                                                ?>

                                         </div>
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