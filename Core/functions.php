<?php
require_once '../Core/Router.php';

function controllers ($path) {
  return Router::route("Http/controllers/index.php");
}