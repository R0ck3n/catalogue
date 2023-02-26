<?php

return [
    '/' => [
        'controllers\HomeController',
        'index'
    ],
    '/index.php/' => [
        'controllers\HomeController',
        'index'
    ],
    '/catalogue/' => [
        'controllers\CatalogueController',
        'displayCatalogue'
    ],

];