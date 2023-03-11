     <section class="bl_ready_to_get bl_ready_to_get_features bl_ready_to_qsr">
         <div class="container">
             <div class=" bl_ready_to_get__content">
                 <div class="col-left">
                     <p class="sub_title"><?php the_sub_field('sub_title'); ?></p>
                     <h2 class="title">
                         <?php the_sub_field('title'); ?>
                     </h2>

                     <div class="text">
                         <?php the_sub_field('text'); ?>
                     </div>

                 </div>

                 <div class="col-center">

                     <p class="price_title"> <?php the_sub_field('price_title'); ?> </p>
                     <p class="price"> <?php the_sub_field('price'); ?> </p>


                     <div class="bl_ready_to_get__btns">
                         <p class="subtitle">
                             <?php the_sub_field('link_caption'); ?>
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
                 </div>

                 <div class="col-right">
                       
                     <p class="includes_title">Includes </p>
                       
                     <div class="includes_text">
                     <?php the_sub_field('includes'); ?>
                     </div>
                 </div>

             </div>
         </div>
     </section>