<?php
/**
 * The template for displaying single posts and pages.
 */

get_header();
?>

<main>
    <?php if (have_posts()) : ?>
     <?php  while (have_posts()): ?>
         <?php  the_post(); ?>

          
                       <?/*php  $content_string_array = []; ?>  
                       <?php if( have_rows('content') ): ?>
                            <?php while( have_rows('content') ): the_row(); ?>
                                <?php if( get_row_layout() == 'text' ): ?>
                                    <?php  $content_string_array [] = get_sub_field('text'); ?> 
                             <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; */?>
                        <?php 
                             //$time_read_array = estimateReadingTime(implode(" ",$content_string_array), 200); 
                             $time_read_array = estimateReadingTime(get_the_content(), 200);
                        ?>




         <section class="blog-header">
            <div class="container">
                <h1 class="blog-header__title"><?php the_title(); ?></h1>
                <div class="blog-header__line">
                    <div class="blog-header__items">
                        <span class="blog-header__item"><?php $term_list = wp_get_post_terms( $post->ID, 'category' );
                        if( $term_list ) {
                            foreach( $term_list as $term ) {
                                echo  $term->name;
                            }

                        } ?></span>
                        <span class="blog-header__span"><?php the_date() ?> </span>
                        <span class="blog-header__span-mobile"><?php echo $time_read_array['minutes']?> min read</span>
                    </div>
                    <p class="blog-header__text"><?php the_field('descriptions'); ?></p>
                    <span class="blog-header__span _last-span"><?php echo $time_read_array['minutes']?> min  read</span>
                </div>
            </div>
        </section>
        <section class="blog-content">
            <div class="blog-content__body">
                <div class="blog-content__image">
                  <!--  <img  src="<?php the_field('image'); ?>" /> -->

                    <?php
                        $image = get_field('image');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>


                </div>
                <div class="blog-content__main">
                    <div class="blog-content__container">
                     
                          <?php the_content() ?>
                        <?php if( have_rows('content') ): ?>
                            <?php while( have_rows('content') ): the_row(); ?>
                                <?php if( get_row_layout() == 'text' ): ?>
                                   <p class="blog-content__text">  <?php the_sub_field('text'); ?> </p>
                               <?php elseif( get_row_layout() == 'image' ): 
                                $image = get_sub_field('image');
                                ?>
                              
                           
                              <?php $image = get_sub_field('image');
                                    $size = 'full'; // (thumbnail, medium, large, full or custom size)


                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size, false, array('class'  => 'blog-content__img'));
                                    }
                                    ?>







                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="blog-content__link">

                      <?php  $query = new WP_Query( array( 'post_type' => 'page' , 'name' => 'blog' ) ); ?>
                      <?php if ( $query->have_posts() ) : ?>
                          <?php while ( $query->have_posts() ) : $query->the_post(); ?>  

                              <?php  $link = get_field('link');
                              if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>  


                        <?php endwhile; ?>
                        <?php wp_reset_postdata();?>
                    <?php endif; ?>   
                </div>
                <div class="blog-content__links">

                    <?php  $query = new WP_Query( array( 'post_type' => 'page' , 'name' => 'blog' ) ); ?>
                    <?php if ( $query->have_posts() ) : ?>
                      <?php while ( $query->have_posts() ) : $query->the_post(); ?>  

                       <?php if( have_rows('items') ): ?>
                         <div class="blog-content__social">
                           <?php while( have_rows('items') ): the_row(); ?>    

                            <a href="<?php the_sub_field('link'); ?>">
                                <img src="<?php the_sub_field('icon'); ?>" />
                            </a>

                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>    
            <?php endwhile; ?>
            <?php wp_reset_postdata();?>
        <?php endif; ?>   
        <span>
            <?php $term_list = wp_get_post_terms( $post->ID, 'category' ); ?>
            <?php if( $term_list ): ?>
                <?php foreach( $term_list as $term ):  ?>
                 <a href="<?php echo get_term_link($term)  ?>"><?php echo $term->name; ?></a>
             <?php endforeach; ?>
         <?php endif; ?>

     </span>
 </div>
</div>
</div>
<div class="blog-content__swiper swiper-blog">
    <div class="swiper-blog__container">
        <div class="swiper-blog__header">
            <span>Resent Posts</span>
            <!-- <a href="#">See All</a>-->
        </div>
        <div class="swiper-blog__slider swiper">
            <div class="swiper-blog__wrapper swiper-wrapper">

                <?php $term_list = wp_get_post_terms( $post->ID, 'category','ids' ); ?>
                <?php /*$term_id =$term_list[0]->term_id;*/  ?>   

                <?php  $term_ids = wp_list_pluck( $term_list, 'term_id' ); ?>

                <?php  
                $args = array( 
                    'posts_per_page' => 3,
                    'post_type'=>'post',  
                    'tax_query' => [
                      [
                         'taxonomy' => 'category',
                         'field'    => 'term_id',
                         'terms'    => $term_ids , 
                         'operator' => 'IN'
                     ],
                 ] );

                 ?>


                 <?php  $query = new WP_Query( $args ); ?>
                 <?php if ( $query->have_posts() ) : ?>
                  <?php while ( $query->have_posts() ) : $query->the_post(); ?>    

                    <div class="swiper-blog__slide swiper-slide">
                        <div class="swiper-blog__image">
                         <a href="<?php the_permalink() ?>">
                         <?php $image = get_field('image');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </a>
                    </div>
                    <p class="swiper-blog__text">
                        <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>
                    </p>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>    
    </div>
    <div class="swiper-blog__control">
        <div class="swiper-blog__pagination"></div>
    </div>
</div>
</div>
</div>
</div>
</section>

<?php endwhile; ?>   
<?php endif; ?>
</main>

<?php get_footer(); ?>
