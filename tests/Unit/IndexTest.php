<?php

$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\views\\";
require_once $basePath . "index.php";

test('Greeting class returns "hola"', function () {
    // Arrange
    $greetingInstance = new Greeting();

    // Act
    $result = $greetingInstance->greeting();

    // Assert/Expect
    expect($result)->toEqual('hola');
});

?>