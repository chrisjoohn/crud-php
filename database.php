<?php


class Database{
    private static $server = "localhost:3306";
    private static $user = "root";
    private static $password = "iamsuperman";
    private static $database = "crud";

    private static $conn = null;

    public static function connect(){
        if(self::$conn == null){
            self::$conn = new mysqli(self::$server,self::$user, self::$password, self::$database);

            if(!self::$conn){
                die("Connection failed: ".$conn->connect_error);
            }
        }

        return self::$conn;
    }

    public static function disconnect(){
        self::$conn = null;
    }

}

?>