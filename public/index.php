<?php

require "../bootstrap.php";

$routes = [ 
    '/' => 'controllers/index.php',
];

$uri = Uri::load();

dd($uri);

require Routes::load($routes, $uri);