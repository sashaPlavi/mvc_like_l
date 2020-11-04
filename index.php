<?php

use App\Core\Aplication;

require_once  __DIR__ . '/vendor/autoload.php';





$app =  new Aplication();

$app->router->get('/', function () {
  return 'halo bre!';
});
$app->router->resolve();
