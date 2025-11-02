<?php

use Core\Router;

$router = new Router();

$router->get('/', 'session/create.php');
// $router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/locker', 'locker/manage.php');
$router->get('/locker/create', 'locker/create.php');
$router->post('/locker/store', 'locker/store.php');
$router->delete('/note', 'notes/destroy.php');

$router->get('/admin/create', 'admin/session/create.php');
$router->post('/admin/session/create', 'admin/session/store.php');
$router->get('/admin/register', 'admin/registration/create.php');
$router->post('/admin/register', 'admin/registration/store.php');
$router->patch('/note', 'notes/update.php');

$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');

$router->get('/register', 'registration/create.php');
$router->post('/register', 'registration/store.php');

$router->get('/login', 'session/create.php');
$router->post('/session', 'session/store.php');
$router->delete('/session', 'session/destroy.php');
