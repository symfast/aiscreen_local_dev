 <section class="bl_trust">
              <div class="container">
                <div class="bl_trust__content">
                  <h2>
                     <?php the_sub_field('title'); ?>
                  </h2>
                  <div class="bl_trust__items">
                    <div class="trust_ul">
                  <?php 
				     		   $images = get_sub_field('gallery');
		         			 $size = 'large'; // (thumbnail, medium, large, full or custom size)
								  if( $images ): ?>
								    <?php foreach( $images as $key => $image_id ): ?>
					             <div class="trust_li logo<?php echo $key; ?>">
					               <?php echo wp_get_attachment_image( $image_id, $size ); ?>
					             </div>
					          <?php endforeach; ?>
								 	<?php endif; ?>
                   
                      </div>
                    </div>
                  
                  </div>
                </div>
           
            </section>