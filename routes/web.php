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
get('/dashboard', 'pages/dashboard.php');
get('/logout', 'controllers/LogoutController.php');
get('/rent', 'pages/rent.php');
get('/my-booking', 'pages/my-booking.php');
get('/armada', 'pages/armada.php');
get('/profile', 'pages/profile.php');


post('/login-auth', 'controllers/LoginController.php');
post('/register-auth', 'controllers/RegisterController.php');
post('/booking', 'controllers/RentController.php');
post('/profile/update', 'controllers/ProfileController.php');
?>