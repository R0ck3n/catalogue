<?php

/* Point d'entrée de l'application */


// Chargement des fonctions utilitaires
require 'config/tools.php';

// Autoloader
// Fonction appelée lorsque l'on essaie d'instancier une classe
spl_autoload_register(function ($className) {
    // On change le sens des \ en /
    $fileName = str_replace('\\', '/', $className);

    // On inclut le fichier
    require "src/$fileName.php";
});

// Mise en place d'un routeur
$route = $_SERVER['REQUEST_URI'] ?? '/';
if (isset($_SERVER["QUERY_STRING"]) && $_SERVER["QUERY_STRING"]!==""){
    $route = substr($_SERVER['REQUEST_URI'],0,17);
}

// Récupération des routes de l'application
$routes = require 'config/routes.php';

if (isset($routes[$route])) {
    list($controllerName, $method) = $routes[$route];

    // Instanciation magique du contrôleur
    $controller = new $controllerName();
    $controller->$method();
} else {
    var_dump('page 404');
}
