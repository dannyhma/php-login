<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Himaone\PhpLogin\App\Router;
use Himaone\PhpLogin\Controller\HomeController;


Router::add('GET', '/', HomeController::class, 'index', []);

Router::run();