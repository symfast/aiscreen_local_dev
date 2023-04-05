
<section class="xl:max-w-[1260px] mx-auto  md:pt-[160px] pt-[60px] md:px-0 px-[20px]">
    <div class="mb-[20px] text-center">
        <a href="/blog" class="back-to-blog-link inline-flex items-center test-[#0071E2]"><svg width="16" height="16"
                viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.10861 12.4419C7.86453 12.686 7.4688 12.686 7.22472 12.4419L3.22472 8.44194C2.98065 8.19786 2.98065 7.80214 3.22472 7.55806L7.22472 3.55806C7.4688 3.31398 7.86453 3.31398 8.10861 3.55806C8.35269 3.80214 8.35269 4.19786 8.10861 4.44194L5.17555 7.375L12 7.375C12.3452 7.375 12.625 7.65482 12.625 8C12.625 8.34518 12.3452 8.625 12 8.625H5.17555L8.10861 11.5581C8.35269 11.8021 8.35269 12.1979 8.10861 12.4419Z">
                </path>
            </svg>Back to blog</a> 
    </div>
    <div class="text-center">
        <h1 class="text-[#14121F] text-center text-[18px] md:text-[54px] capitalize  md:mb-[20px]">
            <?php single_cat_title(); ?></h1>
    </div>
</section>

<section class="xl:max-w-[1260px] mx-auto md:px-0 px-[20px] md:pb-[100px]">
    <div class="flex flex-col md:flex-row flex-wrap">
        <?php if (have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w-auto basis-1/3   flex flex-col gap-[17px] pt-[41px]">
            <a href="<?php the_permalink() ?>">
                <?php
                $image = get_field('image');
                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size,"",array( "class" => "object-cover  h-[200px] w-auto   md:h-[236px] md:w-[392px] rounded-[20px]" ) );
              
                }  
                ?>
            </a>
            <?php $time_read_array = estimateReadingTime(get_the_content(), 200); ?>
            <div class="flex items-center gap-[9px]">
                <a href="/blog/author/samanyou-garg/" class="author-image">
                    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 96 ) ); ?>"
                        class="rounded-full h-[36px] w-[36px]">
                </a>
                <a href="/blog/author/samanyou-garg/"
                    class="text-[13px] leading-[17.55px] font-[700]"><?php echo get_the_author(); ?></a>
                <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2.5" r="2" fill="#95989E" />
                </svg>
                <time
                    class="text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><?php echo get_the_date(); ?></time>
                <span
                    class="inline-flex  items-center gap-[9px] text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><svg
                        width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
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