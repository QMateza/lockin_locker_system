<?php

use Core\Router;

$router = new Router();

$router->get('/', 'index.php')->only('guest');

$router->get('/locker', 'locker/manage.php')->only('auth');
$router->get('/locker/create', 'locker/create.php');
$router->post('/locker/store', 'locker/store.php');
$router->delete('/note', 'notes/destroy.php');

$router->get('/admin/create', 'admin/session/create.php');
$router->get('/waitinglist', 'waitinglist/show.php');
$router->post('/admin/session/create', 'admin/session/store.php');

$router->get('/admin/register', 'admin/registration/create.php')->only('guest');
$router->post('/admin/register', 'admin/registration/store.php')->only('guest');

$router->post('/locker/decision', 'admin/locker/store.php');

$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');
