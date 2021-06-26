console.log('salut ca va');


let app = {

    init: function () {
        app.addAllEventListeners();
    },

    // Ecouteurs d'événements sur les éléments du jeu (tableau de gauche)

    addAllEventListeners: function () {

        // 1. On récupère l'élément :
        let ElementOne = document.querySelector(".forme1");
        let ElementTwo = document.querySelector(".forme2");
        let ElementThree = document.querySelector(".forme3");
        let ElementFour = document.querySelector(".forme4");
        let ElementFive = document.querySelector(".forme5");
        let ElementSix = document.querySelector(".forme6");
        let ElementSeven = document.querySelector(".forme7");
        let ElementEight = document.querySelector(".forme8");
        let ElementNine = document.querySelector(".forme9");
        let ElementTen = document.querySelector(".forme10");
        let ElementEleven = document.querySelector(".forme11");

        // 2. On ajoute l'écouteur dessus : 
        ElementOne.addEventListener('click', app.handleClickElement);
        ElementTwo.addEventListener('click', app.handleClickElement);
        ElementThree.addEventListener('click', app.handleClickElement);
        ElementFour.addEventListener('click', app.handleClickElement);
        ElementFive.addEventListener('click', app.handleClickElement);
        ElementSix.addEventListener('click', app.handleClickElement);
        ElementSeven.addEventListener('click', app.handleClickElement);
        ElementEight.addEventListener('click', app.handleClickElement);
        ElementNine.addEventListener('click', app.handleClickElement);
        ElementTen.addEventListener('click', app.handleClickElement);
        ElementEleven.addEventListener('click', app.handleClickElement);

    },

    // Fonctions handler du jeu 

    handleClickElement: function (evt) {

        evt.preventDefault();

        // Je pointe l'élément sur lequel un événement s'est produit du tableau de gauche
        let ElementPlay = document.querySelector('.jeu');
        // Je change sa classe en d-none pour le faire disparaitre du tableau de gauche
        ElementPlay.classList.replace('jeu', 'd-none');
        // Ensuite je transfère sa classe à un élément du form qu'on pointe grâce à son id
        
        // Je pointe sur un élément du form via un id avec une condition sur l'id
        let ElementResult = document.getElementById('1');


        // Si l'id == 1 alors on retire le d-none de la forme centrale : 
        if(ElementResult.id == 1) {
        // Je pointe l'élément jouer du tableau de droite
        let SubmitButton = document.querySelector('.button');
        // Je lui ajoute la classe button2
        SubmitButton.classList.remove('d-none');
        // Et je fais apparaitre le bouton :
        // Je pointe le bouton
        let SubmitButton = document.querySelector('.button');
         // Je lui retire la classe d-none
         SubmitButton.classList.remove('d-none');

        // Je pointe sur l'élément parent
        // Je clone l'élément à lui ajouter
        // Je lui attache l'élément à lui ajouter

        //  Ensuite pour les éléments 2,3,4 on ajoute simplement la div de gauche à droite en la clonant
        } else if (ElementResult.id == 2 || ElementResult.id == 3 || ElementResult.id == 4) {

        // Je pointe sur l'élément parent
        // Je clone l'élément à lui ajouter
        // Je lui attache l'élément à lui ajouter


        } else {
        // Si l'id == 5 alors on ajoute la classe button 2 de la forme centrale : 

        // Je pointe l'élément jouer du tableau de droite
        SubmitButton = document.querySelector('.button');
        // Je lui ajoute la classe button2
        SubmitButton.classList.replace('button', 'button2');
        }

        // Je pointe sur l'élément parent
        // Je clone l'élément à lui ajouter
        // Je lui attache l'élément à lui ajouter

        // ======================================================================================================

        // A gérer ensuite :        

        // Si la personne se ravise, au clic sur la forme, elle reprend sa place dans le tableau de gauche donc : 
        // Je cible l'élément au clic
        // Je lui remove sa classe et lui add la classe d-none
        // La forme du tableau de gauche elle, remove sa classe d-none et reprend sa classe
    },

    // ===============================================================================

    // Il faut s'occuper du jeu adulte pour dynamiser le choix entre les deux versions

    // ===============================================================================


};


document.addEventListener('DOMContentLoaded', app.init);