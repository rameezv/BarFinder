<?php
/**
 * UserService class
 * Talks to the DB and performs operations
 */
class UserService {
    private $servername = "localhost:2016";
    private $username = "350user";
    private $password = "350password";
    private $conn = NULL;

    public function __construct() {
        $this->openDB();
        $this->closeDB();
        //echo "Service Started<br />";
    }

    /**
     * Opens the database and creates any missing databases.
     * @throws Exception if failure
     * @return void
     */
    public function openDB() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=bmuusers", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS bmuusers;
            USE bmuusers;";
            // use exec() because no results are returned
            $this->conn->exec($sql);
            $eql = "CREATE TABLE IF NOT EXISTS users (
                `id` VARCHAR(45) NOT NULL,
                `name` VARCHAR(45) NOT NULL,
                `pw` VARCHAR(45) NOT NULL,
                `fbid` VARCHAR(45) NULL,
                PRIMARY KEY (`id`));";
            $this->conn->exec($sql);
        } catch(PDOException $e) {
            throw new Exception("Database Connection Error: $e.<br />");
        }
    }

    /**
     * Closes the open database.
     * @return void
     */
    public function closeDB() {
        $this->conn = NULL;
    }

    public function addUser($email, $name, $password, $fbid) {
        try {
            $this->openDB();
            $sql = "INSERT INTO users (id, name, pw, fbid) VALUES ('$email', '$name', '$password', '$fbid')";
            $this->conn->exec($sql);
            $this->closeDB();
            return true;
        } catch (Exception $e) {
            $this->closeDB();
            throw $e;
            return false;
        }
    }

    public function checkInfo($email, $password) {
        $this->openDB();
        $stmt = $this->conn->prepare("SELECT id, pw FROM users WHERE id='$email'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $this->closeDB();
        $result = $stmt->fetchAll();
        if ($result[0]['pw'] == md5($password)) {
            $_SESSION['user'] = $result[0]['id'];
            return true;
        } else {
            return false;
        }
        return false;
    }

    public function getUserData() {
        $this->openDB();
        $user = $_SESSION['user'];
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id='$user'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $this->closeDB();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function setFBses($fbid) {
        $this->openDB();
        $stmt = $this->conn->prepare("SELECT id, fbid FROM users WHERE fbid='$fbid'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $this->closeDB();
        $result = $stmt->fetchAll();
        $_SESSION['user'] = $result[0]['id'];
        return true;
    }

    public function checkFBID($fbid) {
        $this->openDB();
        $stmt = $this->conn->prepare("SELECT id, fbid FROM users WHERE fbid='$fbid'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $this->closeDB();
        $result = $stmt->fetchAll();
        return (isset($result[0]['id']));
    }

}

?>