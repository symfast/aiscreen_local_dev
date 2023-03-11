<?php
/**
 * The main template file
 */
get_header(); ?>
 <main>
      <?php  get_template_part( 'template-parts/pricing/header' ); ?>
      <?php  get_template_part( 'template-parts/pricing/table' ); ?>
      <?php if( have_rows('block') ): ?>
      <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
        <?php endwhile; ?>
      <?php endif; ?> 

</main>


<script>
    jQuery(document).ready(function ($) {

        var windowWidth = $(window).width();
                // --------------------
                // Закрепление блока
                $window = $(window);
                $nav = $('.bl_table__items');
                $item__top__fix = $('.item__top__fix');
                $item__top__fix__first = $('.item__top__fix__first');
                $h = $nav.offset().top;
                $fixed_bottom = $('.bl_payment').offset().top;
				$header_height = $('.main_header').height();
				$headerOffsetTop = $('.main_header').offset().top
                if (windowWidth > 992) {
                    $table__item = $('.table__item ul ').width();
                    $item__top__fix.css('width', $table__item);

                    $table__item_first = $('.table__item_first ul ').width() + 1;
                    $item__top__fix__first.css('width', $table__item_first);
                }
                $(window).resize(function () {
                    if (windowWidth > 992) {
                        $table__item = $('.table__item ul ').width();
                        $item__top__fix.css('width', calc($table__item));

                        $table__item_first = $('.table__item_first ul ').width();
                        $item__top__fix__first.css('width', $table__item_first);
                    }
                });

                $window.scroll(function () {
                    if (windowWidth > 992) {
                        if ($window.scrollTop() > $h - ($('.main_header').height() + $headerOffsetTop)) {
                            $item__top__fix.addClass('fixed').css({'top': $header_height + 'px'});
                            $item__top__fix__first.addClass('fixed');
                            // $item__top__fix.first().css('border-left', '1px solid #dfe5eb')
                            if ($window.scrollTop() > $fixed_bottom - $('.main_header').height() - $item__top__fix__first.height()) {
                                $item__top__fix.addClass('fixed_bottom');
                                $item__top__fix__first.addClass('fixed_bottom');

                                // $nav.css('transform', 'translate(0)')
                            } else {
                                $item__top__fix.removeClass('fixed_bottom');
                                $item__top__fix__first.removeClass('fixed_bottom');
                                $nav.css('transform', 'none');
                            }
                        } else {
                            $item__top__fix.removeClass('fixed');
                            $item__top__fix__first.removeClass('fixed');
                            // $item__top__fix.first().css('border-left', 'none')
                        }
                    } else {
                        $item__top__fix.removeClass('fixed');
                        $item__top__fix.first().css('border-left', 'none');
                        $item__top__fix.removeClass('fixed_bottom');
                        $nav.css('transform', 'none');
                    }
                });
            })

        </script>




<?php
get_footer();
