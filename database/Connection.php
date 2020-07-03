<?php
$connection = include ("ConnectionInfo.php");
include ("Log.php");

class Connection {
    private $host = '';
    private $dbname = '';
    private $username = '';
    private $password = '';

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
          $conn = new PDO("mysql:host=". $this->host.";dbname=". $this->dbname, $this->username, $this->password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conn;
        } catch(PDOException $e) {
            // .... write Log;
        }
    }
}
