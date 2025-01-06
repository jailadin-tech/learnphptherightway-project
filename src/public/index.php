<?php

use App\Invoice;
use App\MyClasses\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$route = new Router;

$route->get('/', [Invoice::class, 'index']);
