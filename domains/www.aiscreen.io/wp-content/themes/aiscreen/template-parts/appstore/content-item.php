<div class="main-custom-content__item"> 
<?php  if( get_field('coming_soon') ): ?>
 <div class="coming_soon">Coming soon</div>
<?php endif;?>

   <a href="<?php the_permalink() ?>" class="main-custom-content__image">
      <?php if( get_field('image') ): ?>
     
         <?php
                        $image = get_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>



        <?php endif; ?>
   </a>
   <div class="main-custom-content__block">
        <a href="<?php the_permalink() ?>">
           <h4 class="main-custom-content__subtitle"><?php the_title() ?></h4>
        </a>
         <?php $text = get_field('text'); ?> 
       <p class="main-custom-content__text"> <?php echo wp_trim_words( $text, 20, ' ...' ); ?></p>
   </div>
</div>