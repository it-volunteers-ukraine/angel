const arrowBtn=document.querySelector(".footer-menu-heading-icon-wrapper"),footerMenuEl=document.querySelector(".footer-menu-list-wrapper"),footerIconEl=document.querySelector(".footer-menu-heading-icon"),footerHeadingEl=document.querySelector(".footer-menu-heading-wrapper");arrowBtn.addEventListener("click",(e=>{footerMenuEl.classList.toggle("is-open"),footerIconEl.classList.toggle("footer-menu-icon-rotate"),footerHeadingEl.classList.toggle("footer-menu-open")}));const headerMenu=document.querySelector("#headerMenu"),headerMenuToggel=document.querySelector("#headerMenuToggle"),mobileHeaderMenu=document.querySelector(".mobile-menu_list");headerMenuToggel.addEventListener("click",(()=>{jQuery(headerMenu).toggleClass("menu--mobile"),jQuery(headerMenuToggel).toggleClass("is-open"),document.body.classList.toggle("_lock")})),mobileHeaderMenu.querySelectorAll("& > li > a").forEach((e=>{e.addEventListener("click",(o=>{const r=jQuery(e).parent().find(".sub-menu");r.length&&(o.preventDefault(),r.first().slideToggle(400),jQuery(e).parent().toggleClass("toggel-icon"),jQuery(e).parent().toggleClass("open-acardion"))}))}));