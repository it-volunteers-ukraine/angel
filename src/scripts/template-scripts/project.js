function openCloseDetails(event) { 
  if (event.target.classList.contains('support-row')) {  
      let supportRow = event.target.closest('.support-row');
      let answers = supportRow.querySelectorAll('.support-more');
      answers.forEach(answer => {
          answer.classList.toggle('opened');
      });
    
      let details = supportRow.querySelector('.support__btn');
      details.classList.toggle('details');      
    
      const supportRowName = supportRow.querySelector('.support-row-name');
      supportRowName.classList.toggle('support-name-margin');
  }
}

document.querySelector('.support').addEventListener("click", openCloseDetails); 
