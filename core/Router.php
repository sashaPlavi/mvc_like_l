<?php

namespace App\Core;

class Router
{
  protected array $routes = [];
  public function get($path, $callback)
  {
    $this->routes[$path] = $callback;
  }
  public function resolve()
  {
    var_dump($_SERVER);
  }
}
