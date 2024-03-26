const arrowBtn = document.querySelector(".footer-menu-heading-icon-wrapper");
const footerMenuEl = document.querySelector(".footer-menu-list-wrapper");
const footerIconEl = document.querySelector(".footer-menu-heading-icon");
const footerHeadingEl = document.querySelector(".footer-menu-heading-wrapper");
           



    arrowBtn.addEventListener("click", (e) => {
        footerMenuEl.classList.toggle("is-open");
        footerIconEl.classList.toggle("footer-menu-icon-rotate");
        footerHeadingEl.classList.toggle("footer-menu-open");

    });
;