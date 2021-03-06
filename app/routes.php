<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'contact' => 'controllers/contact.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'name' => 'controllers/add-name.php'
// ]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('about/culture', 'PagesController@culture');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
