<?php  $time_read_array = estimateReadingTime(get_the_content(), 200);  ?>
<div class="flex  flex-col  md:flex-row justify-between">
    <div class="flex-shrink-0 group block">
        <div class="flex items-center">
            <div>
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 96 ) ); ?>"
                    class="rounded-full h-[55px] w-[55px]">
            </div>
            <div class="ml-3">
                <p class="text-[17px] leading-[22.95px] font-[700]"><?php echo get_the_author(); ?></p>
                <div class="flex items-center">
                    <time class="text-[13px] leading-[17.55px] font-[500] text-[#95989E]"><?php the_date() ?></time>
                    <span
                        class="inline-flex  items-center gap-[5px] text-[13px] leading-[17.55px] font-[500] text-[#95989E] ml-[9px]"><svg
                            width=".75rem" height=".8125rem" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        </svg><?php echo $time_read_array['minutes']?> min read</span>
                </div>
            </div>
        </div>
    </div>



    <div class="flex pt-[24px] items-center md:pt-0" id="social-share">
        <?php
            $text = get_the_title() ; 
            $url = get_permalink(); ?>
        <a href="http://twitter.com/share?text=<?php echo $text ?>&url=<?php echo urlencode( $url ) ?>" title="Twitter share" class="pr-[12px] block" target="_blank">
            <span class="social-share-icon">
                <svg width="1.5rem" height="1.5rem" viewBox="0 0 24 24" fill="#A8A8A8">
                    <path
                        d="M20 5.34c-.67.41-1.4.7-2.18.87a3.45 3.45 0 0 0-5.02-.1 3.49 3.49 0 0 0-1.02 2.47c0 .28.03.54.07.8a9.91 9.91 0 0 1-7.17-3.66 3.9 3.9 0 0 0-.5 1.74 3.6 3.6 0 0 0 1.56 2.92 3.36 3.36 0 0 1-1.55-.44V10c0 1.67 1.2 3.08 2.8 3.42-.3.06-.6.1-.94.12l-.62-.06a3.5 3.5 0 0 0 3.24 2.43 7.34 7.34 0 0 1-4.36 1.49l-.81-.05a9.96 9.96 0 0 0 5.36 1.56c6.4 0 9.91-5.32 9.9-9.9v-.5c.69-.49 1.28-1.1 1.74-1.81-.63.3-1.3.48-2 .56A3.33 3.33 0 0 0 20 5.33"
                       ></path>
                </svg>
            </span>
        </a>

       <a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode( $url ); ?>" title="Facebook share" target="_blank" class="pr-[12px] block">
            <span class="social-share-icon">
                <svg width="1.5rem" height="1.5rem" viewBox="0 0 24 24" fill="#A8A8A8">
                    <path
                        d="M19.75 12.04c0-4.3-3.47-7.79-7.75-7.79a7.77 7.77 0 0 0-5.9 12.84 7.77 7.77 0 0 0 4.69 2.63v-5.49h-1.9v-2.2h1.9v-1.62c0-1.88 1.14-2.9 2.8-2.9.8 0 1.49.06 1.69.08v1.97h-1.15c-.91 0-1.1.43-1.1 1.07v1.4h2.17l-.28 2.2h-1.88v5.52a7.77 7.77 0 0 0 6.7-7.71"
                        >
                    </path>
                </svg>
            </span>
        </a>

        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( $url ); ?>" title="Facebook share" target="_blank" class="pr-[12px] block">
            <span class="">
               <svg width="1.5rem" height="1.5rem"
                    viewBox="0 0 24 24" fill="#A8A8A8">
                    <path
                        d="M19.75 5.39v13.22a1.14 1.14 0 0 1-1.14 1.14H5.39a1.14 1.14 0 0 1-1.14-1.14V5.39a1.14 1.14 0 0 1 1.14-1.14h13.22a1.14 1.14 0 0 1 1.14 1.14zM8.81 10.18H6.53v7.3H8.8v-7.3zM9 7.67a1.31 1.31 0 0 0-1.3-1.32h-.04a1.32 1.32 0 0 0 0 2.64A1.31 1.31 0 0 0 9 7.71v-.04zm8.46 5.37c0-2.2-1.4-3.05-2.78-3.05a2.6 2.6 0 0 0-2.3 1.18h-.07v-1h-2.14v7.3h2.28V13.6a1.51 1.51 0 0 1 1.36-1.63h.09c.72 0 1.26.45 1.26 1.6v3.91h2.28l.02-4.43z"
                       ></path>
                </svg>
            </span>
        </a>
 
          <a href="" class="pr-[12px]"  onclick="javascript: navigator.clipboard.writeText('<?php echo urlencode( $url ) ?>');return:false;">
           <span class="social-share-icon">
               <svg width="1.5rem" height="1.5rem" viewBox="0 0 24 24" fill="#A8A8A8">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.57 14.67c0-.57.13-1.11.38-1.6l.02-.02v-.02l.02-.02c0-.02 0-.02.02-.02.12-.26.3-.52.57-.8L7.78 9v-.02l.01-.02c.44-.41.91-.7 1.44-.85a4.87 4.87 0 0 0-1.19 2.36A5.04 5.04 0 0 0 8 11.6L6.04 13.6c-.19.19-.32.4-.38.65a2 2 0 0 0 0 .9c.08.2.2.4.38.57l1.29 1.31c.27.28.62.42 1.03.42.42 0 .78-.14 1.06-.42l1.23-1.25.79-.78 1.15-1.16c.08-.09.19-.22.28-.4.1-.2.15-.42.15-.67 0-.16-.02-.3-.06-.45l-.02-.02v-.02l-.07-.14s0-.03-.04-.06l-.06-.13-.02-.02c0-.02 0-.03-.02-.05a.6.6 0 0 0-.14-.16l-.48-.5c0-.04.02-.1.04-.15l.06-.12 1.17-1.14.09-.09.56.57c.02.04.08.1.16.18l.05.04.03.06.04.05.03.04.04.06.1.14.02.02c0 .02.01.03.03.04l.1.2v.02c.1.16.2.38.3.68a1 1 0 0 1 .04.25 3.2 3.2 0 0 1 .02 1.33 3.49 3.49 0 0 1-.95 1.87l-.66.67-.97.97-1.56 1.57a3.4 3.4 0 0 1-2.47 1.02c-.97 0-1.8-.34-2.49-1.03l-1.3-1.3a3.55 3.55 0 0 1-1-2.51v-.01h-.02v.02zm5.39-3.43c0-.19.02-.4.07-.63.13-.74.44-1.37.95-1.87l.66-.67.97-.98 1.56-1.56c.68-.69 1.5-1.03 2.47-1.03.97 0 1.8.34 2.48 1.02l1.3 1.32a3.48 3.48 0 0 1 1 2.48c0 .58-.11 1.11-.37 1.6l-.02.02v.02l-.02.04c-.14.27-.35.54-.6.8L16.23 15l-.01.02-.01.02c-.44.42-.92.7-1.43.83a4.55 4.55 0 0 0 1.23-3.52L18 10.38c.18-.21.3-.42.35-.65a2.03 2.03 0 0 0-.01-.9 1.96 1.96 0 0 0-.36-.58l-1.3-1.3a1.49 1.49 0 0 0-1.06-.42c-.42 0-.77.14-1.06.4l-1.2 1.27-.8.8-1.16 1.15c-.08.08-.18.21-.29.4a1.66 1.66 0 0 0-.08 1.12l.02.03v.02l.06.14s.01.03.05.06l.06.13.02.02.01.02.01.02c.05.08.1.13.14.16l.47.5c0 .04-.02.09-.04.15l-.06.12-1.15 1.15-.1.08-.56-.56a2.3 2.3 0 0 0-.18-.19c-.02-.01-.02-.03-.02-.04l-.02-.02a.37.37 0 0 1-.1-.12c-.03-.03-.05-.04-.05-.06l-.1-.15-.02-.02-.02-.04-.08-.17v-.02a5.1 5.1 0 0 1-.28-.69 1.03 1.03 0 0 1-.04-.26c-.06-.23-.1-.46-.1-.7v.01z"
                        ></path>
                </svg></span>
            
</a>
    </div>

</div>