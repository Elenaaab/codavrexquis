<?php

//============================= Ici, on traite les échanges entre l'user et la database ===============================


// 1. ===============================Récupérer les réponses utilisateur : =============================================

    require_once __DIR__ . '/assets/functions.php';
    require_once __DIR__ . '/app/db.php';

                     // On initialise les variables :

                    $sujet = '';
                    $adjectif = '';
                    $verbe = '';
                    $complement = '';
                    $adjectif2 = '';

                     // Vérifier si le GET est rempli et tous les champs remplis : 

                     if(!empty($_GET) 
                    && !empty($_GET["sujet"]) 
                    && !empty($_GET["adjectif"])
                    && !empty($_GET["verbe"]) 
                    && !empty($_GET["complement"])
                    && !empty($_GET["adjectif"])
                    ) {
                    // je récupère les info provenant du formulaire si les valeurs sont bien une chaine de caractères :

                        var_dump($_GET);

                        $sujet = $_GET["sujet"];
                        $adjectif = $_GET["adjectif"];
                        $verbe = $_GET["verbe"];
                        $complement = $_GET["complement"];
                        $adjectif2 = $_GET["adjectif"];

               // POINT INFO ===> REGEX :

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
                    $adjectif2 = strtolower($adjectif2);
                
                    //J'affiche les valeurs pour vérification : 

                        echo "Bonjour $sujet $adjectif $verbe $complement $adjectif2 !";

               
// 2. ===============Intégrer les valeurs à la BDD à condition si c'est déjà dans la BDD on ne l'ajoute pas (contrainte intégrée à la BDD) :============

                    $insertQuery = "
                                     INSERT INTO codavre (word, type)
                                     VALUES ('${sujet}', 'sujet'), ('${adjectif}', 'adjectif'),('${verbe}', 'verbe'),('${complement}', 'complement',('${adjectif2}', 'adjectif'));
                                 ";             
                    $pdo->exec($insertQuery);

// 3. ===================================J'extrais les résultats de manière aléatoire dans un tableau  :=================================================

                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='sujet' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $sujet = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='adjectif' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $adjectif = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='verbe' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $verbe = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='complement' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $complement = $result[0];
                    $result = $pdo->query("SELECT word FROM `codavre` WHERE type='adjectif' ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
                    $adjectif2 = $result[0];

                //  Si ce chemin à étapes a échoué, alors j'affiche une erreur

                    } else {
                    echo "Erreur";
                }
// 4. =================J'affiche les résultats dans les div prévues à cet effet directement en short tag sur la page html avec un foreach par exemple :==========

