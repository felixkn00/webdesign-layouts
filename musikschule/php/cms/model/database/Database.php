<?php

namespace CMS\Model\Database;


class Database {
    private $host = "localhost";
    private $db_name = "cms";
    private $username = "root";
    private $password = "";
    private $conn;

    // Constructor
    public function __construct() {
        $this->connect();
    }

    // Connection
    private function connect() {
        $this->conn = new \mysqli($this->host, $this->username, $this->password, $this->db_name);
        ECHO "Connecting to MySQL..." . PHP_EOL;
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        $this->conn->set_charset("utf8");
    }

    // execute
    public function query($sql, $params = [], $types = '') {
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            die("Query preparation failed: " . $this->conn->error);
        }

        if ($params) {
            if (empty($types)) {
                $types = str_repeat('s', count($params));
            }
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            die("Query execution failed: " . $stmt->error);
        }

        return $stmt;
    }

    // fetch single
    public function fetch($sql, $params = [], $types = '') {
        $stmt = $this->query($sql, $params, $types);
        $result = $stmt->get_result();

        if ($result) {
            return $result->fetch_assoc();
        }

        return false;
    }

    // fetch all rows
    public function fetchAll($sql, $params = [], $types = '') {
        $stmt = $this->query($sql, $params, $types);
        $result = $stmt->get_result();

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return false;
    }

    // Anzahl der betroffenen Zeilen abrufen
    public function rowCount($sql, $params = [], $types = '') {
        $stmt = $this->query($sql, $params, $types);
        $stmt->store_result();

        return $stmt->num_rows;
    }

    // Verbindung schließen
    public function close() {
        $this->conn->close();
    }
}

