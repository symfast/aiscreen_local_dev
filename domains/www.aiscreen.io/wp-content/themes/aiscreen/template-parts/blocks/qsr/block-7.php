
<section class="bl_schedule bl_schedule_qsr">
    <div class="container">
        <div class="bl_schedule__content">
            <h1>
                <?php the_sub_field('title'); ?>
            </h1>

            <div class="sub_title">

                <?php the_sub_field('sub_title'); ?>

            </div>


            <div class="text">

                <?php the_sub_field('text'); ?>

            </div>


            <div class="bl_schedule__form">
                <div class="form_sch">
                    <?php echo do_shortcode('[contact-form-7 id="636" title="Schedule"]'); ?>
                </div>

                <div class="show_you">
                
                    <?php $image = get_sub_field('image');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

             