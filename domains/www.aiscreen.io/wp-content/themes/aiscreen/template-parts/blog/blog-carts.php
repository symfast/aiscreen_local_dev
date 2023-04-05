<section class="blog-carts">
    <div class="container"  id="blog_content">
        <div class="blog-carts__body">
          <?php  $query = new WP_Query( array( 'posts_per_page' => 5,'offset' => false,'paged' => 2 ) ); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>    
                    <div class="blog-carts__cart cart-blog">
                        <a href="<?php the_permalink() ?>" class="cart-blog__image">
                     <?php
                        $image = get_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>

                        </a>
                        <div class="cart-blog__body">
                            <span class="cart-blog__item"><?php $term_list = wp_get_post_terms( $post->ID, 'category' );
                            if( $term_list ) {
                                foreach( $term_list as $term ) {
                                    echo  $term->name;
                                }
                            } ?>
                            </span>
                            <a href="<?php the_permalink() ?>" class="cart-blog__text"><?php the_title(); ?></a>
                            <div class="cart-blog__bottom">
                                <span><?php echo get_the_date();?></span>
                                <a href="<?php the_permalink() ?>" class="cart-blog__link">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata();?>
            <?php endif; ?>  
        </div>
        <?php $max_pages = $query->max_num_pages; ?>
        <?php if(  $max_pages > 1 ): ?> 
         <div id="loadmore" class="blog-carts__showmore">
            <a  href="#"  class="blog-carts__button" data-paged="3" data-maxpages="<?php echo $max_pages ?>">LOAD MORE</a>
         </div>
        <?php endif ?>
    </div>
</section>