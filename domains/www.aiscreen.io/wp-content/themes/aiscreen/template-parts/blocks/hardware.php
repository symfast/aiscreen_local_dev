   <section class="bl_hardware">
       <div class="container">
           <div class="bl_hardware__content">
               <h2>
                   <?php the_sub_field('title'); ?>
               </h2>
               <div class="bl_hardware__items">
                   <?php if (have_rows('items')) : ?>
                       <?php while (have_rows('items')) : the_row();  ?>
                           <div class="bl_hardware__item">
                               <h3>
                                   <?php the_sub_field('title'); ?>
                               </h3>
                               <div class="item__body">
                                   <div class="item__img">

                                       <?php $image = get_sub_field('image');
                                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                        if ($image) {
                                            echo wp_get_attachment_image($image, $size);
                                        }
                                        ?>

                                   </div>
                                   <div class="item__data">
                                       <h4>
                                           <?php the_sub_field('title2'); ?>
                                       </h4>
                                       <div class="item__data__right">
                                           <div class="price">
                                               <?php the_sub_field('price'); ?>
                                           </div>
                                           <?php
                                            $link = get_sub_field('link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                               <a class="btn_underline_blue" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                           <?php endif; ?>
                                       </div>
                                   </div>
                                   <p>
                                       <?php the_sub_field('text'); ?>
                                   </p>
                                   <div class="item__table table">
                                       <?php if (have_rows('size')) : ?>
                                           <div class="table__th">
                                               <ul>
                                                   <?php while (have_rows('size')) : the_row();  ?>
                                                       <li>
                                                           <?php the_sub_field('item'); ?>
                                                       </li>
                                                   <?php endwhile; ?>
                                               </ul>
                                           </div>
                                       <?php endif; ?>
                                       <?php if (have_rows('parameters')) : ?>
                                           <div class="table__td">
                                               <ul>
                                                   <?php while (have_rows('parameters')) : the_row();  ?>
                                                       <li>
                                                           <?php the_sub_field('item'); ?>
                                                       </li>
                                                   <?php endwhile; ?>
                                               </ul>
                                           </div>
                                       <?php endif; ?>
                                       <?php if (have_rows('links')) : ?>
                                           <?php while (have_rows('links')) : the_row();  ?>
                                               <div class="item__bottom">
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
                                                       <a class="btn_underline_black" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                   <?php endif; ?>
                                               </div>
                                           <?php endwhile; ?>
                                       <?php endif; ?>
                                   </div>
                               </div>
                           </div>
                       <?php endwhile; ?>
                   <?php endif; ?>
               </div>
           </div>
       </div>
   </section>