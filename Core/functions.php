<?php
require_once '../Core/Router.php';

function routeToController ($path) {
  return Router::route("Http/controllers/index.php");
}