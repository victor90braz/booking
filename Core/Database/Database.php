<?php

  class Database {
    private $connection;
    public $config;

    public function __construct($config) {

      $this->config = $config;

        try {
            $this->connection = new PDO(
                "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}",
                'root',
                ''
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle database connection error
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getNotes() {
        try {
            $stmt = $this->connection->query('SELECT * FROM notes');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle query error
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
  }