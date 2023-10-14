<?php

    namespace Core;
    use PDO;
    use PDOException;

    class Database {
        private $connection;
        public $config;

        public function __construct($config) {

        $this->config = $config;

            try {
                $this->resolve($config);
            } catch (PDOException $error) {
                echo "Connection failed: " . $error->getMessage();
            }
        }

        public function resolve($config) {
            $this->connection = new PDO(
                "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}",
                'root',
                ''
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this;
        }

        public function query($query) {
            try {
                $stmt = $this->connection->query($query);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                // Handle query error
                echo "Error: " . $e->getMessage();
                return [];
            }
        }
    }