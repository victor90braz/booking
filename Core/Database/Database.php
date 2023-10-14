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