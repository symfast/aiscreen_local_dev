

<section class="bl_reviews bl_review_qsr">

    <div class="container">
        <div class="bl_reviews__content">
  
            <div class="row row-top">
                <h1 class="title"> <?php the_sub_field('title'); ?></h1>
            </div>

  
            <div class="row row-center">
                <div class="col col-left">
                    <?php $image = get_sub_field('image');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </div>
                <div class="col col-right">
                    <p class="text"> <?php the_sub_field('text'); ?></p>
                    <div class="card">
                        <div class="photo">
                            <?php $image = get_sub_field('photo');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>

                        </div>
                        <div class="customer">
                            <p class="name"> <?php the_sub_field('title'); ?></p>
                            <p class="description"> <?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
                    
          
            <div class="row row-bottom">
                <?php if (have_rows('items')) : ?>
                    <?php while (have_rows('items')) : the_row(); ?>
                        <div class="items">
                            <?php $image = get_sub_field('image');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>

                            <p class="items-title"><?php the_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
                              
        </div>
    </div>
  
                        </section>

                    