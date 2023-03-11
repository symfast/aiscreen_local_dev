    <div class="guides-menu">
        <div class="guides-menu__body">
            <div class="guides-menu__seach">
                <button class="guides-menu__btn" type="submit" class="button">
                    <img src="<?php echo get_template_directory_uri()?>/img/guides/arrow.svg" alt="slide">
                </button>
                <input autocomplete="off" onkeyup="blog_search()" id="keyword"  type="text" name="form[]" data-error="Ошибка" placeholder="Search" class="guides-menu__input">
            </div>
              <div class="guides-menu__item">
                <h3 class="guides-menu__title guides-menu__title_first <?php   echo ( get_post_field( 'post_name' ) == "guides") ? '_active' : '' ; ?>"> 
                  <a style="color:#FFFFFF" href="/guides/">GETTING START</a>
               </h3> 
            </div>
            
            
             <?php $current_id = get_the_ID() ?>
             <?php $q = new WP_Query(array('post_type' => 'guides','orderby' => 'none','post_parent' => 0));?>
                  <?php if( $q->have_posts() ) : ?>
                     <?php while( $q->have_posts() ) : $q->the_post(); ?>
                        <?php get_template_part('template-parts/guides/guides-menu-item',null,array('id'=>$post->ID,'current_id'=>$current_id ) );?>
                    <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>   
        </div>
    </div>
<script type="text/javascript">
    function blog_search(){
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'guides_search', keyword: jQuery('#keyword').val() },
            success: function(data) {
                jQuery('.guides-content__body').html( data );
            }
        });
    } 
</script>