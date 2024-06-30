document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const query = searchInput.value.trim();

        if (query) {
            const encodedQuery = encodeURIComponent(query);
            const searchUrl = ${window.location.origin}/search/results?query=${encodedQuery};
            window.location.href = searchUrl;
        } else {
            alert('Please enter a search term.');
        }
    });
});