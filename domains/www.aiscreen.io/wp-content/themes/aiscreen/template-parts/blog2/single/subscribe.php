<div class="border-t border-solid pt-[41px] mb-[68px]">
    <h2 class="text-[25px] leading-[33.75px] font-[700] text-[#14121F]  capitalize mb-[17px]">Sign up for
        AIScreen digital signage Newsletter</h2>
    <p class="text-[16px] leading-[27px] font-[500] text-[#14121F]  capitalize mb-[26px] md:w-[474px]">A weekly
        resourceful newsletter that helps boost your business, increase productive and
        sales.</p>

<?php // echo do_shortcode( '[newsletter form="1"]' ); ?>
<?php echo do_shortcode( '[contact-form-7 id="5089" title="subscribe"]' ); ?>



  <!-- <div class="flex flex-col md:flex-row border-[#E6E8EC] md:border border-solid rounded-[30px] h-[50px] max-w-[462px]">
        <div class="relative flex items-stretch flex-grow focus-within:z-10 mb-[10px] md:mb-0">
            <input type="email" name="email" id="email" class="focus-clear pl-10 w-full focus:shadow-none md:border-0 rounded-[30px] border-[#E6E8EC] border border-solid"
                placeholder="Write your email">
        </div>
        <button type="button"
            class="bg-[#14121F] text-[#ffffff] px-[32px] py-[11px] rounded-[30px] text-[16px] leading-[21.6px] font-[700] md:m-[3px] sm:mt-[10px]">
            Subscribe
        </button>
    </div>  -->
 
</div>


<script>
jQuery('.newsletter-submit').click(function(e) {
    e.preventDefault();
    var email = jQuery('.newsletter-email').val();

    if (email == '') {
        jQuery('.news-success-msg').html(
            '<p><span></span>The e-mail entered is not valid. Please check and resubmit.</p>').show();
    } else {
        jQuery.ajax({
            type: "POST",
            url: "/wp-content/plugins/newsletter/do/subscribe-ajax.php",
            data: jQuery('.newsletter-widget form').serialize(),
            success: function(da) {
                if (da == 'error') {
                    jQuery('.newsletter-email').css();
                } else if (da == 'already_confirmed') {
                    jQuery('.news-success-msg').html(
                            '<p><span></span>You have already subscribed to Adonis newsletter.</p>')
                        .show();
                } else if (da == 'Wrong email') {
                    jQuery('.news-success-msg').html(
                        '<p><span></span>The e-mail entered is not valid. Please check and resubmit.</p>'
                        ).show();
                } else {
                    jQuery('.news-success-msg').html(
                        '<p><span></span>You have successfully subscribed to Adonis newsletter with ' +
                        email + '.</p>').show();
                    jQuery('.input_clear').val('');
                }
            }
        });
    }
});
</script>