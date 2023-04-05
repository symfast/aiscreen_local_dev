<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="tw-blog">
<section class="xl:max-w-[1260px] mx-auto pt-[80px] md:px-0 px-[20px]">
    <div class="flex flex-col md:flex-row  items-center justify-between border-b py-[41px] border-[#E6E8EC] border-solid ">
        <h1 class="text-[#14121F] text-center text-[28px] md:text-[54px] capitalize">Digital Signage Blog</h1>
        <div class="relative rounded-[15px] w-full md:w-[460px] h-[53px] bg-[#F9F9F9]">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M28.1183 27.1462L22.747 21.7749C24.3956 19.895 25.3052 17.5164 25.3052 14.9927C25.3052 12.238 24.2323 9.6485 22.2846 7.70081C20.3369 5.75311 17.7474 4.68024 14.9927 4.68024C12.238 4.68024 9.64844 5.75311 7.70074 7.70081C5.75305 9.6485 4.68018 12.238 4.68018 14.9927C4.68018 17.7474 5.75305 20.337 7.70074 22.2847C9.64844 24.2324 12.238 25.3052 14.9927 25.3052C17.5163 25.3052 19.895 24.3956 21.7749 22.7471L27.1461 28.1183C27.2804 28.2526 27.4563 28.3198 27.6322 28.3198C27.8081 28.3198 27.984 28.2526 28.1183 28.1183C28.3868 27.8498 28.3868 27.4147 28.1183 27.1462ZM8.67291 21.3125C6.98505 19.6243 6.05518 17.3799 6.05518 14.9927C6.05518 12.6056 6.98505 10.3612 8.67291 8.67297C10.3611 6.98511 12.6056 6.05524 14.9927 6.05524C17.3798 6.05524 19.6242 6.98511 21.3124 8.67297C23.0003 10.3612 23.9302 12.6056 23.9302 14.9927C23.9302 17.3799 23.0003 19.6243 21.3124 21.3125C19.6242 23.0004 17.3798 23.9302 14.9927 23.9302C12.6056 23.9302 10.3611 23.0004 8.67291 21.3125Z"
                        fill="#95989E" />
                </svg>
            </div>
            <input type="text" name="text" class="block w-full pl-[55px]  bg-[#F9F9F9] border-0 rounded-[15px] h-[53px]"
                placeholder="Search Articles">

                <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>" />
    <input type="hidden" name="post_type[]" value="book" />
    <input type="hidden" name="post_type[]" value="magazine" />
    <input type="hidden" name="post_type[]" value="ebook" />
    <input type="hidden" name="post_type[]" value="pdf" />
    <input type="submit" value="Search" />
</form>

        </div>
    </div>
</section> 

  <section class="xl:max-w-[1260px] mx-auto md:px-0 px-[20px]">
        <div class="flex flex-col md:flex-row  items-start justify-between ">

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <div class="w-auto md:w-[392px] flex flex-col gap-[17px] pt-[41px]">
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
            <?php  wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer();