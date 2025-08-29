<?php

spl_autoload_register(function ($className) {
    $path = __DIR__;

    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    $path .= DIRECTORY_SEPARATOR . $classPath;

    if (file_exists($path))
    {
        require $path;
        return;
    }
});

\App\Routes\Route::start();