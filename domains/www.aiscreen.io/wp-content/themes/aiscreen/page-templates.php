
<?php
/**
* The main template file
*
*/
get_header(); ?>
<main>
    <!-- ======================================== -->
    <!-- HEADER TEMPLATES -->
    <section class="bl_header_temp">
        <div class="container">
            <div class="bl_header_temp__content">
                <h1>
                     <?php the_field('title'); ?>
                </h1>
                <p>
                    <?php the_field('text'); ?>
                </p>
            </div>
        </div>
    </section>
    <!-- END HEADER TEMPLATES -->
    <!-- ======================================== -->
    <!-- FILTER -->
    <section class="bl_filter">
        <div class="container">
            <div class="bl_filter__content">
             <?php  get_template_part( 'template-parts/template/filter' ); ?>      

    <div class="bl_filter__items">
        <ul>
            <?php  $query = new WP_Query( array( 'post_type'=>'templates', 'posts_per_page' => -1, 'offset' =>0 ) ); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>   
                    <li>
                        <div class="bl_filter__item">
                            <div class="filter__item__img">
                              
                                  
                    <?php
                        $image = get_field('image');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>


                            </div>
                            <div class="filter__item__title">
                                <div class="title__left">
                                    <span>
                                        <?php the_field('description'); ?>
                                    </span>
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <a href="<?php the_permalink() ?>" class="btn_underline_blue">
                                    View Template
                                </a>
                            </div>
                            <div class="filter__category">
                                <ul>   
                                  <?php $term_list = wp_get_post_terms( get_the_ID(), 'tmp_category' ) ?>
                                    <?php if( $term_list ) :?>
                                        <?php $colors =array ('blue','yellow','pink','blue','yellow','pink','blue','yellow','pink') ; ?>
                                        <?php  foreach( $term_list as $key => $term ): ?>
                                            <li>
                                                <div class="category__item category__<?php echo $colors[$key] ?>">
                                                    <?php echo $term->name; ?> 
                                                </div>
                                            </li>

                                        <?php endforeach ; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>    
        </ul>
    </div>
</div>
</div>
</section>
  <?php if( have_rows('block') ): ?>
       <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>


<script>
   

   /* jQuery(document).ready(function ($) {

        let windowWidth_temp = $(window).width();
                // --------------------
                // Закрепление блока
                let window_main = $(window);
                let bl_filter = $('.bl_filter');
                let filter__content__fix = $('.filter__content__fix');
                let bl_filter__hidden = $('.bl_filter__hidden');
                let bl_filter_white = $('.bl_filter_white');
                let bl_filter__top = bl_filter.offset().top;
                //let fixed_bottom = bl_filter_white.offset().top + bl_filter_white.height() - 800;
                //let fixed_bottom_mob = bl_filter_white.offset().top + bl_filter_white.height() - 550;
                let headerHeight = $('.main_header').height();

                // Для мобилки
                let filter__content_mobile = $('.filter__content_mobile');
                let filter__content_mobile_fix = $('.filter__content_mobile_fix');

                let filter__content_mobile__top = filter__content_mobile.offset().top;


                console.log(fixed_bottom);
                // $item__top__fix__first = $('.item__top__fix__first');
                // $h = $nav.offset().top;
                // $fixed_bottom = $h + 966;

                window_main.scroll(function () {
                    if (windowWidth_temp > 390) {
                        if (window_main.scrollTop() > bl_filter__top - headerHeight) {
                            filter__content__fix.addClass('fixed');
                            bl_filter__hidden.addClass('container');

                            if (window_main.scrollTop() > fixed_bottom) {
                                filter__content__fix.addClass('fixed_bottom');
                                // filter__content__fix.css('top', fixed_bottom + 80);
                                // console.log('уже больше чем' + fixed_bottom);
                            } else {
                                filter__content__fix.removeClass('fixed_bottom');
                                // filter__content__fix.css('top', '80px');
                            }
                        } else {
                            filter__content__fix.removeClass('fixed');
                            bl_filter__hidden.removeClass('container');
                        }
                    } else if (windowWidth_temp <= 390) {
                        if (window_main.scrollTop() > filter__content_mobile__top - headerHeight) {
                            filter__content__fix.addClass('fixed');
                            if (window_main.scrollTop() > fixed_bottom_mob) {
                                filter__content__fix.addClass('fixed_bottom');
                                // filter__content__fix.css('top', fixed_bottom_mob + 60);
                                // console.log('уже больше чем' + fixed_bottom);
                            } else {
                                filter__content__fix.removeClass('fixed_bottom');
                                // filter__content__fix.css('top', '60px');
                            }

                        } else {
                            filter__content__fix.removeClass('fixed');
                        }
                        // $item__top__fix.removeClass('fixed');
                        // $item__top__fix.first().css('border-left', 'none');
                        // $item__top__fix.removeClass('fixed_bottom');
                        // $nav.css('transform', 'none');
                    }
                });
            })
      */
    </script>
 
 <?php
     get_footer();        