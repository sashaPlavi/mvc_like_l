<?php
echo phpversion();

require_once './core/Router.php';

use app\core;


$app = new Aplication();

$app->router->get('/', function(){
  return 'halo bre!';
})