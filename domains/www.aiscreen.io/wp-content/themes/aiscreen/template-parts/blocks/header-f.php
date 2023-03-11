<section class="bl_header_f">
    <div class="container">
        <div class="bl_header_f__content">
            <div class="bl_header_f__text">
                <h1> <?php the_sub_field('title'); ?>
                </h1>
                <p>
                    <?php the_sub_field('text'); ?>

                </p>
                <div class="bl_header_f__btns">
                    <?php
                    $link = get_sub_field('link');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a class="btn_free_trial" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                    <a data-fancybox href="#hidden" href="#" class="btn_watch_video">
                        Watch Video
                    </a>
                </div>
            </div>
            <div class="bl_header_f__slides">
                <div class="swiper bl_header_f__slider">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('gallery')) : ?>
                            <?php while (have_rows('gallery')) : the_row(); ?>
                                <div class=" swiper-slide">
                                    <div class="slide__img">

                                        <?php $image = get_sub_field('image');
                                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                        if ($image) {
                                            echo wp_get_attachment_image($image, $size);
                                        }
                                        ?>


                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div style="display: none;" id="hidden">
    <div class="video">
        <video id="player2" playsinline controls>
            <source src="<?php the_sub_field('video'); ?>" type="video/mp4" />
        </video>
    </div>
</div>