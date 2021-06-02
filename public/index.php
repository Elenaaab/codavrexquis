<?php
require_once __DIR__ . "/../vendor/autoload.php";

$router = new AltoRouter();
$router->setBasePath( $_SERVER['BASE_URI'] . "/public" );
// dump($router);

// Fabrication des routes :
$router->map(
    'GET',
    '/public/home',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'home'
  );
  
  $router->map(
    'GET',
    '/public/jeu_adulte',
    [
        'controller' => 'GameController',
        'method' => 'game'
    ],
    'jeu_adulte'
  );
  
  $router->map(
    'GET',
    '/public/jeu_enfant',
    [
        'controller' => 'GameController',
        'method' => 'game'
    ],
    'jeu_enfant'
  );

  $router->map(
    'GET',
    '/public/troll',
    [
        'controller' => 'GameController',
        'method' => 'game'
    ],
    'troll'
  );

  $router->map(
    'GET',
    '/public/projet',
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
        //   exit();
  
   } else {      

  $destination = $routeInfo['target'];
  $controllerName = "app\\Controllers\\" . $destination['controller'];
  $methodName = $destination['method'];
  $controller = new $controllerName();
  $controller->$methodName();

  };
  
