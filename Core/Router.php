<?php

class Router {
  private static $BASE_PATH = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\";

  public static function route($route) {
    return require_once self::$BASE_PATH . $route;
  }
}

?>
