<section class="bl_discount">
    <div class="container">
        <div class="bl_discount__content">
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
                <a class="btn_free_trial" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            <p class="bl_discount__text_mob">
                 <?php the_sub_field('link_caption'); ?>
            </p>
        </div>
    </div>
</section>