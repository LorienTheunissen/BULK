<?php

abstract class Db
{
    private static $conn;

    public static function getInstance()
    {
        if (self::$conn != null) {
            // connection found! Return connection
            return self::$conn;
        } else {
            $config = parse_ini_file("config/config.ini");
            // no connection yet, create one!
            self::$conn = new PDO('mysql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['db_name'], $config['db_user'], $config['db_password']);
            return self::$conn;
        }
    }
}
