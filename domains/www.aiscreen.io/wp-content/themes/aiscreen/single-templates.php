
<?php
/**
 * The main template file
 *
 */

get_header(); ?>
<main>
    <section class="app-store">
        <div class="app-store__container">
            <div class="app-store__body">
                <div class="app-store__get get-app-store">
                    <a href="/templates" class="get-app-store__link">Templates</a>
                    <div class="get-app-store__item">
                        <div class="get-app-store__image">
                           <?php if( get_field('image') ): ?>
              

                               
                    <?php
                        $image = get_field('image');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>

                           <?php endif; ?>
                       </div>
                       <h3 class="get-app-store__title"><?php the_title() ?></h3>
                   </div>
                   <?php 
                   $link = get_field('link');
                   if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="get-app-store__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>  
                <?php 
                $link = get_field('link_2');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="get-app-store__link-blue btn_underline_blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>  
            </div>
            <div class="app-store__content content-app-store">
                <div class="content-app-store__main">
                    <div class="content-app-store__slider swiper">
                        <div class="content-app-store__wrapper swiper-wrapper">

                          <?php 
                          $images = get_field('gallery');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $images ): ?>

                                                    <?php foreach( $images as $image_id ): ?>
                                                     <div class="content-app-store__slide swiper-slide">
                                                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                                    </div>
                                                <?php endforeach; ?>

                                            <?php endif; ?>

                                        </div>
                                    <!-- <button type="button" class="content-app-store__button-prev">
                                        <img src="../img/appstoreapp/arrow.svg" alt="">
                                    </button>
                                    <button type="button" class="content-app-store__button-next">
                                        <img src="../img/appstoreapp/arrow.svg" alt="">
                                    </button> -->
                                </div>
                                <button type="button" class="content-app-store__button-prev">
                                    <img src="<?php echo get_template_directory_uri()?>/img/appstoreapp/arrow.svg" alt="">
                                </button>
                                <button type="button" class="content-app-store__button-next">
                                    <img src="<?php echo get_template_directory_uri()?>/img/appstoreapp/arrow.svg" alt="">
                                </button>
                                <div class="content-app-store__control">
                                    <div class="content-app-store__pagination"></div>
                                </div>
                            </div>
                            <div class="content-app-store__block">
                                <h1 class="content-app-store__title"><?php the_title() ?></h1>
                                <p class="content-app-store__text"><?php the_field('text'); ?></p>
                                <?php if( have_rows('items') ): ?>
                                    <ul class="content-app-store__list">
                                        <?php while( have_rows('items') ): the_row(); 
                                            $text = get_sub_field('text');
                                            ?>
                                            <li class="content-app-store__item">
                                             <?php echo $text ?>
                                         </li>
                                     <?php endwhile; ?>
                                 </ul>
                             <?php endif; ?>

                             <div class="content-app-store__mobile">

                                <?php 
                                $link = get_sub_field('link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="get-app-store__btn-m" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>  
                                <?php 
                                $link = get_sub_field('link_2');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="get-app-store__link-blue-m" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>  

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if( have_rows('block') ): ?>
         <?php while( have_rows('block') ): the_row(); ?>
             <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
         <?php endwhile; ?>
     <?php endif; ?>

     <?php  get_template_part( 'template-parts/blocks/static/ready-to-get'); ?>

 </main>


 <?php
 get_footer();
