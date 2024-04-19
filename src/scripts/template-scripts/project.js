function openCloseDetails(event) {
    if (event.target.classList.contains('support__btn')){  
      let answer = event.target.closest('.support-row').querySelector('.support-more');
      answer.classList.toggle('opened');
      
      let details = event.target.closest('.support-row').querySelector('.support__btn');
      details.classList.toggle('details');      
      
      const supportRowName = event.target.closest('.support-row').querySelector('.support-row-name');
      supportRowName.classList.toggle('support-name-margin');
    }
  };
  
document.querySelector('.support').addEventListener("click", openCloseDetails); 
