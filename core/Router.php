<?php

namespace App\Core;

class Router
{
  public Request $request;

  protected array $routes = [];

  public function __construct(\App\Core\Request $request)
  {
    $this->request = $request;
  }

  public function get($path, $callback)
  {
    $this->routes['get'][$path] = $callback;
  }
  public function resolve()
  {
    // var_dump($_SERVER);
    $path =  $this->request->getPath();
    //echo $path . '</br>';
    $method = $this->request->getMethod();
    // echo $method . '</br>';
    $callback = $this->routes[$method][$path] ?? false;
    var_dump($this->routes[$method][$path]);
    if ($callback === false) {
      echo 'not found';
      //var_dump($_SERVER);
      exit;
    }

    echo call_user_func($callback);
  }
}
