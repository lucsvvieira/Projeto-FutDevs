<?php
use core\Router;
use src\controllers\UsuariosController;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/jogador/{id}/editar', 'UsuariosController@edit');
$router->post('/jogador/{id}/editar', 'UsuariosController@editAction');

$router->get('/jogador/{id}/excluir', 'UsuariosController@del');