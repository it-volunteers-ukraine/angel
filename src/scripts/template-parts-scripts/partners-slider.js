const partnersSwiper = new Swiper(".partners-swiper", {
  loop: true,
  slidesPerView: 6,
  spaceBetween: 32,
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  lazyPreloadPrevNext: 1,
  breakpoints: {
    992: {
      slidesPerView: 6,
      spaceBetween: 24,
    },
    768: {
      spaceBetween: 40,
    },
    375: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
