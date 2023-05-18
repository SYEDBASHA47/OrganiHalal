<?php

class database
{
    public static $conn = null;

    public static function getConnection()
    {

        if(database::$conn == null)
        {
            $servername = "127.0.0.1";
            $username ="syed";
            $password ="syed@123";
            $dbname = "meat-shop";

            $connection = new mysqli($servername, $username, $password, $dbname);

            if ($connection->connect_error)
            {
               die("Connection failed");
            }else {
                
                database::$conn = $connection;
           
                return database::$conn;
            
        }

        }else{
            
            return database::$conn;
        }
        
    }





}