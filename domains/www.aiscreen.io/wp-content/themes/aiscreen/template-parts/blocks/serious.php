<section class="serious">
    <?php if (have_rows('top')) : ?>
        <?php while (have_rows('top')) : the_row(); ?>
            <section class="serious__block block-serious">
                <div class="container">
                    <div class="block-serious__body">
                        <div class="block-serious__column">
                            <div class="block-serious__bg">
                                <div class="block-serious__image">


                                    <?php $image = get_sub_field('image');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="block-serious__column">
                            <div class="block-serious__content">
                                <h2 class="block-serious__title"> <?php the_sub_field('title'); ?></h2>
                                <p class="block-serious__text"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <section class="serious__main main-serious">
        <div class="container">
            <div class="main-serious__body">
                <div class="main-serious__header header-main-serious">
                    <?php if (have_rows('center')) : ?>
                        <?php while (have_rows('center')) : the_row(); ?>
                            <div class="header-main-serious__top">
                                <h2 class="header-main-serious__title"><?php the_sub_field('title'); ?></h2>
                                <p class="header-main-serious__text"><?php the_sub_field('text'); ?></p>
                            </div>
                            <div class="bl_simple_set_up__center">
                                <?php if (have_rows('images')) : ?>
                                    <?php while (have_rows('images')) : the_row(); ?>
                                        <div class="center__item">
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
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (have_rows('bottom')) : ?>
                    <?php while (have_rows('bottom')) : the_row(); ?>
                        <div class="main-serious__block block-main-serious">
                            <div class="block-main-serious__body">
                                <h2 class="block-main-serious__title"><?php the_sub_field('title'); ?></h2>
                                <p class="block-main-serious__text"><?php the_sub_field('text'); ?></p>
                                <div class="block-main-serious__images">
                                    <?php if (have_rows('images')) : ?>
                                        <?php while (have_rows('images')) : the_row(); ?>
                                            <div class="block-main-serious__item">
                                                <div class="block-main-serious__image">

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
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</section>