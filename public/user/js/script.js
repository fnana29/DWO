document.addEventListener('DOMContentLoaded', function() {
    // Initial show all items
    document.querySelectorAll('.catalogue_outer').forEach(item => item.style.display = 'block');

    const filters = document.querySelectorAll('.catalogue_filter a');
    filters.forEach(filter => {
        filter.addEventListener('click', function(event) {
            event.preventDefault();

            // Remove is_active class from all filters
            filters.forEach(f => f.classList.remove('is_active'));

            // Add is_active class to the clicked filter
            this.classList.add('is_active');

            const filterValue = this.getAttribute('data-filter');
            const items = document.querySelectorAll('.catalogue_outer');

            // Show or hide items based on the filter
            if (filterValue === '*') {
                items.forEach(item => item.style.display = 'block');
            } else {
                items.forEach(item => {
                    if (item.classList.contains(filterValue.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        });
    });
});
