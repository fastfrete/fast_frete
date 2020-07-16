<?php
$routes = [];

$routes[] = ['/', 'HomeController@index'];
$routes[] = ['/categoria/index', 'CategoriaController@index'];
$routes[] = ['/chat/index', 'ChateController@index'];
$routes[] = ['/pagar/index', 'PagarController@index'];
$routes[] = ['/pessoa/index', 'PessoaController@index'];
$routes[] = ['/usuario/index', 'UserController@index'];

return $routes;