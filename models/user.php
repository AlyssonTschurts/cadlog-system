<?php
require_once 'models/database.php';

class User
{
    public static function FindByEmail($email){

        $conn = Databaase::getConnection();

        $stnt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

        return $stmt->fetch (PDO::FETCH_ASSOC);
    }
}
?>