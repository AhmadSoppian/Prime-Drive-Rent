<?php

session_start();

require './routes/web.php';

$method = $_SERVER['REQUEST_METHOD'];

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

if (isset($routes[$method][$uri])) {

    require $routes[$method][$uri];

} else {

    http_response_code(404);

    echo "404 Not Found";
}