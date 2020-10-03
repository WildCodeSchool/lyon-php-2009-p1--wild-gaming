/*const article = document.getElementById("article");
const navbarColor = document.getElementById("navbar");

if (article.className === 'rpg') {
    console.log('pute');
    //navbarColor.style.backgroundColor = 'blue';
}*/

function changeColorNavbar(){
    const article = document.getElementById("article");
    const navbarColor = document.getElementById("navbar");
    switch (article.className) {
        case ('rpg'):
            navbarColor.style.backgroundColor = "grey";
            break
        case ('action'):
            navbarColor.style.backgroundColor = "";
            break
        case ('simulation'):
            navbarColor.style.backgroundColor = "";
            break
        case ('sport'):
            navbarColor.style.backgroundColor = "yellow";
            break
        case ('strategie'):
            navbarColor.style.backgroundColor = "";
            break
        case ('fps'):
            navbarColor.style.backgroundColor = "";
    }
}
