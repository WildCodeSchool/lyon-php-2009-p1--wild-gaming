function changeColorNavbar(){
    const article = document.getElementById("article");
    const navbarColor = document.getElementById("navbar");
    switch (article.className) {
        case ('rpg'):
            navbarColor.style.backgroundColor = "grey";
            break
        case ('action'):
            navbarColor.style.backgroundColor = "orange";
            break
        case ('simulation'):
            navbarColor.style.backgroundColor = "purple";
            break
        case ('sport'):
            navbarColor.style.backgroundColor = "yellow";
            break
        case ('strategy'):
            navbarColor.style.backgroundColor = "blue";
            break
        case ('fps'):
            navbarColor.style.backgroundColor = "brown";
    }
}
