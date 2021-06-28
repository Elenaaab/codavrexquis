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

// Route qui affiche la page d'accueil :
$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\app\Controllers\MainController'
    ],
    'main.home'
);

// Route qui affiche une 404 :
$router->map(
    'GET',
    '/oups',
    [
        'method' => 'err404',
        'controller' => '\app\Controllers\ErrorController'
    ],
    'error.err404'
);

// Route qui affiche le jeu 1 adulte :
$router->map(
    'GET',
    '/jeuadulte1',
    [
        'method' => 'gameOne',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.gameOne'
);
// Route qui récupère les infos du jeu 1 :
$router->map(
    'POST',
    '/jeuadulte1',
    [
        'method' => 'createGame',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.createGame'
);
// Route qui affiche le jeu 2 adulte :
$router->map(
    'GET',
    '/jeuadulte2',
    [
        'method' => 'gameOneTwo',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.gameOneTwo'
);
// Route qui récupère les infos du jeu 2 :
$router->map(
    'POST',
    '/jeuadulte2',
    [
        'method' => 'createGameTwo',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.createGameTwo'
);
// Route qui affiche le jeu 2 enfant :
$router->map(
    'GET',
    '/jeuenfant',
    [
        'method' => 'gameTwo',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.gameTwo'
);
// Route qui récupère les infos du jeu 2 :
$router->map(
    'POST',
    '/jeuenfant',
    [
        'method' => 'createGameKids',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.createGameKids'
);
// Route qui affiche le jeu troll :
$router->map(
    'GET',
    '/troll',
    [
        'method' => 'gameThree',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.gameThree'
);
// Route qui récupère les infos du jeu 3 troll :
$router->map(
    'POST',
    '/troll',
    [
        'method' => 'createTroll',
        'controller' => '\app\Controllers\GameController'
    ],
    'game.createTroll'
);
// Route qui affiche la page info :
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


