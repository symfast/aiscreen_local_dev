<?php
/**
 * The main template file
 */

get_header(); ?>
  
<main>
    <?php if( have_rows('block') ): ?>
       <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

 <script>
        var $ = jQuery.noConflict();
        $(document).ready(function () {
                // const player = new Plyr('#player', {
                //     clickToPlay: true,
                //     autopause: true,
                // });
                // const player_popup = new Plyr('#player2');
                // --------------------
                // Закрепление блока
                let windowWidthF = $(window).width();
                let window_let = $(window);
                let bl_templates__text = $('.bl_templates__text');
                let bl_templates = $('.bl_templates');
                let bl_templatesTop = bl_templates.offset().top;
                let bl_templates__textTop = bl_templates__text.offset().top;
                let fixed_bottom = bl_templatesTop + bl_templates.height() - bl_templates__text.height();
                // console.log(bl_templates__text.height());

                window_let.scroll(function () {

                    if (windowWidthF > 1024) {
                        // console.log(bl_templates__textTop - 60)
                        if (window_let.scrollTop() > bl_templates__textTop - 60) {
                            bl_templates__text.addClass('fixed');
                            bl_templates__text.css({ 'position': 'fixed', 'top': '60px' });
                        } else if (window_let.scrollTop() <= bl_templates__textTop - 60) {
                            bl_templates__text.removeClass('fixed');
                            bl_templates__text.css({ 'position': 'absolute', 'top': '0px' });
                        }
                        if (window_let.scrollTop() > fixed_bottom - 300) {
                            bl_templates__text.css({ 'position': 'absolute', 'top': bl_templates.height() - bl_templates__text.height() + 60 - 300 });

                        } else if (window_let.scrollTop() > bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                            bl_templates__text.css({ 'top': '60px' });

                        } else if (window_let.scrollTop() <= bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                            bl_templates__text.css({ 'position': 'absolute', 'top': '0px' });
                        }
                    } else {
                        // console.log(bl_templates__textTop - 60)
                        if (window_let.scrollTop() > bl_templates__textTop - 90) {
                            bl_templates__text.addClass('fixed');
                            bl_templates__text.css({ 'position': 'fixed', 'top': '60px' });
                        } else if (window_let.scrollTop() <= bl_templates__textTop - 90) {
                            bl_templates__text.removeClass('fixed');
                            bl_templates__text.css({ 'position': 'absolute', 'top': '0px' });
                        }
                        if (window_let.scrollTop() > fixed_bottom - 300) {
                            bl_templates__text.css({ 'position': 'absolute', 'top': bl_templates.height() - bl_templates__text.height() + 60 - 300 });

                        } else if (window_let.scrollTop() > bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                            bl_templates__text.css({ 'top': '60px' });

                        } else if (window_let.scrollTop() <= bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                            bl_templates__text.css({ 'position': 'absolute', 'top': '0px' });
                        }
                    }
                });
            });
    

        </script>


<?php
get_footer();
