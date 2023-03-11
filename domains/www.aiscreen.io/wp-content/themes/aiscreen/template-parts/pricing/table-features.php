 <div class="bl_table__features">
    <div class="features__top">
        <h3>
            More Features.
        </h3>
        <a href="#" class="btn_hide_features active">
            <span>Hide</span> features
        </a>
    </div>
    <ul>
        <li class="first_item">
            <div class="table__item_first">
                <ul>
                    <?php if( have_rows('features') ): ?>      
                     <?php while( have_rows('features') ): the_row(); ?>
                       <?php if( have_rows('title') ): ?>      
                         <?php while( have_rows('title') ): the_row(); ?>
                           <li>
                                <?php the_sub_field('text'); ?>
                                <?php if( get_sub_field('description')  ): ?> 
                                    <div class="bl_table__prompt">
                                        <img src="<?php echo get_template_directory_uri()?>/img/icons/important.svg" alt="important">
                                        <div class="prompt__hover">
                                            <p>
                                                <?php the_sub_field('description'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>    
                <?php endwhile; ?>
            <?php endif; ?>  
        </ul>
    </div>
</li>

<?php $active = get_field('features_active_column'); ?>
<li  <?php if( $active == 1 ) echo 'class="active"' ?> >
    <div class="table__item">
        <ul>
           <?php if( have_rows('features') ): ?>      
           <?php while( have_rows('features') ): the_row(); ?>   
            <li>
                <?php if( get_sub_field('col1') == 1  ): ?> 
                  <img src="<?php echo get_template_directory_uri()?>/img/icons/check.svg" alt="check">
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>   
        </ul>
    </div>
</li>
<li  <?php if( $active == 2 ) echo 'class="active"' ?> >
    <div class="table__item">
        <ul>
             <?php if( have_rows('features') ): ?>      
           <?php while( have_rows('features') ): the_row(); ?>   
            <li>
                <?php if( get_sub_field('col2') == 1  ): ?> 
                  <img src="<?php echo get_template_directory_uri()?>/img/icons/check.svg" alt="check">
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>   
        </ul>
    </div>
</li>
<li  <?php if( $active == 3 ) echo 'class="active"' ?> >
    <div class="table__item">
        <ul>
             <?php if( have_rows('features') ): ?>      
           <?php while( have_rows('features') ): the_row(); ?>   
            <li>
                <?php if( get_sub_field('col3') == 1  ): ?> 
                  <img src="<?php echo get_template_directory_uri()?>/img/icons/check.svg" alt="check">
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>   
        </ul>
    </div>
</li>
<li  <?php if( $active == 4 ) echo 'class="active"' ?> >
    <div class="table__item">
        <ul>
             <?php if( have_rows('features') ): ?>      
           <?php while( have_rows('features') ): the_row(); ?>   
            <li>
                <?php if( get_sub_field('col4') == 1  ): ?> 
                  <img src="<?php echo get_template_directory_uri()?>/img/icons/check.svg" alt="check">
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>   
        </ul>
    </div>
</li>
</ul>
</div>