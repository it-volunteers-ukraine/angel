// pagination 
function paginateProjects() {
    const container = document.querySelector('.projects #cardsContainer');
    
    if (container) {
        const items = container.querySelectorAll('.item');
        const itemsPerPage = 4;
        const totalPages = Math.ceil(items.length / itemsPerPage);
        
        function displayPage(pageNumber) {
            const startIndex = (pageNumber - 1) * itemsPerPage;
            const endIndex = Math.min(startIndex + itemsPerPage, items.length);

            items.forEach(item => {
                item.style.display = 'none';
            });

            for (let i = startIndex; i < endIndex; i++) {
                items[i].style.display = 'block';
            }
        }

        function createPaginationLinks() {
            const paginationContainer = document.createElement('div');
            paginationContainer.classList.add('pagination');

            for (let i = 1; i <= totalPages; i++) {
                const link = document.createElement('a');
                link.textContent = i;
                link.href = '#';
                link.classList.add('link');
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    displayPage(i);
                    setActiveLink(i);
                });

                paginationContainer.appendChild(link);
            }

            container.parentNode.insertBefore(paginationContainer, container.nextSibling);
        }
        
        function setActiveLink(pageNumber) {
            const links = document.querySelectorAll('.link');
            links.forEach(link => {
                link.classList.remove('active');
                if (link.textContent == pageNumber) {
                    link.classList.add('active');
                }
            });
        }

        // Display the first page and create pagination when the page loads
        displayPage(1);
        createPaginationLinks();
        setActiveLink(1); 
    }    
}

document.addEventListener('DOMContentLoaded', paginateProjects);


//shorten the text of elements using the “item__text” class
const elements = document.querySelectorAll('.item__text');

elements.forEach(element => {    
    const text = element.textContent.trim();    
    if (text.length > 30) {       
        const shortenedText = text.substring(0, 30) + '...';
        
        element.textContent = shortenedText;
    }
});
