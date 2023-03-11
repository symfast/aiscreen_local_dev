<div class="bl_filter__items">
    <ul>
     <?php  /*
     $term_id = $_POST['term_id']; 
     $tax = $_POST['tax'];

     $query = new WP_Query( array( 
        'posts_per_page' => -1,
        'post_type'=>'templates',  
        'tax_query' => [
          [
           'taxonomy' => $tax,
           'field'    => 'term_id',
         'terms'    => $term_id , // example of $termIds = [4,5]
         'operator' => 'IN'
     ],
 ]

) ); */?>     

  <?php 

     $term_id = $_POST['term_id'];
     $tax = $_POST['tax']; 
     //$terms_array = explode(",", $term_id);
     $args=array( 
       'posts_per_page' => -1,  
       'post_type' => 'templates'

     );
     if (!empty($term_id )) { 
      $args["tax_query"] = array(
       array(
         'taxonomy' => $tax,
         'field'    => 'term_id',
         'terms'    =>  $term_id, 
         'operator' => 'IN'
       )  
     ); 


    }

    $query  = new WP_Query($args);  
   // $term = get_term_by(  'id', $term_id, 'app_category' ); 
    ?>







<?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>   
       <li>
        <div class="bl_filter__item">
            <div class="filter__item__img">

               

                <?php
                        $image = get_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>


            </div>
            <div class="filter__item__title">
                <div class="title__left">
                    <span>
                        <?php the_field('description'); ?>
                    </span>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </div>
                <a href="<?php the_permalink() ?>" class="btn_underline_blue">
                    View Template
                </a>
            </div>
            <div class="filter__category">
                <ul>   
                    <?php $term_list = wp_get_post_terms( get_the_ID(), 'tmp_category' ) ?>
                    <?php if( $term_list ) :?>
                        <?php $colors =array ('blue','yellow','pink','blue','yellow','pink','blue','yellow','pink') ; ?>
                        <?php  foreach( $term_list as $key => $term ): ?>
                            <li>
                                <div class="category__item category__<?php echo $colors[$key] ?>">
                                    <?php echo $term->name; ?> 
                                </div>
                            </li>
                        <?php endforeach ; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </li>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>    
</ul>
</div>