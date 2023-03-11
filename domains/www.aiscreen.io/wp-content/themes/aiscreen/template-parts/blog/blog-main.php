<section class="blog-main">
    <div class="blog-main__body">
        <?php  get_template_part( 'template-parts/blog/blog-menu-mobile' ); ?>
        <div class="blog-main__column">
            <?php  $query = new WP_Query( array( 'posts_per_page' => 1 ) ); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="blog-main__image">
                

                        <?php
                        $image = get_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>



                        <div class="blog-main__block">
                            <span class="blog-main__item"><?php $term_list = wp_get_post_terms( $post->ID, 'category' );
                            if( $term_list ) {
                                foreach( $term_list as $term ) {
                                    echo  $term->name;
                                }
                            } ?></span>
                            <p class="blog-main__text-big"><?php the_title(); ?></p>
                        </div>
                    </a>
                    <div class="blog-main__block-mobile">
                        <span class="blog-main__item">
                            <?php $term_list = wp_get_post_terms( $post->ID, 'category' );
                            if( $term_list ) {
                                foreach( $term_list as $term ) {
                                    echo  $term->name;
                                }
                            } ?>
                        </span>
                        <p class="blog-main__text-big"><?php the_title(); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php  wp_reset_postdata(); ?>
            <?php endif; ?>  
        </div>
        <div class="blog-main__column">
            <div class="blog-main__inner">
                <?php  $query = new WP_Query( array( 'posts_per_page' => 4,'offset' =>1 ) ); ?>
                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <article class="blog-main__cart">
                            <a href="<?php the_permalink() ?>" class="blog-main__bg">
                              
                            <?php
                        $image = get_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>


                            </a>
                            <span class="blog-main__item"> <?php $term_list = wp_get_post_terms( $post->ID, 'category' );
                            if( $term_list ) {
                                foreach( $term_list as $term ) {
                                    echo  $term->name;
                                }
                            } ?>
                        </span>
                        <a href="<?php the_permalink() ?>" class="blog-main__text"> <?php the_title(); ?></a>
                    </article>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>  
        </div>
    </div>
</div>
</section>