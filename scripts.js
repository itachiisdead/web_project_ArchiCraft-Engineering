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

/*login*/


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});