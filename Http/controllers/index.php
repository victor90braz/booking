<?php
require_once '../Core/functions.php';
require_once '../Core/Database/Database.php';

$config = require_once basePath('/config.php');

$greeting = "Booking Flats";

$database = new Database($config['database']);

$notes = $database->getNotes();

require_once basePath('/views/index.view.php');
?>
