   <?php if( have_rows('header') ): ?>
    <?php while( have_rows('header') ): the_row(); ?> 
        <section class="bl_header_p">
            <div class="container">
                <div class="bl_header_p__content">
                    <h1>
                       <?php the_sub_field('title'); ?>
                   </h1>
                   <p>
                      <?php the_sub_field('text'); ?>
                  </p>
                  <div class="bl_header_p__btn">
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
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>