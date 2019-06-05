<?php

class DB {

    private static $HOST     = DB_VARS ['DB_HOST'];
    private static $PORT     = DB_VARS['DB_PORT'];
    private static $USER     = DB_VARS['DB_USER'];
    private static $PASSWORD = DB_VARS['DB_PASSWORD'];
    private static $NAME     = DB_VARS['DB_NAME'];

    public static function getConnection() {
        try {
            $dsn = "mysql:host=".self::$HOST.";port=".self::$PORT.";dbname=".self::$NAME;
            $conn = new PDO($dsn, self::$USER, self::$PASSWORD, [PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8']);
            return $conn;
        } catch (PDOException $e) {
           die("Error: ". $e->getMessage());
        }
    }
}