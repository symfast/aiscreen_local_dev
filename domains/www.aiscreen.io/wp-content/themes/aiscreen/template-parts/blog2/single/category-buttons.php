<div class="flex gap-[10px] flex-row  mb-[68px] mt-[41px]">
                <?php $term_list = wp_get_post_terms( $post->ID, 'category' ); if( $term_list ) { foreach( $term_list as $term ) { ?>
                <button
                    class="rounded-[10px] px-[17px] py-[9px] text-[16px] font-[500]  leading-[21.6px] bg-[#F1F1F1] hover:bg-[#0071E2] hover:text-[#FFFFFF]">
                    <?php echo  $term->name; ?>
                </button>
                <?php }} ?>
            </div>

