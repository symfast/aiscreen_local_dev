
<?php
             if ( has_post_thumbnail() ) {
                 the_post_thumbnail('large', array( 'class' => 'object-cover h-[223px]  md:h-[380px] w-auto md:w-[759px]  rounded-[16px] md:rounded-[20px]' ) );
             } else {
                  $image = get_field('image');
                 $size = 'large'; // (thumbnail, medium, large, full or custom size)
              if ($image) {
                   echo wp_get_attachment_image($image, $size,"",array( "class" => "object-cover h-[223px]  md:h-[380px] w-auto md:w-[759px]  rounded-[16px] md:rounded-[20px]" ) );
             } 
             } 
         ?>
<div class="descriptions pt-[17px]"> <?php the_field('descriptions'); ?></div>