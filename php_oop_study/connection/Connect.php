<?php

class Connect {
    private $host = 'localhost';
    private $userName = 'root';
    private $password = '';
    private $dbName = 'Bonshop';

    public function connection() {
        $dsn = "mysql:host = " . $this->host . ";dbname = " . $this->dbName;

        $pdo = new PDO($dsn, $this->userName,$this->password);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}
?>