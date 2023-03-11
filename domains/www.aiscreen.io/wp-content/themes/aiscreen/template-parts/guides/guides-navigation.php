 <div class="guides-navigation">
    <div class="guides-navigation__body">
        <h3 class="guides-navigation__title"><?php the_title() ?></h3>
        <nav class="wrapper-sub-menu-navigation">
            <ul class="guides-navigation__list">
               <?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
                  <?php if( have_rows('blocks') ) {
                       while( have_rows('blocks') ) {
                                  the_row();
                              get_template_part( 'template-parts/guides/guides-navigation-item'); 
                            
                        }}?>
                <?php }} ?>
            </ul>
        </nav>
    </div>
</div>