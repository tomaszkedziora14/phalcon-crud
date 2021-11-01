<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */


 // $loader->registerNamespaces(
 //     [
 //        'App\Controllers' => APP_PATH .'/controllers/',
 //        'App\Models'      => APP_PATH .'/models/',
 //     ]
 // )->register();

$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
)->register();
