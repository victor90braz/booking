<?php
require_once '../Core/functions.php';
require_once '../Core/Database/Database.php';

// Adjust the path to config.php if necessary
$config = require_once('/Users/braz9/Desktop/projects/laracasts/booking/config.php');

$greeting = "Booking Flats";

// Create a new instance of the Database class
$database = new Database($config['database']);

// Fetch notes from the database
$notes = $database->getNotes();

$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\booking\\views\\";
require_once $basePath . "index.view.php";
?>
