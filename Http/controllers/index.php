<?php
require_once '../Core/functions.php';
require_once '../Core/Database/Database.php';

$basePath = '/Users/braz9/Desktop/projects/laracasts/booking/';

// Adjust the path to config.php if necessary
$config = require_once($basePath . 'config.php');

$greeting = "Booking Flats";

// Create a new instance of the Database class
$database = new Database($config['database']);

// Fetch notes from the database
$notes = $database->getNotes();

// Adjust the inclusion of index.view.php
require_once $basePath . 'views/index.view.php';
?>
