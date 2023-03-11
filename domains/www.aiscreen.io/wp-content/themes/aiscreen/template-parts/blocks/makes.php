<section class="aiscreen-makes">
    <div class="aiscreen-makes__body">
        <div class="aiscreen-makes__header">
            <div class="container">
                <h2 class="aiscreen-makes__title"><?php the_sub_field('title'); ?></h2>
            </div>
        </div>
        <div class="aiscreen-makes__content content-aiscreen">
            <div class="container">
                <div class="content-aiscreen__slider swiper">
                    <div class="content-aiscreen__wrapper swiper-wrapper">
                        <?php if (have_rows('items')) : ?>
                            <?php while (have_rows('items')) : the_row(); ?>
                                <div class="content-aiscreen__slide swiper-slide">
                                    <h3 class="content-aiscreen__title"> <?php the_sub_field('title'); ?></h3>


                                    <?php if (get_sub_field('background_image')) : ?>
                                        <div class="content-aiscreen__block _01" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
                                        <?php else : ?>

                                            <div class="content-aiscreen__block _01" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/aiscreen-makes/<?php the_sub_field('color'); ?>)">

                                            <?php endif; ?>

                                            <div class="content-aiscreen__image">


                                                <?php $image = get_sub_field('image');
                                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                                if ($image) {
                                                    echo wp_get_attachment_image($image, $size);
                                                }
                                                ?>


                                            </div>
                                            <span><?php the_sub_field('sub_title'); ?></span>
                                            </div>
                                            <div class="content-aiscreen__text"><?php the_sub_field('text'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                                <div class="swiper-button-prev">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/arrow_left_white_reviews.svg" alt="slide_left">
                                </div>
                                <div class="swiper-button-next">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/arrow_right_white_reviews.svg" alt="slide_right">
                                </div>
                    </div>
                </div>
            </div>
        </div>
</section>