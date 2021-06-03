<?php
require_once __DIR__ . "/../vendor/autoload.php";

$router = new AltoRouter();
$router->setBasePath( $_SERVER['BASE_URI'] . "/public" );

// Fabrication des routes :
$router->map(
    'GET',
    '/',
    [
        'controller' => 'app\Controllers\MainController',
        'method' => 'home'
    ],
    'home'
  );
  $router->map(
    'GET',
    '/jeuadulte',
    [
        'controller' => 'app\Controllers\GameController',
        'method' => 'game'
    ],
    'jeuadulte'
  );

  $router->map(
    'GET',
    '/jeuenfant',
    [
        'controller' => 'app\Controllers\GameController',
        'method' => 'game'
    ],
    'jeuenfant'
  );

  $router->map(
    'GET',
    '/troll',
    [
        'controller' => 'app\Controllers\GameController',
        'method' => 'game'
    ],
    'troll'
  );

  $router->map(
    'GET',
    '/projet',
    [
        'controller' => 'app\Controllers\MainController',
        'method' => 'info'
    ],
    'projet'
  );

  // On pourrait remplacer /projet par :  '/pokemon/[i:id] ou /[a:action]' ça correspond à une clé de tableau


// Vérification des routes : 

  $routeInfo = $router->match();
  
  if($routeInfo === false) 
  { 
        http_response_code( 404 );
          echo "Nothing here ! ";
        //   exit();
  
   } else {      

  $destination = $routeInfo['target'];
  $controllerName = $destination['controller'];
  $methodName = $destination['method'];
  $controller = new $controllerName($router);
  $controller->$methodName();

  };
  
