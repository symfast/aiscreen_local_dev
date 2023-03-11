<section class="bl_5_reasons">
    <div class="container">
        <div class="bl_5_reasons__content">
            <h2>
                <?php the_sub_field('sub_title'); ?>
            </h2>
            <div class="bl_5_reasons__body">
                <div class="bl_5_reasons__img">

                    <?php if (have_rows('images')) : ?>
                        <?php while (have_rows('images')) : the_row(); ?>
                            <div class="<?php echo (get_row_index() == 1) ? 'image__top' : 'image__mini' ?>">



                                <?php $image = get_sub_field('image');
                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }
                                ?>


                            </div>



                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="bl_5_reasons__text">
                    <ul>

                        <?php if (have_rows('items')) : ?>
                            <?php while (have_rows('items')) : the_row(); ?>
                                <li>
                                    <span>
                                        0<?php echo get_row_index() ?> /
                                    </span>
                                    <h3>
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p>
                                        <?php the_sub_field('text'); ?>
                                    </p>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>