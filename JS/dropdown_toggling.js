// Function to handle dropdown toggling
    function toggleDropdown(dropdownId) {
        // Get all dropdown elements
        const dropdowns = document.querySelectorAll('ul[id^="dropdown-"]');

        // Loop through all dropdowns and close them
        dropdowns.forEach(dropdown => {
            if (dropdown.id !== dropdownId) {
                dropdown.classList.add('hidden'); // Close other dropdowns
            }
        });

        // Toggle the clicked dropdown
        const currentDropdown = document.getElementById(dropdownId);
        currentDropdown.classList.toggle('hidden'); // Toggle the visibility of clicked dropdown
    }

    // Attach event listeners to the dropdown buttons
    document.querySelectorAll('button[data-collapse-toggle]').forEach(button => {
        button.addEventListener('click', function () {
            const dropdownId = this.getAttribute('aria-controls');
            toggleDropdown(dropdownId);
        });
    });

