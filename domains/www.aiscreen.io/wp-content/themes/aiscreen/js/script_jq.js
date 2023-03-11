$(document).ready(function () {

  $(function () {
    if (navigator.userAgent.indexOf('Safari') != -1 &&
      navigator.userAgent.indexOf('Chrome') == -1) {
      $("body").addClass("for_apple");

    }
  });

  // ========================================
  // VARIABLES
  var windowWidth = $(window).width();
  // END VARIABLES
  // ========================================
  // HEADER
  // --------------------
  // --------------------
  // BURGER DESKTOP
  $('.header__burger').click(function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.header__mobile').toggleClass('active');
    $('body').toggleClass('lock');
  });

  $('.block_close').click(function (e) {
    e.preventDefault();
    $('.header__burger').removeClass('active');
    $('.header__mobile').removeClass('active');
    $('body').removeClass('lock');
  });
  // END BURGER DESKTOP
  // --------------------
  // --------------------
  // MENU MOBILE
  $('.btn_submenu').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $('.btn_submenu').removeClass('active');
      $('.btn_submenu').next().slideUp();
    } else {
      $(this).addClass('active');
      $('.btn_submenu').next().slideUp();
      $(this).next().slideDown();
    }
  });
  // END MENU MOBILE
  // --------------------
  // --------------------
  // END HEADER
  // ========================================
  // ========================================
  // MAIN
  // --------------------
  // --------------------
  // VIDEO
  // $(document).on("click", '.bl_video .video_img', function () {
  //   $(this).hide();
  //   // $('.bl_video__video').each(function () {
  //   //   $('video').get(0).pause();
  //   // });
  //   $(this).prev().find("video").get(0).play();
  // });

  // $(document).mouseup(function (e) {
  //   var video = $("video");
  //   if (!video.is(e.target) // если клик был не по нашему блоку
  //     &&
  //     video.has(e.target).length === 0) { // и не по его дочерним элементам
  //     $('video').get(0).pause(); // скрываем его
  //   }
  // });
  // END VIDEO
  // --------------------
  // ========================================
  // ========================================
  // TRUST
  // var trust_li = $(".trust_li");
  // var trust_len = trust_li.length;

  // let random = Math.floor(Math.random() * trust_len);
  // let random_html = $(".trust_li_main").eq(random).html();
  // trust_li.eq(0).find('img').replaceWith(random_html);

  // $('#button').click(function () {


  //   return false;
  // });
  // var active = $('.trust_li1 > img');
  // var no_active = $('.trust_li2 > img');
  // $('.trust_li2 ').append(active);
  // $('.trust_li1 ').append(no_active);

/*
  var parent = $(".trust_ul");
  setInterval(function () {
    // var logo1 = $(".logo1");
    var logo1 = $(".trust_li");

    // console.log(logo1);
    while (logo1.length) {
      parent.append(logo1.splice(Math.floor(Math.random() * logo1.length), 1)[0]);
    }
  },
    5000);
*/
  // setInterval(function () {
  //   var logo2 = $(".logo2");
  //   // console.log(logo1);
  //   while (logo2.length) {
  //     parent.append(logo2.splice(Math.floor(Math.random() * logo2.length), 1)[0]);
  //   }
  // },
  //   10000);
  // END TRUST
  // ========================================
  // ========================================
  // --------------------
  // FORM SCHEDULE
  $('#radio_1').click(function (e) {
    e.preventDefault();
    $('.radio').removeClass('active');
        $(this).addClass('active');

    $('input[name="screen_target"][value="Customers"]').trigger('click');

    
  });
  
  $('#radio_2').click(function (e) {
    e.preventDefault();
    $('.radio').removeClass('active');
    $(this).addClass('active');
      $('input[name="screen_target"][value="Employees"]').trigger('click');
  });
  

  $('#radio_3').click(function (e) {
    e.preventDefault();
    $('.radio').removeClass('active');
    $(this).addClass('active');
      $('input[name="screen_target"][value="Both"]').trigger('click');
  });
  


   $('.form__radio .radio:first label').click();
    $('.schedule_submit').click(function (e) {
    if ($('.check_privacy_policy').is(':checked')){
    } else {
     e.preventDefault();
     alert('By checking this box, I approve that AIScreen may contact me by phone or email entered on this form. I confirm that I’ve read the Privacy Policy.');         }
   });

  
    $('.contact_submit').click(function (e) {
    if ($('.check_privacy_policy').is(':checked')){
    } else {
     e.preventDefault();
     alert('By checking this box, I approve that AIScreen may contact me by phone or email entered on this form. I confirm that I’ve read the Privacy Policy.');         }
   });


  // END FORM SCHEDULE
  // --------------------
  // --------------------
  // TABLE


/*  $('.bl_table__top_btns ul li a').click(function (e) {
    e.preventDefault();
    $('.bl_table__top_btns ul li a').removeClass('active');
    $(this).addClass('active');
    //let price_launch = $('.price_launch');
    //let price_business = $('.price_business');
    //let price_business_extra = $('.price_business_extra');


    if ($('.btn_discount_table').hasClass('active')) {
     // price_launch.html('15');
     // price_business.html('20');
     // price_business_extra.html('35');
    } else {
     // price_launch.html('20');
     // price_business.html('30');
     // price_business_extra.html('50');
    }
  });
*/

   $('.btn_discount_table_monthly').click(function (e) {
    e.preventDefault();
         $('.bl_table__top_btns ul li a').removeClass('active');
         $(this).addClass('active');
         $( '.price-аnnual').hide();
         $('.price-monthly').show();
    });
  
   $('.btn_discount_table_аnnual').click(function (e) {
    e.preventDefault();
      $('.bl_table__top_btns ul li a').removeClass('active');
      $(this).addClass('active');
      $( '.price-аnnual').show();
      $( '.price-monthly' ).hide();
    });


 /* $('.btn_discount_table').click(function (e) {
    e.preventDefault();

    $('.bl_table__top_btns ul li a').removeClass('active');
    $(this).addClass('active');
     
  });
*/
 // $('.bl_table__top_btns ul li:eq(1) a').click();
  

  // --------------------
  // Mobile Accordeon
  $('.btn_features_mob').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $('.btn_features_mob').removeClass('active');
      $('.bl_table__items .table__item > ul').slideUp();
      $('.btn_features_mob span').html('Show');
    } else {
      $('.bl_table__items .table__item > ul').slideUp();
      $(this).prev().slideDown();

      $('.btn_features_mob span').html('Show');
      $(this).find('span').html('Hide');

      $('.btn_features_mob').removeClass('active');
      $(this).addClass('active');
    }
  });







  var width992 = false;
  $(window).resize(function () {
    var windowWidth2 = $(window).width();
    if (!width992 && windowWidth2 < 993) {
      $('.bl_table__items ul .active .table__item .btn_features_mob').click();
      width992 = true;
    }
  });
  if (windowWidth <= 993) {
    $('.bl_table__items ul .active .table__item .btn_features_mob').click();

  }
  // End Mobile Accordeon
  // --------------------

  // Features
  $('.bl_table__features .btn_hide_features').click(function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.bl_table__features > ul').slideToggle();
  });
 

  // End Features
 
  // --------------------
  // END TABLE
  // --------------------
  // --------------------
  // FAQ
  $('.bl_faq__items > ul > li').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $('.bl_faq__items > ul > li').removeClass('active');
      // $(this).removeClass('active');
    } else {
      $('.bl_faq__hidden').slideUp();
      $(this).find('.bl_faq__hidden').slideDown();
      $('.bl_faq__items > ul > li').removeClass('active');
      $(this).addClass('active');
    }
  });
  $('.bl_faq__items > ul > li:first').click();
  // $('.form__radio .radio:first label').click();
  // END FAQ
  // --------------------
  // --------------------
  // TEMPLATES
  

/*
  $('.filter__top > .filter__menu ul li:first a').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active')
      $('.filter__bottom').css('display', 'none');
      $('.filter__bottom > .filter__menu ul li a').removeClass('active');
    } else {
      $(this).addClass('active')
      $('.filter__bottom').css('display', 'flex');
    }
  });
  $('.filter__bottom > .filter__menu ul li a').click(function (e) {
    e.preventDefault();
    $('.filter__bottom > .filter__menu ul li a').removeClass('active');
    $(this).addClass('active')
  });

  $('.bl_filter__orientation > .filter__menu ul li a').click(function (e) {
    e.preventDefault();
    $('.bl_filter__orientation > .filter__menu ul li a').removeClass('active');
    $(this).toggleClass('active')
  });
*/


  $('.filter__content_mobile').click(function (e) {
    e.preventDefault();
    if (windowWidth <= 769) {
      $(this).toggleClass('active');
      $('.bl_filter__hidden').slideToggle(0);
    }
  });
  // END TEMPLATES
  // --------------------
  // --------------------
  // END MAIN
  // ========================================
  // ========================================
  // FOOTER
  // --------------------
  // Мобильное меню
  // --------------------
  $('.menu__item h2').click(function (e) {
    e.preventDefault();
    if ($(window).width() <= 600) {
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).next().slideUp();
      } else {
        $('.menu__item h2').removeClass('active');
        $(this).addClass('active');
        $('.menu__item ul').slideUp();
        $(this).next().slideDown();
      }
    }
  });

  var sliderAdded = false;
  $(window).resize(function () {
    var windowWidth2 = $(window).width();
    if (!sliderAdded && windowWidth2 < 601) {
      $('.menu__item:first-child h2').click();
      sliderAdded = true;
    }
  });
  //========================================================================================================================================================
  //========================================================================================================================================================
  $('.custom-content__items h3').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.custom-content__items h3').removeClass('active');
      $(this).addClass('active');
      $('.custom-content__items custom-content__block').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================
  //========================================================================================================================================================
  


  $('.guides-menu__item h3').click(function (e) {
    //e.preventDefault();
	    
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.guides-menu__item h3').removeClass('active');
      $(this).addClass('active');
      $('.guides-menu__item ul').slideUp();
      $(this).next().slideDown();
    }
  });


      
  
 $(document).ready(function () {
    $( ".guides-menu__item" ).has( "._active" ).find( "ul" ).slideDown();
	$( ".guides-menu__item" ).has( "._active" ).closest(".guides-menu__item").find( "h3" ).addClass('_active');

  });




  //========================================================================================================================================================
  // $('.guides-menu__item-blog .guides-menu__title-blog').click(function (e) {
  //   e.preventDefault();
  //   if ($(this).hasClass('active')) {
  //     $(this).removeClass('active');
  //     $(this).next().slideUp();
  //   } else {
  //     $('.guides-menu__item-blog .guides-menu__title-blog').removeClass('active');
  //     $(this).addClass('active');
  //     $('.guides-menu__item-blog .guides-menu__list-blog').slideUp();
  //     $(this).next().slideDown();
  //   }
  // });
  //========================================================================================================================================================
  $('.menu-blog__items .menu-blog__title').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.menu-blog__items .menu-blog__title').removeClass('active');
      $(this).addClass('active');
      $('.menu-blog__items .menu-blog__block').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================
  //========================================================================================================================================================
  $('.blog-menu-mobile__item .blog-menu-mobile__title').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.blog-menu-mobile__item .blog-menu-mobile__title').removeClass('active');
      $(this).addClass('active');
      $('body').addClass('lock-blog')
      $('.blog-menu-mobile__items').addClass('active')
      $('.blog-menu-mobile__item .blog-menu-mobile__items').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================
  $('.items-blog__item .items-blog__title').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.items-blog__item .items-blog__title').removeClass('active');
      $(this).addClass('active');
      $('.items-blog__item .items-blog__list').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================
  $('.guides-menu-mobile__body .guides-menu-mobile__lable').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.guides-menu-mobile__body .guides-menu-mobile__lable').removeClass('active');
      $(this).addClass('active');
      $('body').addClass('lock-guides')
      $('.guides-menu-mobile__items').addClass('active')
      $('.guides-menu-mobile__body .guides-menu-mobile__items').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================
  $('.guides-menu-mobile__items .guides-menu-mobile__title').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.guides-menu-mobile__items .guides-menu-mobile__title').removeClass('active');
      $(this).addClass('active');
      $('.guides-menu-mobile__items .guides-menu-mobile__list').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================
  $('.custom-content-mobile__items .custom-content-mobile__title').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.custom-content-mobile__items .custom-content-mobile__title').removeClass('active');
      $(this).addClass('active');
      $('.custom-content-mobile__items .custom-content-mobile__block').slideUp();
      $(this).next().slideDown();
    }
  });
  //========================================================================================================================================================

  // END FOOTER
  // ========================================
  // ========================================
  // MASONRY
  // ========================================
  // FEATURE
  // --------------------
  // --------------------
 
 //$(document).ready(function () {

/*  if (windowWidth > 1024) {
    $('.bl_simple_set_up__bottom ul').masonry({
      // options...
      itemSelector: '.bl_simple_set_up__bottom ul li',
      // columnWidth: 50,
    });
  }
  // --------------------
  // --------------------
  // TEMPLATES
 /* if (windowWidth > 1024) {
    $('.bl_templates__ul ul').masonry({
      // options...
      itemSelector: '.bl_templates__ul ul li',
      // columnWidth: 50,
    });
  }
*/
//});


  // // --------------------
  // // Закрепление блока
  // $window = $(window);
  // $nav = $('.bl_templates__text');
  // $nav.css('width', $nav.outerWidth());
  // $h = $nav.offset().top;
  // $h60 = $nav.offset().top - 60;
  // $h2_fixed_bottom = $h60 - ($nav.height() + 120) + $('.bl_templates').height();

  // $window.scroll(function () {
  //   if ($window.scrollTop() > $h60) {
  //     $nav.addClass('fixed');
  //     if ($window.scrollTop() > $h2_fixed_bottom) {
  //       $nav.addClass('fixed_bottom');
  //     } else {
  //       $nav.removeClass('fixed_bottom');
  //     }
  //   } else {
  //     $nav.removeClass('fixed');
  //   }
  //   // if (windowWidth > 768) {
  //   // } else if (windowWidth <= 768) {
  //   //   if ($window.scrollTop() > $h) {
  //   //     $nav.addClass('fixed');
  //   //     console.log('menshe 768')
  //   //   } else {
  //   //     $nav.removeClass('fixed');
  //   //   }
  //   // }
  // });
  // --------------------
  // END TEMPLATES
  // --------------------
  // --------------------

  // END FEATURE
  // ========================================
  //========================================================================================================================================================
  //========================================================================================================================================================
  // SCROLL STICKY
 

  $(window).scroll(function () {
    var height = $(window).scrollTop() + $(window).height() - $('footer').offset().top;
    if (height > -300) {
      $('.guides-menu').addClass('sticky');
    } else {
      $('.guides-menu').removeClass('sticky');
    }
  });
  $(window).scroll(function () {
    var height = $(window).scrollTop() + $(window).height() - $('footer').offset().top;
    if (height > -300) {
      $('.guides-navigation').addClass('sticky');
    } else {
      $('.guides-navigation').removeClass('sticky');
    }
  });
 



  //========================================================================================================================================================
  $(window).scroll(function () {
    ($(window).scrollTop() > 375) ?
      $('.custom-content__menu').addClass('fixed') :
      $('.custom-content__menu').removeClass('fixed');
  });
  $(window).scroll(function () {
    var height = $(window).scrollTop() + $(window).height() - $('footer').offset().top;
    if (height > -200) {
      $('.custom-content__menu').addClass('sticky');
    } else {
      $('.custom-content__menu').removeClass('sticky');
    }
  });
  //========================================================================================================================================================
  $(window).scroll(function () {
    ($(window).scrollTop() > 1050) ?
      $('.menu-blog').addClass('fixed') :
      $('.menu-blog').removeClass('fixed');
  });
  $(window).scroll(function () {
    var height = $(window).scrollTop() + $(window).height() - $('footer').offset().top;
    if (height > -200) {
      $('.menu-blog').addClass('sticky');
    } else {
      $('.menu-blog').removeClass('sticky');
    }
  });
  //========================================================================================================================================================
  //========================================================================================================================================================
  $(window).scroll(function () {
    ($(window).scrollTop() > 345) ?
      $('.custom-content-mobile').addClass('fixed') :
      $('.custom-content-mobile').removeClass('fixed');
  });
  //========================================================================================================================================================
  // var sliderAdded2 = false;
  // $(window).resize(function () {
  //   var windowWidth3 = $(window).width();
  //   if (!sliderAdded3 && windowWidth3 > 1024) {
  //     sliderAdded2 = true;
  //     $('.bl_simple_set_up__bottom ul').masonry({
  //       // options...
  //       itemSelector: '.bl_simple_set_up__bottom ul li',
  //       // columnWidth: 50,
  //     });
  //   }
  // });
  //========================================================================================================================================================
  // Seach
  //========================================================================================================================================================
  $(document).ready(function () {
    $(".blog-menu-mobile__btn").click(function () {
      $(".blog-menu-mobile__wrap, .blog-menu-mobile__input").toggleClass("active");
      $('.blog-menu-mobile__arrow').click(function () {
        $('.blog-menu-mobile__wrap, .blog-menu-mobile__input').removeClass('active');
        // $(this).addClass('active');
      });
      // $("blog-menu-mobile__input[type='text']").focus();
    });
  });
  //========================================================================================================================================================
  $(document).ready(function () {
    $(".guides-menu-mobile__btn").click(function () {
      $(".guides-menu-mobile__wrap, .guides-menu-mobile__input").toggleClass("active");
      $('.guides-menu-mobile__arrow').click(function () {
        $('.guides-menu-mobile__wrap, .guides-menu-mobile__input').removeClass('active');
        // $(this).addClass('active');
      });
      // $("blog-menu-mobile__input[type='text']").focus();
    });
  });
  //========================================================================================================================================================

  // END MASONRY
  // ========================================
  // ========================================
  // SELECT STYLER
  (function ($) {
    $(function () {

      $('select').styler();

    });
  })(jQuery);
  // END SELECT STYLER
  // ========================================
  // ========================================
  // COOKIE
  $('.btn_close_cookie').click(function (e) {
    e.preventDefault();
    $('.bl_cookies').hide();
  });
  // END COOKIE
  // ========================================


});

// if (window.matchMedia("(max-width: 600px)").matches) {
//   document.querySelectorAll('.menu__item h2').onclick;
// }

// if (window.innerWidth <= 600) {
//   let kkk = document.querySelectorAll('.menu__item h2').onclick;
//   console.log(kkk)
// }