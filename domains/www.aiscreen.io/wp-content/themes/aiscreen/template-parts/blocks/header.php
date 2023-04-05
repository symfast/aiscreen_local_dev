  <section class="bl_header">
      <div class="container">
          <div class="bl_header__content">
              <div class="bl_header__top">
                  <h1>
                      <?php the_sub_field('title'); ?>

                  </h1>
                  <div class="top__right">
                      <p><?php the_sub_field('text'); ?>
                      </p>
                      <div class="top__right__btns">

                          <?php
                            $link = get_sub_field('link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                              <a class="btn_free_trial" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                          <?php endif; ?>



                          <a data-fancybox href="#hidden" class="btn_watch_video">
                              Watch Video
                          </a>
                      </div>
                      <p class="trial_p">
                          <?php the_sub_field('link_caption'); ?>
                      </p>
                  </div>
              </div>
              <div class="bl_header__center">
                  <div class="safari_img safari_left">
                      <div class="img_block">
                          <?php $image = get_sub_field('image1');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                      </div>
                  </div>
                  <div class="notebook">
                      <div class="notebook__antenna antenna__left">
                          <ul>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi1.svg" class="svg" alt="notebook__antenna">
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi2.svg" class="svg" alt="notebook__antenna">
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi3.svg" class="svg" alt="notebook__antenna">
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi4.svg" class="svg" alt="notebook__antenna">
                              </li>
                          </ul>
                      </div>
                      <?php $image = get_sub_field('image2');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                        
      


                      <div class="notebook__antenna antenna__right">
                          <ul>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi1.svg" class="svg" alt="notebook__antenna">
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi2.svg" class="svg" alt="notebook__antenna">
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi3.svg" class="svg" alt="notebook__antenna">
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() ?>/img/home/wifi4.svg" class="svg" alt="notebook__antenna">
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="safari_img safari_right">
                      <div class="img_block">


                          <?php $image = get_sub_field('image3');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>


                      </div>
                  </div>
              </div>
              <div class="bl_header__bottom">
                  <div class="bottom__text">
                      <h3>
                          <?php the_sub_field('title2'); ?>
                      </h3>
                      <p><?php the_sub_field('text2'); ?>

                      </p>
                  </div>
                  <div class="bottom__sliders">
                      <div class="bottom__slides ">
                          <div class="swiper bottom__slide_left">
                              <div class="swiper-wrapper">
                                  <?php
                                    $images = get_sub_field('gallery1');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if ($images) : ?>

                                      <?php foreach ($images as $image_id) : ?>
                                          <div class=" swiper-slide">
                                              <?php echo wp_get_attachment_image($image_id, $size); ?>
                                          </div>
                                      <?php endforeach; ?>
                                  <?php endif; ?>
                              </div>
                          </div>
                      </div>
                      <div class="bottom__slides ">
                          <div class="swiper bottom__slide_right">
                              <div class="swiper-wrapper">
                                  <?php
                                    $images = get_sub_field('gallery2');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if ($images) : ?>
                                      <?php foreach ($images as $image_id) : ?>
                                          <div class=" swiper-slide">
                                              <?php echo wp_get_attachment_image($image_id, $size); ?>
                                          </div>
                                      <?php endforeach; ?>
                                  <?php endif; ?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="bottom__text">
                      <h3>
                          <?php the_sub_field('title3'); ?>
                      </h3>
                      <p>
                          <?php the_sub_field('text3'); ?>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div style="display: none;" id="hidden">
      <div class="video">
          <!-- <video src="./resourse/video/tobu.mp4" controls="controls"></video> 
		  <video id="player2" playsinline controls>
			  <source src="<?php the_sub_field('video'); ?>" type="video/mp4" />
			  <source src="<?php echo get_template_directory_uri() ?>/resourse/video/7_Aiscreen_11.mp4" type="video/webm" />
		  </video> -->
		  <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
			  <div class="wistia_responsive_wrapper"
				   style="height:100%;left:0;position:absolute;top:0;width:100%;">
				  <div class="wistia_embed wistia_async_tvik13ecf6 videoFoam=true autoPlay=true"
					   style="height:100%;position:relative;width:100%">
					  <div class="wistia_swatch"
						   style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
						  <img src="https://fast.wistia.com/embed/medias/tvik13ecf6/swatch"
							   style="filter:blur(5px);height:100%;object-fit:contain;width:100%;"
							   alt="" aria-hidden="true"
							   onload="this.parentNode.style.opacity=1;"/></div>
				  </div>
			  </div>
		  </div>
      </div>
  </div>
  <script>
      jQuery(document).ready(function($) {

          const player = new Plyr('#player', {
              clickToPlay: false,
              autopause: true,
              hideControls: true,
          });

          $('.plyr__poster').click(function() {
              $('.plyr__controls button:first').click();
          });

          player.on('pause', event => {
              $('.plyr').addClass('plyr--hide-controls');
          });
          const player_popup = new Plyr('#player2');
          // --------------------
          // --------------------
          // VIDEO
          $(document).on("click", '.bl_video .btn_play_video', function() {
              $('.bl_video .video_img').hide();
              $(this).hide();
			  $('.bl_video .video .video-holder').show();
              // player.play();

          });
          // $(document).on("click", '.plyr__video-wrapper', function () {
          //     $('.bl_video .video_img').slideToggle(0);
          //     $('.bl_video .btn_play_video').slideToggle(0);
          //     player.pause();
          // });

          // $(document).mouseup(function (e) {
          //     var video = $("video");
          //     if (!video.is(e.target) // если клик был не по нашему блоку
          //         &&
          //         video.has(e.target).length === 0) { // и не по его дочерним элементам
          //         $('video').get(0).pause(); // скрываем его
          //         $('.bl_video .btn_play_video').show();
          //     }
          // });
          // END VIDEO
          // --------------------
          // --------------------
      });
  </script>