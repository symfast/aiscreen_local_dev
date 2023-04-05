<?php  


if (empty($_POST['keyword'])) return ;

add_filter( 'posts_where', 'title_filter', 10, 2 );

$query = new WP_Query( array( 
   'search_prod_title' => $_POST['keyword'], 
   'post_type'     => 'post',
) ); 
remove_filter( 'posts_where', 'title_filter', 10, 2 );
?>


<ul class="max-h-72 scroll-py-2 overflow-y-auto py-2 px-3 text-sm text-gray-800" id="options" role="listbox">
    <!-- Active: "bg-indigo-600 text-white" -->
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li class="cursor-default select-none px-4 py-2" id="option-1" role="option" tabindex="-1"> <a href="<?php the_permalink() ?>" class="hover:text-[#0071E2]"><?php the_title();?></a></li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
    <?php endif; ?>
</ul>
