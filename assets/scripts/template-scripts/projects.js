function paginateProjects(){const t=document.querySelector(".projects #cardsContainer");if(t){const o=t.querySelectorAll(".item"),i=4,c=Math.ceil(o.length/i);function e(t){const e=(t-1)*i,n=Math.min(e+i,o.length);o.forEach((t=>{t.style.display="none"}));for(let t=e;t<n;t++)o[t].style.display="block"}function n(t){document.querySelectorAll(".link").forEach((e=>{e.classList.remove("active"),e.textContent==t&&e.classList.add("active")}))}e(1),function(){const o=document.createElement("div");o.classList.add("pagination");for(let t=1;t<=c;t++){const i=document.createElement("a");i.textContent=t,i.href="#",i.classList.add("link"),i.addEventListener("click",(function(o){o.preventDefault(),e(t),n(t)})),o.appendChild(i)}t.parentNode.insertBefore(o,t.nextSibling)}(),n(1)}}document.addEventListener("DOMContentLoaded",paginateProjects),window.addEventListener("DOMContentLoaded",(function(){const t=document.querySelectorAll(".item__text");function e(t,e){const n=t.textContent.trim(),o=window.innerWidth;let i=n;if(n.length>e){const t={1920:90,1440:50,992:40,768:35,375:20};for(const n in t)if(o<=parseInt(n)){e=t[n];break}i=n.substring(0,e).trim()+"..."}t.textContent=i}t.forEach((function(t){e(t,100)})),window.addEventListener("resize",(function(){t.forEach((function(t){e(t,100)}))}))}));