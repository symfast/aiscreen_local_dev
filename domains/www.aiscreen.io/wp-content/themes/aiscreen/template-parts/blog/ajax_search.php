<?php  

add_filter( 'posts_where', 'title_filter', 10, 2 );

$query = new WP_Query( array( 
   'search_prod_title' => $_POST['keyword'], 
   'post_type'     => 'post',
) ); 
remove_filter( 'posts_where', 'title_filter', 10, 2 );
?>

<div class="blog-carts__body">
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>    
            <div class="blog-carts__cart cart-blog">
                <a href="<?php the_permalink() ?>" class="cart-blog__image">
                    <?php echo get_the_post_thumbnail(); ?>
                </a>
                <div class="cart-blog__body">
                    <span class="cart-blog__item"><?php $term_list = wp_get_post_terms( $post->ID, 'category' );
                    if( $term_list ) {
                        foreach( $term_list as $term ) {
                            echo  $term->name;
                        }
                    } ?></span>
                    <a href="<?php the_permalink() ?>" class="cart-blog__text"><?php the_title();?></a>
                    <div class="cart-blog__bottom">
                        <span><?php the_date();?></span>
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