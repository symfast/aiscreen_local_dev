<footer class="main_footer">
  <div class="container">
    <div class="footer__content">
      <div class="footer__top">
        <div class="footer__menu">
          <div class="menu__item">
            <h2>
              Industries
            </h2>

            <?php wp_nav_menu([
              'menu'            => 'industries',
              'container'       => false,

            ]); ?>


          </div>
          <div class="menu__item">
            <h2>
              Company
            </h2>

            <?php wp_nav_menu([
              'menu'            => 'company',
              'container'       => false,

            ]); ?>

          </div>
          <div class="menu__item">

          </div>
        </div>
        <div class="footer__right">
          <div class="footer__logo">
            <a href="/">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="logo_footer">
            </a>
          </div><?php dynamic_sidebar('footer_text'); ?>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="footer__copyright"><?php dynamic_sidebar('footer_copyright'); ?></div>
        <div class="footer__soc">

          <?php dynamic_sidebar('footer_sociale_link'); ?>

        </div>
      </div>
    </div>
  </div>
</footer>


<section class="bl_cookies">
  <div class="container">
    <div class="bl_cookies__content">
      <p>
        We use cookies to enable the proper functioning and security of our websites, and help us offer you the best
        possible
        user experience. By clicking Accept, you consent to the use of these
        cookies for advertising and analytics. You can change your cookie settings at any time. For more information,
        please
        read our <a href="#">Privacy Policy.</a>
      </p>
      <div class="bl_cookies__right">
        <a href="#" class="btn_free_trial">
          Got it
        </a>
        <a href="#" class="btn_close_cookie">
          <img src="<?php echo get_template_directory_uri() ?>/img/icons/btn_close_black.svg" alt="btn_close_cookie">
          <span>Close</span>
        </a>
      </div>
    </div>
  </div>
</section>