console.log('salut ca va');


let app = {


    counter : 1,

    init: function () {
        app.addAllEventListeners();
    },

    // Ecouteurs d'événements sur les éléments du jeu (tableau de gauche)

    addAllEventListeners: function () {

        // 1. On récupère l'élément :
        let elementOne = document.querySelector(".forme1");
        let elementTwo = document.querySelector(".forme2");
        let elementThree = document.querySelector(".forme3");
        let elementFour = document.querySelector(".forme4");
        let elementFive = document.querySelector(".forme5");
        let elementSix = document.querySelector(".forme6");
        let elementSeven = document.querySelector(".forme7");
        let elementEight = document.querySelector(".forme8");
        let elementNine = document.querySelector(".forme9");
        let elementTen = document.querySelector(".forme10");
        let elementEleven = document.querySelector(".forme11");
        // let elementSubmit = document.getElementById("player");


        // 2. On ajoute l'écouteur dessus : 
        elementOne.addEventListener('click', app.handleClickElement);
        elementTwo.addEventListener('click', app.handleClickElement);
        elementThree.addEventListener('click', app.handleClickElement);
        elementFour.addEventListener('click', app.handleClickElement);
        elementFive.addEventListener('click', app.handleClickElement);
        elementSix.addEventListener('click', app.handleClickElement);
        elementSeven.addEventListener('click', app.handleClickElement);
        elementEight.addEventListener('click', app.handleClickElement);
        elementNine.addEventListener('click', app.handleClickElement);
        elementTen.addEventListener('click', app.handleClickElement);
        elementEleven.addEventListener('click', app.handleClickElement);
        // elementSubmit.addEventListener('submit', app.handleSubmitElement);

    },

    // Fonctions handler du jeu 

    handleClickElement: function (evt) {

        evt.preventDefault();

        // !ETAPE 1 ON CLONE LA DIV DE GAUCHE ET ON L'AJOUTE DANS UNE DIV PARENT DE DROITE

        // Je pointe l'élément sur lequel un événement s'est produit du tableau de gauche
        let elementPlay = evt.currentTarget;
        // Je pointe sur l'élément parent de droite
        let elementResult = document.getElementById(app.counter);
        // Je lui enlève la classe d-none pour l'afficher
        elementResult.classList.remove('d-none');
        // Je clone l'élément de gauche à lui ajouter
        let newElement = elementPlay.cloneNode(true);
        // Je lui attache l'élément à lui ajouter
        elementResult.appendChild(newElement);

        // !ETAPE 2 ON FAIT DISPARAITRE LA DIV À GAUCHE ET ON INCRÉMENTE SON ID

        // Je fais disparaitre l'élément du tableau de gauche
         elementPlay.classList.replace('jeux', 'd-none');  
        // J'incrémente la variable counter à chaque tour
        app.counter++;   

        // !ETAPE 3 ON POINTE SUR L'ELEMENT VIDE ET ON VERIFIE SON ID

        if(elementResult.id == 1) {

        // Je pointe l'espace de jeu de droite
        let gameBoard = document.querySelector('.tableau');
        // Je lui change sa classe
        gameBoard.classList.replace('tableau','tableau2')
        // Je lui ajoute une classe
        elementResult.classList.add('button3');


        } else if (elementResult.id == 2) {
        console.log('on se débrouille pas mal');
        // Je lui ajoute une classe
        elementResult.classList.add('button4');

        } else if (elementResult.id == 3) {
        // Je lui ajoute une classe
        elementResult.classList.add('button5');

        } else if (elementResult.id == 4) {
        // Je lui ajoute une classe
        elementResult.classList.add('button7');

        // Si l'id == 5 alors on ajoute la classe button 2 de la forme centrale : 
        } else if (elementResult.id == 5) {
        // Je lui ajoute une classe
        elementResult.classList.add('button6');
        // Je pointe l'élément jouer du tableau de droite
        submitButton = document.querySelector('.button');
        // Je remplace sa classe
        submitButton.classList.replace('button', 'button2');
        // Je lui retire la classe d-none
         submitButton.classList.remove('d-none');
        }

        // !======================================================================================================
        // !ETAPE 4 ON AMELIORE L'UX DU JEU     
        // !======================================================================================================

        // A gérer ensuite :  

        // On ajoute une propriété CSS animation sur la classe qui fait apparaitre le cercle bleu
        // Si la personne se ravise, au clic sur la forme, elle reprend sa place dans le tableau de gauche donc : 
        // Je cible l'élément au clic
        // Je lui remove sa classe et lui add la classe d-none
        // La forme du tableau de gauche elle, remove sa classe d-none et reprend sa classe
    },

    handleSubmitElement:function(evt) {

    // Lorsque l'utilisateur soumet le formulaire, on affiche la réponse :
    evt.preventDefault();
    // 1. On pointe l'élément réponse du form
    let elementResponse = document.querySelector(".tableaux");
    // 2. On remplace la class "d-none" par "tableaux" pour afficher la ligne
    elementResponse.classList.remove('d-none');
    }

    // ===============================================================================

    // Il faut s'occuper du jeu adulte pour dynamiser le choix entre les deux versions

    // ===============================================================================


};


document.addEventListener('DOMContentLoaded', app.init);