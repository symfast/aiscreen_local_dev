  <section class="bl_video">
                <div class="container">
                    <div class="bl_video__content">
                        <div class="bl_video__video">
                            <div class="video">
								<!-- <video src="./resourse/video/tobu.mp4" controls="controls"></video> -->
								<!--<video id="player" poster="<?php /*echo get_template_directory_uri()*/?>/img/home/video_bg.png">
                                    <source src="<?php /*the_sub_field('file'); */?>" type="video/mp4" />
                                  <source src="<?php /*echo get_template_directory_uri()*/?>/resourse/video/7_Aiscreen_11.mp4" type="video/webm" /> 
								</video>-->
								<div class="video-holder"  style="display: none;">
									<!--<script src="https://fast.wistia.com/embed/medias/tvik13ecf6.jsonp" defer></script>
									<script src="https://fast.wistia.com/assets/external/E-v1.js" defer></script>-->
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
                            <button class="btn_play_video">
                                <img src="<?php echo get_template_directory_uri()?>/img/icons/play_white.svg" alt="btn_play_video">
                            </button>
                            <div class="video_img">
                            </div>
                        </div>
                        <div class="bl_video__text">
                            <h2>
                                <?php the_sub_field('title'); ?>
                            </h2>
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
                                <a class="btn_underline_blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>   

                        </div>
                    </div>
                </div>
            </section>