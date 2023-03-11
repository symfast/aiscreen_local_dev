<div class="page page_active page_faded" id="page_services"
     data-page-name="services" data-page-theme="dark" data-page-title="Services">
<div class="page__bg"></div>
<div class="wrap wrap_services" id="wrap_services">
  <section class="section section_header animation_chars">
    <div class="h-big mh1 section_header__header animation__wrapper">
      <span>Services</span>
    </div>
  </section>
  <section class="section section_services">
    <div class="section_services__items">
      <?php $q = new WP_Query(array('post_type' => 'services'));?>
       <?php if( $q->have_posts() ) : ?>
       <?php $i=0 ?> 
       <?php while( $q->have_posts() ) : $q->the_post(); ?>
          <?php if (get_field('menu_show') ) : ?>
          <?php $i++; ?>
           <a class="section_services__item section_services__item_page_service-0<?php echo $i; ?>" href="<?php echo  get_permalink() ?>"
               data-show-page="service-0<?php echo $i; ?>">
              <div class="section_services__wrapper">
                <div class="h3 section_services__title"><?php echo get_the_title() ?></div>
                <div class="p2u section_services__text"><?php the_field('description'); ?></div>
                <div class="p2u section_services__number">0<?php echo $i; ?></div>
              </div>
            </a>
          <?php endif; ?> 
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </section>
</div>
</div>