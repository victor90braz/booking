<?php

require_once '../Core/functions.php';

function basePath($path) {
  return "\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\$path";
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

