<section class="bl_want_to">
    <div class="container">
        <div class="bl_want_to__content">
            <h2>
                   <?php the_sub_field('title'); ?>
            </h2>
           
              <?php 
             $link = get_sub_field('link');
             if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn_underline_black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>  


        </div>
    </div>
</section>

