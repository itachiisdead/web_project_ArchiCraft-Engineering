
hamburger = document.getElementsByClassName("hamburger")[0];
nav = document.querySelector("nav");
hamburger.onclick = function () {
  nav.classList.toggle("active");
};

let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;

        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";

        // Corrected setTimeout function with parameter
        setTimeout(function () {
            showSlides();
        }, 5000); // Change image every 2 seconds
    }
