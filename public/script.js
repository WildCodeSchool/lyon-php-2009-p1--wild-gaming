function changeColorNavbar(){
    const article = document.getElementById("article");
    const navbarColor = document.querySelector(".navbar");
    switch (article.className) {
        case ('blocRPG'):
            navbarColor.style.backgroundColor = "grey";
            break
        case ('action'):
            navbarColor.style.backgroundColor = "orange";
            break
        case ('blocSimulation'):
            navbarColor.style.backgroundColor = "purple";
            break
        case ('blocSport'):
            navbarColor.style.backgroundColor = "yellow";
            break
        case ('blocStrategie'):
            navbarColor.style.backgroundColor = "blue";
            break
        case ('blocFPS'):
            navbarColor.style.backgroundColor = "brown";
    }
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


}


        /*function slideLink() {
            document.getElementById("gameSlides fade").href="#blocA";
        }

        const slideimg = document.querySelector('.gameSlides');
        slideimg.onclick = function() {slideLink()};

}
