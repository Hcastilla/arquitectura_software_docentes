<?php

use Modules\Router;

/*
Router::route('GET', '/crear/@nombre/@apellido','HomeController:crear');
*/

Router::route('GET', '/','HomeController:index');
Router::route('GET', '/login','LoginController:index');
Router::route('POST', '/login','LoginController:login');

