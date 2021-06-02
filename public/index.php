<?php
require_once __DIR__ . "/../vendor/autoload.php";

$router = new AltoRouter();
$router->setBasePath( $_SERVER['BASE_URI'] );

// Fabrication des routes :
$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'home'
  );
  
  $router->map(
    'GET',
    '/jeu_adulte',
    [
        'controller' => 'GameController',
        'method' => 'game'
    ],
    'jeu_adulte'
  );
  
  $router->map(
    'GET',
    '/jeu_enfant',
    [
        'controller' => 'GameController',
        'method' => 'game'
    ],
    'jeu_enfant'
  );

  $router->map(
    'GET',
    '/troll',
    [
        'controller' => 'GameController',
        'method' => 'game'
    ],
    'troll'
  );

  $router->map(
    'GET',
    '/projet',
    [
        'controller' => 'MainController',
        'method' => 'info'
    ],
    'projet'
  );

// Vérification des routes : 

  $routeInfo = $router->match();
  
  
  if($routeInfo === false) 
  { 
        http_response_code( 404 );
          echo "Nothing here ! ";
          exit();
  
   } else {      

  $destination = $routeInfo['target'];
  $controllerName = "app\\controllers\\" . $destination['controller'];
  $methodName = $destination['method'];
  $controller = new $controllerName();
  $controller->$methodName();
  
  };
  