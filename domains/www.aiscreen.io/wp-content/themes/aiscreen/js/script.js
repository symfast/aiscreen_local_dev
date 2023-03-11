// ========================================
// IMG > TO > SVG
// --------------------
jQuery('img.svg').each(function () {
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  jQuery.get(imgURL, function (data) {
    // Get the SVG tag, ignore the rest
    var $svg = jQuery(data).find('svg');
    // Add replaced image's ID to the new SVG
    if (typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
    }
    // Add replaced image's classes to the new SVG
    if (typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass + ' replaced-svg');
    }
    // Remove any invalid XML tags as per http://validator.w3.org
    $svg = $svg.removeAttr('xmlns:a');
    // Replace image with new SVG
    $img.replaceWith($svg);
  }, 'xml');
});
// --------------------
// END IMG > TO > SVG
// ========================================
// SCROLL
// $(window).scroll(function () {
//     var top2 = $(document).scrollTop();
//     if (top2 > 160) {
//         $(".header__fixed").slideDown();
//     } else if (top2 < 160) {
//         $(".header__fixed").slideUp();
//     }
// });
// END SCROLL
// ========================================

// var windowWidthSwiper = document.documentElement.clientWidth;
// ========================================
// ========================================

// --------------------
// BLOCK HEADER
const bottom__slide_left = new Swiper('.bottom__slide_left', {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 3000,
  effect: "fade",
  autoplay: true,
  speed: 800,
  simulateTouch: false,
});

const bottom__slide_right = new Swiper('.bottom__slide_right', {
  slidesPerView: 1,
  loop: false,
  spaceBetween: 1500,
  effect: "fade",
  autoplay: true,
  speed: 800,
  simulateTouch: false,

});
// END BLOCK HEADER
// --------------------
// --------------------
// REVIEWS

const bl_reviews__slider = new Swiper('.bl_reviews__slider', {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 20,
  // effect: "fade",
  // autoplay: true,
  speed: 800,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// END REVIEWS
// --------------------
// --------------------
// TICKER
const bl_ticker__slider = new Swiper('.bl_ticker__slider', {
  slidesPerView: "auto",
  // spaceBetween: 1500,
  freeMode: {
    enabled: true,
    sticky: true,
    momentumBounce: true,
    minimumVelocity: 0,
  },
  autoplay: {
    delay: 0,
    disableOnInteraction: false, // или сделать так, чтобы восстанавливался autoplay после взаимодействия
    pauseOnMouseEnter: true,
  },
  speed: 8000,
  loop: true,
  // cssMode: true,
  // on: {
  //   init() {
  //     this.el.addEventListener('mouseenter', () => {
  //       this.autoplay.stop();
  //     });

  //     this.el.addEventListener('mouseleave', () => {
  //       this.autoplay.start();
  //     });
  //   }
  // },
});

// $('.bl_ticker__slider').on('mouseover', function () {
//   bl_ticker__slider.autoplay.stop();
// });
// $('.bl_ticker__slider').on('mouseout', function () {
//   bl_ticker__slider.autoplay.start();
// });
// END TICKER
// --------------------
// --------------------
// TICKER
const bl_ticker__slider2 = new Swiper('.bl_ticker__slider2', {
  slidesPerView: "auto",
  // spaceBetween: 1500,
  freeMode: {
    enabled: true,
    sticky: true,
    momentumBounce: true,
    minimumVelocity: 0,
  },
  autoplay: {
    delay: 0,
    disableOnInteraction: false, // или сделать так, чтобы восстанавливался autoplay после взаимодействия
    pauseOnMouseEnter: true,
  },
  speed: 8000,
  loop: true,
  centeredSlides: true,
});
// END TICKER
// --------------------
// --------------------
// SEE WHAT
const bl_see_what__slider = new Swiper(".bl_see_what__slider", {
  init: false,
  spaceBetween: 0,
  watchOverflow: true,
  autoHeight: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 40,

    },
    769: {
      slidesPerView: 2,
      spaceBetween: 0,

    },
    1201: {
      slidesPerView: "auto",
    },
  },
  // on: {
  //   init: function () {
  //     toggleWidth();
  //   },
  //   resize: function () {
  //     toggleWidth();
  //   },
  // },
});

bl_see_what__slider.init();

// function toggleWidth(e) {
//   const fieldValueWidth = document.querySelector(".bl_see_what");
//   // fieldValueWidth.innerText = window.innerWidth + " px";
// }
// END  SEE WHAT
// --------------------
// --------------------

const bl_see_what__restaurants__slider = new Swiper(".bl_see_what__restaurants__slider", {
  init: false,
  spaceBetween: 0,
  watchOverflow: true,
  autoHeight: false,
  simulateTouch: false,
  grubCursor: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 80,

    },
    769: {
      slidesPerView: "auto",
    },
  },
  // on: {
  //   init: function () {
  //     toggleWidth();
  //   },
  //   resize: function () {
  //     toggleWidth();
  //   },
  // },
});

bl_see_what__restaurants__slider.init();
// --------------------
// --------------------

// TAILORED
const bl_tailored__slider = new Swiper('.bl_tailored__slider', {
  slidesPerView: "auto",
  freeMode: {
    enabled: true,
    sticky: true,
    momentumBounce: true,
    minimumVelocity: 0,
  },
  speed: 8000,
  loop: false,
  spaceBetween: 60,
  autoHeight: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false, // или сделать так, чтобы восстанавливался autoplay после взаимодействия
    pauseOnMouseEnter: true,
  },
  breakpoints: {
    320: {
      spaceBetween: 30,
      slidesPerView: 1,
      freeMode: false,
    },
    769: {
      spaceBetween: 60,
      slidesPerView: "auto",
      freeMode: true,

    },
    1201: {
      slidesPerView: "auto",
    },
  },
  slidesPerView: "auto",
  // spaceBetween: 1500,
  freeMode: {
    enabled: true,
    sticky: true,
    momentumBounce: true,
    minimumVelocity: 0,
  },
  autoplay: {
    delay: 0,
    disableOnInteraction: false, // или сделать так, чтобы восстанавливался autoplay после взаимодействия
    pauseOnMouseEnter: true,
  },
  speed: 8000,
  loop: true,
  centeredSlides: true,
});
// END TAILORED
// --------------------
// --------------------
// FEATURES
// --------------------
// --------------------
// HEADER FEATURES
const bl_header_f__slider = new Swiper('.bl_header_f__slider', {
  slidesPerView: 1,
  // freeMode: true,
  speed: 800,
  loop: true,
  effect: "fade",
  // spaceBetween: 60,
  // autoHeight: true,
  autoplay: {
    delay: 10000,
  },
});
// END HEADER FEATURES
// --------------------
// --------------------
// END FEATURES
// --------------------
// --------------------

const content_aiscreen = new Swiper('.content-aiscreen__slider', {
  init: false,
  spaceBetween: 0,
  watchOverflow: true,
  autoHeight: false,
  simulateTouch: false,
  grubCursor: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 80,
    },
    769: {
      slidesPerView: "auto",
    },
  },
});

content_aiscreen.init();

const content_app_store = new Swiper('.content-app-store__slider', {
  init: false,
  spaceBetween: 0,
  watchOverflow: true,
  autoHeight: false,
  slidesPerView: 1,
  simulateTouch: false,
  grubCursor: false,
  navigation: {
    nextEl: ".content-app-store .content-app-store__button-next",
    prevEl: ".content-app-store .content-app-store__button-prev",
  },
  pagination: {
    el: '.content-app-store__pagination',
    clickable: true,
  },
  // breakpoints: {
  //   320: {
  //     slidesPerView: 1,
  //     spaceBetween: 80,

  //   },
  //   769: {
  //     slidesPerView: 1,
  //   },
  // },
});

content_app_store.init();

const swiper_blog = new Swiper('.swiper-blog__slider', {
  init: false,
  spaceBetween: 0,
  watchOverflow: true,
  autoHeight: false,
  slidesPerView: 3,
  simulateTouch: false,
  grubCursor: false,
  spaceBetween: 30,
  // navigation: {
  //   nextEl: ".content-app-store .content-app-store__button-next",
  //   prevEl: ".content-app-store .content-app-store__button-prev",
  // },
  pagination: {
    el: '.swiper-blog__pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 10,
      centeredSlides: true,
      initialSlide: 1,
    },
    769: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

swiper_blog.init();

//========================================================================================================================================================
// $(document).mouseup(function (e) {
//   var div = $(".guides-menu-mobile__lable");
//   if (!div.is(e.target) && div.has(e.target).length === 0) {
//     div.removeClass('active');
//   }
// });
// $(document).mouseup(function (e) {
//   var container = $(".guides-menu-mobile__items");
//   if (container.has(e.target).length === 0) {
//     $('.guides-menu-mobile__items').removeClass('active')
//     $('body').removeClass('lock')
//     container.hide();
//   }
// });
//========================================================================================================================================================
// $(document).mouseup(function (e) {
//   var div = $(".blog-menu-mobile__title");
//   if (!div.is(e.target) && div.has(e.target).length === 0) {
//     div.removeClass('active');
//   }
// });
// $(document).mouseup(function (e) {
//   var div = $(".blog-menu-mobile__items");
//   if (!div.is(e.target) && div.has(e.target).length === 0) {
//     div.removeClass('active');
//     $('.blog-menu-mobile__items').removeClass('active')
//     $('body').removeClass('lock')
//     container.hide();
//   }
// });
$(document).mouseup(function (e) {
  var guidesMenu = $(".guides-menu-mobile__items");
  if (guidesMenu.has(e.target).length === 0) {
    $('.guides-menu-mobile__lable').removeClass('active')
    $('.guides-menu-mobile__items').removeClass('active')
    $('body').removeClass('lock-guides')
    guidesMenu.hide();
  }
});
$(document).mouseup(function (e) {
  var blogMenu = $(".blog-menu-mobile__items");
  if (blogMenu.has(e.target).length === 0) {
    $('.blog-menu-mobile__title').removeClass('active')
    $('.blog-menu-mobile__items').removeClass('active')
    $('body').removeClass('lock-blog')
    blogMenu.hide();
  }
});
//========================================================================================================================================================
// BLOCK BRANCHES
// const swiper_bl_branches = new Swiper('.bl_branches__swiper', {
//     loop: false,
//     slidesPerView: 3,
//     // spaceBetween: 3000,
//     // effect: "fade",
//     // pagination: {
//     //   el: '.swiper-pagination',
//     // },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     scrollbar: {
//         el: '.swiper-scrollbar',
//     },
//     speed: 800,
//     spaceBetween: 30,
//     scrollbar: {
//         el: '.swiper-scrollbar',
//         draggable: true
//     },
//     breakpoints: {
//         320: {
//             // slidesPerView: 'auto',
//             spaceBetween: 10,
//         },
//         // 500: {
//         //   // slidesPerView: 3,
//         //   spaceBetween: 10,

//         // },
//         1024: {
//             spaceBetween: 20,

//         },
//         1200: {
//             spaceBetween: 30,
//         },
//     },
// });
// END BLOCK BRANCHES
// --------------------
// --------------------
// SERVICE IN
// const swiper_bl_service_in__slider = new Swiper('.bl_service_in__swiper', {
//     loop: false,
//     slidesPerView: 1,
//     spaceBetween: 3000,
//     // effect: "fade",
//     pagination: {
//         el: '.swiper-pagination',
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     speed: 800,
//     spaceBetween: 30,
// });

// --------------------
// ABOUT SPEC
// const bl_about_spec__swiper__swiper = new Swiper('.bl_about_spec__swiper', {
//     loop: false,
//     slidesPerView: 4,
//     spaceBetween: 3000,
//     // pagination: {
//     //   el: '.swiper-pagination',
//     // },
//     scrollbar: {
//         el: '.swiper-scrollbar',
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     speed: 800,
//     spaceBetween: 30,
//     autoHeight: true,
//     breakpoints: {
//         320: {
//             slidesPerView: 2,
//             spaceBetween: 10,

//         },
//         768: {
//             slidesPerView: 3,
//             spaceBetween: 20,

//         },
//         1024: {
//             slidesPerView: 4,
//             spaceBetween: 30,

//         },
//     }

// });


// END E APPOINTMENT
// --------------------
// --------------------
// TRUST
// var items = Array(523, 3452, 334, 31, 5346);
// var item = items[(Math.random() * items.length)];

// console.log(item);
// END TRUST
// --------------------
// --------------------
//========================================================================================================================================================
// let link = document.querySelectorAll('._goto-block');
// if (link) {
//   let blocks = [];
//   for (let index = 0; index < link.length; index++) {
//     let el = link[index];
//     let block_name = el.getAttribute('href').replace('#', '');
//     if (block_name != '' && !~blocks.indexOf(block_name)) {
//       blocks.push(block_name);
//     }
//     el.addEventListener('click', function (e) {
//       if (document.querySelector('.menu__body._active')) {
//         menu_close();
//         body_lock_remove(500);
//       }
//       let target_block_class = el.getAttribute('href').replace('#', '');
//       let target_block = document.querySelector('.' + target_block_class);
//       _goto(target_block, 300);
//       e.preventDefault();
//     })
//   }

//   window.addEventListener('scroll', function (el) {
//     let old_current_link = document.querySelectorAll('._goto-block._active');
//     if (old_current_link) {
//       for (let index = 0; index < old_current_link.length; index++) {
//         let el = old_current_link[index];
//         el.classList.remove('_active');
//       }
//     }
//     for (let index = 0; index < blocks.length; index++) {
//       let block = blocks[index];
//       let block_item = document.querySelector('.' + block);
//       if (block_item) {
//         let block_offset = offset(block_item).top;
//         let block_height = block_item.offsetHeight;
//         if ((pageYOffset > block_offset - window.innerHeight / 3) && pageYOffset < (block_offset + block_height) - window.innerHeight / 3) {
//           let current_links = document.querySelectorAll('._goto-block[href="#' + block + '"]');
//           for (let index = 0; index < current_links.length; index++) {
//             let current_link = current_links[index];
//             current_link.classList.add('_active');
//           }
//         }
//       }
//     }
//   })
// }

// function fix_block(scr_fix_block, scr_value) {
//   let window_width = parseInt(window.innerWidth);
//   let window_height = parseInt(window.innerHeight);
//   let header_height = parseInt(document.querySelector('header').offsetHeight) + 15;
//   for (let index = 0; index < scr_fix_block.length; index++) {
//     const block = scr_fix_block[index];
//     let block_width = block.getAttribute('data-width');
//     const item = block.querySelector('._side-block');
//     if (!block_width) { block_width = 0; }
//     if (window_width > block_width) {
//       if (item.offsetHeight < window_height - (header_height + 30)) {
//         if (scr_value > offset(block).top - (header_height + 15)) {
//           item.style.cssText = "position:fixed;bottom:auto;top:" + header_height + "px;width:" + block.offsetWidth + "px;left:" + offset(block).left + "px;";
//         } else {
//           gotoRelative(item);
//         }
//         if (scr_value > (block.offsetHeight + offset(block).top) - (item.offsetHeight + (header_height + 15))) {
//           block.style.cssText = "position:relative;";
//           item.style.cssText = "position:absolute;bottom:0;top:auto;left:0px;width:100%";
//         }
//       } else {
//         gotoRelative(item);
//       }
//     }
//   }
//   function gotoRelative(item) {
//     item.style.cssText = "position:relative;bottom:auto;top:0px;left:0px;";
//   }
// }








