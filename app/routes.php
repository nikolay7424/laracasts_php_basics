<?php

$router->get('', 'PagesController@home');
$router->get('index.php/about', 'PagesController@about');
$router->get('index.php/contact', 'PagesController@contact');

$router->get('index.php/users', 'UsersController@index');

$router->post('index.php/users', 'UsersController@store');
