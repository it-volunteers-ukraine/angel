const auctionSwiper = new Swiper('.auction-slider', {
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  lazyPreloadPrevNext: 1,
  slidesPerView: 2,
  slidesPerGroup: 2, 
  spaceBetween: 32,
  breakpoints: {
    993: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
    },
    769: {
      slidesPerView: 1.33,
      slidesPerGroup: 1,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 20,
    }  
  },
  pagination: {
    el: '.swiper-pagination',
  },
});