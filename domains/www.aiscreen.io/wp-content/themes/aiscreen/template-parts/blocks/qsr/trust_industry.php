               <section class="bl_trust bl_trust__schedule bl_trust__restaurants">
                <div class="container">
                    <div class="bl_trust__content">
                        <h2>
                         <?php the_sub_field('title'); ?>
                     </h2>
                     <div class="bl_trust__items">
                        <div class="trust_ul">
                            <?php if( have_rows('images') ): ?>
                             
                                <?php while( have_rows('images') ): the_row(); ?>

                                    <div class="trust_li logo1">
                                        
                                       

                                        <?php $image = get_sub_field('image');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                                        
                                    </div>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
