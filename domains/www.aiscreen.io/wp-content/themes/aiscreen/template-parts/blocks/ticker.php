 <section class="bl_ticker">
                <div class="container">
                    <div class="bl_ticker__content">
                        <div class="bl_ticker__slides">
                            <div class="swiper bl_ticker__slider">
                                <div class="swiper-wrapper">
                                   
                                     

                              <?php if( have_rows('items') ): ?>
							   
							    <?php while( have_rows('items') ): the_row(); ?>
						
							           
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
            </section>				