document.addEventListener('DOMContentLoaded', () => {
    // Duration in ms, should match the CSS transition duration
    const TRANSITION_DURATION = 400; 

    /**
     * Sets up the accordion-style toggle for a filter group.
     * @param {string} filterId - The ID of the filter group element.
     */
    const setupFilterToggle = (filterId) => {
        const filterGroup = document.getElementById(filterId);
        if (!filterGroup) return;

        const filterTitle = filterGroup.querySelector('.filter-title');
        
        filterTitle.addEventListener('click', () => {
            filterGroup.classList.toggle('active');
        });
    };

    /**
     * Gets an array of checked values from a group of checkboxes.
     * @param {string} name - The 'name' attribute of the checkbox group.
     * @returns {string[]} An array of the 'value' attributes of checked boxes.
     */
    const getCheckedValues = (name) => {
        const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
        return Array.from(checkboxes).map(cb => cb.value);
    };

    /**
     * Applies all active filters to the product grid with a fade-in/out effect.
     */
    const applyProductFilters = () => {
        // 1. Get all active filter values
        const selectedTypes = getCheckedValues('product-type');
        const selectedCategories = getCheckedValues('category');
        const selectedSizes = getCheckedValues('size');

        const allProducts = document.querySelectorAll('.product-card');

        allProducts.forEach(product => {
            // --- 2. Check if product matches filters ---
            
            // Check type filter (passes if no filters selected OR product has one of the types)
            let passesTypeFilter = selectedTypes.length === 0 || 
                selectedTypes.some(type => product.classList.contains(`product-${type}`));

            // Check category filter
            let passesCategoryFilter = selectedCategories.length === 0 || 
                selectedCategories.some(category => product.classList.contains(`category-${category}`));

            // Check size filter
            let passesSizeFilter = selectedSizes.length === 0 || 
                selectedSizes.some(size => product.classList.contains(`size-${size}`));

            // A product must pass ALL filter groups
            const shouldShow = passesTypeFilter && passesCategoryFilter && passesSizeFilter;

            // --- 3. Apply visual fade-in/out ---
            if (shouldShow) {
                // Product should be visible
                if (product.classList.contains('hidden-by-filter')) {
                    // It's currently hidden, so make it visible
                    product.classList.remove('hidden-by-filter'); // Remove display: none
                    void product.offsetWidth; // Force browser repaint
                    product.classList.add('is-visible'); // Add class to trigger opacity/transform animation
                }
            } else {
                // Product should be hidden
                if (product.classList.contains('is-visible')) {
                    // It's currently visible, so hide it
                    product.classList.remove('is-visible'); // Remove class to trigger fade-out
                    
                    // After the animation finishes, set display: none
                    setTimeout(() => {
                        if (!product.classList.contains('is-visible')) { // Check again in case filter changed
                            product.classList.add('hidden-by-filter');
                        }
                    }, TRANSITION_DURATION);
                } else {
                    // It's already hidden, just ensure the class is there
                     product.classList.add('hidden-by-filter');
                }
            }
        });
    };

    // --- 4. Initialization ---

    // Setup toggling for all filter groups
    setupFilterToggle('product-type-filter');
    setupFilterToggle('category-filter');
    setupFilterToggle('size-filter');

    // Add event listeners to ALL filter checkboxes
    const allCheckboxes = document.querySelectorAll('.sidebar-filters input[type="checkbox"]');
    allCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', applyProductFilters);
    });

    // On page load, make all products visible with the fade-in effect
    document.querySelectorAll('.product-card').forEach(product => {
        product.classList.add('is-visible');
    });
    
    // Set initial state for filter collapse (assuming they should be visible at start)
    document.querySelectorAll('.filter-group').forEach(group => group.style.display = 'block');


    // -------------------------------------------------------------
    // "Hide Filters" Button Logic
    // -------------------------------------------------------------
    const hideFiltersButton = document.querySelector('.filter-toggle');
    const allFilterGroups = document.querySelectorAll('.filter-group');

    if (hideFiltersButton) {
        hideFiltersButton.addEventListener('click', () => {
            const isActive = hideFiltersButton.classList.toggle('active');
            
            if (isActive) {
                hideFiltersButton.innerHTML = '<span class="icon"> </span> Hide filters';
                allFilterGroups.forEach(group => group.style.display = 'block');
            } else {
                hideFiltersButton.innerHTML = '<span class="icon"> </span> Show filters';
                allFilterGroups.forEach(group => group.style.display = 'none');
            }
        });
    }
});
