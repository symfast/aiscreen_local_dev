  <section class="bl_templates">
      <div class="bl_templates__text">
          <div class="container">
              <div class="text__content">
                  <h2>
                      <?php the_sub_field('title'); ?>
                  </h2>
                  <div class="bl_templates__btns">
                      <?php
                        $link = get_sub_field('link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                          <a class="btn_free_trial" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                      <?php endif; ?>

                      <?php
                        $link = get_sub_field('link_2');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                          <a class="btn_underline_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="bl_templates__ul">
          <ul>

              <?php if (have_rows('items')) : ?>

                  <?php while (have_rows('items')) : the_row(); ?>
                      <li>
                          <div class="bl_templates__img">


                              <?php $image = get_sub_field('image');
                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }
                                ?>

                          </div>
                      </li>
                  <?php endwhile; ?>

              <?php endif; ?>



          </ul>
      </div>
  </section>

  <script type="text/javascript">
      var $ = jQuery.noConflict();
      $(document).ready(function() {

          if ($(window).width() > 1024) {
              $('.bl_templates__ul ul').masonry({
                  // options...
                  itemSelector: '.bl_templates__ul ul li',
                  // columnWidth: 50,
              });
          }

      });
  </script>