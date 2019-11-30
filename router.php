<?php

$router = new MNT\Router;

$router['/'] = [
    'class' => App\Controllers\HomeController::class,
    'action' => 'index'
];

$router['/Raffle'] = [
    'class' => App\Controllers\RaffleController::class,
    'action' => 'index',
    'request' => $_REQUEST
];

return $router;
