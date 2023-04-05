<?php 
$images = get_field('images');
$size = 'large'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-main mb-[17px]">
    <div class="swiper-wrapper">
        <?php foreach( $images as $image_id ): ?>
        <div class="swiper-slide">
            <?php echo wp_get_attachment_image( $image_id, $size,"", array( "class" => "block object-cover w-full h-[223px] md:h-[380px]  rounded-[16px] md:rounded-[20px]" ) ); ?>
        </div>
        <?php endforeach; ?>
    </div>
    <div
        class="swiper-button-next w-[40px] h-[40px] right-[17px]">
        <svg width="2.5rem" height="2.5rem" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="20" transform="matrix(-1 0 0 1 40 0)" fill="#F5F5F8" />
            <path d="M17 13L24.2 20.2L17 27.4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" fill="none" />
        </svg>
    </div>
    <div class="swiper-button-prev w-[40px] h-[40px] left-[17px]">
        <svg width="2.5rem" height="2.5rem" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="20" fill="#F5F5F8" />
            <path d="M22.2002 13L15.0002 20.2L22.2002 27.4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"  fill="none"/>
        </svg>
    </div>
</div>
<div thumbsSlider="" class="swiper swiper-thumbs  hidden  md:block">
    <div class="swiper-wrapper mr-[17px]">
        <?php foreach( $images as $image_id ): ?>
        <div class="swiper-slide">
            <?php echo wp_get_attachment_image( $image_id, $size,"", array( "class" => "block object-cover w-[195px] h-[130px] rounded-[20px] border-4 border-solid  border-[#ffffff]" )  ); ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
 
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper_thumbs = new Swiper(".swiper-thumbs", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

var swiper_main = new Swiper(".swiper-main", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper_thumbs,
    },
});
</script>

<?php endif; ?>