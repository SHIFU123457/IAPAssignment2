<?php
class DBConnection {
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=formdb;charset=utf8mb4";
        $options = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $this->pdo = new PDO($dsn, "root", "", $options);
        } catch (Exception $e) {
            error_log($e->getMessage());
            exit("Something unusual happened!");
        }
    }

    public function getPDO() {
        return $this->pdo;
    }
    

    public function addUser($username, $passsword, $dob, $location, $email, $gender) {
        $sql = "INSERT INTO user(username, passsword, dob, location, email, gender) VALUES(?, ?, ?, ?, ?, ?);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username, $passsword, $dob, $location, $email, $gender]);
    }
}
?>