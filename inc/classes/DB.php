<?php
//restrict the access to the file
if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
}
//singleton class - get the database connection once if doesn't exists create one
class DB {

    protected static $connection;

    private function __construct() {
        try {
            self::$connection = new PDO('mysql:charset=utf8mb4;host=localhost;port:3306;dbname=login_course', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connection->setAttribute(PDO::ATTR_PERSISTENT, false);
        } catch (PDOException $ex) {
            echo "Couldn't connect to the database.\r\n";
            echo $ex->getMessage();
            exit;
        }
    }

    public static function getConnection() {
        //if this instance doesn't exist, make it
        if (!self::$connection) {
            new DB();
        }
        // return the db connection
        return self::$connection;
    }

}
?>