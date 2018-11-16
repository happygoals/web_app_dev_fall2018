<?php

    function connect_db() 
    {
        define("USER", "test");
        define("PASS", "test");
        
        //connect to database
        
        $connection = new PDO("mysql:host=localhost;dbname=Snackfacts", USER, PASS);
        
        if($connection->connect_db) 
        {
            die('Connect Error ('. $connection->connect_errno .  ') '
                .$connection->connect_error);
        }
        
        return $connection;
    }
?>