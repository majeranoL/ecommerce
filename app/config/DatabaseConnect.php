<?php

class DatabaseConnect {

    private $host = "localhost";
    private $database = "ecommerce";
    private $dbusername = "root";
    private $dbpassword = "";
    private $conn = null;

    // Method to connect to the database
    public function connectDB() {
        $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8"; // Added charset=utf8 for proper encoding

        try {
            // Establish connection
            $this->conn = new PDO($dsn, $this->dbusername, $this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $this->conn;

        } catch (PDOException $e) {  // Use PDOException instead of Exception
            // Output the error message (consider logging in production)
            echo "Connection Failed: " . $e->getMessage();
            
            return null;
        }
    }
}

?>
