<?php
class Router {
  public $BASE_PATH = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\Http\\controllers\\";

  public function route($route) {
    return require_once $this->BASE_PATH . $route;
  }
}
?>
