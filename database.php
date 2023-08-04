<?php
class Database {
    public $host = 'localhost';
    public $username = 'root';
    public $password = '';
    public $database = 'mydb2';
    public $connection;

    public function __construct() {
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->connection->connect_error) {
                echo 'Connection Error: ' . $this->connection->connect_error;
                exit;
            }
        }
    }
}
?>
