<?php

class Database
{
    // Variables
    private static $dbHost = "localhost";
    private static $dbName = "burger";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";

    private static $connection = null;

    // Connection à la BDD
    public static function connect()
    {
        // S'il n'est pas connecté
        if(self::$connection == null)
        {
            try
            {
              // Connection à la BDD
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            // Gestion d'erreur
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    // Disconnection à la BDD
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
