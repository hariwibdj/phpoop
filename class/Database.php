<?php
class Database
{
    private $host = "localhost";
    private $db_name = "db_koperasi";
    private $username = "root";
    private $password = "wibr4h4s14";

    public $conn;

    public function __construct()
    {
        $this->getConnection();
    }


    public function getConnection()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_errno != 0) {
            $err = null;
            $err .= "Error Code: " . $this->conn->connect_errno . "</br>";
            $err .= "Error Message: " . $this->conn->connect_error . "</br>";
            echo $err;
        } else {
            return $this->conn;

        }
    }

    function closeConnection()
    {
        $this->conn->close();
    }

    function error()
    {
        return $this->conn->error;
    }
}


