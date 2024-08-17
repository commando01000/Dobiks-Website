// handle pagination
(()=>{
    const pagination = document.getElementById('pagination'); 
    const prevButton = document.getElementById('prev'); 
    const nextButton = document.getElementById('next'); 
    const pageLinks = document.querySelectorAll('.page-link'); 
    
        
    
    // Calculate the total number of pages 
    const totalPages = parseInt(pagination.getAttribute('data-count')); 
    let currentPage = 1; 
    
    // Function to update pagination buttons and page numbers 
    function updatePagination() { 
        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === totalPages; 
        pageLinks.forEach((link) => { 
            const page = parseInt(link.getAttribute('data-page')); 
            link.classList.toggle('active', page === currentPage); 
        }); 
    } 
    
    // Event listener for "Previous" button 
    prevButton.addEventListener('click', () => { 
        if (currentPage > 1) { 
            currentPage--; 
            updatePagination(); 
        } 
    }); 
    
    // Event listener for "Next" button 
    nextButton.addEventListener('click', () => { 
        if (currentPage < totalPages) { 
            currentPage++;  
            updatePagination(); 
        } 
    }); 
    
    // Event listener for page number buttons 
    pageLinks.forEach((link) => { 
        link.addEventListener('click', (e) => { 
            e.preventDefault(); 
            const page = parseInt(link.getAttribute('data-page')); 
            if (page !== currentPage) { 
                currentPage = page; 
                updatePagination(); 
            } 
        }); 
    }); 
    
    // Initial page load 
    updatePagination();
    })()