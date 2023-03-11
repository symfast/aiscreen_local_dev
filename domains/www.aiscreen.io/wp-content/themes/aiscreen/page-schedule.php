<?php

/**
* The main template file
*/
get_header(); ?>


<?php //echo do_shortcode("[your_shortcode]"); 
?>

<main>
    <section class="bl_schedule">
        <div class="container">
            <div class="bl_schedule__content">
                <h1>
                    <?php the_field('title_head'); ?>
                </h1>
                <div class="bl_schedule__form">
                    <div class="form_sch">
                       <?php echo do_shortcode( '[contact-form-7 id="636" title="Schedule"]' ); ?>
                   </div>
                   <div class="show_you">
                    <h3>
                        <?php the_field('title'); ?>
                    </h3>
                    <ul>
                        <?php if (have_rows('items')) : ?>
                            <?php while (have_rows('items')) : the_row(); ?>

                                <li>
                                    <?php the_sub_field('text'); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if( have_rows('block') ): ?>
 <?php while( have_rows('block') ): the_row(); ?>
     <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
 <?php endwhile; ?>
<?php endif; ?>


</main>

<?php
get_footer();



