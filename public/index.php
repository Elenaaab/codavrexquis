<?php
require __DIR__ . '/../vendor/autoload.php';

// Front controller -> Point d'entrée unique de l'application

// Altorouter : 

$router = new AltoRouter();
if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

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


