<?php
class Database{



    private static $inwtance = null;
    public static function getConnection(){
        if(!self::$istance){
            $host     = 'localhost';
            $db       = 'sistema usuarios';
            $user     = 'root';
            $password = '';

            self::$instance = new PDO("mysql:host=$host;dbname=$db, $user, $password");

            self:: $instance-setAttribute
            (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }  
}
?>