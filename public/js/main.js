import {getPath} from "./rooter.js";


document.addEventListener('DOMContentLoaded', () => {

//rooter JS defini les fonctions a lancer suivant la page observée
    const route = getPath();
    switch (route) {
        case '':
        case '/':
            console.log("page d'accueil")

    }


});