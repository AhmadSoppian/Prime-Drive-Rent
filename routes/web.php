<?php

$routes = [];

function get($uri, $action)
{
    global $routes;

    $routes['GET'][$uri] = $action;
}

function post($uri, $action)
{
    global $routes;

    $routes['POST'][$uri] = $action;
}

get('/', 'pages/home.php');
get('/about', 'pages/about.php');
get('/cars', 'pages/cars.php');
get('/contact', 'pages/contact.php');
get('/login', 'pages/login.php');
get('/register', 'pages/register.php');
get('/member', 'pages/member.php');

get('/logout', 'controllers/LogoutController.php');
post('/login-auth', 'controllers/LoginController.php');
post('/register-auth', 'controllers/RegisterController.php');

?>