   <?php if( have_rows('table_head') ): ?>
   <?php  $first_column = [];  ?> 
    <?php  $first_column_des = [];  ?> 

    <?php while( have_rows('table_head') ): the_row(); ?> 
        <div class="bl_table__items">
            <ul>
                <?php if( have_rows('first_column') ): ?>
                    <?php while( have_rows('first_column') ): the_row(); ?>
                        <li class="first_item">
                            <div class="table__item_first">
                                <div class="item__top">
                                    <div class="item__top__fix__first">
                                    </div>
                                </div>
                                <ul>
                                    <?php while( have_rows('items') ): the_row(); ?>
                                        <li>
                                            <?php the_sub_field('title'); ?>
                                            <?php $first_column[]= get_sub_field('title');   ?>  
                                            <?php $first_column_des[]= get_sub_field('description');   ?>
                                            
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
                                </ul>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php  get_template_part( 'template-parts/pricing/table','item', array( 'col_id' => 'column_1','first_column' => $first_column,'first_column_des' => $first_column_des) ); ?>
                <?php  get_template_part( 'template-parts/pricing/table','item', array( 'col_id' => 'column_2','first_column' => $first_column,'first_column_des' => $first_column_des) ); ?>
                <?php  get_template_part( 'template-parts/pricing/table','item', array( 'col_id' => 'column_3','first_column' => $first_column,'first_column_des' => $first_column_des) ); ?>
                <?php  get_template_part( 'template-parts/pricing/table','item', array( 'col_id' => 'column_4','first_column' => $first_column,'first_column_des' => $first_column_des) ); ?>
            </ul>
        </div>   
    <?php endwhile; ?>
    <?php endif; ?>