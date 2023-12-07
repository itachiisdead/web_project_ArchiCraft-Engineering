// JavaScript code for the about page

// Add a click event listener to the navigation links
const navLinks = document.querySelectorAll('header nav a');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Get the id of the link that was clicked
        const id = link.hash.replace('#', '');

        // Get the section with the matching id
        const section = document.getElementById(id);

        // Scroll to the section
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    });
});
