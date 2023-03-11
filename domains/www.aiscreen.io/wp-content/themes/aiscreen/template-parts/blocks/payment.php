<section class="bl_payment">
    <div class="container">
        <div class="bl_payment__content">
            <div class="bl_payment__all bl_payment__left">
                <h3>
                    <?php the_sub_field('title'); ?>
                </h3>
                <ul>
                    <?php if (have_rows('images')) : ?>

                        <?php while (have_rows('images')) : the_row(); ?>
                            <li>
                                <?php $image = get_sub_field('image');
                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }
                                ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="bl_payment__all bl_payment__right">
                <h3>
                    <?php the_sub_field('title_2'); ?>
                </h3>
                <div class="ssl__bottom">
                    <div class="ssl__img">

                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/mobi/webp/pricing/ssl.webp" type="image/webp" media="(max-width: 1023px)">
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/mobi/pricing/ssl.png" type="image/png" media="(max-width: 1023px)">
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/webp/pricing/ssl.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/img/pricing/ssl.png" alt="ssl">
                        </picture>

                    </div>
                    <p>
                        <?php the_sub_field('text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>