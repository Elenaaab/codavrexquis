# CODAVRE

## Description du projet

Projet de page dynamique pour jouer au Cadavre Exquis : deux versions seront proposées pour commencer :

* une version adulte en interaction avec l'ordinateur : l'user ajoute les mots manquants avant de générer la réponse de l'ordinateur
* une version enfant en interaction avec l'ordinateur : l'user choisit des formes et couleurs qui vont générer une réponse de l'ordinateur
* un encart avec l'histoire de l'invention du jeu
* un encart avec les règles du jeu pour chaque version
* une page sur auteur pour expliquer le projet et la démarche

## Déroulé du projet

### 1.Construction du html

* 4 pages à construire "en dur" : homepage avec histoire de l'invention du jeu et présentation des deux versions, une page par version du jeu et un descriptif du projet
* ==> OK
* sur chaque page : barre de navigation en footer
* ==> OK
* sur chaque version de jeu : balises adéquates pour les éléments de jeu avec formulaires
* ==> OK
  
### 2.Construction du CSS  

* Bootstrap : placement des éléments sur la page
* ==> OK
* Importation des fonts choisies
* ==> OK
* Création des styles (couleurs et position) 
* ==> OK
* Création de l'espace de jeu des deux versions
* ==> OK

### 3.Construction du PHP

* Dynamiser les formulaires sur deux versions de jeu adulte : cases à remplir changent d'une partie à l'autre (pour alimenter toutes les tables de la BDD)
* ==> OK
* Dessiner le mocodo et créer la base de données
* ==> OK
* Installer les composers et le dossier vendor (altorouter)
* ==> OK
* Créer les controllers, views et models avec les namespaces
* => OK
* Dynamiser les pages (découper en partials, les liens de page)
* => OK
* MVC : suite avec altodispacher + subdivision des templates (layout) + ajouter une MVC error
* => OK
* Dynamiser la version troll du jeu
* ==> EN COURS

### 4.Construction du js

* Sur les pages de jeu adulte, faire apparaitre la réponse après que l'user clique sur "jouer"
  
* Sur la homepage, dynamiser les deux bulles de jeu (upgrader le design)
  
* Dynamiser le troll mode avec bouton aléatoire qui se déplace sur la page d'accueil OU dans le code et fait apparaitre un bouton "troll mode" 

### 5. Construction version enfant HTML/CSS/PHP/JS

* Construire la page et le board de jeu version enfant et les formes/couleurs à sélectionner (html/css)
  ==> OK
* Construire les correspondances entre formes/couleurs et BDD (PHP)

* Dynamiser le board de jeu avec les dessins colorés (js)

#### BONUS

* Créer un bouton jour/nuit pour le style : https://codepen.io/jesperkc/pen/pydMqb (cacher le jeu inutile avec display none)
* ==> ANNULAX
* Créer les versions responsive avec Bootstrap

* Créer version hybride : l'utilisateur rentre des nombres de 1 à 1000 dans chaque case et l'ordinateur va choisir au hasard dans la BDD

* Enregistrer plusieurs parties d'affilée sur la page pour avoir plusieurs lignes en réponse
  
* Proposer l'envoi par email de ses cOdavres
  
* Dynamiser la nav avec la page active
  
* A chaque fois qu'on rafraichit le navigateur, les formes changent de place dans le tableau du jeu enfant

* Connexion à une API via ajax pour alimenter le jeu (API vocabulaire)
