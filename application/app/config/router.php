<?php

$router = $di->getRouter();

// Define your routes here

$router->add('/users/index', [
    "namespace"  => 'App\Controllers',
    "controller" => "users",
    "action" => "index"
]);


$router->handle();
