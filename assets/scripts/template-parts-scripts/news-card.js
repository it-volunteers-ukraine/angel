function formatDate(t){const e=new Date(t);return`${e.getDate().toString().padStart(2,"0")}.${(e.getMonth()+1).toString().padStart(2,"0")}.${e.getFullYear()}`}document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".news-card .date").forEach((t=>{const e=formatDate(t.textContent.trim());t.textContent=e}))}));