const documentsSwiper=new Swiper(".documents-swiper",{direction:"horizontal",loop:!1,slidesPerView:1,spaceBetween:24,pagination:{el:".swiper-pagination"}}),popupLinks=document.querySelectorAll(".docs-reports-popup-link"),body=document.querySelector("body"),lockPadding=document.querySelectorAll(".lock-padding");let unlock=!0;const timeout=800;if(popupLinks.length>0)for(let o=0;o<popupLinks.length;o++){const e=popupLinks[o];e.addEventListener("click",(function(o){const t=e.getAttribute("data-popup");popupOpen(document.getElementById(t)),o.preventDefault()}))}const popupCloseIcon=document.querySelectorAll(".close-popup");if(popupCloseIcon.length>0)for(let o=0;o<popupCloseIcon.length;o++){const e=popupCloseIcon[o];e.addEventListener("click",(function(o){popupClose(e.closest(".popup")),o.preventDefault()}))}function popupOpen(o){if(o&&unlock){const e=document.querySelector(".popup.open");e?popupClose(e,!1):bodyLock(),o.classList.add("open"),o.addEventListener("click",(function(o){o.target.closest(".popup__content-inner")||popupClose(o.target.closest(".popup"))}))}}function popupClose(o,e=!0){unlock&&(o.classList.remove("open"),e&&bodyUnlock())}function bodyLock(){const o=window.innerWidth-document.querySelector(".wrapper").offsetWidth+"px";if(lockPadding.length>0)for(let e=0;e<lockPadding.length;e++){lockPadding[e].style.paddingRight=o}body.style.paddingRight=o,body.classList.add("lock"),unlock=!1,setTimeout((function(){unlock=!0}),timeout)}function bodyUnlock(){setTimeout((function(){if(lockPadding.length>0)for(let o=0;o<lockPadding.length;o++){lockPadding[o].style.paddingRight="0px"}body.style.paddingRight="0px",body.classList.remove("lock")}),timeout),unlock=!1,setTimeout((function(){unlock=!0}),timeout)}document.addEventListener("click",(function(o){if(o.target.closest(".open-modal")){o.preventDefault();var e=o.target.closest(".open-modal").getAttribute("href");document.getElementById("modalImg").src=e,popupOpen(document.getElementById("docsAndReportsModal"))}}));