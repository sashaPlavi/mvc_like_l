<?php

namespace app\core;

class Router
{
  protected array $routes=[];
  public function ( $path, $callback){
    $this->routes[$path] = $callback;

  }
}
