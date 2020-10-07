<?php
class DB {

private $servername;
private $username;
private $password;
private $dbname;

public function connect () {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "project";
    $this->charset = "utf8mb4";


    try {
    $db = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
    $pdo = new PDO($db, $this->username,$this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ('<center><h1>connection successful</h1></center>');

    return $pdo;
    }
    catch (PDOException $e) {
        echo ('<center><h1> connection failed ' .'</h1>' . $e->getMessage() . '</center>');
    }
}
}
