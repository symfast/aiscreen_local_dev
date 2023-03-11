<div class="bl_table__top_btns">
   <?php if( have_rows('button') ): ?>
   <?php while( have_rows('button') ): the_row(); ?>
    <ul>
        <li>
            <a href="#" class="btn_discount_table_monthly">
                <?php the_sub_field('monthly'); ?>
            </a>
        </li>
        <li>
            <a href="#" class="btn_discount_table btn_discount_table_аnnual active">
                <?php the_sub_field('аnnual'); ?><span><?php the_sub_field('annual__percent'); ?></span>
            </a>
        </li>
    </ul>
 
   <?php endwhile; ?>
 <?php endif; ?>

</div>
