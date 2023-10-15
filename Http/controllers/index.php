<?php
use Core\Database;

require_once '../Core/functions.php';
require_once '../Core/Database/Database.php';
$config = require_once basePath('/config.php');

class Notes {
  private $config;

  public function __construct($config) {
      $this->config = $config;
  }

  public function title($text) {
      return $text;
  }

  public function fetch() {
      return (new Database($this->config['database']))->query('SELECT * FROM notes');
  }
}


$notesManager = new Notes($config);

$title = $notesManager->title("Booking Flats");
$notes = $notesManager->fetch();

require_once basePath('/views/index.view.php');
?>

