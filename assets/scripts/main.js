function paginateProjects(){const e=document.querySelector(".projects #cardsContainer");if(e){const o=e.querySelectorAll(".item"),r=4,c=Math.ceil(o.length/r);function t(e){const t=(e-1)*r,n=Math.min(t+r,o.length);o.forEach((e=>{e.style.display="none"}));for(let e=t;e<n;e++)o[e].style.display="block"}function n(e){document.querySelectorAll(".link").forEach((t=>{t.classList.remove("active"),t.textContent==e&&t.classList.add("active")}))}t(1),function(){const o=document.createElement("div");o.classList.add("pagination");for(let e=1;e<=c;e++){const r=document.createElement("a");r.textContent=e,r.href="#",r.classList.add("link"),r.addEventListener("click",(function(o){o.preventDefault(),t(e),n(e)})),o.appendChild(r)}e.parentNode.insertBefore(o,e.nextSibling)}(),n(1)}}document.addEventListener("DOMContentLoaded",paginateProjects),window.addEventListener("DOMContentLoaded",(function(){const e=document.querySelectorAll(".item__text");function t(e,t){const n=e.textContent.trim(),o=window.innerWidth;let r=n;if(n.length>t){const e={1920:90,1440:50,992:40,768:35,375:20};for(const n in e)if(o<=parseInt(n)){t=e[n];break}r=n.substring(0,t).trim()+"..."}e.textContent=r}e.forEach((function(e){t(e,100)})),window.addEventListener("resize",(function(){e.forEach((function(e){t(e,100)}))}))}));const arrowBtn=document.querySelector(".footer-menu-heading-icon-wrapper"),footerMenuEl=document.querySelector(".footer-menu-list-wrapper"),footerIconEl=document.querySelector(".footer-menu-heading-icon"),footerHeadingEl=document.querySelector(".footer-menu-heading-wrapper");arrowBtn.addEventListener("click",(e=>{footerMenuEl.classList.toggle("is-open"),footerIconEl.classList.toggle("footer-menu-icon-rotate"),footerHeadingEl.classList.toggle("footer-menu-open")}));const headerMenu=document.querySelector("#headerMenu"),headerMenuToggel=document.querySelector("#headerMenuToggle"),mobileHeaderMenu=document.querySelector(".mobile-menu_list");headerMenuToggel.addEventListener("click",(()=>{headerMenu.classList.toggle("menu--mobile"),headerMenuToggel.classList.toggle("is-open")})),mobileHeaderMenu.querySelectorAll("& > li > a").forEach((e=>{e.addEventListener("click",(t=>{const n=jQuery(e).parent().find(".sub-menu");n.length&&(t.preventDefault(),n.first().slideToggle(400),jQuery(e).parent().toggleClass("toggel-icon"))}))})),console.log("main");