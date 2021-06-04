<?php
require __DIR__ . '/../vendor/autoload.php';


// Front controller -> Point d'entrée unique de l'application
$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
}
// sinon
else {
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '/';
}

// $router->map( "GET", "/",                  "MainController@home",          "main.home"); // Route accueil
// $router->map( "GET", "/jeuadulte",         "GameController@gameOne",       "game.gameOne"); // Route mention légales
// $router->map( "GET", "/jeuenfant",         "GameController@gameTwo",       "game.gameTwo"); // Route mention légales
// $router->map( "GET", "/troll",             "GameController@gameThree",     "game.troll"); // Route mention légales
// $router->map( "GET", "/projet",            "MainController@info",          "main.info"); // Route mention légales

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\app\Controllers\MainController'
    ],
    'main.home'
);

$router->map(
    'GET',
    '/jeuadulte',
    [
        'method' => 'gameOne',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.gameOne'
);

$router->map(
    'GET',
    '/jeuenfant',
    [
        'method' => 'gameTwo',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.gameTwo'
);

$router->map(
    'GET',
    '/troll',
    [
        'method' => 'gameThree',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.troll'
);

$router->map(
    'GET',
    '/projet',
    [
        'method' => 'info',
        'controller' => '\app\Controllers\MainController'
    ],
    'main.info'
);

// Altodispatcher : 

$match = $router->match();

$dispatcher = new Dispatcher($match, '\app\Controllers\ErrorController::err404');
$dispatcher->dispatch();


