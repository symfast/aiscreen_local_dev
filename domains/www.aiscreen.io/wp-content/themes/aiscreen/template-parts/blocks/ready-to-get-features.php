     <section class="bl_ready_to_get bl_ready_to_get_features">
        <div class="container">
            <div class="bl_ready_to_get__content">
                <a href="#" class="btn_up">
                    <img src="<?php echo get_template_directory_uri()?>/img/icons/arrow_top_scroll.svg" class="svg" alt="arrow_top_scroll">
                </a>
                <h2>
                 <?php the_sub_field('title'); ?>
             </h2>
             <div class="bl_ready_to_get__btns">
               <div>
                  <?php 
                  $link = get_sub_field('link');
                  if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn_free_trial" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>  
                <p>
                   <?php the_sub_field('link_caption'); ?>
                </p>
            </div>

            <?php 
            $link = get_sub_field('link_2');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn_underline_black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>  


        </div>
    </div>
</div>
</section>