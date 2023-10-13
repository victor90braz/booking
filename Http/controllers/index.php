<?php
require_once '../Core/functions.php';

$greeting = "Booking Flats";

$dataBase = [
  "host" => "localhost",
  "port" => 3306,
  "dbname" => "laracast",
  "charset" => "utf8mb4"
];

try {
  // Create a PDO instance
  $pdo = new PDO(
    "mysql:host={$dataBase['host']};port={$dataBase['port']};dbname={$dataBase['dbname']};charset={$dataBase['charset']}",
    'root', // Replace with your database username
    ''  // Replace with your database password
  );

  // Set PDO to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch all notes from the database
  $stmt = $pdo->query('SELECT * FROM notes');
  $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);


  // Route to controller (assuming routeToController is defined in 'functions.php')
  routeToController("index.php");

} catch (PDOException $e) {
  // Handle database connection error
  echo "Connection failed: " . $e->getMessage();
}

$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\views\\";
require_once $basePath . "index.view.php";
?>
