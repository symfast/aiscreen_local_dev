<div class="flex flex-col relative w-full md:w-auto">
    <div class="relative rounded-[15px] w-full md:w-[460px] h-[53px] bg-[#F9F9F9] ">
         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg width="2.0625rem" height="2.0625rem" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M28.1183 27.1462L22.747 21.7749C24.3956 19.895 25.3052 17.5164 25.3052 14.9927C25.3052 12.238 24.2323 9.6485 22.2846 7.70081C20.3369 5.75311 17.7474 4.68024 14.9927 4.68024C12.238 4.68024 9.64844 5.75311 7.70074 7.70081C5.75305 9.6485 4.68018 12.238 4.68018 14.9927C4.68018 17.7474 5.75305 20.337 7.70074 22.2847C9.64844 24.2324 12.238 25.3052 14.9927 25.3052C17.5163 25.3052 19.895 24.3956 21.7749 22.7471L27.1461 28.1183C27.2804 28.2526 27.4563 28.3198 27.6322 28.3198C27.8081 28.3198 27.984 28.2526 28.1183 28.1183C28.3868 27.8498 28.3868 27.4147 28.1183 27.1462ZM8.67291 21.3125C6.98505 19.6243 6.05518 17.3799 6.05518 14.9927C6.05518 12.6056 6.98505 10.3612 8.67291 8.67297C10.3611 6.98511 12.6056 6.05524 14.9927 6.05524C17.3798 6.05524 19.6242 6.98511 21.3124 8.67297C23.0003 10.3612 23.9302 12.6056 23.9302 14.9927C23.9302 17.3799 23.0003 19.6243 21.3124 21.3125C19.6242 23.0004 17.3798 23.9302 14.9927 23.9302C12.6056 23.9302 10.3611 23.0004 8.67291 21.3125Z"
                    fill="#95989E" />
            </svg>
        </div>
        <input id="keyword" type="text"  onkeyup="blog_search()" class="focus-clear block w-full pl-[55px] bg-[#F9F9F9] border-0 rounded-[15px] h-[53px]"
            placeholder="Search Articles">
    </div>
    <div id="blog_content"  class="absolute top-[60px] rounded-[15px] w-full md:w-[460px] h-auto bg-[#F9F9F9]">
      
    </div>
</div>


<script type="text/javascript">

    function blog_search(){
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'blog_search', keyword: jQuery('#keyword').val() },
            success: function(data) {
                jQuery('#blog_content').html( data );
            }
        });
    } 

</script>