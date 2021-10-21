<?php

$router = $di->getRouter();

// Define your routes here

$router->add('/users/index', [
    "controller" => "users",
    "action" => "index"
]);


$router->handle();
