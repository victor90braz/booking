<?php

class Greeting {
  function greeting() {
    return "hola";
  }
}

echo (new Greeting)->greeting();

?>