<?php
class Database{



    private static $inwtance = null;
    public static function getConnection(){
        if(!self::$istance){
            $host     = 'localhost';
            $db       = 'sistema usuarios';
            $user     = 'root';
            $password = '';
        }
    }  
}
?>