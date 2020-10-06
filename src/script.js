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
