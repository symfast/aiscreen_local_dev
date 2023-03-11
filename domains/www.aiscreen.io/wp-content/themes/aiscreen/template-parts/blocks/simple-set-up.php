<section class="bl_simple_set_up">
    <div class="container">
        <div class="bl_simple_set_up__content">

            <div class="bl_simple_set_up__top">
                <div class="top__title">
                    <div class="mini">
                        <?php the_sub_field('sub-title'); ?>
                    </div>
                    <h2>
                        <?php the_sub_field('title'); ?>
                    </h2>
                </div>
                <p>
                    <?php the_sub_field('text'); ?>
                </p>

                <?php
                $link = get_sub_field('link');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn_free_trial" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>


            </div>


            <div class="bl_simple_set_up__center">
                <?php if (have_rows('items_text')) : ?>
                    <?php while (have_rows('items_text')) : the_row(); ?>
                        <div class="center__item">
                            <div class="center__text">
                                <h3>
                                    <span>
                                        0<?php echo get_row_index(); ?>/
                                    </span>
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <p>
                                    <?php the_sub_field('text'); ?>
                                </p>
                            </div>
                            <div class="center__img">
                                <div class="center__img__img">



                                    <?php $image = get_sub_field('image');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)


                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size, false, array('class'  => 'center__img__desc'));
                                    }
                                    ?>



                                    <?php $image = get_sub_field('image');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size, false, array(
                                            'class'  => 'center__img__mob'
                                        ));
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


            <div class="bl_simple_set_up__bottom">
                <ul>
                    <?php if (have_rows('items')) : ?>
                        <?php while (have_rows('items')) : the_row(); ?>
                            <li>
                                <div class="bottom__item">
                                    <div class="item__img">
                                        <div class="item__img__img">

                                            <?php $image = get_sub_field('image');
                                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                            if ($image) {
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                            ?>


                                        </div>
                                    </div>
                                    <div class="item__text">
                                        <h3>
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <p>
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>




        </div>
    </div>
</section>



<script>
    var $ = jQuery.noConflict();
    $(document).ready(function() {

        if ($(window).width() > 1024) {
            $('.bl_simple_set_up__bottom ul').masonry({
                // options...
                itemSelector: '.bl_simple_set_up__bottom ul li',
                // columnWidth: 50,
            });
        }
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
        console.log(bl_templates__text.height());

        window_let.scroll(function() {


            if (windowWidthF > 1024) {
                console.log(bl_templates__textTop);
                console.log(window_let.scrollTop());

                if (window_let.scrollTop() > bl_templates__textTop - 60) {
                    bl_templates__text.addClass('fixed');
                    bl_templates__text.css({
                        'position': 'fixed',
                        'top': '60px'
                    });
                } else if (window_let.scrollTop() <= bl_templates__textTop - 60) {
                    bl_templates__text.removeClass('fixed');
                    bl_templates__text.css({
                        'position': 'absolute',
                        'top': '0px'
                    });
                }
                if (window_let.scrollTop() > fixed_bottom - 300) {
                    bl_templates__text.css({
                        'position': 'absolute',
                        'top': bl_templates.height() - bl_templates__text.height() + 60 - 300
                    });

                } else if (window_let.scrollTop() > bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                    bl_templates__text.css({
                        'top': '60px'
                    });

                } else if (window_let.scrollTop() <= bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                    bl_templates__text.css({
                        'position': 'absolute',
                        'top': '0px'
                    });
                }
            } else {
                // console.log(bl_templates__textTop - 60)
                if (window_let.scrollTop() > bl_templates__textTop - 90) {
                    bl_templates__text.addClass('fixed');
                    bl_templates__text.css({
                        'position': 'fixed',
                        'top': '60px'
                    });
                } else if (window_let.scrollTop() <= bl_templates__textTop - 90) {
                    bl_templates__text.removeClass('fixed');
                    bl_templates__text.css({
                        'position': 'absolute',
                        'top': '0px'
                    });
                }
                if (window_let.scrollTop() > fixed_bottom - 300) {
                    bl_templates__text.css({
                        'position': 'absolute',
                        'top': bl_templates.height() - bl_templates__text.height() + 60 - 300
                    });

                } else if (window_let.scrollTop() > bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                    bl_templates__text.css({
                        'top': '60px'
                    });

                } else if (window_let.scrollTop() <= bl_templates__textTop - 60 && window_let.scrollTop() <= fixed_bottom) {
                    bl_templates__text.css({
                        'position': 'absolute',
                        'top': '0px'
                    });
                }
            }


        });
    });
</script>