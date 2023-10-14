<?php

  class Database {
    private $pdo;

    public function __construct() {
        $dataBase = [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "laracast",
            "charset" => "utf8mb4"
        ];

        try {
            $this->pdo = new PDO(
                "mysql:host={$dataBase['host']};port={$dataBase['port']};dbname={$dataBase['dbname']};charset={$dataBase['charset']}",
                'root',
                ''
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle database connection error
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getNotes() {
        try {
            $stmt = $this->pdo->query('SELECT * FROM notes');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle query error
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
  }