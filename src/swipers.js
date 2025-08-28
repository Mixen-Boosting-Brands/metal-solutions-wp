// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
  Navigation,
  Pagination,
  Autoplay,
  Thumbs,
  EffectFade,
  Scrollbar,
  Mousewheel,
  Keyboard,
} from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

document.addEventListener("DOMContentLoaded", function () {
  // init Swiper:
  const swiperJumbotron = new Swiper(".swiper-jumbotron", {
    // configure Swiper to use modules
    modules: [
      Navigation,
      Pagination,
      Autoplay,
      Mousewheel,
      Keyboard,
      Scrollbar,
    ],

    // Optional parameters
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    direction: "horizontal",
    allowTouchMove: true,
    spaceBetween: 0,
    loop: true,
    grabCursor: true,
    keyboard: {
      enabled: false,
    },
    mousewheel: false,
    slidesPerView: 1,

    // if we need navigation
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // init Swiper:
  const swiperGaleria = new Swiper(".swiper-galeria", {
    // configure Swiper to use modules
    modules: [
      Navigation,
      Pagination,
      Autoplay,
      Mousewheel,
      Keyboard,
      Scrollbar,
    ],

    // Optional parameters
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    direction: "horizontal",
    allowTouchMove: true,
    spaceBetween: 0,
    loop: true,
    grabCursor: true,
    keyboard: {
      enabled: false,
    },
    mousewheel: false,

    // Default (mobile-first)
    slidesPerView: 1,

    // Breakpoints for responsive behavior
    breakpoints: {
      // from 768px and up
      768: {
        slidesPerView: 2,
      },
      // from 992px and up
      992: {
        slidesPerView: 3,
      },
    },

    // if we need navigation
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // if we need scrollbar
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      hide: false, // you can set this to true if you want it to auto-hide
    },
  });
});
