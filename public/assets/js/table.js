let currentTab = 'work-list';
let currentPage = 1;

/**
 * Updates the Table UI based on search, tab filtering, and pagination.
 */
function updateUI() {
    const searchInput = document.getElementById('searchInput');
    const pageSizeInput = document.getElementById('pageSize');
    
    if (!searchInput || !pageSizeInput) return;

    const search = searchInput.value.toLowerCase();
    const pageSize = parseInt(pageSizeInput.value);
    const allRows = Array.from(document.querySelectorAll('#tableBody tr'));

    // Filter by Tab and Search
    const visibleRows = allRows.filter(row => {
        const matchesTab = row.getAttribute('data-type') === currentTab;
        const matchesSearch = row.innerText.toLowerCase().includes(search);
        return matchesTab && matchesSearch;
    });

    // Pagination Logic
    const total = visibleRows.length;
    const totalPages = Math.ceil(total / pageSize) || 1;
    if (currentPage > totalPages) currentPage = totalPages;

    const start = (currentPage - 1) * pageSize;
    const end = start + pageSize;

    // Hide all, show paginated
    allRows.forEach(r => r.classList.add('hidden-row'));
    const currentRows = visibleRows.slice(start, end);
    currentRows.forEach(r => {
        r.classList.remove('hidden-row');
        // Restart circle animation if present
        const circle = r.querySelector('.animate-circle');
        if (circle) {
            circle.style.animation = 'none';
            circle.offsetHeight; 
            circle.style.animation = null;
        }
    });

    // Update Status Text
    const showCount = currentRows.length;
    const pageStatus = document.getElementById('pageStatus');
    if (pageStatus) {
        pageStatus.innerText = `Showing ${showCount} out of ${total} records`;
    }

    renderPagination(totalPages);
}

/**
 * Renders the pagination controls using custom SVG icons for navigation.
 */
function renderPagination(totalPages) {
    const container = document.getElementById('paginationControls');
    if (!container) return;
    container.innerHTML = '';

    // Previous Arrow (Custom Icon)
    const prevImg = document.createElement('img');
    // Using the path provided: assets/images/dashboard/icons/Table/prev.svg
    prevImg.src = "/assets/images/dashboard/icons/Table/prev.svg"; 
    prevImg.alt = "previous";
    prevImg.className = `cursor-pointer w-5 h-5 ${currentPage === 1 ? 'opacity-20 pointer-events-none' : 'hover:opacity-80'}`;
    prevImg.onclick = () => { 
        if (currentPage > 1) { 
            currentPage--; 
            updateUI(); 
        }
    };
    container.appendChild(prevImg);

    // Page Numbers
    const pageGroup = document.createElement('div');
    pageGroup.className = "flex items-center gap-1 mx-2";
    
    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement('button');
        btn.innerText = i;
        btn.className = `page-btn px-3 py-1 rounded ${i === currentPage ? 'active font-bold text-primary-600' : 'text-slate-500'}`;
        btn.onclick = () => { 
            currentPage = i; 
            updateUI(); 
        };
        pageGroup.appendChild(btn);
    }
    container.appendChild(pageGroup);

    // Next Arrow (Custom Icon)
    const nextImg = document.createElement('img');
    // Using the path provided: assets/images/dashboard/icons/Table/next.svg
    nextImg.src = "/assets/images/dashboard/icons/Table/next.svg";
    nextImg.alt = "next";
    nextImg.className = `cursor-pointer w-5 h-5 ${currentPage === totalPages ? 'opacity-20 pointer-events-none' : 'hover:opacity-80'}`;
    nextImg.onclick = () => { 
        if (currentPage < totalPages) { 
            currentPage++; 
            updateUI(); 
        }
    };
    container.appendChild(nextImg);
}

/**
 * Handles tab switching and resets pagination.
 */
function filterTab(tabId, el) {
    currentTab = tabId;
    currentPage = 1;
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active-tab1');
        btn.classList.add('text-slate-400');
    });
    el.classList.add('active-tab1');
    el.classList.remove('text-slate-400');
    updateUI();
}

// Initial Load
window.addEventListener('load', updateUI);