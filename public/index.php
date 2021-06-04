<?php
require __DIR__ . '/../vendor/autoload.php';


// Front controller -> Point d'entrée unique de l'application
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI'] . "/public");
dump($_SERVER['BASE_URI']);

$router->map( "GET", "/",                  "MainController@home",          "main.home"); // Route accueil
$router->map( "GET", "/jeuadulte",         "GameController@gameOne",       "game.gameOne"); // Route mention légales
$router->map( "GET", "/jeuenfant",         "GameController@gameTwo",       "game.gameTwo"); // Route mention légales
$router->map( "GET", "/troll",             "GameController@troll",         "game.troll"); // Route mention légales
$router->map( "GET", "/projet",            "MainController@info",          "main.info"); // Route mention légales


$routeInfo = $router->match();

    // Gestion des 404
    if( $routeInfo === false ) :
        // On aurait aussi pu gérer ça dans une méthodé
        // error de MainController, voire faire un ErrorController
        http_response_code( 404 );
        echo "Page non trouvée (404 Not Found)";
        exit(); // On arrêt ele script ici, on essaye pas de dispatch
    endif;

    $routeInfoArray = explode( "@", $routeInfo['target'] );
  
    $controllerName = "app\\Controllers\\".$routeInfoArray[0]; // Nom du contrôleur
    $methodName     = $routeInfoArray[1]; // Nom de la méthode

 
    $controller = new $controllerName();
    

    $controller->$methodName( $routeInfo['params'] );
