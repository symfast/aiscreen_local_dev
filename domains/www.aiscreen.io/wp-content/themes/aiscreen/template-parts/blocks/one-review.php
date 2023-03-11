<section class="bl_one_review">
    <div class="container">
        <div class="bl_one_review__content">
            <div class="bl_reviews__img">
                <div class="photo">
                   

                    <?php $image = get_sub_field('image');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                </div>
            </div>
            <div class="bl_reviews__text">
                <div class="text__top">
                    <blockquote>
                        « <?php the_sub_field('text');?> »
                    </blockquote>
                </div>
                <div class="text__bottom">
                    <p>
                        <cite>
                            <?php the_sub_field('name');?>
                        </cite>
                        <span>
                            <?php the_sub_field('description');?> 

                        </span>
                    </p>
            <!-- <a href="#" class="btn_underline_blue">
            Read Customer Story
            </a> -->
                </div>
            </div>
        </div>
    </div>
</section>