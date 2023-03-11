        <?php $col_id= $args['col_id']; ?>
        <?php $first_column = $args['first_column']; ?>
        <?php $first_column_des = $args['first_column_des']; ?>   

          <?php if( have_rows($col_id) ): ?>
                    <?php while( have_rows($col_id) ): the_row(); ?>
                        <li <?php if( get_sub_field('active') == 1 )  echo 'class="active"';  ?> >
                            <div class="table__item">
                                <div class="item__top">
                                    <div class=" item__top__fix">
                                       <?php /* if( get_sub_field('active') == 1 ): */?> 
                                        <div class="item__top__popular">
                                            Most popular
                                        </div>
                                         <?php /* endif; */?>
                                        <h3>
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <p class="mob_p">
                                            <?php the_sub_field('description'); ?>
                                        </p>
                                  
                                           <?php if( have_rows('price') ): ?>
                                           <?php while( have_rows('price') ): the_row(); ?>
                                             
                                              <div class="table_price price-monthly" style="display: none;">
                                              <?php if( have_rows('monthly')): ?>
                                               <?php while( have_rows('monthly') ): the_row(); ?>
                                            
                                                <span class="valuta"><?php the_sub_field('currency'); ?></span><span
                                                class="price price_launch "><?php the_sub_field('price'); ?></span>
                                                    <?php the_sub_field('period'); ?> 
                                                <?php endwhile; ?>
                                                <?php endif; ?>
                                               </div>

                                             <div class="table_price price-аnnual">
                                             <?php if( have_rows('аnnual')): ?>
                                             <?php while( have_rows('аnnual') ): the_row(); ?>
                                          
                                              <span class="valuta "> <?php the_sub_field('currency'); ?></span><span
                                                class="price price_launch"><?php the_sub_field('price'); ?></span>
                                                <?php the_sub_field('period'); ?>
                                                 
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                             </div>  

                                           <?php endwhile; ?>
                                           <?php endif; ?>

                                            <style>
                                              .price-monthly{ display: none;  }
                                            </style>    

                                        <div class="item__top__bottom">
                                            <?php 
                                            $link = get_sub_field('link');
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="btn_table" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>

                                            <p>
                                                <?php the_sub_field('description'); ?>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <ul>
                                    <?php while( have_rows('items') ): the_row(); ?>
                                        <li>
                                            <div class="title_mob">
                                                <p>
                                                   <?php echo $first_column[get_row_index()-1]; ?>
                                                </p>
                                            </div>
                                            <?php the_sub_field('text'); ?>
                                           
                                           <?php if (!empty($first_column_des[get_row_index()-1])): ?> 
                                             <div class="bl_table__prompt_mob">
                                                    <img src="<?php echo get_template_directory_uri()?>/img/icons/important_blue.svg" alt="important">
                                                    <div class="prompt__hover">
                                                        <p>
                                                            <?php echo $first_column_des[get_row_index()-1]; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                      
                                           <?php endif; ?>


                                        </li>
                                    <?php endwhile; ?> 
                                </ul>
                                <a href="#" class="btn_features_mob">
                                    <span>Show</span>Features
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>