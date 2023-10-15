<?php

use Core\Database\Database;
use Core\Database\DatabaseInterface;

require_once '../Core/functions.php';
require_once '../Core/Database/Database.php';

class Note {
    private $body;

    public function __construct($body) {
        $this->body = $body;
    }

    public function getBody() {
        return $this->body;
    }
}

class NotesManager {
    private $database;

    public function __construct(DatabaseInterface $database) {
        $this->database = $database;
    }

    public function getNotes() {
        $notesData = $this->database->query('SELECT * FROM notes');
        $notes = [];

        foreach ($notesData as $noteData) {
            $notes[] = new Note($noteData['body']);
        }

        return $notes;
    }
}

$config = require_once basePath('/config.php');
$database = new Database($config['database']);
$notesManager = new NotesManager($database);
$title = "Booking Flats";
$notes = $notesManager->getNotes();

require_once basePath("/views/index.view.php");
