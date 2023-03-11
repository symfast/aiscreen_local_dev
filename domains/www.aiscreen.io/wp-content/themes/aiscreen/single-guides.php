
<?php
/**
 * The main template file
 *
 */
get_header(); ?>
<main>
    <section class="guides-wrapper">
        <?php  get_template_part( 'template-parts/guides/guides-menu-mobile' ); ?>
        <?php  get_template_part( 'template-parts/guides/guides-menu' ); ?>
        <?php  get_template_part( 'template-parts/guides/page-content' ); ?>
        <?php  get_template_part( 'template-parts/guides/guides-navigation' ); ?>
    </section>
      <?php if( have_rows('block') ): ?>
      <?php while( have_rows('block') ): the_row(); ?>
           <?php  get_template_part( 'template-parts/blocks/'.get_row_layout() ); ?>
        <?php endwhile; ?>
      <?php endif; ?> 
 </main>
     <script>
            jQuery(document).ready(function ($) {
                $("a").on('click', function (event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {
                            window.location.hash = hash;
                        });
                    }
                });
            });
        </script>
        <script>
          jQuery(document).ready(function ($) {
            const changeNav = (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting && entry.intersectionRatio >= 0.20) {
                        document.querySelector('.guides-navigation  .active').classList.remove('active');
                        let id = entry.target.getAttribute('id');
                        let newLink = document.querySelector(`[href="#${id}"]`).classList.add('active');
                    }
                });
            }
            const options = {
                threshold: 0.20
            }
            const observer = new IntersectionObserver(changeNav, options);
            const sections = document.querySelectorAll('.guides-content__block');
            sections.forEach((section) => {
                observer.observe(section);
            });
      
           });
        </script>
<?php
get_footer();