<?php

/**
 * The main template file
 */
get_header(); ?>


<?php //echo do_shortcode("[your_shortcode]"); 
?>

<main>
    <!-- ======================================== -->
    <!-- BLOCK FORM -->
    <section class="bl_header_с">
        <div class="container">
            <div class="bl_header_с__contact">
                <div class="bl_header_с__title">
                    <h1>
                        <?php the_field('title'); ?>
                    </h1>
                    <p>
                       <?php the_field('text'); ?>
                   </p>
               </div>
               <div class="bl_header_с__feedback">
                <div class="bl_header_с__left">

                    <?php if( have_rows('email') ): ?>

                        <?php while( have_rows('email') ): the_row(); ?>
                            <div class="bl_header_с__links">
                                <p>
                                  <?php the_sub_field('title'); ?>
                              </p>
                              <a href="mailto:<?php the_sub_field('email'); ?>">
                                 <?php the_sub_field('email'); ?>
                             </a>
                         </div>

                     <?php endwhile; ?>
                 <?php endif; ?> 
                 <?php if( have_rows('phone') ): ?>
                    <?php while( have_rows('phone') ): the_row(); ?>
                        <div class="bl_header_с__links">
                            <p>
                             <?php the_sub_field('title'); ?>
                         </p>
                         <a href="tel:<?php the_sub_field('number'); ?>">
                            <?php the_sub_field('number'); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>   
        </div>
        <div class="bl_header_с__form">
            <?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>
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
