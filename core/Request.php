<?php

namespace App\Core;

class Request
{
  public function getPath()
  {
    $path = $_SERVER['REQUEST_URI'];
    $path = substr($path, 1, strlen($path));
    $slashpos = strpos($path, '/');
    $path = substr($path, $slashpos, strlen($path));
    //echo $path;
    $position = strpos($path, '?');
    // echo $position;
    if ($position === false) {
      return $path;
    }

    return substr($path, 0, $position);
    //var_dump($position);
  }
  public function getMethod()
  {
    return  strtolower($_SERVER['REQUEST_METHOD']);
  }
}
