<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Request;
use App\Core\Router;
// $router = new Router;

// require 'routes.php';


// require $router->direct($uri);
Router::load('app/routes.php')->direct(Request::uri(), Request::method());
