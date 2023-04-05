      <section class="blog-menu">
        <div class="blog-menu__body">
            <div class="blog-menu__menu menu-blog">
                
                <?php $terms = get_terms('blog_type', array("orderby" => "slug", "parent" => 0, 'hide_empty' =>  false)); ?>
                <?php foreach($terms as $key => $term) : ?>
                    <a href="#" class="menu-blog__link menu-blog__link_type_filter" data-tid="<?php echo $term->term_id; ?>" > 
                       <?php echo $term->name; ?>
                   </a>
                <?php endforeach; ?>

                <?php  $query = new WP_Query( array( 'post_type' => 'page' , 'name' => 'blog' ) ); ?>
                <?php if ( $query->have_posts() ) : ?>
                  <?php while ( $query->have_posts() ) : $query->the_post(); ?>  

               <?php  $link = get_field('link_3');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a  class="menu-blog__link _link-ar" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>   

            <?php endwhile; ?>
            <?php wp_reset_postdata();?>
        <?php endif; ?>   

        <div class="menu-blog__input">
         <button class="menu-blog__btn" type="submit" class="button">
           <picture>
            <source srcset="<?php echo get_template_directory_uri()?>/img/mobi/webp/professional/search.webp"  type="image/webp" media="(max-width: 1023px)">
                <source srcset="<?php echo get_template_directory_uri()?>/img/mobi/professional/search.png"  type="image/png" media="(max-width: 1023px)">
                    <source srcset="<?php echo get_template_directory_uri()?>/img/webp/professional/search.webp"  type="image/webp">
                        <img src="<?php echo get_template_directory_uri()?>/img/professional/search.png" alt="slide">
                    </picture>
                </button>
                <input autocomplete="on" type="text" name="form[]" data-error="Ошибка" onkeyup="blog_search()" id="keyword" placeholder="Search" class="input">
            </div>
            <div class="menu-blog__items">
                <h3 class="menu-blog__title">Category</h3>
                <div class="menu-blog__block">
                    <div class="menu-blog__inner">
                      <div class="menu-blog__item _active" data-tid="0" > 
                       All
                   </div>
                   <?php $terms = get_terms('category', array("orderby" => "slug", "parent" => 0, 'hide_empty' =>  true)); ?>
                   <?php foreach($terms as $key => $term) : ?>
                    <div class="menu-blog__item" data-tid="<?php echo $term->term_id; ?>" > 
                       <?php echo $term->name; ?>
                   </div>
               <?php endforeach; ?>
           </div>
       </div>
   </div>

</div>
</div>
</section>

<script type="text/javascript">
    jQuery('.menu-blog__item ').on('click', function() {
        jQuery('.menu-blog__item').removeClass('_active');
          jQuery('.menu-blog__link_type_filter').removeClass('active');
        jQuery(this).addClass('_active');
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
              action: 'blog_filter_category',
              term_id: $(this).data('tid'),
          },
          success: function(res) {
              $('#blog_content').html(res);
          }
      })

    });

</script>

<script type="text/javascript">
    jQuery('.menu-blog__link_type_filter ').on('click', function(event) {
        event.preventDefault();
        jQuery('.menu-blog__link_type_filter').removeClass('active');
        jQuery(this).addClass('active');
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
              action: 'blog_type',
              term_id: $(this).data('tid'),
          },
          success: function(res) {
              $('#blog_content').html(res);
          }
      })

    });

</script>


<script type="text/javascript">

    function blog_search(){
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'blog_search', keyword: jQuery('#keyword').val() },
            success: function(data) {
                jQuery('#blog_content').html( data );
            }
        });
    } 

</script>


<script type="text/javascript">
 jQuery(document).ready(function () {
    var button =  $( '#loadmore a' ),
    paged = button.data( 'paged' ),
    maxPages = button.data( 'maxpages' );
    button.click( function( event ) {
        event.preventDefault(); 
        $.ajax({
            type : 'POST',
            url : '<?php echo admin_url('admin-ajax.php'); ?>', 
            data : {
                paged : paged , 
                action : 'loadmore' 
            },
            beforeSend : function( xhr ) {
                button.text( 'LOADING...' );
            },
            success : function( data ){

               paged++; 

               console.log ('paged:'+paged);
               console.log ('maxPages:'+maxPages);

               button.text( 'LOAD MORE' );

               $( '.blog-carts__body' ).append(data);

               if( paged > maxPages ) {
                button.remove();
            }
        }

    });
    } );

});
</script>