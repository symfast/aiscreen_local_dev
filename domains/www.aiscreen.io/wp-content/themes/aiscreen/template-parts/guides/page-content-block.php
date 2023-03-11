 <div id="tb_<?php echo get_row_index(); ?>" class="guides-content__block">
    <h3 class="guides-content__title"><?php echo get_row_index(); ?>. <?php echo get_sub_field('title'); ?></h3>
    <?php $row_index = get_row_index() ?> 
    <?php if( have_rows('content') ): ?>
        <div class="guides-block-content">
            <?php $sub_row_index = 1;?>
            <?php while( have_rows('content') ): the_row(); ?>
                <?php if( get_row_layout() == 'text' ): ?>
                   <?php if (get_sub_field('numeric')): ?>
                       <p class="guides-content__text"><?php echo $row_index ?>.<?php echo $sub_row_index++ ?>.  
                       <?php echo strip_tags(get_sub_field('text'), '<a>');?></p>
                    <?php  else:  ?>
                        <p class="guides-content__text"><?php echo  strip_tags(get_sub_field('text'), '<a>');?></p>
                    <?php endif; ?>
                <?php elseif( get_row_layout() == 'image' ):?>
                 <div class="guides-content__image">
                

                   <?php
                        $image = get_sub_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>
    

                 </div>
          <?php endif; ?>
      <?php endwhile; ?>
  </div>
<?php endif; ?>
</div>
