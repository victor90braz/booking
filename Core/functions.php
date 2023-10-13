<?php
require_once '../Core/Router.php';

function routeToController ($path) {
  return Router::basePath("Http/controllers/$path");
}