const auctionSwiper = new Swiper('.auction-swiper', {
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  lazyPreloadPrevNext: 1,
  slidesPerView: 1,
  slidesPerGroup: 1, 
  spaceBetween: 20,
  allowSlideNext: true,
  allowSlidePrev: true,
  breakpoints: {
    991: {
      slidesPerView: 1.33,
      slidesPerGroup: 1,
      spaceBetween: 24,
    },
    1200: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
    },
    1919: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 32,
    }  
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

console.log(auctionSwiper);