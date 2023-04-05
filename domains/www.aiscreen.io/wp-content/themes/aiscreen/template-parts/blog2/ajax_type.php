<?php  

$term_id = $_POST['term_id']; 
$args = array(
    'posts_per_page' => -1,
);

if ( $term_id  )
  $args['tax_query'] =array(
            array(
                'taxonomy' => 'blog_type',
                'field'    => 'term_id',
                'terms'    => $term_id , // example of $termIds = [4,5]
                'operator' => 'IN'
                ),
 );

$query = new WP_Query($args); ?>
<div class="blog-carts__body">
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
                <a href="<?php the_permalink() ?>" class="cart-blog__text"><?php the_title();?></a>
                <div class="cart-blog__bottom">
                    <span><?php echo get_the_date();?></span>
                    <a href="<?php the_permalink() ?>" class="cart-blog__link">Learn More</a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
     <?php else : ?>
     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> 
    <?php endif; ?>  
</div>