<?php

$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\public\\";
require_once $basePath . "index.php";

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase {
    public function testGreeting() {
        $result = greeting();
        $this->assertEquals('hola', $result);
    }
}

?>