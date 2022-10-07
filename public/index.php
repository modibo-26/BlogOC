<?php

require  __DIR__ . '/../vendor/autoload.php';

use App\Routing\Router;

$router = new Router($_GET['url']);

//index = public function index();

$router->get('/', 'Home#index');
$router->get('/test', 'Home#test');


//$router->get('/posts/:id', function($id){ echo "Voila l'article $id"; });

$router->run();




