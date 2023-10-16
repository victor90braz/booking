<?php

namespace Core\Database;
use PDO;
use PDOException;

interface DatabaseInterface {
    public function query($query);
}

class Database implements DatabaseInterface {
    private $connection;
    public $config;

    public function __construct($config) {
        $this->config = $config;
        $this->resolve($config);
    }

    private function resolve($config) {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, $config['username'], $config['password']);
    }

    public function query($query) {
        try {
            $statement = $this->connection->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            return [];
        }
    }
}