   <section class="bl_uls">
    <div class="container">
        <div class="bl_uls__content">
            <ul>
              
             <?php if( have_rows('items') ): ?>
                 
                <?php while( have_rows('items') ): the_row(); ?>
                    <li>
                        <h3>
                           <?php the_sub_field('title'); ?>
                       </h3>
                       <p>
                        <?php the_sub_field('text'); ?>
                    </p>
                </li>

            <?php endwhile; ?>
        <?php endif; ?>
        
    </ul>
</div>
</div>
</section>