const swiper=new Swiper(".swiper-container",{direction:"horizontal",loop:!1,slidesPerView:1,spaceBetween:24,pagination:{el:".swiper-pagination"},breakpoints:{375:{loop:!0}}});function showSwiper(){document.querySelector(".about-fund")&&(window.innerWidth<=375?swiper.init():swiper.destroy())}window.addEventListener("resize",showSwiper);