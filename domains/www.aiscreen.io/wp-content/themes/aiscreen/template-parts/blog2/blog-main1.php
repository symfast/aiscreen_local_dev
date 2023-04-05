<section class="md:w-[1260px] mx-auto pt-[80px] md:px-0 px-[20px]">
    <div
        class="flex flex-col md:flex-row  items-center justify-between border-b md:py-[41px]  pb-[20px]   border-[#E6E8EC] border-solid ">
        <h1 class="text-[#14121F] text-center text-[28px] md:text-[54px] capitalize">Digital Signage Blog</h1>
        <?php   get_template_part( 'template-parts/blog2/search/search-form' ); ?>
    </div>
</section>

<?php  $query = new WP_Query( array( 'posts_per_page' => 1 ) ); ?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<section class="md:w-[1260px] mx-auto md:px-0 px-[20px]">
    <div class="flex flex-col md:flex-row  md:items-center justify-between pt-[41px]  gap-[17px]">
        <a href="<?php the_permalink() ?>">
            <?php
             if ( has_post_thumbnail() ) {
                 the_post_thumbnail('large', array( 'class' => 'object-cover h-[200px] w-full  md:h-[380px] md:w-[759px] rounded-[20px]' ) );
             } else {
                  $image = get_field('image');
                 $size = 'large'; // (thumbnail, medium, large, full or custom size)
              if ($image) {
                   echo wp_get_attachment_image($image, $size,"",array( "class" => "object-cover h-[200px] w-full  md:h-[380px] md:w-[759px] rounded-[20px]" ) );
             } 
             } 
         ?>
        </a>
        <div class="w-auto  md:w-[460px] flex flex-col gap-[17px]">
            <div class="flex items-center gap-[9px]">
                <a href="#" class="author-image">
                    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 96 ) ); ?>"
                        class="rounded-full h-[36px] w-[36px]">
                </a>
                <a href="#" class="text-[13px] leading-[17.55px] font-[700] "><?php echo get_the_author(); ?></a>
                <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2.5" r="2" fill="#95989E" />
                </svg>
                <time class="text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><?php the_date() ?></time>
                <?php $time_read_array = estimateReadingTime(get_the_content(), 200); ?>
                <span
                    class="inline-flex  items-center gap-[9px] text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><svg
                        width=".75rem" height=".8125rem" viewBox="0 0 12 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3_13)">
                            <path
                                d="M6 0.5C7.18668 0.5 8.34672 0.851894 9.33342 1.51118C10.3201 2.17047 11.0891 3.10754 11.5433 4.2039C11.9974 5.30026 12.1162 6.50666 11.8847 7.67054C11.6532 8.83443 11.0818 9.90353 10.2426 10.7426C9.40352 11.5818 8.33442 12.1532 7.17054 12.3847C6.00665 12.6162 4.80025 12.4974 3.7039 12.0433C2.60754 11.5892 1.67047 10.8201 1.01118 9.83342C0.35189 8.84673 -4.76837e-06 7.68669 -4.76837e-06 6.5C0.00171661 4.90923 0.63441 3.38411 1.75926 2.25926C2.8841 1.13441 4.40923 0.501721 6 0.5ZM6 11.5C6.9889 11.5 7.9556 11.2068 8.77785 10.6573C9.60009 10.1079 10.241 9.32705 10.6194 8.41342C10.9978 7.49979 11.0968 6.49445 10.9039 5.52455C10.711 4.55464 10.2348 3.66373 9.53553 2.96447C8.83627 2.2652 7.94535 1.789 6.97545 1.59607C6.00554 1.40315 5.00021 1.50216 4.08658 1.8806C3.17295 2.25904 2.39206 2.8999 1.84265 3.72215C1.29324 4.54439 0.999996 5.51109 0.999996 6.5C1.00145 7.82564 1.5287 9.09656 2.46607 10.0339C3.40344 10.9713 4.67436 11.4985 6 11.5Z"
                                fill="#95989E" />
                            <path
                                d="M6.00003 3.5C6.13264 3.5 6.25981 3.55268 6.35358 3.64645C6.44735 3.74021 6.50003 3.86739 6.50003 4V6.1625L8.18553 7.2185C8.29824 7.28892 8.37837 7.40122 8.40828 7.53072C8.4382 7.66021 8.41544 7.79628 8.34503 7.909C8.27461 8.02172 8.1623 8.10185 8.03281 8.13176C7.90332 8.16167 7.76724 8.13892 7.65453 8.0685L5.73453 6.8685C5.66198 6.82305 5.60233 6.75973 5.56127 6.68462C5.52021 6.6095 5.49912 6.5251 5.50003 6.4395V4C5.50003 3.86739 5.55271 3.74021 5.64647 3.64645C5.74024 3.55268 5.86742 3.5 6.00003 3.5Z"
                                fill="#95989E" />
                        </g>
                        <defs>
                            <clipPath id="clip0_3_13">
                                <rect width="12" height="12" fill="white" transform="matrix(-1 0 0 1 12 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo $time_read_array['minutes']?> min read</span>
            </div>
            <h2 class="capitalize"><a href="<?php the_permalink() ?>" class="hover:text-[#0071E2]  hover:underline">
                    <?php echo  mb_strimwidth(wp_strip_all_tags(get_the_title()), 0, 65, '...'); ?> </a></h2>
            <p class="text-[20px] font-[500]  leading-[30px]  tracking-[0.01em]">
                <?php echo  mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 130, '...');   ?>
            </p>
            <div class="flex  gap-[10px] flex-row">
                <?php $term_list = wp_get_post_terms( $post->ID, 'category' ); if( $term_list ) { foreach( $term_list as $term ) { ?>
                <a
                    class="rounded-[9px] px-[9px] py-[3px]  text-[13px] font-[500]  leading-[17.55px] bg-[#F1F1F1] hover:bg-[#0071E2] hover:text-[#FFFFFF]">
                    <?php echo  $term->name; ?>
                </a>
                <?php }} ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php  wp_reset_postdata(); ?>
<?php endif; ?>

<section class="md:w-[1260px] mx-auto md:px-0 px-[20px]">
    <div class="flex flex-col md:flex-row  items-start justify-between ">
        <?php  $query = new WP_Query( array( 'posts_per_page' => 3,'offset' =>1 ) ); ?>
        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="w-auto md:w-[392px] flex flex-col gap-[17px] pt-[41px]">
            <a href="<?php the_permalink() ?>">
                <?php
    
               if ( has_post_thumbnail() ) {
                the_post_thumbnail('large', array( 'class' => 'object-cover  h-[200px] w-full   md:h-[236px] md:w-[392px] rounded-[20px]' ) );
               } else {
                $image = get_field('image');
                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size,"",array( "class" => "object-cover  h-[200px] w-full   md:h-[236px] md:w-[392px] rounded-[20px]" ) );
              
                } 
               } 
            ?>
            </a>
            <?php $time_read_array = estimateReadingTime(get_the_content(), 200); ?>
            <div class="flex items-center gap-[9px]">
                <a href="#" class="author-image">
                    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 96 ) ); ?>"
                        class="rounded-full h-[36px] w-[36px]">
                </a>
                <a href="#" class="text-[13px] leading-[17.55px] font-[700]"><?php echo get_the_author(); ?></a>
                <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2.5" r="2" fill="#95989E" />
                </svg>
                <time
                    class="text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><?php echo get_the_date(); ?></time>
                <span
                    class="inline-flex  items-center gap-[9px] text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><svg
                        width=".75rem" height=".8125rem" viewBox="0 0 12 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3_13)">
                            <path
                                d="M6 0.5C7.18668 0.5 8.34672 0.851894 9.33342 1.51118C10.3201 2.17047 11.0891 3.10754 11.5433 4.2039C11.9974 5.30026 12.1162 6.50666 11.8847 7.67054C11.6532 8.83443 11.0818 9.90353 10.2426 10.7426C9.40352 11.5818 8.33442 12.1532 7.17054 12.3847C6.00665 12.6162 4.80025 12.4974 3.7039 12.0433C2.60754 11.5892 1.67047 10.8201 1.01118 9.83342C0.35189 8.84673 -4.76837e-06 7.68669 -4.76837e-06 6.5C0.00171661 4.90923 0.63441 3.38411 1.75926 2.25926C2.8841 1.13441 4.40923 0.501721 6 0.5ZM6 11.5C6.9889 11.5 7.9556 11.2068 8.77785 10.6573C9.60009 10.1079 10.241 9.32705 10.6194 8.41342C10.9978 7.49979 11.0968 6.49445 10.9039 5.52455C10.711 4.55464 10.2348 3.66373 9.53553 2.96447C8.83627 2.2652 7.94535 1.789 6.97545 1.59607C6.00554 1.40315 5.00021 1.50216 4.08658 1.8806C3.17295 2.25904 2.39206 2.8999 1.84265 3.72215C1.29324 4.54439 0.999996 5.51109 0.999996 6.5C1.00145 7.82564 1.5287 9.09656 2.46607 10.0339C3.40344 10.9713 4.67436 11.4985 6 11.5Z"
                                fill="#95989E" />
                            <path
                                d="M6.00003 3.5C6.13264 3.5 6.25981 3.55268 6.35358 3.64645C6.44735 3.74021 6.50003 3.86739 6.50003 4V6.1625L8.18553 7.2185C8.29824 7.28892 8.37837 7.40122 8.40828 7.53072C8.4382 7.66021 8.41544 7.79628 8.34503 7.909C8.27461 8.02172 8.1623 8.10185 8.03281 8.13176C7.90332 8.16167 7.76724 8.13892 7.65453 8.0685L5.73453 6.8685C5.66198 6.82305 5.60233 6.75973 5.56127 6.68462C5.52021 6.6095 5.49912 6.5251 5.50003 6.4395V4C5.50003 3.86739 5.55271 3.74021 5.64647 3.64645C5.74024 3.55268 5.86742 3.5 6.00003 3.5Z"
                                fill="#95989E" />
                        </g>
                        <defs>
                            <clipPath id="clip0_3_13">
                                <rect width="12" height="12" fill="white" transform="matrix(-1 0 0 1 12 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo $time_read_array['minutes']?> min read</span>
            </div>
            <h3><a href="<?php the_permalink() ?>" class="hover:text-[#0071E2]  hover:underline">
                    <?php echo  mb_strimwidth(wp_strip_all_tags(get_the_title()), 0, 65, '...'); ?> </a></h3>
            <p class="text-[16px] font-[500]  leading-[27px]  tracking-[0.01em]">
                <?php echo  mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 130, '...');   ?></p>

            <div class="flex  gap-[10px] flex-row">
                <?php $term_list = wp_get_post_terms( $post->ID, 'category' ); if( $term_list ) { foreach( $term_list as $term ) { ?>
                <button
                    class="rounded-[9px] px-[9px] py-[3px]  text-[13px] font-[500]  leading-[17.55px] bg-[#F1F1F1] hover:bg-[#0071E2] hover:text-[#FFFFFF]">
                    <?php echo  $term->name; ?>
                </button>
                <?php }} ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>


    </div>
</section>

<section
    class="md:w-[1260px] mx-auto flex flex-col md:flex-row  justify-between border-t border-[#E6E8EC] border-solid mt-[41px] md:px-0 px-[20px] "
    id="sec">
    <div class="w-auto  md:w-[867px] border-0  pb-[40px]  md:border-r border-[#E6E8EC] border-solid">
        <?php  $query = new WP_Query( array( 'posts_per_page' => 4,'offset' =>4 ) ); ?>
        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div
            class="flex w-auto md:w-[768px] justify-between  py-[41px]   last:border-0   border-b border-[#E6E8EC]  border-solid flex-col">

            <?php $time_read_array = estimateReadingTime(get_the_content(), 200); ?>
            <div class="flex items-center gap-[9px] pb-[17px]">
                <a href="#" class="author-image">
                    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 96 ) ); ?>"
                        class="rounded-full h-[36px] w-[36px]">
                </a>
                <a href="#" class="text-[13px] leading-[17.55px] font-[700]"><?php echo get_the_author(); ?></a>
                <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2.5" r="2" fill="#95989E" />
                </svg>
                <time
                    class="text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><?php echo get_the_date(); ?></time>
                <span
                    class="inline-flex  items-center gap-[9px] text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><svg
                        width=".75rem" height=".8125rem" viewBox="0 0 12 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3_13)">
                            <path
                                d="M6 0.5C7.18668 0.5 8.34672 0.851894 9.33342 1.51118C10.3201 2.17047 11.0891 3.10754 11.5433 4.2039C11.9974 5.30026 12.1162 6.50666 11.8847 7.67054C11.6532 8.83443 11.0818 9.90353 10.2426 10.7426C9.40352 11.5818 8.33442 12.1532 7.17054 12.3847C6.00665 12.6162 4.80025 12.4974 3.7039 12.0433C2.60754 11.5892 1.67047 10.8201 1.01118 9.83342C0.35189 8.84673 -4.76837e-06 7.68669 -4.76837e-06 6.5C0.00171661 4.90923 0.63441 3.38411 1.75926 2.25926C2.8841 1.13441 4.40923 0.501721 6 0.5ZM6 11.5C6.9889 11.5 7.9556 11.2068 8.77785 10.6573C9.60009 10.1079 10.241 9.32705 10.6194 8.41342C10.9978 7.49979 11.0968 6.49445 10.9039 5.52455C10.711 4.55464 10.2348 3.66373 9.53553 2.96447C8.83627 2.2652 7.94535 1.789 6.97545 1.59607C6.00554 1.40315 5.00021 1.50216 4.08658 1.8806C3.17295 2.25904 2.39206 2.8999 1.84265 3.72215C1.29324 4.54439 0.999996 5.51109 0.999996 6.5C1.00145 7.82564 1.5287 9.09656 2.46607 10.0339C3.40344 10.9713 4.67436 11.4985 6 11.5Z"
                                fill="#95989E" />
                            <path
                                d="M6.00003 3.5C6.13264 3.5 6.25981 3.55268 6.35358 3.64645C6.44735 3.74021 6.50003 3.86739 6.50003 4V6.1625L8.18553 7.2185C8.29824 7.28892 8.37837 7.40122 8.40828 7.53072C8.4382 7.66021 8.41544 7.79628 8.34503 7.909C8.27461 8.02172 8.1623 8.10185 8.03281 8.13176C7.90332 8.16167 7.76724 8.13892 7.65453 8.0685L5.73453 6.8685C5.66198 6.82305 5.60233 6.75973 5.56127 6.68462C5.52021 6.6095 5.49912 6.5251 5.50003 6.4395V4C5.50003 3.86739 5.55271 3.74021 5.64647 3.64645C5.74024 3.55268 5.86742 3.5 6.00003 3.5Z"
                                fill="#95989E" />
                        </g>
                        <defs>
                            <clipPath id="clip0_3_13">
                                <rect width="12" height="12" fill="white" transform="matrix(-1 0 0 1 12 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo $time_read_array['minutes']?> min read</span>
            </div>
            <div class="flex flex-row w-auto justify-between">

                <div class="w-[211px] md:w-[474px] flex flex-col gap-[17px]">
                    <h3><a href="<?php the_permalink() ?>" class="hover:text-[#0071E2]  hover:underline">
                            <?php echo  mb_strimwidth(wp_strip_all_tags(get_the_title()), 0, 70, '...'); ?> </a></h3>
                    <p class="text-[16px] font-[500]  leading-[27px]  tracking-[0.01em] hidden md:block">
                        <?php echo  mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 150, '...'); ?></p>

                    <div class="flex gap-[10px] flex-row">
                        <?php $term_list = wp_get_post_terms( $post->ID, 'category' ); if( $term_list ) { foreach( $term_list as $term ) { ?>
                        <button
                            class="rounded-[9px] px-[9px] py-[3px]  text-[13px] font-[500]  leading-[17.55px] bg-[#F1F1F1] hover:bg-[#0071E2] hover:text-[#FFFFFF]">
                            <?php echo  $term->name; ?>
                        </button>
                        <?php }} ?>
                    </div>
                </div>

                <a href="<?php the_permalink() ?>" class="h-[72px] md:h-[142px]  w-[120px]  md:w-[236px]">
                    <?php
                $image = get_field('image');
                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size,"",array( "class" => "object-cover h-[72px] md:h-[142px]  w-[120px]  md:w-[236px]  rounded-[8px] md:rounded-[20px]" ) );
                } 
                ?>
                </a>
            </div>

        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <div class="pt-[38px] w-auto md:w-[336px]  pb-[40px]  overflow-visible">
        <div class="sticky top-[120px]">
            <div class="w-[336px]">
                <h4 class="text-[18px] font-[700] leading-[24.3px] pb-[17px]">Topic</h4>
                <div class="flex  gap-[10px] flex-row flex-wrap ">
                    <?php $terms = get_terms('category', array("orderby" => "slug", "parent" => 0, 'hide_empty' =>  false)); ?>
                    <?php foreach($terms as $key => $term) : ?>

                    <a href="<?php echo get_term_link( $term )?>" data-tid="<?php echo $term->term_id; ?>"
                        class="rounded-[10px] px-[17px] py-[9px] text-[13px] font-[500]  leading-[17.55px] bg-[#F1F1F1] hover:bg-[#0071E2] hover:text-[#FFFFFF]">
                        <?php echo $term->name; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="mt-[58px] py-[41px] px-[31px] rounded-[20px] bg-[#F6F9FC] flex items-center flex-col  gap-[17px]"
                id="t-block">
                <h3 class="text-[25px] font-[700]  leading-[33.75px] text-center">Ready to get started
                    and harness your
                    screen powers?</h3>
                <p class="w-[269px] text-center text-[16px] font-[500]  leading-[22px]">Increase engagement and attract
                    more customers with dynamic,
                    eye-catching
                    displays.</p>
                <a class="rounded-[30px] px-[32px] py-[11px] text-[16px] font-[700]  leading-[21.6px] bg-[#0071E2] hover:bg-[#0071E2] text-[#FFFFFF]"
                    href="https://manager.aiscreen.io/" target="_self">Try for FREE</a>

            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/blocks/static/ready-to-get'); ?>