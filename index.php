<?php

require 'routes/web.php';

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($request === '') {
    $request = '/';
}

if (isset($routes[$request])) {
    require $routes[$request];
} else {
    http_response_code(404);
    echo "404 Not Found";
}

?>