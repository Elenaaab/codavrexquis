<?php


// 1. Récupérer les réponses utilisateur

// Je fabrique une méga fonction qui récupère, vérifie et transforme : 

    require_once __DIR__ . '/assets/functions.php';
    require_once __DIR__ . '/app/db.php';

// J'appelle cette méga fonction : 

                     // On initialise les variables 

                    $sujet = '';
                    $adjectif = '';
                    $verbe = '';
                    $complement = '';

                     // Vérifier si le GET est rempli et tous les champs remplis : 

                     if(!empty($_GET) 
                    && !empty($_GET["sujet"]) 
                    && !empty($_GET["adjectif"])
                    && !empty($_GET["verbe"]) 
                    && !empty($_GET["complement"])
                    && !empty($_GET["adjectif"])
                    ) {
                    // je récupère les info provenant du formulaire si les valeurs sont bien une chaine de caractères :
               // REGEX :

               /*(a|b|z) =>  a ou b ou z
               [a-z0-9] => alphanumérique
               [a-c] => a b ou c
               ^ => début de ligne
               $ fin de ligne
               + 1 ou plusieurs fois
               ? optionnel donc 0 ou 1 fois
               * 0 ou 1 ou plusieurs fois
               ...

               ^[a-zA-Z]* ?'?[a-zA-Z]+$
                    */

                    // https://www.php.net/manual/fr/function.preg-match.php

                    // Je transforme la valeur en minuscules par précaution : 

                    $sujet = strtolower($sujet);
                    $adjectif = strtolower($adjectif);
                    $verbe = strtolower($verbe);
                    $complement = strtolower($complement);
                
               
// 2. Intégrer les valeurs à la BDD à condition si c'est déjà dans la BDD on ne l'ajoute pas (contrainte intégrée à la BDD) :

                    $insertQuery = "
                                     INSERT INTO codavre (word, type)
                                     VALUES ('${sujet}', 'sujet'), ('${adjectif}', 'adjectif'),('${verbe}', 'verbe'),('${complement}', 'complement');
                                 ";             
                    $pdo->exec($insertQuery);

// 3. J'extrais les résultats  :

                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='sujet' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $sujet = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='adjectif' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $adjectif = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='verbe' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $verbe = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='complement' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $complement = $result[0];
                 
                    } else {
                    echo "Erreur";
                }
// 4. J'affiche les résultats dans les div prévues à cet effet :

