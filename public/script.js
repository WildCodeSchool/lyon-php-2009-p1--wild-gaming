const article = document.getElementById("article");
const navbarColor = document.querySelector(".navbar");
switch (article.className) {
    case ('rpg'):
        navbarColor.style.backgroundColor = "var(--navbar-rpg-backgrnd)";
        break
    case ('action'):
        navbarColor.style.backgroundColor = "var(--navbar-action-backgrnd)";
        break
    case ('simulation'):
        navbarColor.style.backgroundColor = "var(--navbar-simu-backgrnd)";
        break
    case ('sport'):
        navbarColor.style.backgroundColor = "var(--navbar-sport-backgrnd)";
        break
    case ('strategie'):
        navbarColor.style.backgroundColor = "var(--navbar-strategy-backgrnd)";
        break
    case ('fps'):
        navbarColor.style.backgroundColor = "var(--navbar-fps-backgrnd)";
}


var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("gameSlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length-1) {slideIndex = 0}
    if (n < 0) {slideIndex = slides.length-1}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slides[i].className = slides[i].className.replace(" show", "");
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " show";
    dots[slideIndex].className += " active";
    }

