 <div class="custom-content-mobile">
    <div class="custom-content-mobile__items">
        <h3 class="custom-content-mobile__title">Filter by</h3>
        <div class="custom-content-mobile__block">
            <div class="custom-content-mobile__row">
                <div class="custom-content-mobile__top">
                    <h3 class="custom-content-mobile__lable">Industry</h3>
                </div>
                <div class="custom-content-mobile__inner">
                    <a class="custom-content-mobile__item _active" data-tid="0" href="/appstore" >All Apps</a>
                    <?php   
                    $taxonomy=  'app_category';
                    $terms = get_terms([
                        'taxonomy' => $taxonomy,
                        'hide_empty' =>  true,
                    ]); ?>

                    <?php foreach ($terms as $term):  ?>
                       
                        <div class="custom-content-mobile__item" data-tid="<?php echo $term->term_id; ?>">
                            <?php echo $term->name ?></div>
                        <?php endforeach; ?>     

                    </div>
                </div>
<!--
<div class="custom-content-mobile__row">
<div class="custom-content-mobile__top">
<h3 class="custom-content-mobile__lable _orange">subcategory</h3>
</div>
<div class="custom-content-mobile__inner">
<a href="" class="custom-content-mobile__item _active">Coffee</a>
<a href="" class="custom-content-mobile__item">Pizza</a>
<a href="" class="custom-content-mobile__item">Burgers</a>
<a href="" class="custom-content-mobile__item">Asian</a>
<a href="" class="custom-content-mobile__item">Bubble Tea</a>
</div>
</div>
-->
</div>
</div>
</div> 
<div class="custom-content__menu">
    <div class="custom-content__items">
        <h3 class="custom-content__title">Filter by</h3>
        <div class="custom-content__block">
            <div class="custom-content__inner">
                <a class="custom-content__item _active" data-tid="0"   href="/appstore"  >All Apps</a>
                <?php   
                $taxonomy=  'app_category';
                $terms = get_terms([
                    'taxonomy' => $taxonomy,
                    'hide_empty' => true,
                ]); ?>
                <?php foreach ($terms as $term):  ?>
                    <?php  //echo $term->slug." : "; ?>
               
                    <div class="custom-content__item" data-tid="<?php echo $term->term_id; ?>">
                        <?php echo $term->name ?></div>
                   <?php endforeach; ?> 
                </div>
            </div>
        </div>
        <div class="custom-content__input">
            <button class="custom-content__btn" type="submit" class="button">

                <picture>
                    <source srcset="<?php echo get_template_directory_uri()?>/img/mobi/webp/professional/search.webp"  type="image/webp" media="(max-width: 1023px)">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/mobi/professional/search.png"  type="image/png" media="(max-width: 1023px)">
                            <source srcset="<?php echo get_template_directory_uri()?>/img/webp/professional/search.webp"  type="image/webp">
                                <img src="<?php echo get_template_directory_uri()?>/img/professional/search.png" alt="slide">
                            </picture>

                        </button>
                        <input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Search app"
                        class="input"  onkeyup="blog_search()" id="keyword">
                    </div>
                    <div class="custom-content__link">
                        <a href="https://manager.aiscreen.io/login">Free Trial</a>
                    </div>
                </div>

                <script type="text/javascript">
                   jQuery('.custom-content__item , .custom-content-mobile__item ').on('click', function() {
                     jQuery('.custom-content__item , .custom-content-mobile__item ').removeClass('_active');
                     jQuery(this).addClass('_active');
                     /*
                      var terms =[];
                      if ( $(this).hasClass('_active')){
                          jQuery(this).removeClass( '_active');
                      } else {
                        jQuery(this).addClass('_active');

                      }
                      jQuery( "._active" ).each(function( index ) {
                           term = $(this).data('tid');   
                            terms.push(term);
                             // console.log( index + ": " + $( this ).text() );
                        }); 
                        console.log (terms.join(','));
                    */
                    term  = $(this).data('tid'); 
                   
                   if (term != 0 ) { 
                    $.ajax({
                        type: 'POST',
                        url: '/wp-admin/admin-ajax.php',
                        dataType: 'html',
                        data: {
                            action: 'appstore_filter_category',
                               // term_id: terms.join(','),
                               term_id: term,

                           },
                           success: function(res) {
                            $('.main-custom-content__body').html(res);
                        }
                    })
                   }
                });

            </script>

            <script type="text/javascript">

                function blog_search(){
                    jQuery.ajax({
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        type: 'post',
                        data: { action: 'appstore_search', keyword: jQuery('#keyword').val() },
                        success: function(data) {
                            jQuery('.main-custom-content__body').html( data );
                        }
                    });

                } 

            </script>
